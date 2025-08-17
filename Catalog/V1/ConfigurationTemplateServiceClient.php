<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catalog\V1;

/**
 */
class ConfigurationTemplateServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catalog\V1\ListConfigurationTemplatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListConfigurationTemplatesResponse>
     */
    public function ListConfigurationTemplates(\Catalog\V1\ListConfigurationTemplatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ConfigurationTemplateService/ListConfigurationTemplates',
        $argument,
        ['\Catalog\V1\ListConfigurationTemplatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetConfigurationTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetConfigurationTemplateResponse>
     */
    public function GetConfigurationTemplate(\Catalog\V1\GetConfigurationTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ConfigurationTemplateService/GetConfigurationTemplate',
        $argument,
        ['\Catalog\V1\GetConfigurationTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateConfigurationTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateConfigurationTemplateResponse>
     */
    public function CreateConfigurationTemplate(\Catalog\V1\CreateConfigurationTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ConfigurationTemplateService/CreateConfigurationTemplate',
        $argument,
        ['\Catalog\V1\CreateConfigurationTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\UpdateConfigurationTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\UpdateConfigurationTemplateResponse>
     */
    public function UpdateConfigurationTemplate(\Catalog\V1\UpdateConfigurationTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ConfigurationTemplateService/UpdateConfigurationTemplate',
        $argument,
        ['\Catalog\V1\UpdateConfigurationTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteConfigurationTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteConfigurationTemplateResponse>
     */
    public function DeleteConfigurationTemplate(\Catalog\V1\DeleteConfigurationTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ConfigurationTemplateService/DeleteConfigurationTemplate',
        $argument,
        ['\Catalog\V1\DeleteConfigurationTemplateResponse', 'decode'],
        $metadata, $options);
    }

}
