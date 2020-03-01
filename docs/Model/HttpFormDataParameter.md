# HttpFormDataParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameter_name** | **string** | Name of the parameter | [optional] 
**parameter_text_value** | **string** | Text value of the parameter; if set, do not set ParameterFileContents or UseOutputFromPreviousTask | [optional] 
**parameter_file_contents** | **string** | Binary contents of the parameter; if set, do not set ParameterTextValue or UseOutputFromPreviousTask | [optional] 
**use_output_from_previous_task** | [**\Swagger\Client\Model\TaskOutputReference**](TaskOutputReference.md) | Optional; use the output from a previous task as the input to this parameter.  Set to null (default) to ignore. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


