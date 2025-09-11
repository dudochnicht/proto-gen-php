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
     * @param \Device\V1\ListDevicesByModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\ListDevicesByModelResponse>
     */
    public function ListDevicesByModel(\Device\V1\ListDevicesByModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/ListDevicesByModel',
        $argument,
        ['\Device\V1\ListDevicesByModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Device\V1\ListLatestDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\ListLatestDevicesResponse>
     */
    public function ListLatestDevices(\Device\V1\ListLatestDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/ListLatestDevices',
        $argument,
        ['\Device\V1\ListLatestDevicesResponse', 'decode'],
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
     * @param \Device\V1\UpdateDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Device\V1\UpdateDeviceResponse>
     */
    public function UpdateDevice(\Device\V1\UpdateDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/device.v1.DeviceService/UpdateDevice',
        $argument,
        ['\Device\V1\UpdateDeviceResponse', 'decode'],
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
