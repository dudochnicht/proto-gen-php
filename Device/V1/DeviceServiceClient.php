<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Device\V1;

/**
 */
class DeviceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Device\V1\ListDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\ListDevicesResponse>
     */
    public function ListDevices(\Device\V1\ListDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/ListDevices',
        $argument,
        ['\Device\V1\ListDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\ListSoldDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\ListSoldDevicesResponse>
     */
    public function ListSoldDevices(\Device\V1\ListSoldDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/ListSoldDevices',
        $argument,
        ['\Device\V1\ListSoldDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\ListPurchasedDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\ListPurchasedDevicesResponse>
     */
    public function ListPurchasedDevices(\Device\V1\ListPurchasedDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/ListPurchasedDevices',
        $argument,
        ['\Device\V1\ListPurchasedDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\GetDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\GetDeviceResponse>
     */
    public function GetDevice(\Device\V1\GetDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/GetDevice',
        $argument,
        ['\Device\V1\GetDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\CreateDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\CreateDeviceResponse>
     */
    public function CreateDevice(\Device\V1\CreateDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/CreateDevice',
        $argument,
        ['\Device\V1\CreateDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\UpdateStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\UpdateStatusResponse>
     */
    public function UpdateStatus(\Device\V1\UpdateStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/UpdateStatus',
        $argument,
        ['\Device\V1\UpdateStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\UpdateServiceDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\UpdateServiceDataResponse>
     */
    public function UpdateServiceData(\Device\V1\UpdateServiceDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/UpdateServiceData',
        $argument,
        ['\Device\V1\UpdateServiceDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\UpdateUnitNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\UpdateUnitNumberResponse>
     */
    public function UpdateUnitNumber(\Device\V1\UpdateUnitNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/UpdateUnitNumber',
        $argument,
        ['\Device\V1\UpdateUnitNumberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\DeleteDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\DeleteDeviceResponse>
     */
    public function DeleteDevice(\Device\V1\DeleteDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/DeleteDevice',
        $argument,
        ['\Device\V1\DeleteDeviceResponse', 'decode'],
        $metadata, $options);
    }

}
