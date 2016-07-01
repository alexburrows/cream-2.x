<?php

namespace Drupal\commerce_order\Form;

use Drupal\commerce_order\Form\CustomerFormTrait;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\CurrentRouteMatch;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a form for assigning orders to a different customer.
 */
class OrderReassignForm extends FormBase {

  use CustomerFormTrait;

  /**
   * The current order.
   *
   * @var \Drupal\commerce_order\Entity\OrderInterface
   */
  protected $order;

  /**
   * Constructs a new OrderReassignForm object.
   *
   * @param \Drupal\Core\Routing\CurrentRouteMatch $current_route_match
   *   The current route match.
   */
  public function __construct(CurrentRouteMatch $current_route_match) {
    $this->order = $current_route_match->getParameter('commerce_order');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('current_route_match'));
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'commerce_order_reassign_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    if (!$this->order->getOwnerId()) {
      $current_customer = $this->t('anonymous user with the email %email', [
        '%email' => $this->order->getEmail(),
      ]);
    }
    else {
      $owner = $this->order->getOwner();
      // If the display name has been altered to not be the email address,
      // show the email as well.
      if ($owner->getDisplayName() != $owner->getEmail()) {
        $customer_link_text = $this->t('@display (@email)', [
          '@display' => $owner->getDisplayName(),
          '@email' => $owner->getEmail(),
        ]);
      }
      else {
        $customer_link_text = $owner->getDisplayName();
      }

      $current_customer = $this->order->getOwner()->toLink($customer_link_text)->toString();
    }

    $form['current_customer'] = [
      '#type' => 'item',
      '#markup' => $this->t('The order is currently assigned to @customer.', [
        '@customer' => $current_customer,
      ]),
    ];
    $form += $this->buildCustomerForm($form, $form_state, $this->order);

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => t('Reassign order'),
      '#button_type' => 'primary',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->submitCustomerForm($form, $form_state);

    $values = $form_state->getValues();
    $this->order->setEmail($values['mail']);
    $this->order->setOwnerId($values['uid']);
    $this->order->save();
    drupal_set_message($this->t('The order %label has been assigned to customer %customer.', [
      '%label' => $this->order->label(),
      '%customer' => $this->order->getOwner()->label(),
    ]));
    $form_state->setRedirectUrl($this->order->toUrl('collection'));
  }

}
