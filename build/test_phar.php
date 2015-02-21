<?php
require __DIR__ . '/artifacts/dts-shopping.phar';

$service = new \DTS\eBaySDK\Shopping\Services\ShoppingService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\Shopping\Services\ShoppingService::VERSION;
