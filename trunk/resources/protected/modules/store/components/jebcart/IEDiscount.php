<?php
/**
 * Discount abstract class
 *
 * @package JebCart
 *
 */
abstract class IEDiscount {

    protected $shoppingCart;

    public function setShoppingCart(EShoppingCart $shoppingCart) {
        $this->shoppingCart = $shoppingCart;
    }

    /**
     * Apply discount
     *
     * @abstract
     * @return void
     */
    abstract public function apply();

}
