<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class SurchargeParameterValue extends Entity
{
    protected int $id;
    protected string $valueIndex;
    protected string $description;
    protected TypePrice $price;
    protected ?int $priority;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getValueIndex(): string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }
}
