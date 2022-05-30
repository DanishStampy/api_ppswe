<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GKE NodePools that Dataproc workloads run on.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeNodePoolTarget</code>
 */
class GkeNodePoolTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target GKE NodePool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_pool = '';
    /**
     * Required. The types of role for a GKE NodePool
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $roles;
    /**
     * Optional. The configuration for the GKE NodePool.
     * If specified, Dataproc attempts to create a NodePool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any NodePool with the specified name is used. If a
     * NodePool with the specified name does not exist, Dataproc create a NodePool
     * with default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $node_pool_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_pool
     *           Required. The target GKE NodePool.
     *           Format:
     *           'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $roles
     *           Required. The types of role for a GKE NodePool
     *     @type \Google\Cloud\Dataproc\V1\GkeNodePoolConfig $node_pool_config
     *           Optional. The configuration for the GKE NodePool.
     *           If specified, Dataproc attempts to create a NodePool with the
     *           specified shape. If one with the same name already exists, it is
     *           verified against all specified fields. If a field differs, the
     *           virtual cluster creation will fail.
     *           If omitted, any NodePool with the specified name is used. If a
     *           NodePool with the specified name does not exist, Dataproc create a NodePool
     *           with default values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target GKE NodePool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNodePool()
    {
        return $this->node_pool;
    }

    /**
     * Required. The target GKE NodePool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePool($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool = $var;

        return $this;
    }

    /**
     * Required. The types of role for a GKE NodePool
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Required. The types of role for a GKE NodePool
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dataproc\V1\GkeNodePoolTarget\Role::class);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Optional. The configuration for the GKE NodePool.
     * If specified, Dataproc attempts to create a NodePool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any NodePool with the specified name is used. If a
     * NodePool with the specified name does not exist, Dataproc create a NodePool
     * with default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\GkeNodePoolConfig|null
     */
    public function getNodePoolConfig()
    {
        return $this->node_pool_config;
    }

    public function hasNodePoolConfig()
    {
        return isset($this->node_pool_config);
    }

    public function clearNodePoolConfig()
    {
        unset($this->node_pool_config);
    }

    /**
     * Optional. The configuration for the GKE NodePool.
     * If specified, Dataproc attempts to create a NodePool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any NodePool with the specified name is used. If a
     * NodePool with the specified name does not exist, Dataproc create a NodePool
     * with default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\GkeNodePoolConfig $var
     * @return $this
     */
    public function setNodePoolConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\GkeNodePoolConfig::class);
        $this->node_pool_config = $var;

        return $this;
    }

}

