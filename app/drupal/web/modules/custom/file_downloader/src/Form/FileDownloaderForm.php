<?php

namespace Drupal\file_downloader\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Class FileDownloaderForm.
 */
class FileDownloaderForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'file_downloader_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $options = $this->getAvailableDownloads();
    $form['file_name'] = [
      '#type' => 'select',
      '#title' => $this->t('File Name'),
      '#description' => $this->t('Choose wisely'),
      '#options' => $options,
      '#size' => 1,
    ];
    $form['pass_phrase'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Pass phrase'),
        '#description' => $this->t('Enter secret pass phrase')
    ];
    $form['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit')
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $id = $form_state->getValue('file_name');
    list($fid,$uri) = explode('!',$id);
    $pass = \Drupal::database()->select('file__field_pass_phrase','ffpp')
        ->condition('ffpp.entity_id',$fid)
        ->fields('ffpp',['field_pass_phrase_value'])
        ->execute()
        ->fetchField();
    if ( !empty($pass) && $pass != $form_state->getValue('pass_phrase') ) {
        $form_state->setErrorByName('pass_phrase',$this->t('Bad Pass Phrase'));
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $id = $form_state->getValue('file_name');
    list($fid,$uri) = explode('!',$id);
    $response = new BinaryFileResponse($uri);
    $response->setContentDisposition('attachment');
    $form_state->setResponse($response);
  }

  private function getAvailableDownloads() {

      $file_types = \Drupal::config('file_downloader.filedownloaderconfig')
        ->get('file_types');

      $files = \Drupal::database()->select('file_managed','fm')
        ->fields('fm',['fid','filename','uri','filesize'])
        ->condition('fm.status',1,'=')
        ->condition('fm.type',$file_types,'in')
        ->execute()
        ->fetchAll();

      $r = [];
      foreach ( $files as $file )
      {
          $r[$file->fid.'!'.$file->uri] = "{$file->filename} ({$file->filesize})";
      }
      return $r;
  }


}
