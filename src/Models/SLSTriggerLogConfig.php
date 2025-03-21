<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class SLSTriggerLogConfig extends Model
{
    /**
     * @example my-sls-logstore-name
     *
     * @var string
     */
    public $logstore;

    /**
     * @example my-sls-project-name
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'logstore' => 'logstore',
        'project' => 'project',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSTriggerLogConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
