<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class StopLiveStreamingRequest extends Model
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
    public $iotId;

    /**
     * @var int
     */
    public $streamType;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'iotId'         => 'IotId',
        'streamType'    => 'StreamType',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopLiveStreamingRequest
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
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}