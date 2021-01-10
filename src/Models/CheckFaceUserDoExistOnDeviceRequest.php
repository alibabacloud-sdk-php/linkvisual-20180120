<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CheckFaceUserDoExistOnDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $isolationId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'isolationId'   => 'IsolationId',
        'iotInstanceId' => 'IotInstanceId',
        'userId'        => 'UserId',
        'productKey'    => 'ProductKey',
        'deviceName'    => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFaceUserDoExistOnDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
