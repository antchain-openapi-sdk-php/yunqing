<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\YUNQING\Models;

use AlibabaCloud\Tea\Model;

class PagequeryBaselineAppcontainersRequest extends Model
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

    // 环境ID
    /**
     * @var string
     */
    public $envId;

    // 产品码
    /**
     * @var string
     */
    public $prodCode;

    // 应用名数组，没传则查询改产品下的所有参数
    /**
     * @var string[]
     */
    public $apps;

    // 部署单元实例id。默认值为default
    /**
     * @var string[]
     */
    public $deploymentUnitInstanceIdentities;

    // 页大小，默认每页12
    /**
     * @var int
     */
    public $pageSize;

    // 第几页，默认返回第一页
    //
    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'authToken'                        => 'auth_token',
        'productInstanceId'                => 'product_instance_id',
        'envId'                            => 'env_id',
        'prodCode'                         => 'prod_code',
        'apps'                             => 'apps',
        'deploymentUnitInstanceIdentities' => 'deployment_unit_instance_identities',
        'pageSize'                         => 'page_size',
        'currentPage'                      => 'current_page',
    ];

    public function validate()
    {
        Model::validateRequired('envId', $this->envId, true);
        Model::validateRequired('prodCode', $this->prodCode, true);
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
        if (null !== $this->envId) {
            $res['env_id'] = $this->envId;
        }
        if (null !== $this->prodCode) {
            $res['prod_code'] = $this->prodCode;
        }
        if (null !== $this->apps) {
            $res['apps'] = $this->apps;
        }
        if (null !== $this->deploymentUnitInstanceIdentities) {
            $res['deployment_unit_instance_identities'] = $this->deploymentUnitInstanceIdentities;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['current_page'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PagequeryBaselineAppcontainersRequest
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
        if (isset($map['env_id'])) {
            $model->envId = $map['env_id'];
        }
        if (isset($map['prod_code'])) {
            $model->prodCode = $map['prod_code'];
        }
        if (isset($map['apps'])) {
            if (!empty($map['apps'])) {
                $model->apps = $map['apps'];
            }
        }
        if (isset($map['deployment_unit_instance_identities'])) {
            if (!empty($map['deployment_unit_instance_identities'])) {
                $model->deploymentUnitInstanceIdentities = $map['deployment_unit_instance_identities'];
            }
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['current_page'])) {
            $model->currentPage = $map['current_page'];
        }

        return $model;
    }
}
