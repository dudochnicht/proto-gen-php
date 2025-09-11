<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Transaction\V1;

/**
 */
class TransactionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Transaction\V1\GetTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\GetTransactionResponse>
     */
    public function GetTransaction(\Transaction\V1\GetTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/GetTransaction',
        $argument,
        ['\Transaction\V1\GetTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\V1\BatchGetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\BatchGetTransactionsResponse>
     */
    public function BatchGetTransactions(\Transaction\V1\BatchGetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/BatchGetTransactions',
        $argument,
        ['\Transaction\V1\BatchGetTransactionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\V1\CreateTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\CreateTransactionResponse>
     */
    public function CreateTransaction(\Transaction\V1\CreateTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/CreateTransaction',
        $argument,
        ['\Transaction\V1\CreateTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\V1\UpdateSellerTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\UpdateSellerTransactionResponse>
     */
    public function UpdateSellerTransaction(\Transaction\V1\UpdateSellerTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/UpdateSellerTransaction',
        $argument,
        ['\Transaction\V1\UpdateSellerTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\V1\UpdateBuyerTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\UpdateBuyerTransactionResponse>
     */
    public function UpdateBuyerTransaction(\Transaction\V1\UpdateBuyerTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/UpdateBuyerTransaction',
        $argument,
        ['\Transaction\V1\UpdateBuyerTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Transaction\V1\DeleteTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\DeleteTransactionResponse>
     */
    public function DeleteTransaction(\Transaction\V1\DeleteTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/DeleteTransaction',
        $argument,
        ['\Transaction\V1\DeleteTransactionResponse', 'decode'],
        $metadata, $options);
    }

}
