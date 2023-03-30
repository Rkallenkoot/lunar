<?php

namespace Lunar\Base;

use Lunar\Base\ValueObjects\Cart\TaxBreakdown;
use Lunar\Models\CartLine;
use Lunar\Models\Currency;

interface TaxDriver
{
    /**
     * Set the shipping address.
     *
     * @param  \Lunar\Base\Addressable|null  $address
     */
    public function setShippingAddress(Addressable $address = null): self;

    /**
     * Set the currency.
     */
    public function setCurrency(Currency $currency): self;

    /**
     * Set the billing address.
     *
     * @param  \Lunar\Base\Addressable|null  $address
     */
    public function setBillingAddress(Addressable $address = null): self;

    /**
     * Set the purchasable item.
     *
     * @param  \Lunar\Base\Purchasable  $purchasable
     */
    public function setPurchasable(Purchasable $purchasable): self;

    /**
     * Set the cart line.
     */
    public function setCartLine(CartLine $cartLine): self;

    /**
     * Return the tax breakdown from a given sub total.
     *
     * @param  int  $subTotal
     */
    public function getBreakdown($subTotal): TaxBreakdown;
}
