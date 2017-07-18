<?php

namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): @name', array('@name'=>$name) )
    ];
  }
  /**
   * Hi.
   *
   * @return string
   *   Return Hello string.
   */
  public function hi() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hi')
    ];
  }
  /**
   * SYN.
   *
   * @return string
   *   Return SYN-ACK string.
   */
  public function syn() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('SYN-ACK')
    ];
  }
  /**
   * ACK.
   *
   * @return string
   *   Return SYN-ACK string.
   */
  public function ack() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('🤝')
    ];
  }
  /**
   * ORDER.
   *
   * @return string
   *   Return ordered string.
   */
  public function order($bar,$foo) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('@bar 🤝 @foo', array('@bar'=>$bar,'@foo'=>$foo) )
    ];
  }
  /**
   * Load.
   *
   * @return string
   *   Return ordered string.
   */
  public function load($nid) {

    // Later on there is no need to provide the entire namespace.
    $node = Node::load($nid);

    if ( empty($node) )
    {
      return [];
    }

    return [
      '#type' => 'markup',
      '#markup' => $this->t('NID:@nid TITLE:@title', array( '@nid'=>$nid, '@title'=>$node->getTitle() ))
    ];
  }
}
