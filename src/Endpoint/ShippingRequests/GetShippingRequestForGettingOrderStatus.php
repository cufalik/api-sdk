<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForGettingOrderStatusResponse\GetShippingRequestForGettingOrderStatusResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Shipping-requests/getshippingrequestforgettingorderstatus
 *
 * @method GetShippingRequestForGettingOrderStatus setBody(null $entity)
 * @method null getBody()
 */
class GetShippingRequestForGettingOrderStatus extends Get
{
    protected array $supportedPathParams = ['shippingRequestCode' => true, 'shippingGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetShippingRequestForGettingOrderStatusResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-request/{shippingRequestCode}/{shippingGuid}/status';
    }
}
