<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/access.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Access
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
+google/cloud/securitycenter/v1/access.protogoogle.cloud.securitycenter.v1"�
Access
principal_email (	
	caller_ip (	B
caller_ip_geo (2+.google.cloud.securitycenter.v1.Geolocation
user_agent_family (	
service_name (	
method_name (	""
Geolocation
region_code (	B�
"com.google.cloud.securitycenter.v1BAccessProtoPZLgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1;securitycenter�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

