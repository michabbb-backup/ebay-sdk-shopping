# EBAY-SDK-SHOPPING

[![Build Status](https://travis-ci.org/davidtsadler/ebay-sdk-shopping.png?branch=master)](https://travis-ci.org/davidtsadler/ebay-sdk-shopping)

An eBay SDK for PHP. Use the eBay Shopping API in your PHP projects.

More information can be found in the [wiki](https://github.com/davidtsadler/ebay-sdk-shopping/wiki).

## Requirements

- PHP 5.3 or greater.
- cUrl extension enabled.
- [dts/ebay-sdk](https://github.com/davidtsadler/ebay-sdk).

## Installation

This package can be installed with [Composer](http://getcomposer.org/).

1. Add "dts/ebay-sdk-shopping" as a dependency in your project's composer.json file.

   ```javascript
   {
       "require": {
           "dts/ebay-sdk-shopping": "~0.0.0"
       }
   }
   ```

1. Install Composer.

   ```
   curl -sS https://getcomposer.org/installer | php
   ```

1. Install the dependencies.

   ```
   php composer.phar install
   ```

1. Require Composer's autoloader by adding the following line to your code.

   ```php
   require 'vendor/autoload.php';
   ```

## Examples

### Get the official eBay time

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\Shopping\Services\ShoppingService;
use \DTS\eBaySDK\Shopping\Types\GeteBayTimeRequestType;
use \DTS\eBaySDK\Constants\SiteIds;
use \DTS\eBaySDK\HttpClient\HttpClient;

// Instantiate an eBay service.
$service = new ShoppingService(new HttpClient(), array(
    'apiVersion' => 849,
    'appId' => <enter your eBay App Id>,
    'siteId' => SiteIds::US
));

// Create the API request object.
$request = new GeteBayTimeRequestType();

// Send the request.
$response = $service->geteBayTime($request);

// Output the response from the API.
echo 'The official eBay time is: '.$response->timestamp->format('H:i (\G\M\T) \o\n l jS Y')."\n";
```

### Get multiple items

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\Shopping\Services\ShoppingService;
use \DTS\eBaySDK\Shopping\Types\GetMultipleItemsRequestType;
use \DTS\eBaySDK\Constants\SiteIds;
use \DTS\eBaySDK\HttpClient\HttpClient;

// Instantiate an eBay service.
$service = new ShoppingService(new HttpClient(), array(
    'apiVersion' => 849,
    'appId' => <enter your eBay App Id>,
    'siteId' => SiteIds::US
));

// Create the API request object.
$request = new GetMultipleItemsRequestType();
// Ensures current price will be returned for each item.
$request->includeSelector = 'Details';
// Search for three items. (Replace ids with your own values)
$request->itemId[] = '111111111111';
$request->itemId[] = '222222222222';
$request->itemId[] = '333333333333';

// Send the request.
$response = $service->getMultipleItems($request);

// Output the response from the API.
foreach ($response->item as $item) {
    printf("%s : %.2f\n", $item->title, $item->currentPrice->value);
}
```

## SDK and eBay API versions.

As eBay release new versions of their API the corresponding SDK version will be shown [here](https://github.com/davidtsadler/ebay-sdk/wiki/SDK-and-eBay-API-Versions#wiki-shopping).
