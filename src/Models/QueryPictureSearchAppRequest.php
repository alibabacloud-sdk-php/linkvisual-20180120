<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryPictureSearchAppRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;
    protected $_name = [
        'apiProduct'  => 'ApiProduct',
        'apiRevision' => 'ApiRevision',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPictureSearchAppRequest
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

        return $model;
    }
}
