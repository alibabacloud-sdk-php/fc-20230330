<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
