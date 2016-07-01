<?php

/**
 * @file
 * Contains \Drupal\rules\Form\Expression\ConditionForm.
 */

namespace Drupal\rules\Form\Expression;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\rules\Core\ConditionManager;
use Drupal\rules\Context\ContextConfig;
use Drupal\rules\Engine\ConditionExpressionInterface;

/**
 * UI form for adding/editing a Rules condition.
 */
class ConditionForm implements ExpressionFormInterface {

  use ContextFormTrait;
  use StringTranslationTrait;

  /**
   * The condition plugin manager.
   *
   * @var \Drupal\rules\Core\ConditionManager
   */
  protected $conditionManager;

  /**
   * The condition expression that is edited in the form.
   *
   * @var \Drupal\rules\Engine\ConditionExpressionInterface
   */
  protected $conditionExpression;

  /**
   * Creates a new object of this class.
   */
  public function __construct(ConditionExpressionInterface $condition_expression, ConditionManager $condition_manager) {
    $this->conditionManager = $condition_manager;
    $this->conditionExpression = $condition_expression;
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $condition_id = $form_state->get('condition_id');

    $configuration = $this->conditionExpression->getConfiguration();
    if (empty($condition_id) && !empty($configuration['condition_id'])) {
      $condition_id = $configuration['condition_id'];
      $form_state->set('condition_id', $condition_id);
    }

    // Step 1 of the multistep form.
    if (!$condition_id) {
      $condition_definitions = $this->conditionManager->getGroupedDefinitions();
      $options = [];
      foreach ($condition_definitions as $group => $definitions) {
        foreach ($definitions as $id => $definition) {
          $options[$group][$id] = $definition['label'];
        }
      }

      $form['condition_id'] = [
        '#type' => 'select',
        '#title' => $this->t('Condition'),
        '#options' => $options,
        '#required' => TRUE,
      ];
      $form['continue'] = [
        '#type' => 'submit',
        '#value' => $this->t('Continue'),
        '#name' => 'continue',
        // Only validate the selected condition in the first step.
        '#limit_validation_errors' => [['condition_id']],
        '#submit' => [static::class . '::submitFirstStep'],
      ];

      return $form;
    }

    // Step 2 of the form.
    /** @var \Drupal\rules\Core\RulesConditionInterface $condition */
    $condition = $this->conditionManager->createInstance($condition_id);

    $form['summary'] = [
      '#markup' => $condition->summary(),
    ];

    $context_definitions = $condition->getContextDefinitions();

    $form['context']['#tree'] = TRUE;
    foreach ($context_definitions as $context_name => $context_definition) {
      $form = $this->buildContextForm($form, $form_state, $context_name, $context_definition, $configuration);
    }

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#name' => 'save',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array $form, FormStateInterface $form_state) {
    // Only if there is a condition selected already we can validate something.
    if ($form_state->get('condition_id')) {
      // Invoke the submission handler which will setup the expression being
      // edited in the form. That way the expression is ready for other
      // validation handlers.
      $this->submitForm($form, $form_state);
    }
  }

  /**
   * Submit callback: save the selected condition in the first step.
   */
  public static function submitFirstStep(array &$form, FormStateInterface $form_state) {
    $form_state->set('condition_id', $form_state->getValue('condition_id'));
    $form_state->setRebuild();
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Nothing todo as long as the first step is not completed.
    if (!$form_state->get('condition_id')) {
      return;
    }
    $context_config = ContextConfig::create();
    foreach ($form_state->getValue('context') as $context_name => $value) {
      if ($form_state->get("context_$context_name") == 'selector') {
        $context_config->map($context_name, $value['setting']);
      }
      else {
        $context_config->setValue($context_name, $value['setting']);
      }
    }

    $configuration = $context_config->toArray();
    $configuration['condition_id'] = $form_state->get('condition_id');
    $this->conditionExpression->setConfiguration($configuration);
  }

}
