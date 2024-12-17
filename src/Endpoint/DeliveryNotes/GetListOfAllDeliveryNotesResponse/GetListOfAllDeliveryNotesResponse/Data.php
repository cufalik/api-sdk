<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfAllDeliveryNotesResponse\GetListOfAllDeliveryNotesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $jobId;

    public function getJobId(): string
    {
        return $this->jobId;
    }

    public function setJobId(string $jobId): static
    {
        $this->jobId = $jobId;
        return $this;
    }
}
