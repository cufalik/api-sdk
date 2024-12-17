<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Status extends Entity
{
    protected ?string $name;
    protected float $id;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
        return $this;
    }
}
