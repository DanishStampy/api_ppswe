<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class UserEventService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Import::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/cloud/recommendationengine/v1beta1/user_event_service.proto)google.cloud.recommendationengine.v1beta1google/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto6google/cloud/recommendationengine/v1beta1/import.proto:google/cloud/recommendationengine/v1beta1/user_event.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.protogoogle/type/date.protogoogle/api/client.proto"�
PurgeUserEventsRequestF
parent (	B6�A�A0
.recommendationengine.googleapis.com/EventStore
filter (	B�A
force (B�A"b
PurgeUserEventsMetadata
operation_name (	/
create_time (2.google.protobuf.Timestamp"�
PurgeUserEventsResponse
purged_events_count (P
user_events_sample (24.google.cloud.recommendationengine.v1beta1.UserEvent"�
WriteUserEventRequestF
parent (	B6�A�A0
.recommendationengine.googleapis.com/EventStoreM

user_event (24.google.cloud.recommendationengine.v1beta1.UserEventB�A"�
CollectUserEventRequestF
parent (	B6�A�A0
.recommendationengine.googleapis.com/EventStore

user_event (	B�A
uri (	B�A
ets (B�A"�
ListUserEventsRequestF
parent (	B6�A�A0
.recommendationengine.googleapis.com/EventStore
	page_size (B�A

page_token (	B�A
filter (	B�A"|
ListUserEventsResponseI
user_events (24.google.cloud.recommendationengine.v1beta1.UserEvent
next_page_token (	2�
UserEventService�
WriteUserEvent@.google.cloud.recommendationengine.v1beta1.WriteUserEventRequest4.google.cloud.recommendationengine.v1beta1.UserEvent"z���`"R/v1beta1/{parent=projects/*/locations/*/catalogs/*/eventStores/*}/userEvents:write:
user_event�Aparent,user_event�
CollectUserEventB.google.cloud.recommendationengine.v1beta1.CollectUserEventRequest.google.api.HttpBody"x���VT/v1beta1/{parent=projects/*/locations/*/catalogs/*/eventStores/*}/userEvents:collect�Aparent,user_event,uri,ets�
ListUserEvents@.google.cloud.recommendationengine.v1beta1.ListUserEventsRequestA.google.cloud.recommendationengine.v1beta1.ListUserEventsResponse"d���NL/v1beta1/{parent=projects/*/locations/*/catalogs/*/eventStores/*}/userEvents�A
PurgeUserEventsA.google.cloud.recommendationengine.v1beta1.PurgeUserEventsRequest.google.longrunning.Operation"����W"R/v1beta1/{parent=projects/*/locations/*/catalogs/*/eventStores/*}/userEvents:purge:*�A�
Agoogle.cloud.recommendationengine.v1beta1.PurgeUserEventsResponseAgoogle.cloud.recommendationengine.v1beta1.PurgeUserEventsMetadata�Aparent,filter,force�
ImportUserEventsB.google.cloud.recommendationengine.v1beta1.ImportUserEventsRequest.google.longrunning.Operation"����X"S/v1beta1/{parent=projects/*/locations/*/catalogs/*/eventStores/*}/userEvents:import:*�A~
Bgoogle.cloud.recommendationengine.v1beta1.ImportUserEventsResponse8google.cloud.recommendationengine.v1beta1.ImportMetadata�A,parent,request_id,input_config,errors_configW�A#recommendationengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
-com.google.cloud.recommendationengine.v1beta1PZ]google.golang.org/genproto/googleapis/cloud/recommendationengine/v1beta1;recommendationengine�RECAI�)Google.Cloud.RecommendationEngine.V1Beta1�)Google\\Cloud\\RecommendationEngine\\V1beta1�,Google::Cloud::RecommendationEngine::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
