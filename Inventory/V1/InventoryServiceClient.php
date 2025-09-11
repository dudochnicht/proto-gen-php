<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Inventory\V1;

/**
 */
class InventoryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Inventory\V1\FindInventoriesByDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\FindInventoriesByDeviceResponse>
     */
    public function FindInventoriesByDevice(\Inventory\V1\FindInventoriesByDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/FindInventoriesByDevice',
        $argument,
        ['\Inventory\V1\FindInventoriesByDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\FindAvailableInventoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\FindAvailableInventoriesResponse>
     */
    public function FindAvailableInventories(\Inventory\V1\FindAvailableInventoriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/FindAvailableInventories',
        $argument,
        ['\Inventory\V1\FindAvailableInventoriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\ListInventoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\ListInventoriesResponse>
     */
    public function ListInventories(\Inventory\V1\ListInventoriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/ListInventories',
        $argument,
        ['\Inventory\V1\ListInventoriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\GetInventoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\GetInventoryResponse>
     */
    public function GetInventory(\Inventory\V1\GetInventoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/GetInventory',
        $argument,
        ['\Inventory\V1\GetInventoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\CreateInventoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\CreateInventoryResponse>
     */
    public function CreateInventory(\Inventory\V1\CreateInventoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/CreateInventory',
        $argument,
        ['\Inventory\V1\CreateInventoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\UpdateInventoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\UpdateInventoryResponse>
     */
    public function UpdateInventory(\Inventory\V1\UpdateInventoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/UpdateInventory',
        $argument,
        ['\Inventory\V1\UpdateInventoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\DeleteInventoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\DeleteInventoryResponse>
     */
    public function DeleteInventory(\Inventory\V1\DeleteInventoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/DeleteInventory',
        $argument,
        ['\Inventory\V1\DeleteInventoryResponse', 'decode'],
        $metadata, $options);
    }

}
