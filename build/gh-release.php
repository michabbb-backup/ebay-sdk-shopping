<?php
/*
 * Creates a Github API release using the changelog contents. Attaches aws.zip
 * and aws.phar to the release.
 *
 * The OAUTH_TOKEN environment variable is required.
 *
 *     Usage: php gh-release.php X.Y.Z
 */

require __DIR__ . '/../vendor/autoload.php';

use Guzzle\Http\Client;
use Guzzle\Http\Url;
use Guzzle\Stream;

$owner = 'davidtsadler';
$repo = 'ebay-sdk-shopping';
$token = getenv('OAUTH_TOKEN') or die('An OAUTH_TOKEN environment variable is required');
isset($argv[1]) or die('Usage php gh-release.php X.Y.Z');
$tag = $argv[1];

assert(file_exists(__DIR__ . '/artifacts/dts-shopping.zip'));
assert(file_exists(__DIR__ . '/artifacts/dts-shopping.phar'));

// Grab and validate the tag annotation
chdir(dirname(__DIR__));
$message = `chag contents --tag "$tag"` or die('Chag could not find or parse the tag');

// Create a GitHub client.
$client = new Client('https://api.github.com/');
$client->setDefaultOption('headers/Authorization', "token $token");

// Create the release
$response = $client->post(
    "repos/${owner}/${repo}/releases",
    array('Content-Type' => 'application/json'),
    json_encode(array(
        'tag_name'   => $tag,
        'name'       => "Version {$tag}",
        'body'       => $message,
        'prerelease' => false
    ))
)->send();

// Grab the location of the new release
$url = (string) $response->getHeader('Location');
// Uploads go to uploads.github.com
$uploadUrl = Url::factory($url);
$uploadUrl->setHost('uploads.github.com');

$client->post(
    $uploadUrl . '/assets?name=dts-shopping.zip',
    array('Content-Type' => 'application/zip'),
    fopen(__DIR__ . '/artifacts/dts-shopping.zip', 'r')
)->send();

$client->post(
    $uploadUrl . '/assets?name=dts-shopping.phar',
    array('Content-Type' => 'application/phar'),
    fopen(__DIR__ . '/artifacts/dts-shopping.phar', 'r')
)->send();

echo "Release successfully published to: $url\n";
