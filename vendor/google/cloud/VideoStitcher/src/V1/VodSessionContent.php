<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/sessions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the entire stitched content in a VOD session.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.VodSessionContent</code>
 */
class VodSessionContent extends \Google\Protobuf\Internal\Message
{
    /**
     * The total duration in seconds of the content including the ads stitched
     * in.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     */
    private $duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $duration
     *           The total duration in seconds of the content including the ads stitched
     *           in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * The total duration in seconds of the content including the ads stitched
     * in.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * The total duration in seconds of the content including the ads stitched
     * in.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

}

