<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerRemarkResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;

class DeleteCustomerRemarkResponse extends Entity
{
    protected null $data;
    protected ?Errors $errors;

    public function getData(): null
    {
        return $this->data;
    }

    public function setData(null $data): static
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
