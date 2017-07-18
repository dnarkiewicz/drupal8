<?php

namespace Drupal\youtuber\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'youtuber_field_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "youtuber_field_formatter",
 *   label = @Translation("Youtuber Vibeo"),
 *   field_types = {
 *     "text",
 *     "string"
 *   }
 * )
 */
class YoutuberFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'dimensions' => 'small'
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return [
      'dimensions' => [
        '#type' => 'select',
        '#options' => [
          'small'  => '560x315',
          'medium' => '640x340',
          'large'  => '1280x720',
        ],
        '#default_value' => 'small',
        '#title' => $this->t('Dimensions')
      ]
    ] + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [
      $this->getSetting('dimensions')
    ];
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $dimensions = $this->getSetting('dimensions');
    $w = 560;
    $h = 315;
    switch($dimensions)
    {
      case 'small':
        $w=560;
        $h=315;
        break;
      case 'medium':
        $w=640;
        $h=340;
        break;
      case 'large':
        $w=1280;
        $h=720;
        break;
    }
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#theme'      => 'youtuber_video',
        '#youtube_id' => $this->viewValue($item),
        '#width'      => $w,
        '#height'     => $h
      ];
    }

    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewValue(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    return nl2br(Html::escape($item->value));
  }

}
