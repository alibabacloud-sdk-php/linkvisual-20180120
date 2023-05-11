<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceVodUrlRequest extends Model
{
    /**
     * @example camera1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var bool
     */
    public $enableStun;

    /**
     * @example 0
     *
     * @var int
     */
    public $encryptType;

    /**
     * @example file1
     *
     * @var string
     */
    public $fileName;

    /**
     * @example zLZyi6aOLyOSHa9hsPyD00****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-cn-n6w1y59****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $playUnLimited;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example rtmp
     *
     * @var string
     */
    public $scheme;

    /**
     * @example 0
     *
     * @var int
     */
    public $seekTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $shouldEncrypt;

    /**
     * @example 60
     *
     * @var int
     */
    public $urlValidDuration;
    protected $_name = [
        'deviceName'       => 'DeviceName',
        'enableStun'       => 'EnableStun',
        'encryptType'      => 'EncryptType',
        'fileName'         => 'FileName',
        'iotId'            => 'IotId',
        'iotInstanceId'    => 'IotInstanceId',
        'playUnLimited'    => 'PlayUnLimited',
        'productKey'       => 'ProductKey',
        'scheme'           => 'Scheme',
        'seekTime'         => 'SeekTime',
        'shouldEncrypt'    => 'ShouldEncrypt',
        'urlValidDuration' => 'UrlValidDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->enableStun) {
            $res['EnableStun'] = $this->enableStun;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->playUnLimited) {
            $res['PlayUnLimited'] = $this->playUnLimited;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }
        if (null !== $this->seekTime) {
            $res['SeekTime'] = $this->seekTime;
        }
        if (null !== $this->shouldEncrypt) {
            $res['ShouldEncrypt'] = $this->shouldEncrypt;
        }
        if (null !== $this->urlValidDuration) {
            $res['UrlValidDuration'] = $this->urlValidDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceVodUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EnableStun'])) {
            $model->enableStun = $map['EnableStun'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PlayUnLimited'])) {
            $model->playUnLimited = $map['PlayUnLimited'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }
        if (isset($map['SeekTime'])) {
            $model->seekTime = $map['SeekTime'];
        }
        if (isset($map['ShouldEncrypt'])) {
            $model->shouldEncrypt = $map['ShouldEncrypt'];
        }
        if (isset($map['UrlValidDuration'])) {
            $model->urlValidDuration = $map['UrlValidDuration'];
        }

        return $model;
    }
}
