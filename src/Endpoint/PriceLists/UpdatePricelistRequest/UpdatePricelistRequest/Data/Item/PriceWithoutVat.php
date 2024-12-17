<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\PriceWithoutVat\ActionPrice;

class PriceWithoutVat extends Entity
{
    protected ?TypePrice $price;
    protected ?TypePrice $commonPrice;
    protected ?TypePrice $buyPrice;
    protected ?TypePriceRatio $priceRatio;
    protected ?ActionPrice $actionPrice;

    public function getPrice(): ?TypePrice
    {
        return $this->price;
    }

    public function setPrice(?TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCommonPrice(): ?TypePrice
    {
        return $this->commonPrice;
    }

    public function setCommonPrice(?TypePrice $commonPrice): static
    {
        $this->commonPrice = $commonPrice;
        return $this;
    }

    public function getBuyPrice(): ?TypePrice
    {
        return $this->buyPrice;
    }

    public function setBuyPrice(?TypePrice $buyPrice): static
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getPriceRatio(): ?TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getActionPrice(): ?ActionPrice
    {
        return $this->actionPrice;
    }

    public function setActionPrice(?ActionPrice $actionPrice): static
    {
        $this->actionPrice = $actionPrice;
        return $this;
    }
}
