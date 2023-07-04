<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\YUNQING\Models;

use AlibabaCloud\Tea\Model;

class InitAapReleaseResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 初始化的结果，可用此调用发布接口
    /**
     * @var ProductDeployInitOption[]
     */
    public $deployInitOptions;
    protected $_name = [
        'reqMsgId'          => 'req_msg_id',
        'resultCode'        => 'result_code',
        'resultMsg'         => 'result_msg',
        'deployInitOptions' => 'deploy_init_options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->deployInitOptions) {
            $res['deploy_init_options'] = [];
            if (null !== $this->deployInitOptions && \is_array($this->deployInitOptions)) {
                $n = 0;
                foreach ($this->deployInitOptions as $item) {
                    $res['deploy_init_options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitAapReleaseResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['deploy_init_options'])) {
            if (!empty($map['deploy_init_options'])) {
                $model->deployInitOptions = [];
                $n                        = 0;
                foreach ($map['deploy_init_options'] as $item) {
                    $model->deployInitOptions[$n++] = null !== $item ? ProductDeployInitOption::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}