<?php

namespace Drupal\commerce_cart;

use Drupal\commerce_cart\Exception\DuplicateCartException;
use Drupal\commerce_store\Entity\StoreInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Default implementation of the cart provider.
 */
class CartProvider implements CartProviderInterface {

  /**
   * The order storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $orderStorage;

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The session.
   *
   * @var \Drupal\commerce_cart\CartSessionInterface
   */
  protected $cartSession;

  /**
   * The loaded cart data, keyed by cart order id, then grouped by uid.
   *
   * Each data item is an array with the following keys:
   * - type: The order type.
   * - store_id: The store id.
   *
   * Example:
   * @code
   * 1 => [
   *   10 => ['type' => 'default', 'store_id' => '1'],
   * ]
   * @endcode
   *
   * @var array
   */
  protected $cartData = [];

  /**
   * Constructs a new CartProvider object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\commerce_cart\CartSessionInterface $cart_session
   *   The cart session.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, AccountInterface $current_user, CartSessionInterface $cart_session) {
    $this->orderStorage = $entity_type_manager->getStorage('commerce_order');
    $this->currentUser = $current_user;
    $this->cartSession = $cart_session;
  }

  /**
   * {@inheritdoc}
   */
  public function createCart($order_type, StoreInterface $store, AccountInterface $account = NULL) {
    $account = $account ?: $this->currentUser;
    $uid = $account->id();
    $store_id = $store->id();
    if ($this->getCartId($order_type, $store, $account)) {
      // Don't allow multiple cart orders matching the same criteria.
      throw new DuplicateCartException("A cart order for type '$order_type', store '$store_id' and account '$uid' already exists.");
    }

    // Create the new cart order.
    $cart = $this->orderStorage->create([
      'type' => $order_type,
      'store_id' => $store_id,
      'uid' => $uid,
      'cart' => TRUE,
    ]);
    $cart->save();
    // Store the new cart order id in the anonymous user's session so that it
    // can be retrieved on the next page load.
    if ($account->isAnonymous()) {
      $this->cartSession->addCartId($cart->id());
    }
    // Cart data has already been loaded, add the new cart order to the list.
    if (isset($this->cartData[$uid])) {
      $this->cartData[$uid][$cart->id()] = [
        'type' => $order_type,
        'store_id' => $store_id,
      ];
    }

    return $cart;
  }

  /**
   * {@inheritdoc}
   */
  public function getCart($order_type, StoreInterface $store, AccountInterface $account = NULL) {
    $cart = NULL;
    $cart_id = $this->getCartId($order_type, $store, $account);
    if ($cart_id) {
      $cart = $this->orderStorage->load($cart_id);
    }

    return $cart;
  }

  /**
   * {@inheritdoc}
   */
  public function getCartId($order_type, StoreInterface $store, AccountInterface $account = NULL) {
    $cart_id = NULL;
    $cart_data = $this->loadCartData($account);
    if ($cart_data) {
      $search = [
        'type' => $order_type,
        'store_id' => $store->id(),
      ];
      $cart_id = array_search($search, $cart_data);
    }

    return $cart_id;
  }

  /**
   * {@inheritdoc}
   */
  public function getCarts(AccountInterface $account = NULL) {
    $carts = [];
    $cart_ids = $this->getCartIds($account);
    if ($cart_ids) {
      $carts = $this->orderStorage->loadMultiple($cart_ids);
    }

    return $carts;
  }

  /**
   * {@inheritdoc}
   */
  public function getCartIds(AccountInterface $account = NULL) {
    $cart_data = $this->loadCartData($account);
    return array_keys($cart_data);
  }

  /**
   * Loads the cart data for the given user.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user. If empty, the current user is assumed.
   *
   * @return array
   *   The cart data.
   */
  protected function loadCartData(AccountInterface $account = NULL) {
    $account = $account ?: $this->currentUser;
    $uid = $account->id();
    if (isset($this->cartData[$uid])) {
      return $this->cartData[$uid];
    }

    if ($account->isAuthenticated()) {
      $query = $this->orderStorage->getQuery()
        ->condition('cart', TRUE)
        ->condition('uid', $account->id())
        ->sort('order_id', 'DESC');
      $cart_ids = $query->execute();
    }
    else {
      $cart_ids = $this->cartSession->getCartIds();
    }

    $this->cartData[$uid] = [];
    if (!$cart_ids) {
      return [];
    }
    // Getting the cart data and validating the cart ids received from the
    // session requires loading the entities. This is a performance hit, but
    // it's assumed that these entities would be loaded at one point anyway.
    $carts = $this->orderStorage->loadMultiple($cart_ids);
    foreach ($carts as $cart) {
      if ($cart->getOwnerId() != $uid || empty($cart->cart)) {
        // Skip orders that are no longer eligible.
        continue;
      }

      $this->cartData[$uid][$cart->id()] = [
        'type' => $cart->bundle(),
        'store_id' => $cart->getStoreId(),
      ];
    }

    return $this->cartData[$uid];
  }

}
