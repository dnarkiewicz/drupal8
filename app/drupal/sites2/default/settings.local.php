<?php

$databases['default']['default'] = array (
  'database'  => getenv('D8_DB_DATABASE','d8'),
  'username'  => getenv('D8_DB_USERNAME','root'),
  'password'  => getenv('D8_DB_PASSWORD',''),
  'prefix'    => getenv('D8_DB_PREFIX',''),
  'host'      => getenv('D8_DB_HOST','mysql'),
  'port'      => getenv('D8_DB_PORT','3306'),
  'namespace' => getenv('D8_DB_NAMESPACE','Drupal\\Core\\Database\\Driver\\mysql'),
  'driver'    => getenv('D8_DB_DRIVER','mysql'),
);
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_'.getenv('D8_CONFIG_SYNC','rvJNE4qNpszJvg0PSepUw3PYR9TO87esGw6suCxFpbX49OEGKUfc2hVcb33NvFWiSZXLLdTQHw').'/sync';

$settings['hash_salt'] = 'TxamSVCuCuWWFXcHtW6EBjkjem3dVpqlyhpOD3x_kkXNWNvR9kkhddZDiVOiYPLFVuKqHXjc0w';

$settings['trusted_host_patterns'] = array(
 '^(.+?)?\.dev$',
 '^localhost$',
 '^127.0.0.1$',
);
