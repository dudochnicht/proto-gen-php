<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Configuration\V1;

/**
 */
class ConfigurationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Configuration\V1\ListConfigurationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Configuration\V1\ListConfigurationsResponse>
     */
    public function ListConfigurations(\Configuration\V1\ListConfigurationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/configuration.v1.ConfigurationService/ListConfigurations',
        $argument,
        ['\Configuration\V1\ListConfigurationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Configuration\V1\GetConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Configuration\V1\GetConfigurationResponse>
     */
    public function GetConfiguration(\Configuration\V1\GetConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/configuration.v1.ConfigurationService/GetConfiguration',
        $argument,
        ['\Configuration\V1\GetConfigurationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Configuration\V1\CreateConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Configuration\V1\CreateConfigurationResponse>
     */
    public function CreateConfiguration(\Configuration\V1\CreateConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/configuration.v1.ConfigurationService/CreateConfiguration',
        $argument,
        ['\Configuration\V1\CreateConfigurationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Configuration\V1\UpdateConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Configuration\V1\UpdateConfigurationResponse>
     */
    public function UpdateConfiguration(\Configuration\V1\UpdateConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/configuration.v1.ConfigurationService/UpdateConfiguration',
        $argument,
        ['\Configuration\V1\UpdateConfigurationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Configuration\V1\DeleteConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Configuration\V1\DeleteConfigurationResponse>
     */
    public function DeleteConfiguration(\Configuration\V1\DeleteConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/configuration.v1.ConfigurationService/DeleteConfiguration',
        $argument,
        ['\Configuration\V1\DeleteConfigurationResponse', 'decode'],
        $metadata, $options);
    }

}
