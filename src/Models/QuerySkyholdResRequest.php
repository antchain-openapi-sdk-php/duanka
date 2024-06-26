<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\DUANKA\Models;

use AlibabaCloud\Tea\Model;

class QuerySkyholdResRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 业务biz_code
    /**
     * @var string
     */
    public $bizCode;

    // 查询key
    /**
     * @var string
     */
    public $keyId;

    // 渠道code
    /**
     * @var string
     */
    public $channelCode;

    // 客户id
    /**
     * @var string
     */
    public $customerId;

    // 授权码
    /**
     * @var string
     */
    public $authCode;
    protected $_name = [
        'authToken'   => 'auth_token',
        'bizCode'     => 'biz_code',
        'keyId'       => 'key_id',
        'channelCode' => 'channel_code',
        'customerId'  => 'customer_id',
        'authCode'    => 'auth_code',
    ];

    public function validate()
    {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('keyId', $this->keyId, true);
        Model::validateRequired('channelCode', $this->channelCode, true);
        Model::validateRequired('customerId', $this->customerId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->keyId) {
            $res['key_id'] = $this->keyId;
        }
        if (null !== $this->channelCode) {
            $res['channel_code'] = $this->channelCode;
        }
        if (null !== $this->customerId) {
            $res['customer_id'] = $this->customerId;
        }
        if (null !== $this->authCode) {
            $res['auth_code'] = $this->authCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySkyholdResRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['biz_code'])) {
            $model->bizCode = $map['biz_code'];
        }
        if (isset($map['key_id'])) {
            $model->keyId = $map['key_id'];
        }
        if (isset($map['channel_code'])) {
            $model->channelCode = $map['channel_code'];
        }
        if (isset($map['customer_id'])) {
            $model->customerId = $map['customer_id'];
        }
        if (isset($map['auth_code'])) {
            $model->authCode = $map['auth_code'];
        }

        return $model;
    }
}
