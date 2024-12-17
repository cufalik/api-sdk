<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductResponse\AddAlternativeProductResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductResponse\AddAlternativeProductResponse\Data\Items;

class Data extends Entity
{
    protected Items $items;

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
        return $this;
    }
}
