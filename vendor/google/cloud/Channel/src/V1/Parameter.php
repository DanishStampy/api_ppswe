<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Definition for extended entitlement parameters.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Parameter</code>
 */
class Parameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Value of the parameter.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Value value = 2;</code>
     */
    private $value = null;
    /**
     * Output only. Specifies whether this parameter is allowed to be changed. For example, for
     * a Google Workspace Business Starter entitlement in commitment plan,
     * num_units is editable when entitlement is active.
     *
     * Generated from protobuf field <code>bool editable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $editable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the parameter.
     *     @type \Google\Cloud\Channel\V1\Value $value
     *           Value of the parameter.
     *     @type bool $editable
     *           Output only. Specifies whether this parameter is allowed to be changed. For example, for
     *           a Google Workspace Business Starter entitlement in commitment plan,
     *           num_units is editable when entitlement is active.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Value of the parameter.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Value value = 2;</code>
     * @return \Google\Cloud\Channel\V1\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Value of the parameter.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Value value = 2;</code>
     * @param \Google\Cloud\Channel\V1\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Value::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Output only. Specifies whether this parameter is allowed to be changed. For example, for
     * a Google Workspace Business Starter entitlement in commitment plan,
     * num_units is editable when entitlement is active.
     *
     * Generated from protobuf field <code>bool editable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Output only. Specifies whether this parameter is allowed to be changed. For example, for
     * a Google Workspace Business Starter entitlement in commitment plan,
     * num_units is editable when entitlement is active.
     *
     * Generated from protobuf field <code>bool editable = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEditable($var)
    {
        GPBUtil::checkBool($var);
        $this->editable = $var;

        return $this;
    }

}

