<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest\Data1;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest\Data2;

class CreateOrderItemSurchargeParametersRequest extends Entity
{
    protected Data1|Data2 $data;

    public function getData(): Data1|Data2
    {
        return $this->data;
    }

    public function setData(Data1|Data2 $data): static
    {
        $this->data = $data;
        return $this;
    }
}
