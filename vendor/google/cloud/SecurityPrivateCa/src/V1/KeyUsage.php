<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [KeyUsage][google.cloud.security.privateca.v1.KeyUsage] describes key usage values that may appear in an X.509
 * certificate.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.KeyUsage</code>
 */
class KeyUsage extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes high-level ways in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.KeyUsageOptions base_key_usage = 1;</code>
     */
    private $base_key_usage = null;
    /**
     * Detailed scenarios in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions extended_key_usage = 2;</code>
     */
    private $extended_key_usage = null;
    /**
     * Used to describe extended key usages that are not listed in the
     * [KeyUsage.ExtendedKeyUsageOptions][google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId unknown_extended_key_usages = 3;</code>
     */
    private $unknown_extended_key_usages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\KeyUsage\KeyUsageOptions $base_key_usage
     *           Describes high-level ways in which a key may be used.
     *     @type \Google\Cloud\Security\PrivateCA\V1\KeyUsage\ExtendedKeyUsageOptions $extended_key_usage
     *           Detailed scenarios in which a key may be used.
     *     @type \Google\Cloud\Security\PrivateCA\V1\ObjectId[]|\Google\Protobuf\Internal\RepeatedField $unknown_extended_key_usages
     *           Used to describe extended key usages that are not listed in the
     *           [KeyUsage.ExtendedKeyUsageOptions][google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions] message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes high-level ways in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.KeyUsageOptions base_key_usage = 1;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\KeyUsage\KeyUsageOptions|null
     */
    public function getBaseKeyUsage()
    {
        return $this->base_key_usage;
    }

    public function hasBaseKeyUsage()
    {
        return isset($this->base_key_usage);
    }

    public function clearBaseKeyUsage()
    {
        unset($this->base_key_usage);
    }

    /**
     * Describes high-level ways in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.KeyUsageOptions base_key_usage = 1;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\KeyUsage\KeyUsageOptions $var
     * @return $this
     */
    public function setBaseKeyUsage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\KeyUsage\KeyUsageOptions::class);
        $this->base_key_usage = $var;

        return $this;
    }

    /**
     * Detailed scenarios in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions extended_key_usage = 2;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\KeyUsage\ExtendedKeyUsageOptions|null
     */
    public function getExtendedKeyUsage()
    {
        return $this->extended_key_usage;
    }

    public function hasExtendedKeyUsage()
    {
        return isset($this->extended_key_usage);
    }

    public function clearExtendedKeyUsage()
    {
        unset($this->extended_key_usage);
    }

    /**
     * Detailed scenarios in which a key may be used.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions extended_key_usage = 2;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\KeyUsage\ExtendedKeyUsageOptions $var
     * @return $this
     */
    public function setExtendedKeyUsage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\KeyUsage\ExtendedKeyUsageOptions::class);
        $this->extended_key_usage = $var;

        return $this;
    }

    /**
     * Used to describe extended key usages that are not listed in the
     * [KeyUsage.ExtendedKeyUsageOptions][google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId unknown_extended_key_usages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnknownExtendedKeyUsages()
    {
        return $this->unknown_extended_key_usages;
    }

    /**
     * Used to describe extended key usages that are not listed in the
     * [KeyUsage.ExtendedKeyUsageOptions][google.cloud.security.privateca.v1.KeyUsage.ExtendedKeyUsageOptions] message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1.ObjectId unknown_extended_key_usages = 3;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\ObjectId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnknownExtendedKeyUsages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1\ObjectId::class);
        $this->unknown_extended_key_usages = $arr;

        return $this;
    }

}

