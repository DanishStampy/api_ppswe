<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Send a Pub/Sub message into the given Pub/Sub topic to connect other
 * systems to data profile generation. The message payload data will
 * be the byte serialization of `DataProfilePubSubMessage`.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileAction.PubSubNotification</code>
 */
class PubSubNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Pub/Sub topic to send notifications to.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';
    /**
     * The type of event that triggers a Pub/Sub. At most one
     * `PubSubNotification` per EventType is permitted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     */
    private $event = 0;
    /**
     * Conditions (e.g., data risk or sensitivity level) for triggering a
     * Pub/Sub.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition pubsub_condition = 3;</code>
     */
    private $pubsub_condition = null;
    /**
     * How much data to include in the Pub/Sub message. If the user wishes to
     * limit the size of the message, they can use resource_name and fetch the
     * profile fields they wish to. Per table profile (not per column).
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.PubSubNotification.DetailLevel detail_of_message = 4;</code>
     */
    private $detail_of_message = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Cloud Pub/Sub topic to send notifications to.
     *           Format is projects/{project}/topics/{topic}.
     *     @type int $event
     *           The type of event that triggers a Pub/Sub. At most one
     *           `PubSubNotification` per EventType is permitted.
     *     @type \Google\Cloud\Dlp\V2\DataProfilePubSubCondition $pubsub_condition
     *           Conditions (e.g., data risk or sensitivity level) for triggering a
     *           Pub/Sub.
     *     @type int $detail_of_message
     *           How much data to include in the Pub/Sub message. If the user wishes to
     *           limit the size of the message, they can use resource_name and fetch the
     *           profile fields they wish to. Per table profile (not per column).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Pub/Sub topic to send notifications to.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Cloud Pub/Sub topic to send notifications to.
     * Format is projects/{project}/topics/{topic}.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * The type of event that triggers a Pub/Sub. At most one
     * `PubSubNotification` per EventType is permitted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * The type of event that triggers a Pub/Sub. At most one
     * `PubSubNotification` per EventType is permitted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.EventType event = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfileAction\EventType::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Conditions (e.g., data risk or sensitivity level) for triggering a
     * Pub/Sub.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition pubsub_condition = 3;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfilePubSubCondition|null
     */
    public function getPubsubCondition()
    {
        return $this->pubsub_condition;
    }

    public function hasPubsubCondition()
    {
        return isset($this->pubsub_condition);
    }

    public function clearPubsubCondition()
    {
        unset($this->pubsub_condition);
    }

    /**
     * Conditions (e.g., data risk or sensitivity level) for triggering a
     * Pub/Sub.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition pubsub_condition = 3;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfilePubSubCondition $var
     * @return $this
     */
    public function setPubsubCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition::class);
        $this->pubsub_condition = $var;

        return $this;
    }

    /**
     * How much data to include in the Pub/Sub message. If the user wishes to
     * limit the size of the message, they can use resource_name and fetch the
     * profile fields they wish to. Per table profile (not per column).
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.PubSubNotification.DetailLevel detail_of_message = 4;</code>
     * @return int
     */
    public function getDetailOfMessage()
    {
        return $this->detail_of_message;
    }

    /**
     * How much data to include in the Pub/Sub message. If the user wishes to
     * limit the size of the message, they can use resource_name and fetch the
     * profile fields they wish to. Per table profile (not per column).
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileAction.PubSubNotification.DetailLevel detail_of_message = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDetailOfMessage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfileAction\PubSubNotification\DetailLevel::class);
        $this->detail_of_message = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PubSubNotification::class, \Google\Cloud\Dlp\V2\DataProfileAction_PubSubNotification::class);

