# cloudmersive_configuration_api_client
Config API lets you easily manage configuration at scale.

[Cloudmersive Configuration API](https://www.cloudmersive.com/) provides advanced configuration and orchestration capabilities.

- API version: v1
- Package version: 2.0.5


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_configuration_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_configuration_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_configuration_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrchestratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\HttpOrchestrationRequest(); // \Swagger\Client\Model\HttpOrchestrationRequest | 

try {
    $result = $apiInstance->orchestratorHttpSimple($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrchestratorApi->orchestratorHttpSimple: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrchestratorApi* | [**orchestratorHttpSimple**](docs/Api/OrchestratorApi.md#orchestratorhttpsimple) | **POST** /config/orchestrator/http/simple | Orchestrate multiple HTTP API calls with a single API call in the order specified.  Call other Cloudmersive APIs or third party APIs.  For Cloudmersive APIs, the API Key will automatically propogate to the child calls without needing to be set explicitly.  Name each task and reference the output of a previous task in the inputs to a given task.
*SettingsApi* | [**settingsCreateSetting**](docs/Api/SettingsApi.md#settingscreatesetting) | **POST** /config/settings/create | Create a setting in the specified bucket
*SettingsApi* | [**settingsListSettings**](docs/Api/SettingsApi.md#settingslistsettings) | **POST** /config/settings/list | Enumerate the settings in a bucket
*SettingsApi* | [**settingsUpdateSetting**](docs/Api/SettingsApi.md#settingsupdatesetting) | **POST** /config/settings/update | Update a setting


## Documentation For Models

 - [CreateSettingRequest](docs/Model/CreateSettingRequest.md)
 - [CreateSettingResponse](docs/Model/CreateSettingResponse.md)
 - [HttpFormDataParameter](docs/Model/HttpFormDataParameter.md)
 - [HttpGetParameter](docs/Model/HttpGetParameter.md)
 - [HttpOrchestrationHeader](docs/Model/HttpOrchestrationHeader.md)
 - [HttpOrchestrationRequest](docs/Model/HttpOrchestrationRequest.md)
 - [HttpOrchestrationResponse](docs/Model/HttpOrchestrationResponse.md)
 - [HttpOrchestrationTask](docs/Model/HttpOrchestrationTask.md)
 - [HttpRawBinaryParameter](docs/Model/HttpRawBinaryParameter.md)
 - [HttpRawTextParameter](docs/Model/HttpRawTextParameter.md)
 - [HttpWwwFormUrlEncodedParameter](docs/Model/HttpWwwFormUrlEncodedParameter.md)
 - [ListSettingsRequest](docs/Model/ListSettingsRequest.md)
 - [ListSettingsResponse](docs/Model/ListSettingsResponse.md)
 - [SettingValue](docs/Model/SettingValue.md)
 - [TaskOutputReference](docs/Model/TaskOutputReference.md)
 - [UpdateSettingRequest](docs/Model/UpdateSettingRequest.md)
 - [UpdateSettingResponse](docs/Model/UpdateSettingResponse.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




