<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse\Data;

class GetListOfProductsOrderInCategoryResponse extends Entity
{
    protected ?Data $data;
    protected ?Errors $errors;

    public function getData(): ?Data
    {
        return $this->data;
    }

    public function setData(?Data $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function setErrors(?Errors $errors): static
    {
        $this->errors = $errors;
        return $this;
    }
}
