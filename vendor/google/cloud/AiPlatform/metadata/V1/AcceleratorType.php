<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/accelerator_type.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class AcceleratorType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/aiplatform/v1/accelerator_type.protogoogle.cloud.aiplatform.v1*�
AcceleratorType 
ACCELERATOR_TYPE_UNSPECIFIED 
NVIDIA_TESLA_K80
NVIDIA_TESLA_P100
NVIDIA_TESLA_V100
NVIDIA_TESLA_P4
NVIDIA_TESLA_T4
NVIDIA_TESLA_A100

TPU_V2

TPU_V3B�
com.google.cloud.aiplatform.v1BAcceleratorTypeProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

