<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerRequest extends Model
{
    /**
     * @var CreateTriggerInput
     */
    public $request;
    protected $_name = [
        'request' => 'request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['request'])) {
            $model->request = CreateTriggerInput::fromMap($map['request']);
        }

        return $model;
    }
}
