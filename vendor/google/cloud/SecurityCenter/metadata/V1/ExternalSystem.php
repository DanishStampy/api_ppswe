<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/external_system.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class ExternalSystem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/securitycenter/v1/external_system.protogoogle.cloud.securitycenter.v1google/protobuf/timestamp.proto"�
ExternalSystem
name (	
	assignees (	
external_uid (	
status (	?
external_system_update_time (2.google.protobuf.Timestamp:��A�
,securitycenter.googleapis.com/ExternalSystemaorganizations/{organization}/sources/{source}/findings/{finding}/externalSystems/{externalsystem}Ufolders/{folder}/sources/{source}/findings/{finding}/externalSystems/{externalsystem}Wprojects/{project}/sources/{source}/findings/{finding}/externalSystems/{externalsystem}B�
"com.google.cloud.securitycenter.v1BExternalSystemProtoPZLgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1;securitycenter�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
