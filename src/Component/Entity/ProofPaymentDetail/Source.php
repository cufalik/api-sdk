<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentDetail;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Source extends Entity
{
    protected float $id;
    protected string $name;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
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
