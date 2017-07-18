<?php

namespace Drupal\file_downloader\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'FileDownloaderBlock' block.
 *
 * @Block(
 *  id = "file_downloader_block",
 *  admin_label = @Translation("File downloader block"),
 * )
 */
class FileDownloaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $user = \Drupal::currentUser();
    if ( $user->hasPermission('donwload files') ) {
        $form = \Drupal::formBuilder()->getForm('\Drupal\file_downloader\Form\FileDownloaderForm');
        return $form;
    }
  }

    /**
     * {@inheritdoc}
     */
    protected function blockAccess(AccountInterface $account) {
        return AccessResult::allowedIfHasPermission($account,'download files');
    }
}
