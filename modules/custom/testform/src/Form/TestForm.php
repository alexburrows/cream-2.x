<?php

/**
 * @file
 * Contains \Drupal\testform\Form\TestForm.
 */

namespace Drupal\testform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TestForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'testform_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Return array of Form API.
    $form['company_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Company name'),
    );
    $form['date'] = array(
      '#type' => 'date',
      '#title' => t('Date'),
      '#date_date_format' => 'd-m-Y',
    );
    $form['search'] = array(
      '#type' => 'search',
      '#title' => t('Search'),
      '#autocomplete_route_name' => FALSE,
    );
    $form['range'] = array(
      '#type' => 'range',
      '#title' => t('Range'),
      '#min' => 0,
      '#max' => 200,
      '#step' => 5,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validation.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

}