<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\YUNQING\Models;

use AlibabaCloud\Tea\Model;

class CancelAppopsRequest extends Model
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

    // 运维单id。
    /**
     * @var string
     */
    public $opsPlanId;

    // 操作人id
    /**
     * @var string
     */
    public $submitterId;

    //
    // 操作人名称（花名或者真名）
    /**
     * @var string
     */
    public $submitterName;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'opsPlanId'         => 'ops_plan_id',
        'submitterId'       => 'submitter_id',
        'submitterName'     => 'submitter_name',
    ];

    public function validate()
    {
        Model::validateRequired('opsPlanId', $this->opsPlanId, true);
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
        if (null !== $this->opsPlanId) {
            $res['ops_plan_id'] = $this->opsPlanId;
        }
        if (null !== $this->submitterId) {
            $res['submitter_id'] = $this->submitterId;
        }
        if (null !== $this->submitterName) {
            $res['submitter_name'] = $this->submitterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAppopsRequest
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
        if (isset($map['ops_plan_id'])) {
            $model->opsPlanId = $map['ops_plan_id'];
        }
        if (isset($map['submitter_id'])) {
            $model->submitterId = $map['submitter_id'];
        }
        if (isset($map['submitter_name'])) {
            $model->submitterName = $map['submitter_name'];
        }

        return $model;
    }
}
