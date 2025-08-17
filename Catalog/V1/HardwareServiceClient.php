<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catalog\V1;

/**
 */
class HardwareServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catalog\V1\ListComponentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListComponentsResponse>
     */
    public function ListComponents(\Catalog\V1\ListComponentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/ListComponents',
        $argument,
        ['\Catalog\V1\ListComponentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetComponentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetComponentResponse>
     */
    public function GetComponent(\Catalog\V1\GetComponentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/GetComponent',
        $argument,
        ['\Catalog\V1\GetComponentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateComponentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateComponentResponse>
     */
    public function CreateComponent(\Catalog\V1\CreateComponentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/CreateComponent',
        $argument,
        ['\Catalog\V1\CreateComponentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\UpdateComponentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\UpdateComponentResponse>
     */
    public function UpdateComponent(\Catalog\V1\UpdateComponentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/UpdateComponent',
        $argument,
        ['\Catalog\V1\UpdateComponentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteComponentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteComponentResponse>
     */
    public function DeleteComponent(\Catalog\V1\DeleteComponentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/DeleteComponent',
        $argument,
        ['\Catalog\V1\DeleteComponentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\ListFamiliesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListFamiliesResponse>
     */
    public function ListFamilies(\Catalog\V1\ListFamiliesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/ListFamilies',
        $argument,
        ['\Catalog\V1\ListFamiliesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetFamilyResponse>
     */
    public function GetFamily(\Catalog\V1\GetFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/GetFamily',
        $argument,
        ['\Catalog\V1\GetFamilyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateFamilyResponse>
     */
    public function CreateFamily(\Catalog\V1\CreateFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/CreateFamily',
        $argument,
        ['\Catalog\V1\CreateFamilyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\UpdateFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\UpdateFamilyResponse>
     */
    public function UpdateFamily(\Catalog\V1\UpdateFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/UpdateFamily',
        $argument,
        ['\Catalog\V1\UpdateFamilyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteFamilyResponse>
     */
    public function DeleteFamily(\Catalog\V1\DeleteFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/DeleteFamily',
        $argument,
        ['\Catalog\V1\DeleteFamilyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\ListItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListItemsResponse>
     */
    public function ListItems(\Catalog\V1\ListItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/ListItems',
        $argument,
        ['\Catalog\V1\ListItemsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetItemResponse>
     */
    public function GetItem(\Catalog\V1\GetItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/GetItem',
        $argument,
        ['\Catalog\V1\GetItemResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateItemResponse>
     */
    public function CreateItem(\Catalog\V1\CreateItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/CreateItem',
        $argument,
        ['\Catalog\V1\CreateItemResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\UpdateItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\UpdateItemResponse>
     */
    public function UpdateItem(\Catalog\V1\UpdateItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/UpdateItem',
        $argument,
        ['\Catalog\V1\UpdateItemResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteItemResponse>
     */
    public function DeleteItem(\Catalog\V1\DeleteItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.HardwareService/DeleteItem',
        $argument,
        ['\Catalog\V1\DeleteItemResponse', 'decode'],
        $metadata, $options);
    }

}
