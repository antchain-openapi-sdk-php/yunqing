<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\YUNQING\Models;

use AlibabaCloud\Tea\Model;

class ConfirmSolutionPlanRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 解决方案Id
    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'solutionId'        => 'solution_id',
    ];

    public function validate()
    {
        Model::validateRequired('solutionId', $this->solutionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmSolutionPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
