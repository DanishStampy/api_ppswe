<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update a transfer configuration. To update the user id of the
 * transfer configuration, an authorization code needs to be provided.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.UpdateTransferConfigRequest</code>
 */
class UpdateTransferConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $transfer_config = null;
    /**
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * If it is provided, the transfer configuration will be associated with the
     * authorizing user.
     * In order to obtain authorization_code, please make a
     * request to
     * https://www.gstatic.com/bigquerydatatransfer/oauthz/auth?client_id=<datatransferapiclientid>&scope=<data_source_scopes>&redirect_uri=<redirect_uri>
     * * client_id should be OAuth client_id of BigQuery DTS API for the given
     *   data source returned by ListDataSources method.
     * * data_source_scopes are the scopes returned by ListDataSources method.
     * * redirect_uri is an optional parameter. If not specified, then
     *   authorization code is posted to the opener of authorization flow window.
     *   Otherwise it will be sent to the redirect uri. A special value of
     *   urn:ietf:wg:oauth:2.0:oob means that authorization code should be
     *   returned in the title bar of the browser, with the page text prompting
     *   the user to copy the code and paste it in the application.
     *
     * Generated from protobuf field <code>string authorization_code = 3;</code>
     */
    private $authorization_code = '';
    /**
     * Required. Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Optional version info. If users want to find a very recent access token,
     * that is, immediately after approving access, users have to set the
     * version_info claim in the token request. To obtain the version_info, users
     * must use the "none+gsession" response type. which be return a
     * version_info back in the authorization response which be be put in a JWT
     * claim in the token request.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     */
    private $version_info = '';
    /**
     * Optional service account name. If this field is set and
     * "service_account_name" is set in update_mask, transfer config will be
     * updated to use this service account credentials. It requires that
     * requesting user calling this API has permissions to act as this service
     * account.
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     */
    private $service_account_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $transfer_config
     *           Required. Data transfer configuration to create.
     *     @type string $authorization_code
     *           Optional OAuth2 authorization code to use with this transfer configuration.
     *           If it is provided, the transfer configuration will be associated with the
     *           authorizing user.
     *           In order to obtain authorization_code, please make a
     *           request to
     *           https://www.gstatic.com/bigquerydatatransfer/oauthz/auth?client_id=<datatransferapiclientid>&scope=<data_source_scopes>&redirect_uri=<redirect_uri>
     *           * client_id should be OAuth client_id of BigQuery DTS API for the given
     *             data source returned by ListDataSources method.
     *           * data_source_scopes are the scopes returned by ListDataSources method.
     *           * redirect_uri is an optional parameter. If not specified, then
     *             authorization code is posted to the opener of authorization flow window.
     *             Otherwise it will be sent to the redirect uri. A special value of
     *             urn:ietf:wg:oauth:2.0:oob means that authorization code should be
     *             returned in the title bar of the browser, with the page text prompting
     *             the user to copy the code and paste it in the application.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Required list of fields to be updated in this request.
     *     @type string $version_info
     *           Optional version info. If users want to find a very recent access token,
     *           that is, immediately after approving access, users have to set the
     *           version_info claim in the token request. To obtain the version_info, users
     *           must use the "none+gsession" response type. which be return a
     *           version_info back in the authorization response which be be put in a JWT
     *           claim in the token request.
     *     @type string $service_account_name
     *           Optional service account name. If this field is set and
     *           "service_account_name" is set in update_mask, transfer config will be
     *           updated to use this service account credentials. It requires that
     *           requesting user calling this API has permissions to act as this service
     *           account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig|null
     */
    public function getTransferConfig()
    {
        return $this->transfer_config;
    }

    public function hasTransferConfig()
    {
        return isset($this->transfer_config);
    }

    public function clearTransferConfig()
    {
        unset($this->transfer_config);
    }

    /**
     * Required. Data transfer configuration to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.TransferConfig transfer_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig $var
     * @return $this
     */
    public function setTransferConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\TransferConfig::class);
        $this->transfer_config = $var;

        return $this;
    }

    /**
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * If it is provided, the transfer configuration will be associated with the
     * authorizing user.
     * In order to obtain authorization_code, please make a
     * request to
     * https://www.gstatic.com/bigquerydatatransfer/oauthz/auth?client_id=<datatransferapiclientid>&scope=<data_source_scopes>&redirect_uri=<redirect_uri>
     * * client_id should be OAuth client_id of BigQuery DTS API for the given
     *   data source returned by ListDataSources method.
     * * data_source_scopes are the scopes returned by ListDataSources method.
     * * redirect_uri is an optional parameter. If not specified, then
     *   authorization code is posted to the opener of authorization flow window.
     *   Otherwise it will be sent to the redirect uri. A special value of
     *   urn:ietf:wg:oauth:2.0:oob means that authorization code should be
     *   returned in the title bar of the browser, with the page text prompting
     *   the user to copy the code and paste it in the application.
     *
     * Generated from protobuf field <code>string authorization_code = 3;</code>
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorization_code;
    }

    /**
     * Optional OAuth2 authorization code to use with this transfer configuration.
     * If it is provided, the transfer configuration will be associated with the
     * authorizing user.
     * In order to obtain authorization_code, please make a
     * request to
     * https://www.gstatic.com/bigquerydatatransfer/oauthz/auth?client_id=<datatransferapiclientid>&scope=<data_source_scopes>&redirect_uri=<redirect_uri>
     * * client_id should be OAuth client_id of BigQuery DTS API for the given
     *   data source returned by ListDataSources method.
     * * data_source_scopes are the scopes returned by ListDataSources method.
     * * redirect_uri is an optional parameter. If not specified, then
     *   authorization code is posted to the opener of authorization flow window.
     *   Otherwise it will be sent to the redirect uri. A special value of
     *   urn:ietf:wg:oauth:2.0:oob means that authorization code should be
     *   returned in the title bar of the browser, with the page text prompting
     *   the user to copy the code and paste it in the application.
     *
     * Generated from protobuf field <code>string authorization_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_code = $var;

        return $this;
    }

    /**
     * Required. Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional version info. If users want to find a very recent access token,
     * that is, immediately after approving access, users have to set the
     * version_info claim in the token request. To obtain the version_info, users
     * must use the "none+gsession" response type. which be return a
     * version_info back in the authorization response which be be put in a JWT
     * claim in the token request.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     * @return string
     */
    public function getVersionInfo()
    {
        return $this->version_info;
    }

    /**
     * Optional version info. If users want to find a very recent access token,
     * that is, immediately after approving access, users have to set the
     * version_info claim in the token request. To obtain the version_info, users
     * must use the "none+gsession" response type. which be return a
     * version_info back in the authorization response which be be put in a JWT
     * claim in the token request.
     *
     * Generated from protobuf field <code>string version_info = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_info = $var;

        return $this;
    }

    /**
     * Optional service account name. If this field is set and
     * "service_account_name" is set in update_mask, transfer config will be
     * updated to use this service account credentials. It requires that
     * requesting user calling this API has permissions to act as this service
     * account.
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     * @return string
     */
    public function getServiceAccountName()
    {
        return $this->service_account_name;
    }

    /**
     * Optional service account name. If this field is set and
     * "service_account_name" is set in update_mask, transfer config will be
     * updated to use this service account credentials. It requires that
     * requesting user calling this API has permissions to act as this service
     * account.
     *
     * Generated from protobuf field <code>string service_account_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_name = $var;

        return $this;
    }

}

