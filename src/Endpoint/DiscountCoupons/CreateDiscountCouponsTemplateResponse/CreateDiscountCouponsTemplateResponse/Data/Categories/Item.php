<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateResponse\CreateDiscountCouponsTemplateResponse\Data\Categories;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Item extends Entity
{
    protected TypeGuid $guid;
    protected string $name;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }
}
