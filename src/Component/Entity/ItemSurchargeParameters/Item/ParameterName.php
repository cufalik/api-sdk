<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParameters\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ParameterName extends Entity
{
    protected ?string $code;
    protected ?string $name;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }
}
