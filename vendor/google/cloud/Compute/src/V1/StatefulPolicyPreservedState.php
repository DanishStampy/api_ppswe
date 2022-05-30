<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of preserved resources.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.StatefulPolicyPreservedState</code>
 */
class StatefulPolicyPreservedState extends \Google\Protobuf\Internal\Message
{
    /**
     * Disks created on the instances that will be preserved on instance delete, update, etc. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.StatefulPolicyPreservedStateDiskDevice> disks = 95594102;</code>
     */
    private $disks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $disks
     *           Disks created on the instances that will be preserved on instance delete, update, etc. This map is keyed with the device names of the disks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Disks created on the instances that will be preserved on instance delete, update, etc. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.StatefulPolicyPreservedStateDiskDevice> disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * Disks created on the instances that will be preserved on instance delete, update, etc. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.StatefulPolicyPreservedStateDiskDevice> disks = 95594102;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\StatefulPolicyPreservedStateDiskDevice::class);
        $this->disks = $arr;

        return $this;
    }

}
