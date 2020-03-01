# Swagger\Client\SettingsApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsCreateSetting**](SettingsApi.md#settingsCreateSetting) | **POST** /config/settings/create | Create a setting in the specified bucket
[**settingsListSettings**](SettingsApi.md#settingsListSettings) | **POST** /config/settings/list | Enumerate the settings in a bucket
[**settingsUpdateSetting**](SettingsApi.md#settingsUpdateSetting) | **POST** /config/settings/update | Update a setting


# **settingsCreateSetting**
> \Swagger\Client\Model\CreateSettingResponse settingsCreateSetting($request)

Create a setting in the specified bucket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CreateSettingRequest(); // \Swagger\Client\Model\CreateSettingRequest | Request to perform the operation on

try {
    $result = $apiInstance->settingsCreateSetting($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsCreateSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateSettingRequest**](../Model/CreateSettingRequest.md)| Request to perform the operation on |

### Return type

[**\Swagger\Client\Model\CreateSettingResponse**](../Model/CreateSettingResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsListSettings**
> \Swagger\Client\Model\ListSettingsResponse settingsListSettings($request)

Enumerate the settings in a bucket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ListSettingsRequest(); // \Swagger\Client\Model\ListSettingsRequest | Request to perform the operation on

try {
    $result = $apiInstance->settingsListSettings($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsListSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ListSettingsRequest**](../Model/ListSettingsRequest.md)| Request to perform the operation on |

### Return type

[**\Swagger\Client\Model\ListSettingsResponse**](../Model/ListSettingsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsUpdateSetting**
> \Swagger\Client\Model\UpdateSettingResponse settingsUpdateSetting($request)

Update a setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UpdateSettingRequest(); // \Swagger\Client\Model\UpdateSettingRequest | Request to perform the operation on

try {
    $result = $apiInstance->settingsUpdateSetting($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsUpdateSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateSettingRequest**](../Model/UpdateSettingRequest.md)| Request to perform the operation on |

### Return type

[**\Swagger\Client\Model\UpdateSettingResponse**](../Model/UpdateSettingResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

