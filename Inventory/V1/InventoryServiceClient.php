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
     * @param \Inventory\V1\GetDeviceInventoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\GetDeviceInventoriesResponse>
     */
    public function GetDeviceInventories(\Inventory\V1\GetDeviceInventoriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/GetDeviceInventories',
        $argument,
        ['\Inventory\V1\GetDeviceInventoriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\GetInventoriesTransferedFromRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\GetInventoriesTransferedFromResponse>
     */
    public function GetInventoriesTransferedFrom(\Inventory\V1\GetInventoriesTransferedFromRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/GetInventoriesTransferedFrom',
        $argument,
        ['\Inventory\V1\GetInventoriesTransferedFromResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\GetInventoriesTransferedToRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\GetInventoriesTransferedToResponse>
     */
    public function GetInventoriesTransferedTo(\Inventory\V1\GetInventoriesTransferedToRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/GetInventoriesTransferedTo',
        $argument,
        ['\Inventory\V1\GetInventoriesTransferedToResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Inventory\V1\GetAvailableInventoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Inventory\V1\GetAvailableInventoriesResponse>
     */
    public function GetAvailableInventories(\Inventory\V1\GetAvailableInventoriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/inventory.v1.InventoryService/GetAvailableInventories',
        $argument,
        ['\Inventory\V1\GetAvailableInventoriesResponse', 'decode'],
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
