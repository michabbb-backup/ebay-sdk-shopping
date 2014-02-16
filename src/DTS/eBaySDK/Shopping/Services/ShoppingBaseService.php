<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Shopping\Services;

/**
 * Base class for the Shopping service.
 */
class ShoppingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-API-VERSION';
    const HDR_APP_ID = 'X-EBAY-API-APP-ID';
    const HDR_CALLBACK_NAME = 'X-EBAY-API-CALLBACK-NAME';
    const HDR_CALLBACK = 'X-EBAY-API-CALLBACK';
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';
    const HDR_REQUEST_FORMAT = 'X-EBAY-API-REQUEST-ENCODING';
    const HDR_RESPONSE_FORMAT = 'X-EBAY-API-RESPONSE-ENCODING';
    const HDR_SITE_ID = 'X-EBAY-API-SITE-ID';
    const HDR_VERSION_HANDLING = 'X-EBAY-API-VERSIONHANDLING';

    /**
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     * @param array $config Optional configuration option values.
     */
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        if (!array_key_exists(get_called_class(), self::$configOptions)) {
            self::$configOptions[get_called_class()] = array(
                'apiVersion' => array('required' => true),
                'appId' => array('required' => true),
                'siteId' => array('required' => false)
            );
        }

        parent::__construct($httpClient, 'http://open.api.ebay.com/shopping', 'http://open.api.sandbox.ebay.com/shopping', $config);
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $headers = array();

        // Add required headers first.
        $headers[self::HDR_API_VERSION] = $this->config('apiVersion');
        $headers[self::HDR_APP_ID] = $this->config('appId');
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_REQUEST_FORMAT] = 'XML';

        // Add optional headers.
        if ($this->config('siteId')) {
            $headers[self::HDR_SITE_ID] = $this->config('siteId');
        }

        return $headers;
    }
}
