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
     * @param \Transaction\V1\ListTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\ListTransactionsResponse>
     */
    public function ListTransactions(\Transaction\V1\ListTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/ListTransactions',
        $argument,
        ['\Transaction\V1\ListTransactionsResponse', 'decode'],
        $metadata, $options);
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
     * @param \Transaction\V1\UpdateTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Transaction\V1\UpdateTransactionResponse>
     */
    public function UpdateTransaction(\Transaction\V1\UpdateTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/transaction.v1.TransactionService/UpdateTransaction',
        $argument,
        ['\Transaction\V1\UpdateTransactionResponse', 'decode'],
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
