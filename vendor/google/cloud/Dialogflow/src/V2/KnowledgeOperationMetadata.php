<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata in google::longrunning::Operation for Knowledge operations.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.KnowledgeOperationMetadata</code>
 */
class KnowledgeOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * The name of the knowledge base interacted with during the operation.
     *
     * Generated from protobuf field <code>string knowledge_base = 3;</code>
     */
    private $knowledge_base = '';
    protected $operation_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The current state of this operation.
     *     @type string $knowledge_base
     *           The name of the knowledge base interacted with during the operation.
     *     @type \Google\Cloud\Dialogflow\V2\ExportOperationMetadata $export_operation_metadata
     *           Metadata for the Export Data Operation such as the destination of export.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\KnowledgeOperationMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The name of the knowledge base interacted with during the operation.
     *
     * Generated from protobuf field <code>string knowledge_base = 3;</code>
     * @return string
     */
    public function getKnowledgeBase()
    {
        return $this->knowledge_base;
    }

    /**
     * The name of the knowledge base interacted with during the operation.
     *
     * Generated from protobuf field <code>string knowledge_base = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKnowledgeBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->knowledge_base = $var;

        return $this;
    }

    /**
     * Metadata for the Export Data Operation such as the destination of export.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ExportOperationMetadata export_operation_metadata = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\ExportOperationMetadata|null
     */
    public function getExportOperationMetadata()
    {
        return $this->readOneof(4);
    }

    public function hasExportOperationMetadata()
    {
        return $this->hasOneof(4);
    }

    /**
     * Metadata for the Export Data Operation such as the destination of export.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ExportOperationMetadata export_operation_metadata = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\ExportOperationMetadata $var
     * @return $this
     */
    public function setExportOperationMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\ExportOperationMetadata::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationMetadata()
    {
        return $this->whichOneof("operation_metadata");
    }

}

