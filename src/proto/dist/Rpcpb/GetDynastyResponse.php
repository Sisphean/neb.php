<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message of GetDynastyRequest rpc
 *
 * Generated from protobuf message <code>rpcpb.GetDynastyResponse</code>
 */
class GetDynastyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string miners = 1;</code>
     */
    private $miners;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated string miners = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMiners()
    {
        return $this->miners;
    }

    /**
     * Generated from protobuf field <code>repeated string miners = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMiners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->miners = $arr;

        return $this;
    }

}

