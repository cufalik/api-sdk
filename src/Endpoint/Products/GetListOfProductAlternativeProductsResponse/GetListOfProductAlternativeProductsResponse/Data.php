<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductAlternativeProductsResponse\GetListOfProductAlternativeProductsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductAlternativeProductsResponse\GetListOfProductAlternativeProductsResponse\Data\Items;

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
