<?php
namespace DTS\eBaySDK\Shopping\Services;

class ShoppingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    const HDR_API_VERSION = 'X-EBAY-API-VERSION';
    const HDR_APP_ID = 'X-EBAY-API-APP-ID';
    const HDR_CALLBACK_NAME = 'X-EBAY-API-CALLBACK-NAME';
    const HDR_CALLBACK = 'X-EBAY-API-CALLBACK';
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';
    const HDR_REQUEST_FORMAT = 'X-EBAY-API-REQUEST-ENCODING';
    const HDR_RESPONSE_FORMAT = 'X-EBAY-API-RESPONSE-ENCODING';
    const HDR_SITE_ID = 'X-EBAY-API-SITE-ID';
    const HDR_VERSION_HANDLING = 'X-EBAY-API-VERSIONHANDLING';

    public function __construct($config = [])
    {
        parent::__construct($config);
    }
}
