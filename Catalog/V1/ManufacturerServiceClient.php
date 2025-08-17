<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catalog\V1;

/**
 */
class ManufacturerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catalog\V1\ListBrandsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListBrandsResponse>
     */
    public function ListBrands(\Catalog\V1\ListBrandsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/ListBrands',
        $argument,
        ['\Catalog\V1\ListBrandsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetBrandResponse>
     */
    public function GetBrand(\Catalog\V1\GetBrandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/GetBrand',
        $argument,
        ['\Catalog\V1\GetBrandResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateBrandResponse>
     */
    public function CreateBrand(\Catalog\V1\CreateBrandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/CreateBrand',
        $argument,
        ['\Catalog\V1\CreateBrandResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\RenameBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\RenameBrandResponse>
     */
    public function RenameBrand(\Catalog\V1\RenameBrandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/RenameBrand',
        $argument,
        ['\Catalog\V1\RenameBrandResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteBrandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteBrandResponse>
     */
    public function DeleteBrand(\Catalog\V1\DeleteBrandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/DeleteBrand',
        $argument,
        ['\Catalog\V1\DeleteBrandResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\ListSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListSeriesResponse>
     */
    public function ListSeries(\Catalog\V1\ListSeriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/ListSeries',
        $argument,
        ['\Catalog\V1\ListSeriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetSerieRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetSerieResponse>
     */
    public function GetSerie(\Catalog\V1\GetSerieRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/GetSerie',
        $argument,
        ['\Catalog\V1\GetSerieResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateSerieRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateSerieResponse>
     */
    public function CreateSerie(\Catalog\V1\CreateSerieRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/CreateSerie',
        $argument,
        ['\Catalog\V1\CreateSerieResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\RenameSerieRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\RenameSerieResponse>
     */
    public function RenameSerie(\Catalog\V1\RenameSerieRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/RenameSerie',
        $argument,
        ['\Catalog\V1\RenameSerieResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteSerieRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteSerieResponse>
     */
    public function DeleteSerie(\Catalog\V1\DeleteSerieRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/DeleteSerie',
        $argument,
        ['\Catalog\V1\DeleteSerieResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\ListModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\ListModelsResponse>
     */
    public function ListModels(\Catalog\V1\ListModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/ListModels',
        $argument,
        ['\Catalog\V1\ListModelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetModelResponse>
     */
    public function GetModel(\Catalog\V1\GetModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/GetModel',
        $argument,
        ['\Catalog\V1\GetModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CreateModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\CreateModelResponse>
     */
    public function CreateModel(\Catalog\V1\CreateModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/CreateModel',
        $argument,
        ['\Catalog\V1\CreateModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\RenameModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\RenameModelResponse>
     */
    public function RenameModel(\Catalog\V1\RenameModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/RenameModel',
        $argument,
        ['\Catalog\V1\RenameModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\DeleteModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\DeleteModelResponse>
     */
    public function DeleteModel(\Catalog\V1\DeleteModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/DeleteModel',
        $argument,
        ['\Catalog\V1\DeleteModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetFullModelNameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Catalog\V1\GetFullModelNameResponse>
     */
    public function GetFullModelName(\Catalog\V1\GetFullModelNameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.ManufacturerService/GetFullModelName',
        $argument,
        ['\Catalog\V1\GetFullModelNameResponse', 'decode'],
        $metadata, $options);
    }

}
