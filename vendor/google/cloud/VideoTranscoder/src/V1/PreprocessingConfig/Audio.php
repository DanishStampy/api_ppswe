<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\PreprocessingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Audio preprocessing configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.PreprocessingConfig.Audio</code>
 */
class Audio extends \Google\Protobuf\Internal\Message
{
    /**
     * Specify audio loudness normalization in loudness units relative to full
     * scale (LUFS). Enter a value between -24 and 0 (the default), where:
     * *   -24 is the Advanced Television Systems Committee (ATSC A/85) standard
     * *   -23 is the EU R128 broadcast standard
     * *   -19 is the prior standard for online mono audio
     * *   -18 is the ReplayGain standard
     * *   -16 is the prior standard for stereo audio
     * *   -14 is the new online audio standard recommended by Spotify, as well
     *     as Amazon Echo
     * *   0 disables normalization
     *
     * Generated from protobuf field <code>double lufs = 1;</code>
     */
    private $lufs = 0.0;
    /**
     * Enable boosting high frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool high_boost = 2;</code>
     */
    private $high_boost = false;
    /**
     * Enable boosting low frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool low_boost = 3;</code>
     */
    private $low_boost = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $lufs
     *           Specify audio loudness normalization in loudness units relative to full
     *           scale (LUFS). Enter a value between -24 and 0 (the default), where:
     *           *   -24 is the Advanced Television Systems Committee (ATSC A/85) standard
     *           *   -23 is the EU R128 broadcast standard
     *           *   -19 is the prior standard for online mono audio
     *           *   -18 is the ReplayGain standard
     *           *   -16 is the prior standard for stereo audio
     *           *   -14 is the new online audio standard recommended by Spotify, as well
     *               as Amazon Echo
     *           *   0 disables normalization
     *     @type bool $high_boost
     *           Enable boosting high frequency components. The default is `false`.
     *     @type bool $low_boost
     *           Enable boosting low frequency components. The default is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Specify audio loudness normalization in loudness units relative to full
     * scale (LUFS). Enter a value between -24 and 0 (the default), where:
     * *   -24 is the Advanced Television Systems Committee (ATSC A/85) standard
     * *   -23 is the EU R128 broadcast standard
     * *   -19 is the prior standard for online mono audio
     * *   -18 is the ReplayGain standard
     * *   -16 is the prior standard for stereo audio
     * *   -14 is the new online audio standard recommended by Spotify, as well
     *     as Amazon Echo
     * *   0 disables normalization
     *
     * Generated from protobuf field <code>double lufs = 1;</code>
     * @return float
     */
    public function getLufs()
    {
        return $this->lufs;
    }

    /**
     * Specify audio loudness normalization in loudness units relative to full
     * scale (LUFS). Enter a value between -24 and 0 (the default), where:
     * *   -24 is the Advanced Television Systems Committee (ATSC A/85) standard
     * *   -23 is the EU R128 broadcast standard
     * *   -19 is the prior standard for online mono audio
     * *   -18 is the ReplayGain standard
     * *   -16 is the prior standard for stereo audio
     * *   -14 is the new online audio standard recommended by Spotify, as well
     *     as Amazon Echo
     * *   0 disables normalization
     *
     * Generated from protobuf field <code>double lufs = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLufs($var)
    {
        GPBUtil::checkDouble($var);
        $this->lufs = $var;

        return $this;
    }

    /**
     * Enable boosting high frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool high_boost = 2;</code>
     * @return bool
     */
    public function getHighBoost()
    {
        return $this->high_boost;
    }

    /**
     * Enable boosting high frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool high_boost = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHighBoost($var)
    {
        GPBUtil::checkBool($var);
        $this->high_boost = $var;

        return $this;
    }

    /**
     * Enable boosting low frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool low_boost = 3;</code>
     * @return bool
     */
    public function getLowBoost()
    {
        return $this->low_boost;
    }

    /**
     * Enable boosting low frequency components. The default is `false`.
     *
     * Generated from protobuf field <code>bool low_boost = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowBoost($var)
    {
        GPBUtil::checkBool($var);
        $this->low_boost = $var;

        return $this;
    }

}


