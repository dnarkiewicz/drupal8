<?php
$t = array( 'start'=>microtime(true), 'bootstrap'=>null, 'fin'=>null );

header('X-Debug-Stat: php', false);

$t = array( 'start'=>microtime(true), 'bootstrap'=>null, 'fin'=>null );

// Register our shutdown function so that no other shutdown functions run before this one.
// This shutdown function calls exit(), immediately short-circuiting any other shutdown functions,
// such as those registered by the devel.module for statistics.
register_shutdown_function('status_shutdown');
function status_shutdown() {
  global $t;
  $t['fin'] = microtime(true);
  if ( !empty($_GET['timers']) )
  {
    echo " start({$t['start']}) bootstrap({$t['bootstrap']}) fin({$t['fin']})";
  }
  exit();
}

if ( !empty($_GET['phponly']) )
{
  finish();
}

use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;
try {
    define('DRUPAL_DIR', __DIR__ );
    $autoloader = require_once 'autoload.php';
    $request = Request::createFromGlobals();
    $kernel = DrupalKernel::createFromRequest($request, $autoloader, 'prod');
    $kernel->boot();
    // $em = $kernel->getContainer()->get('entity.manager');
    $connection = \Drupal::database();
    $query = $connection->query("SELECT 1 FROM {config}");
    $result = $query->fetchAll();
}
catch (Exception $e) {
    // Build up our list of errors.
    $errors = array();
    $errors[]= $e->getMessage();
}
if (!isset($errors) ) { $errors = array(); }

$t['bootstrap'] = microtime(true);

header('X-Debug-Stat: drupal', false);

finish();

function finish()
{
  global $errors;
  // Print all errors.
  if ($errors) {
    $errors[] = 'Errors on this server will cause it to be removed from the load balancer.';
    header('HTTP/1.1 503 Internal Server Error');
    print implode("<br />\n", $errors);
  }
  else {
    print 'Status Ok';
  }
  exit();
}
