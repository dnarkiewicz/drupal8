<?php

namespace Drupal\file_downloader\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FileDownloaderConfigForm.
 */
class FileDownloaderConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'file_downloader.filedownloaderconfig',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'file_downloader_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('file_downloader.filedownloaderconfig');

    $files = array_map(
        function($file) { return $file['label']; },
        \Drupal::service('entity_type.bundle.info')->getBundleInfo('file')
    );
    $form['file_types'] = [
        '#type' => 'checkboxes',
        '#title' => $this->t('File Types'),
        '#options' => $files,
        '#default_value' => $config->get('file_types')
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('file_downloader.filedownloaderconfig')
      ->set('file_types',$form_state->getValue('file_types'))
      ->save();
  }

}
