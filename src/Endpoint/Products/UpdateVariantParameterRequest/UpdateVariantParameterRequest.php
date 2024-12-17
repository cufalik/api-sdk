<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterRequest\UpdateVariantParameterRequest\Data;

class UpdateVariantParameterRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}
