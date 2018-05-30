<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message of Block.
 *
 * Generated from protobuf message <code>rpcpb.BlockResponse</code>
 */
class BlockResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Hex string of block hash.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     */
    private $hash = '';
    /**
     * Hex string of block parent hash.
     *
     * Generated from protobuf field <code>string parent_hash = 2;</code>
     */
    private $parent_hash = '';
    /**
     * block height
     *
     * Generated from protobuf field <code>uint64 height = 3;</code>
     */
    private $height = 0;
    /**
     * block nonce
     *
     * Generated from protobuf field <code>uint64 nonce = 4;</code>
     */
    private $nonce = 0;
    /**
     * Hex string of coinbase address.
     *
     * Generated from protobuf field <code>string coinbase = 5;</code>
     */
    private $coinbase = '';
    /**
     * block timestamp.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     */
    private $timestamp = 0;
    /**
     * block chain id
     *
     * Generated from protobuf field <code>uint32 chain_id = 7;</code>
     */
    private $chain_id = 0;
    /**
     * Hex string of state root.
     *
     * Generated from protobuf field <code>string state_root = 8;</code>
     */
    private $state_root = '';
    /**
     * Hex string of txs root.
     *
     * Generated from protobuf field <code>string txs_root = 9;</code>
     */
    private $txs_root = '';
    /**
     * Hex string of event root.
     *
     * Generated from protobuf field <code>string events_root = 10;</code>
     */
    private $events_root = '';
    /**
     * Hex string of consensus root.
     *
     * Generated from protobuf field <code>.rpcpb.ConsensusRoot consensus_root = 11;</code>
     */
    private $consensus_root = null;
    /**
     * Miner
     *
     * Generated from protobuf field <code>string miner = 12;</code>
     */
    private $miner = '';
    /**
     * is finaliy
     *
     * Generated from protobuf field <code>bool is_finality = 13;</code>
     */
    private $is_finality = false;
    /**
     * transaction slice
     *
     * Generated from protobuf field <code>repeated .rpcpb.TransactionResponse transactions = 100;</code>
     */
    private $transactions;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Hex string of block hash.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Hex string of block hash.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * Hex string of block parent hash.
     *
     * Generated from protobuf field <code>string parent_hash = 2;</code>
     * @return string
     */
    public function getParentHash()
    {
        return $this->parent_hash;
    }

    /**
     * Hex string of block parent hash.
     *
     * Generated from protobuf field <code>string parent_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_hash = $var;

        return $this;
    }

    /**
     * block height
     *
     * Generated from protobuf field <code>uint64 height = 3;</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * block height
     *
     * Generated from protobuf field <code>uint64 height = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * block nonce
     *
     * Generated from protobuf field <code>uint64 nonce = 4;</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * block nonce
     *
     * Generated from protobuf field <code>uint64 nonce = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkUint64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Hex string of coinbase address.
     *
     * Generated from protobuf field <code>string coinbase = 5;</code>
     * @return string
     */
    public function getCoinbase()
    {
        return $this->coinbase;
    }

    /**
     * Hex string of coinbase address.
     *
     * Generated from protobuf field <code>string coinbase = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCoinbase($var)
    {
        GPBUtil::checkString($var, True);
        $this->coinbase = $var;

        return $this;
    }

    /**
     * block timestamp.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * block timestamp.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * block chain id
     *
     * Generated from protobuf field <code>uint32 chain_id = 7;</code>
     * @return int
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * block chain id
     *
     * Generated from protobuf field <code>uint32 chain_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkUint32($var);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * Hex string of state root.
     *
     * Generated from protobuf field <code>string state_root = 8;</code>
     * @return string
     */
    public function getStateRoot()
    {
        return $this->state_root;
    }

    /**
     * Hex string of state root.
     *
     * Generated from protobuf field <code>string state_root = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setStateRoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_root = $var;

        return $this;
    }

    /**
     * Hex string of txs root.
     *
     * Generated from protobuf field <code>string txs_root = 9;</code>
     * @return string
     */
    public function getTxsRoot()
    {
        return $this->txs_root;
    }

    /**
     * Hex string of txs root.
     *
     * Generated from protobuf field <code>string txs_root = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTxsRoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->txs_root = $var;

        return $this;
    }

    /**
     * Hex string of event root.
     *
     * Generated from protobuf field <code>string events_root = 10;</code>
     * @return string
     */
    public function getEventsRoot()
    {
        return $this->events_root;
    }

    /**
     * Hex string of event root.
     *
     * Generated from protobuf field <code>string events_root = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEventsRoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->events_root = $var;

        return $this;
    }

    /**
     * Hex string of consensus root.
     *
     * Generated from protobuf field <code>.rpcpb.ConsensusRoot consensus_root = 11;</code>
     * @return \Rpcpb\ConsensusRoot
     */
    public function getConsensusRoot()
    {
        return $this->consensus_root;
    }

    /**
     * Hex string of consensus root.
     *
     * Generated from protobuf field <code>.rpcpb.ConsensusRoot consensus_root = 11;</code>
     * @param \Rpcpb\ConsensusRoot $var
     * @return $this
     */
    public function setConsensusRoot($var)
    {
        GPBUtil::checkMessage($var, \Rpcpb\ConsensusRoot::class);
        $this->consensus_root = $var;

        return $this;
    }

    /**
     * Miner
     *
     * Generated from protobuf field <code>string miner = 12;</code>
     * @return string
     */
    public function getMiner()
    {
        return $this->miner;
    }

    /**
     * Miner
     *
     * Generated from protobuf field <code>string miner = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setMiner($var)
    {
        GPBUtil::checkString($var, True);
        $this->miner = $var;

        return $this;
    }

    /**
     * is finaliy
     *
     * Generated from protobuf field <code>bool is_finality = 13;</code>
     * @return bool
     */
    public function getIsFinality()
    {
        return $this->is_finality;
    }

    /**
     * is finaliy
     *
     * Generated from protobuf field <code>bool is_finality = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinality($var)
    {
        GPBUtil::checkBool($var);
        $this->is_finality = $var;

        return $this;
    }

    /**
     * transaction slice
     *
     * Generated from protobuf field <code>repeated .rpcpb.TransactionResponse transactions = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * transaction slice
     *
     * Generated from protobuf field <code>repeated .rpcpb.TransactionResponse transactions = 100;</code>
     * @param \Rpcpb\TransactionResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rpcpb\TransactionResponse::class);
        $this->transactions = $arr;

        return $this;
    }

}
