<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingResponse\AddOrderShippingResponse\Data\Order;

class Data extends Entity
{
    protected Order $order;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): static
    {
        $this->order = $order;
        return $this;
    }
}
