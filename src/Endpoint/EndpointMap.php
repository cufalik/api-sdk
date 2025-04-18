<?php

namespace Shoptet\Api\Sdk\Php\Endpoint;

class EndpointMap
{
    protected const array MAP = [
        'delete' => [
            '/api/products/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProduct',
            '/api/products/code/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductVariant',
            '/api/products/{guid}/images/{gallery}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteAllProductImagesInGallery',
            '/api/products/{guid}/images/{gallery}/{imageName}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteOneProductImage',
            '/api/categories/{categoryGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductCategory',
            '/api/products/flags/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductFlag',
            '/api/products/surcharge-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteSurchargeParameterByIndex',
            '/api/products/surcharge-parameters/{paramIndex}/{valueIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteSurchargeParameterValue',
            '/api/products/filtering-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteFilteringParameter',
            '/api/products/filtering-parameters/{code}/{valueIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteFilteringParameterValue',
            '/api/products/variant-parameters/{paramIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteVariantParameter',
            '/api/products/variant-parameters/{paramIndex}/{rawValue}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteVariantParameterValue',
            '/api/products/consumption-taxes/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteConsumptionTax',
            '/api/pricelists/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\DeletePricelist',
            '/api/orders/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrder',
            '/api/orders/{code}/item/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderItem',
            '/api/orders/{code}/item/{id}/surcharge-parameters/{relationId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderItemSurchargeParameters',
            '/api/orders/{code}/history/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderHistoryItem',
            '/api/orders/gifts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderGift',
            '/api/proof-payments/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DeleteProofPayment',
            '/api/credit-notes/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNote',
            '/api/credit-notes/{code}/item/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNoteItem',
            '/api/brands/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\DeleteBrand',
            '/api/customers/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomer',
            '/api/customers/{guid}/accounts/{accountGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerAccount',
            '/api/customers/{guid}/delivery-addresses/{addressGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerDeliveryAddress',
            '/api/customers/{guid}/remarks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerRemark',
            '/api/template-include/{location}' => 'Shoptet\Api\Sdk\Php\Endpoint\Templates\DeleteHtmlCode',
            '/api/webhooks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\DeleteRegisteredWebhook',
            '/api/payment-methods/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\DeletePaymentMethod',
            '/api/discount-coupons' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCoupons',
            '/api/discount-coupons/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCoupon',
            '/api/discount-coupons/templates/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCouponsTemplate',
            '/api/xy-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\DeleteXYDiscount',
            '/api/quantity-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\DeleteQuantityDiscount',
            '/api/articles/{articleId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticle',
            '/api/articles/sections/{articleSectionId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticleSection',
        ],
        'get' => [
            '/api/eshop' => 'Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfo',
            '/api/eshop/design' => 'Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesign',
            '/api/eshop/customer-fields' => 'Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFields',
            '/api/products' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProducts',
            '/api/products/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProducts',
            '/api/products/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetail',
            '/api/products/code/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetailByCode',
            '/api/products/{guid}/images/{gallery}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductImages',
            '/api/products/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetLastProductChanges',
            '/api/categories' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategories',
            '/api/categories/{categoryGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductCategoryDetail',
            '/api/categories/{categoryGuid}/productsPriority' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategory',
            '/api/parametric-categories' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategories',
            '/api/parametric-categories/{categoryGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetParametricCategoryDetail',
            '/api/products/flags' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsFlags',
            '/api/products/measure-units' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnits',
            '/api/products/availabilities' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilities',
            '/api/products/surcharge-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfSurchargeParameters',
            '/api/products/surcharge-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfSurchargeParameter',
            '/api/products/filtering-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfFilteringParameters',
            '/api/products/filtering-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfFilteringParameter',
            '/api/products/variant-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfVariantParameters',
            '/api/products/variant-parameters/{paramIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfVariantParameter',
            '/api/products/consumption-taxes' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfConsumptionTaxes',
            '/api/products/recycling-fee-categories' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfRecyclingFeeCategories',
            '/api/products/warranties' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarranties',
            '/api/products/{guid}/alternativeProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductAlternativeProducts',
            '/api/products/{guid}/relatedProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductRelatedProducts',
            '/api/products/units' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnits',
            '/api/products/{guid}/gifts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductGifts',
            '/api/products/reviews' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviews',
            '/api/pricelists' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceLists',
            '/api/pricelists/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetail',
            '/api/pricelists/{id}/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfAllPricelistDetails',
            '/api/orders' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrders',
            '/api/orders/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfAllOrders',
            '/api/orders/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderDetail',
            '/api/orders/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\DownloadOrderAsPdf',
            '/api/orders/{code}/history' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrder',
            '/api/orders/statuses' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatuses',
            '/api/orders/sources' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSources',
            '/api/orders/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetLastOrderChanges',
            '/api/orders/gifts' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderGiftsList',
            '/api/orders/gifts/settings' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderGiftSettings',
            '/api/invoices' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoices',
            '/api/invoices/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfAllInvoices',
            '/api/invoices/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetail',
            '/api/invoices/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsPdf',
            '/api/invoices/{code}/isdoc' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsIsdoc',
            '/api/invoices/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetLastInvoiceChanges',
            '/api/proforma-invoices' => 'Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoices',
            '/api/proforma-invoices/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfAllProformaInvoices',
            '/api/proforma-invoices/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetail',
            '/api/proforma-invoices/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\DownloadProformaInvoicePdf',
            '/api/proforma-invoices/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetLastProformaInvoiceChanges',
            '/api/proof-payments' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPayments',
            '/api/proof-payments/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetail',
            '/api/proof-payments/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfAllProofPayments',
            '/api/proof-payments/order/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByOrderCode',
            '/api/proof-payments/proforma-invoice/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByProformaInvoiceCode',
            '/api/proof-payments/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DownloadProofOfPaymentPdf',
            '/api/proof-payments/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChanges',
            '/api/credit-notes' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotes',
            '/api/credit-notes/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfAllCreditNotes',
            '/api/credit-notes/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetail',
            '/api/credit-notes/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DownloadCreditNotePdf',
            '/api/credit-notes/{code}/isdoc' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DownloadCreditNoteAsIsdoc',
            '/api/credit-notes/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetLastCreditNoteChanges',
            '/api/delivery-notes' => 'Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotes',
            '/api/delivery-notes/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfAllDeliveryNotes',
            '/api/delivery-notes/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNote',
            '/api/delivery-notes/{code}/pdf' => 'Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DownloadDeliveryNoteAsPdf',
            '/api/export/{type}/{format}' => 'Shoptet\Api\Sdk\Php\Endpoint\DocumentExport\GeneralDocumentDownload',
            '/api/stocks' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocks',
            '/api/stocks/{stockId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockDetail',
            '/api/stocks/{stockId}/movements' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovements',
            '/api/stocks/{stockId}/movements/last' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsLastMove',
            '/api/stocks/{stockId}/supplies' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStock',
            '/api/suppliers' => 'Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliers',
            '/api/brands' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrands',
            '/api/brands/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\GetDetailOfBrand',
            '/api/customers' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomers',
            '/api/customers/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfAllCustomers',
            '/api/customers/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetail',
            '/api/customers/{guid}/accounts' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerAccounts',
            '/api/customers/{guid}/accounts/{accountGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerAccount',
            '/api/customers/{guid}/delivery-addresses' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GeListOfCustomerDeliveryAddresses',
            '/api/customers/{guid}/delivery-addresses/{addressGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerDeliveryAddress',
            '/api/customers/{guid}/remarks' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRemarks',
            '/api/customers/{guid}/remarks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerRemark',
            '/api/customers/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetLastCustomerChanges',
            '/api/customers/regions' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegions',
            '/api/customers/groups' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroups',
            '/api/template-include' => 'Shoptet\Api\Sdk\Php\Endpoint\Templates\GetListingOfHtmlCodes',
            '/api/payment-status/{paymentCode}' => 'Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\GetInformationAboutPayment',
            '/api/webhooks' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetOverviewOfRegisteredWebhooks',
            '/api/webhooks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetDetailOfRegisteredWebhooks',
            '/api/webhooks/notifications' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotification',
            '/api/shipping-methods' => 'Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethods',
            '/api/shipping-request/{shippingRequestCode}/{shippingGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetails',
            '/api/shipping-request/{shippingRequestCode}/{shippingGuid}/status' => 'Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForGettingOrderStatus',
            '/api/payment-methods' => 'Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethods',
            '/api/unsubscribed-emails' => 'Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmails',
            '/api/mailing-lists' => 'Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionLists',
            '/api/mailing-lists/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionList',
            '/api/mailing-lists/{code}/changes' => 'Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetLastChangesInDistributionList',
            '/api/discount-coupons' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCoupons',
            '/api/discount-coupons/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfAllDiscountCoupons',
            '/api/discount-coupons/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDetailOfDiscountCoupon',
            '/api/discount-coupons/templates' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCoupons',
            '/api/xy-discounts' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscounts',
            '/api/xy-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetDetailOfXYDiscounts',
            '/api/xy-discounts/settings' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetXYDiscountsSettings',
            '/api/quantity-discounts' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfQuantityDiscounts',
            '/api/quantity-discounts/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfAllQuantityDiscounts',
            '/api/quantity-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetDetailOfQuantityDiscounts',
            '/api/articles' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticles',
            '/api/articles/snapshot' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListAllArticles',
            '/api/articles/{articleId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticle',
            '/api/articles/sections' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSections',
            '/api/articles/sections/{articleSectionId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticleSection',
            '/api/pages' => 'Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPages',
            '/api/pages/{pageId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Pages\GetDetailOfPage',
            '/api/discussions-posts' => 'Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPosts',
            '/api/system/jobs' => 'Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobs',
            '/api/system/jobs/{jobId}' => 'Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetail',
            '/api/system/files' => 'Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFiles',
            '/api/system/endpoints' => 'Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpoints',
        ],
        'patch' => [
            '/api/products/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProduct',
            '/api/products/batch' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdate',
            '/api/products/code/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCode',
            '/api/products/{guid}/images/{gallery}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdate',
            '/api/products/{guid}/images/{gallery}/source' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductImagesSource',
            '/api/categories/{categoryGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategory',
            '/api/categories/batch' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryBatch',
            '/api/categories/{categoryGuid}/productsPriority' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategory',
            '/api/products/flags/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlag',
            '/api/products/surcharge-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameter',
            '/api/products/surcharge-parameters/{paramIndex}/{valueIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValue',
            '/api/products/filtering-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameter',
            '/api/products/filtering-parameters/{code}/{valueIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValue',
            '/api/products/variant-parameters/{paramIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameter',
            '/api/products/variant-parameters/{paramIndex}/{rawValue}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterValue',
            '/api/products/consumption-taxes/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateConsumptionTax',
            '/api/pricelists/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelist',
            '/api/orders/{code}/head' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHead',
            '/api/orders/{code}/item/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderItem',
            '/api/orders/{code}/payment/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderPayment',
            '/api/orders/{code}/shipping/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderShipping',
            '/api/orders/{code}/notes' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrder',
            '/api/orders/{code}/status' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatus',
            '/api/orders/gifts/settings' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderGiftSettings',
            '/api/invoices/{code}/link-proof-payment' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPayments',
            '/api/proof-payments/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPayment',
            '/api/credit-notes/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNote',
            '/api/credit-notes/{code}/item/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItem',
            '/api/stocks/{stockId}/movements' => 'Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStock',
            '/api/brands/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrand',
            '/api/customers/{guid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomer',
            '/api/customers/{guid}/accounts/{accountGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccount',
            '/api/customers/{guid}/delivery-addresses/{addressGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerDeliveryAddress',
            '/api/customers/{guid}/remarks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemark',
            '/api/payment-status/{paymentCode}' => 'Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatus',
            '/api/webhooks/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhook',
            '/api/discount-coupons/use/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsage',
            '/api/xy-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscount',
            '/api/xy-discounts/settings' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountSettings',
            '/api/quantity-discounts/{id}' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscount',
            '/api/articles/{articleId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticle',
            '/api/articles/sections/{articleSectionId}' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleSection',
        ],
        'post' => [
            '/api/products' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProduct',
            '/api/products/{guid}/copy' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopy',
            '/api/products/{guid}/images/{gallery}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductImages',
            '/api/categories' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategory',
            '/api/products/flags' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlag',
            '/api/products/surcharge-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameter',
            '/api/products/surcharge-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValue',
            '/api/products/filtering-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameter',
            '/api/products/filtering-parameters/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValue',
            '/api/products/variant-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameter',
            '/api/products/variant-parameters/{paramIndex}' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValue',
            '/api/products/consumption-taxes' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateConsumptionTax',
            '/api/products/{guid}/alternativeProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProduct',
            '/api/products/{guid}/relatedProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProduct',
            '/api/products/{guid}/set' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSet',
            '/api/products/{guid}/gifts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGift',
            '/api/pricelists' => 'Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelist',
            '/api/orders' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrder',
            '/api/orders/{code}/item' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItem',
            '/api/orders/{code}/item/{id}/surcharge-parameters' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParameters',
            '/api/orders/{code}/payment' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPayment',
            '/api/orders/{code}/shipping' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShipping',
            '/api/orders/{code}/history' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemark',
            '/api/orders/{code}/copy' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopy',
            '/api/orders/batch' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertion',
            '/api/orders/gifts' => 'Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderGift',
            '/api/orders/{code}/invoice' => 'Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrder',
            '/api/proof-payments' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPayment',
            '/api/proof-payments/order/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByOrderCode',
            '/api/proof-payments/proforma-invoice/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByProformaInvoiceCode',
            '/api/proof-payments/{code}/document-settings' => 'Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettings',
            '/api/credit-notes/{code}/restock' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\RestockCreditNote',
            '/api/invoices/{code}/credit-note' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoice',
            '/api/proof-payments/{code}/credit-note' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromProofOfPayment',
            '/api/credit-notes/{code}/item' => 'Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItem',
            '/api/brands' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrand',
            '/api/brands/batch' => 'Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandBatch',
            '/api/customers' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomer',
            '/api/customers/{guid}/accounts' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerAccount',
            '/api/customers/{guid}/delivery-addresses' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateDeliveryAddress',
            '/api/customers/{guid}/remarks' => 'Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemark',
            '/api/template-include' => 'Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodes',
            '/api/webhooks' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhook',
            '/api/webhooks/renew-signature-key' => 'Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GenerateWebhookSignatureKey',
            '/api/shipping-methods' => 'Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethod',
            '/api/payment-methods' => 'Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethod',
            '/api/unsubscribed-emails' => 'Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmail',
            '/api/mailing-lists' => 'Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionList',
            '/api/mailing-lists/{code}' => 'Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionList',
            '/api/discount-coupons' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCoupons',
            '/api/discount-coupons/set' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsSet',
            '/api/discount-coupons/templates' => 'Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplate',
            '/api/xy-discounts' => 'Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscount',
            '/api/quantity-discounts' => 'Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscount',
            '/api/articles' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticle',
            '/api/articles/sections' => 'Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSection',
            '/api/system/files' => 'Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFiles',
            '/api/system/file' => 'Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFile',
        ],
        'put' => [
            '/api/products/{guid}/alternativeProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\SetAlternativeProducts',
            '/api/products/{guid}/relatedProducts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProducts',
            '/api/products/{guid}/set' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItems',
            '/api/products/{guid}/gifts' => 'Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProduct',
            '/api/shipping-request/{shippingRequestCode}/{shippingGuid}' => 'Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingData',
        ],
    ];

    /**
     * @param string $method http method
     * @param string $url endpoint url
     * @return class-string|null
     */
    public static function getEndpoint(string $method, string $url): ?string
    {
        $method = strtolower($method);

        if (!str_starts_with($url, '/')) {
            $url = '/' . $url;
        }

        return static::MAP[$method][$url] ?? null;
    }
}
