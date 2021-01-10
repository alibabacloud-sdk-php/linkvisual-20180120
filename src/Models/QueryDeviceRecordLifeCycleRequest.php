<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceRecordLifeCycleRequest extends Model
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
     * @var string[]
     */
    public $deviceList;
    protected $_name = [
        'apiProduct'  => 'ApiProduct',
        'apiRevision' => 'ApiRevision',
        'deviceList'  => 'DeviceList',
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
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceRecordLifeCycleRequest
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
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = $map['DeviceList'];
            }
        }

        return $model;
    }
}
