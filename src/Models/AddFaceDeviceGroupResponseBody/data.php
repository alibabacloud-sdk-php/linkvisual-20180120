<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceDeviceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example jvkv****
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example TestDeviceGroup
     *
     * @var string
     */
    public $deviceGroupName;

    /**
     * @example 2020-11-20 18:59:01
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'deviceGroupId'   => 'DeviceGroupId',
        'deviceGroupName' => 'DeviceGroupName',
        'modifiedTime'    => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
