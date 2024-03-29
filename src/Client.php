<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\YUNQING;

use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\Util\UtilClient;
use AntChain\YUNQING\Models\AllEnvsRequest;
use AntChain\YUNQING\Models\AllEnvsResponse;
use AntChain\YUNQING\Models\AllProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\AllProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\CancelAppopsRequest;
use AntChain\YUNQING\Models\CancelAppopsResponse;
use AntChain\YUNQING\Models\CancelProdsAppopsRequest;
use AntChain\YUNQING\Models\CancelProdsAppopsResponse;
use AntChain\YUNQING\Models\CheckSolutioninstanceImportRequest;
use AntChain\YUNQING\Models\CheckSolutioninstanceImportResponse;
use AntChain\YUNQING\Models\ConfirmSolutionPlanRequest;
use AntChain\YUNQING\Models\ConfirmSolutionPlanResponse;
use AntChain\YUNQING\Models\CreateAppdeployRequest;
use AntChain\YUNQING\Models\CreateAppdeployResponse;
use AntChain\YUNQING\Models\CreateAppopsRequest;
use AntChain\YUNQING\Models\CreateAppopsResponse;
use AntChain\YUNQING\Models\CreateAutotestopsRequest;
use AntChain\YUNQING\Models\CreateAutotestopsResponse;
use AntChain\YUNQING\Models\CreateEnvRequest;
use AntChain\YUNQING\Models\CreateEnvResponse;
use AntChain\YUNQING\Models\CreateProdinstanceDeployunitbatchRequest;
use AntChain\YUNQING\Models\CreateProdinstanceDeployunitbatchResponse;
use AntChain\YUNQING\Models\CreateProdinstanceDeployunitRequest;
use AntChain\YUNQING\Models\CreateProdinstanceDeployunitResponse;
use AntChain\YUNQING\Models\CreateProdsAppopsRequest;
use AntChain\YUNQING\Models\CreateProdsAppopsResponse;
use AntChain\YUNQING\Models\DeleteAapProductinstanceRequest;
use AntChain\YUNQING\Models\DeleteAapProductinstanceResponse;
use AntChain\YUNQING\Models\DeployAapProductinstanceRequest;
use AntChain\YUNQING\Models\DeployAapProductinstanceResponse;
use AntChain\YUNQING\Models\DeprecateSolutioninstanceRequest;
use AntChain\YUNQING\Models\DeprecateSolutioninstanceResponse;
use AntChain\YUNQING\Models\DescribeSolutioninstanceRequest;
use AntChain\YUNQING\Models\DescribeSolutioninstanceResponse;
use AntChain\YUNQING\Models\DetailAapApplicationinstanceRequest;
use AntChain\YUNQING\Models\DetailAapApplicationinstanceResponse;
use AntChain\YUNQING\Models\DisableDynamicslbRequest;
use AntChain\YUNQING\Models\DisableDynamicslbResponse;
use AntChain\YUNQING\Models\EnableDynamicslbRequest;
use AntChain\YUNQING\Models\EnableDynamicslbResponse;
use AntChain\YUNQING\Models\EnableProdAutotestRequest;
use AntChain\YUNQING\Models\EnableProdAutotestResponse;
use AntChain\YUNQING\Models\ExecClusterDnsRequest;
use AntChain\YUNQING\Models\ExecClusterDnsResponse;
use AntChain\YUNQING\Models\ExportBaselineRequest;
use AntChain\YUNQING\Models\ExportBaselineResponse;
use AntChain\YUNQING\Models\FinishSolutioninstanceRequest;
use AntChain\YUNQING\Models\FinishSolutioninstanceResponse;
use AntChain\YUNQING\Models\GetAapReleaseRequest;
use AntChain\YUNQING\Models\GetAapReleaseResponse;
use AntChain\YUNQING\Models\GetAppopsRequest;
use AntChain\YUNQING\Models\GetAppopsResponse;
use AntChain\YUNQING\Models\GetAutotestopsRequest;
use AntChain\YUNQING\Models\GetAutotestopsResponse;
use AntChain\YUNQING\Models\GetProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\GetProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\GetProdinstanceDeployunitRequest;
use AntChain\YUNQING\Models\GetProdinstanceDeployunitResponse;
use AntChain\YUNQING\Models\GetProdsAppopsRequest;
use AntChain\YUNQING\Models\GetProdsAppopsResponse;
use AntChain\YUNQING\Models\GetSolutionPlanstatusRequest;
use AntChain\YUNQING\Models\GetSolutionPlanstatusResponse;
use AntChain\YUNQING\Models\GetSystemRequest;
use AntChain\YUNQING\Models\GetSystemResponse;
use AntChain\YUNQING\Models\GetUnitDetailRequest;
use AntChain\YUNQING\Models\GetUnitDetailResponse;
use AntChain\YUNQING\Models\ImportAapMetaRequest;
use AntChain\YUNQING\Models\ImportAapMetaResponse;
use AntChain\YUNQING\Models\ImportAuthRequest;
use AntChain\YUNQING\Models\ImportAuthResponse;
use AntChain\YUNQING\Models\ImportEnvMetaRequest;
use AntChain\YUNQING\Models\ImportEnvMetaResponse;
use AntChain\YUNQING\Models\ImportProdMetaRequest;
use AntChain\YUNQING\Models\ImportProdMetaResponse;
use AntChain\YUNQING\Models\ImportSolutioninstanceRequest;
use AntChain\YUNQING\Models\ImportSolutioninstanceResponse;
use AntChain\YUNQING\Models\InitAapProductinstanceRequest;
use AntChain\YUNQING\Models\InitAapProductinstanceResponse;
use AntChain\YUNQING\Models\InitAapReleaseRequest;
use AntChain\YUNQING\Models\InitAapReleaseResponse;
use AntChain\YUNQING\Models\ListAapSitesRequest;
use AntChain\YUNQING\Models\ListAapSitesResponse;
use AntChain\YUNQING\Models\ListEnvRequest;
use AntChain\YUNQING\Models\ListEnvResponse;
use AntChain\YUNQING\Models\ListProdinstanceDeployunitRequest;
use AntChain\YUNQING\Models\ListProdinstanceDeployunitResponse;
use AntChain\YUNQING\Models\OfflineClusterContainerRequest;
use AntChain\YUNQING\Models\OfflineClusterContainerResponse;
use AntChain\YUNQING\Models\OnlineClusterContainerRequest;
use AntChain\YUNQING\Models\OnlineClusterContainerResponse;
use AntChain\YUNQING\Models\PagequeryBaselineAppcontainersRequest;
use AntChain\YUNQING\Models\PagequeryBaselineAppcontainersResponse;
use AntChain\YUNQING\Models\PagequeryProditerationRequest;
use AntChain\YUNQING\Models\PagequeryProditerationResponse;
use AntChain\YUNQING\Models\PagequeryProdsAppsRequest;
use AntChain\YUNQING\Models\PagequeryProdsAppsResponse;
use AntChain\YUNQING\Models\PagequeryProdsRequest;
use AntChain\YUNQING\Models\PagequeryProdsResourcesRequest;
use AntChain\YUNQING\Models\PagequeryProdsResourcesResponse;
use AntChain\YUNQING\Models\PagequeryProdsResponse;
use AntChain\YUNQING\Models\PagequeryResourceinstancesContainersRequest;
use AntChain\YUNQING\Models\PagequeryResourceinstancesContainersResponse;
use AntChain\YUNQING\Models\PagequeryResourceinstancesLbsRequest;
use AntChain\YUNQING\Models\PagequeryResourceinstancesLbsResponse;
use AntChain\YUNQING\Models\PagequeryRollbackSnapshotversionRequest;
use AntChain\YUNQING\Models\PagequeryRollbackSnapshotversionResponse;
use AntChain\YUNQING\Models\PagequerySolutionOpsplanRequest;
use AntChain\YUNQING\Models\PagequerySolutionOpsplanResponse;
use AntChain\YUNQING\Models\QueryAapApplicationinstanceRequest;
use AntChain\YUNQING\Models\QueryAapApplicationinstanceResponse;
use AntChain\YUNQING\Models\QueryAapProductinstanceRequest;
use AntChain\YUNQING\Models\QueryAapProductinstanceResponse;
use AntChain\YUNQING\Models\QueryAppparamRequest;
use AntChain\YUNQING\Models\QueryAppparamResponse;
use AntChain\YUNQING\Models\QueryAuthRequest;
use AntChain\YUNQING\Models\QueryAuthResponse;
use AntChain\YUNQING\Models\QueryClusterKubeconfigRequest;
use AntChain\YUNQING\Models\QueryClusterKubeconfigResponse;
use AntChain\YUNQING\Models\QueryClusterNativepodRequest;
use AntChain\YUNQING\Models\QueryClusterNativepodResponse;
use AntChain\YUNQING\Models\QueryClusterPodsRequest;
use AntChain\YUNQING\Models\QueryClusterPodsResponse;
use AntChain\YUNQING\Models\QueryOpsplanNodetreeRequest;
use AntChain\YUNQING\Models\QueryOpsplanNodetreeResponse;
use AntChain\YUNQING\Models\QueryProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\QueryProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\QueryProdinstanceRequest;
use AntChain\YUNQING\Models\QueryProdinstanceResponse;
use AntChain\YUNQING\Models\QueryProdsDeploymentunitsRequest;
use AntChain\YUNQING\Models\QueryProdsDeploymentunitsResponse;
use AntChain\YUNQING\Models\QuerySolutioninstanceRequest;
use AntChain\YUNQING\Models\QuerySolutioninstanceResponse;
use AntChain\YUNQING\Models\QuerySystemParameterRequest;
use AntChain\YUNQING\Models\QuerySystemParameterResponse;
use AntChain\YUNQING\Models\QueryUnitinstanceCreationRequest;
use AntChain\YUNQING\Models\QueryUnitinstanceCreationResponse;
use AntChain\YUNQING\Models\ReopenSolutioninstanceRequest;
use AntChain\YUNQING\Models\ReopenSolutioninstanceResponse;
use AntChain\YUNQING\Models\RetryAppopsRequest;
use AntChain\YUNQING\Models\RetryAppopsResponse;
use AntChain\YUNQING\Models\RetryProdsAppopsRequest;
use AntChain\YUNQING\Models\RetryProdsAppopsResponse;
use AntChain\YUNQING\Models\RollbackOpsAppRequest;
use AntChain\YUNQING\Models\RollbackOpsAppResponse;
use AntChain\YUNQING\Models\RollbackOpsProductRequest;
use AntChain\YUNQING\Models\RollbackOpsProductResponse;
use AntChain\YUNQING\Models\ScaleinProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\ScaleinProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\ScaleinProdsAppopsRequest;
use AntChain\YUNQING\Models\ScaleinProdsAppopsResponse;
use AntChain\YUNQING\Models\ScaleoutProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\ScaleoutProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\ScaleProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\ScaleProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\SetAapApplicationinstanceRequest;
use AntChain\YUNQING\Models\SetAapApplicationinstanceResponse;
use AntChain\YUNQING\Models\SetAapImagesRequest;
use AntChain\YUNQING\Models\SetAapImagesResponse;
use AntChain\YUNQING\Models\SetAapParametersRequest;
use AntChain\YUNQING\Models\SetAapParametersResponse;
use AntChain\YUNQING\Models\UninstallProdinstanceAppserviceRequest;
use AntChain\YUNQING\Models\UninstallProdinstanceAppserviceResponse;
use AntChain\YUNQING\Models\UninstallProdinstanceDeployunitRequest;
use AntChain\YUNQING\Models\UninstallProdinstanceDeployunitResponse;
use AntChain\YUNQING\Models\UpdateAapApplicationinstanceRequest;
use AntChain\YUNQING\Models\UpdateAapApplicationinstanceResponse;
use Exception;

class Client
{
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_securityToken;

    protected $_maxIdleTimeMillis;

    protected $_keepAliveDurationMillis;

    protected $_maxRequests;

    protected $_maxRequestsPerHost;

    /**
     * Init client with Config.
     *
     * @param config config contains the necessary information to create a client
     * @param mixed $config
     */
    public function __construct($config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'code'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        $this->_accessKeyId             = $config->accessKeyId;
        $this->_accessKeySecret         = $config->accessKeySecret;
        $this->_securityToken           = $config->securityToken;
        $this->_endpoint                = $config->endpoint;
        $this->_protocol                = $config->protocol;
        $this->_userAgent               = $config->userAgent;
        $this->_readTimeout             = Utils::defaultNumber($config->readTimeout, 20000);
        $this->_connectTimeout          = Utils::defaultNumber($config->connectTimeout, 20000);
        $this->_httpProxy               = $config->httpProxy;
        $this->_httpsProxy              = $config->httpsProxy;
        $this->_noProxy                 = $config->noProxy;
        $this->_socks5Proxy             = $config->socks5Proxy;
        $this->_socks5NetWork           = $config->socks5NetWork;
        $this->_maxIdleConns            = Utils::defaultNumber($config->maxIdleConns, 60000);
        $this->_maxIdleTimeMillis       = Utils::defaultNumber($config->maxIdleTimeMillis, 5);
        $this->_keepAliveDurationMillis = Utils::defaultNumber($config->keepAliveDurationMillis, 5000);
        $this->_maxRequests             = Utils::defaultNumber($config->maxRequests, 100);
        $this->_maxRequestsPerHost      = Utils::defaultNumber($config->maxRequestsPerHost, 100);
    }

    /**
     * Encapsulate the request and invoke the network.
     *
     * @param string         $version
     * @param string         $action   api name
     * @param string         $protocol http or https
     * @param string         $method   e.g. GET
     * @param string         $pathname pathname of every api
     * @param mixed[]        $request  which contains request params
     * @param string[]       $headers
     * @param RuntimeOptions $runtime  which controls some details of call api, such as retry times
     *
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     *
     * @return array the response
     */
    public function doRequest($version, $action, $protocol, $method, $pathname, $request, $headers, $runtime)
    {
        $runtime->validate();
        $_runtime = [
            'timeouted'          => 'retry',
            'readTimeout'        => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout'     => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'          => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'         => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'            => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'       => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'maxIdleTimeMillis'  => $this->_maxIdleTimeMillis,
            'keepAliveDuration'  => $this->_keepAliveDurationMillis,
            'maxRequests'        => $this->_maxRequests,
            'maxRequestsPerHost' => $this->_maxRequestsPerHost,
            'retry'              => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
            // 资源池信息
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry(@$_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = $pathname;
                $_request->query    = [
                    'method'           => $action,
                    'version'          => $version,
                    'sign_type'        => 'HmacSHA1',
                    'req_time'         => UtilClient::getTimestamp(),
                    'req_msg_id'       => UtilClient::getNonce(),
                    'access_key'       => $this->_accessKeyId,
                    'base_sdk_version' => 'TeaSDK-2.0',
                    'sdk_version'      => '4.0.6',
                    '_prod_code'       => 'YUNQING',
                    '_prod_channel'    => 'undefined',
                ];
                if (!Utils::empty_($this->_securityToken)) {
                    $_request->query['security_token'] = $this->_securityToken;
                }
                $_request->headers = Tea::merge([
                    'host'       => Utils::defaultString($this->_endpoint, 'openapi.antchain.antgroup.com'),
                    'user-agent' => Utils::getUserAgent($this->_userAgent),
                ], $headers);
                $tmp                               = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body                    = Utils::toFormString($tmp);
                $_request->headers['content-type'] = 'application/x-www-form-urlencoded';
                $signedParam                       = Tea::merge($_request->query, RpcUtils::query($request));
                $_request->query['sign']           = UtilClient::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest                      = $_request;
                $_response                         = Tea::send($_request, $_runtime);
                $raw                               = Utils::readAsString($_response->body);
                $obj                               = Utils::parseJSON($raw);
                $res                               = Utils::assertAsMap($obj);
                $resp                              = Utils::assertAsMap(@$res['response']);
                if (UtilClient::hasError($raw, $this->_accessKeySecret)) {
                    throw new TeaError([
                        'message' => @$resp['result_msg'],
                        'data'    => $resp,
                        'code'    => @$resp['result_code'],
                    ]);
                }

                return $resp;
            } catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Description: 创建一个运维单。
     * Summary: 创建一个运维单。
     *
     * @param CreateAppopsRequest $request
     *
     * @return CreateAppopsResponse
     */
    public function createAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 创建一个运维单。
     * Summary: 创建一个运维单。
     *
     * @param CreateAppopsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppopsResponse
     */
    public function createAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appops.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询一个运维单详情。
     * Summary: 查询一个运维单详情。
     *
     * @param GetAppopsRequest $request
     *
     * @return GetAppopsResponse
     */
    public function getAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询一个运维单详情。
     * Summary: 查询一个运维单详情。
     *
     * @param GetAppopsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetAppopsResponse
     */
    public function getAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appops.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 重试一个运维单，仅当运维单状态为FAILED时可执行。
     * Summary: 重试一个运维单。
     *
     * @param RetryAppopsRequest $request
     *
     * @return RetryAppopsResponse
     */
    public function retryAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 重试一个运维单，仅当运维单状态为FAILED时可执行。
     * Summary: 重试一个运维单。
     *
     * @param RetryAppopsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RetryAppopsResponse
     */
    public function retryAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RetryAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appops.retry', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 取消一个发布单。
     * Summary: 取消一个发布单。
     *
     * @param CancelAppopsRequest $request
     *
     * @return CancelAppopsResponse
     */
    public function cancelAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 取消一个发布单。
     * Summary: 取消一个发布单。
     *
     * @param CancelAppopsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CancelAppopsResponse
     */
    public function cancelAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CancelAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appops.cancel', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 变更应用服务实例集群大小。
     * Summary: 已废弃，勿用！！！
     *
     * @param ScaleProdinstanceAppserviceRequest $request
     *
     * @return ScaleProdinstanceAppserviceResponse
     */
    public function scaleProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 变更应用服务实例集群大小。
     * Summary: 已废弃，勿用！！！
     *
     * @param ScaleProdinstanceAppserviceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ScaleProdinstanceAppserviceResponse
     */
    public function scaleProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ScaleProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.scale', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取环境列表。
     * Summary: 获取环境列表。
     *
     * @param ListEnvRequest $request
     *
     * @return ListEnvResponse
     */
    public function listEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取环境列表。
     * Summary: 获取环境列表。
     *
     * @param ListEnvRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListEnvResponse
     */
    public function listEnvEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListEnvResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.env.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取应用服务实例详情信息。
     * Summary: 获取应用服务实例详情信息。
     *
     * @param GetProdinstanceAppserviceRequest $request
     *
     * @return GetProdinstanceAppserviceResponse
     */
    public function getProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取应用服务实例详情信息。
     * Summary: 获取应用服务实例详情信息。
     *
     * @param GetProdinstanceAppserviceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetProdinstanceAppserviceResponse
     */
    public function getProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询产品实例。
     * Summary: 查询产品实例。
     *
     * @param QueryProdinstanceRequest $request
     *
     * @return QueryProdinstanceResponse
     */
    public function queryProdinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProdinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询产品实例。
     * Summary: 查询产品实例。
     *
     * @param QueryProdinstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryProdinstanceResponse
     */
    public function queryProdinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryProdinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 卸载基线产品实例
     * Summary: 卸载基线产品实例.
     *
     * @param UninstallProdinstanceAppserviceRequest $request
     *
     * @return UninstallProdinstanceAppserviceResponse
     */
    public function uninstallProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 卸载基线产品实例
     * Summary: 卸载基线产品实例.
     *
     * @param UninstallProdinstanceAppserviceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UninstallProdinstanceAppserviceResponse
     */
    public function uninstallProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UninstallProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.uninstall', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 创建部署单元实例
     * Summary: 创建部署单元实例.
     *
     * @param CreateProdinstanceDeployunitRequest $request
     *
     * @return CreateProdinstanceDeployunitResponse
     */
    public function createProdinstanceDeployunit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProdinstanceDeployunitEx($request, $headers, $runtime);
    }

    /**
     * Description: 创建部署单元实例
     * Summary: 创建部署单元实例.
     *
     * @param CreateProdinstanceDeployunitRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateProdinstanceDeployunitResponse
     */
    public function createProdinstanceDeployunitEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateProdinstanceDeployunitResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.deployunit.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询部署单元实例创建状态
     * Summary: 废弃，勿用！！！
     *
     * @param QueryUnitinstanceCreationRequest $request
     *
     * @return QueryUnitinstanceCreationResponse
     */
    public function queryUnitinstanceCreation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUnitinstanceCreationEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询部署单元实例创建状态
     * Summary: 废弃，勿用！！！
     *
     * @param QueryUnitinstanceCreationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryUnitinstanceCreationResponse
     */
    public function queryUnitinstanceCreationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryUnitinstanceCreationResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.unitinstance.creation.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取部署单元详情
     * Summary: 废弃，勿用！！！
     *
     * @param GetUnitDetailRequest $request
     *
     * @return GetUnitDetailResponse
     */
    public function getUnitDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUnitDetailEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取部署单元详情
     * Summary: 废弃，勿用！！！
     *
     * @param GetUnitDetailRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetUnitDetailResponse
     */
    public function getUnitDetailEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetUnitDetailResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.unit.detail.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询应用服务实例信息。
     * Summary: 查询应用服务实例信息。
     *
     * @param QueryProdinstanceAppserviceRequest $request
     *
     * @return QueryProdinstanceAppserviceResponse
     */
    public function queryProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询应用服务实例信息。
     * Summary: 查询应用服务实例信息。
     *
     * @param QueryProdinstanceAppserviceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryProdinstanceAppserviceResponse
     */
    public function queryProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取单元实例信息
     * Summary: 获取单元实例信息.
     *
     * @param GetProdinstanceDeployunitRequest $request
     *
     * @return GetProdinstanceDeployunitResponse
     */
    public function getProdinstanceDeployunit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProdinstanceDeployunitEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取单元实例信息
     * Summary: 获取单元实例信息.
     *
     * @param GetProdinstanceDeployunitRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetProdinstanceDeployunitResponse
     */
    public function getProdinstanceDeployunitEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetProdinstanceDeployunitResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.deployunit.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取产品实例下的部署单元列表。
     * Summary: 获取产品实例下的部署单元列表.
     *
     * @param ListProdinstanceDeployunitRequest $request
     *
     * @return ListProdinstanceDeployunitResponse
     */
    public function listProdinstanceDeployunit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProdinstanceDeployunitEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取产品实例下的部署单元列表。
     * Summary: 获取产品实例下的部署单元列表.
     *
     * @param ListProdinstanceDeployunitRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProdinstanceDeployunitResponse
     */
    public function listProdinstanceDeployunitEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListProdinstanceDeployunitResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.deployunit.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 指定应用服务扩容。
     * Summary: 指定应用服务扩容。
     *
     * @param ScaleoutProdinstanceAppserviceRequest $request
     *
     * @return ScaleoutProdinstanceAppserviceResponse
     */
    public function scaleoutProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleoutProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 指定应用服务扩容。
     * Summary: 指定应用服务扩容。
     *
     * @param ScaleoutProdinstanceAppserviceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ScaleoutProdinstanceAppserviceResponse
     */
    public function scaleoutProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ScaleoutProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.scaleout', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询用户授权信息
     * Summary: 查询用户授权信息.
     *
     * @param QueryAuthRequest $request
     *
     * @return QueryAuthResponse
     */
    public function queryAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAuthEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询用户授权信息
     * Summary: 查询用户授权信息.
     *
     * @param QueryAuthRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return QueryAuthResponse
     */
    public function queryAuthEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAuthResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.auth.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 导入用户授权
     * Summary: 导入用户授权.
     *
     * @param ImportAuthRequest $request
     *
     * @return ImportAuthResponse
     */
    public function importAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importAuthEx($request, $headers, $runtime);
    }

    /**
     * Description: 导入用户授权
     * Summary: 导入用户授权.
     *
     * @param ImportAuthRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ImportAuthResponse
     */
    public function importAuthEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportAuthResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.auth.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 系统信息
     * Summary: 获取Local系统信息.
     *
     * @param GetSystemRequest $request
     *
     * @return GetSystemResponse
     */
    public function getSystem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSystemEx($request, $headers, $runtime);
    }

    /**
     * Description: 系统信息
     * Summary: 获取Local系统信息.
     *
     * @param GetSystemRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetSystemResponse
     */
    public function getSystemEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetSystemResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.system.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用服务缩容。
     * Summary: 应用服务缩容。
     *
     * @param ScaleinProdinstanceAppserviceRequest $request
     *
     * @return ScaleinProdinstanceAppserviceResponse
     */
    public function scaleinProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleinProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用服务缩容。
     * Summary: 应用服务缩容。
     *
     * @param ScaleinProdinstanceAppserviceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ScaleinProdinstanceAppserviceResponse
     */
    public function scaleinProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ScaleinProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.scalein', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询一个环境内的全部应用服务实例信息，仅供监控调用。
     * Summary: 查询一个环境内的全部应用服务实例信息。
     *
     * @param AllProdinstanceAppserviceRequest $request
     *
     * @return AllProdinstanceAppserviceResponse
     */
    public function allProdinstanceAppservice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->allProdinstanceAppserviceEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询一个环境内的全部应用服务实例信息，仅供监控调用。
     * Summary: 查询一个环境内的全部应用服务实例信息。
     *
     * @param AllProdinstanceAppserviceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return AllProdinstanceAppserviceResponse
     */
    public function allProdinstanceAppserviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AllProdinstanceAppserviceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.appservice.all', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 输入产品码，自动创建一个测试单，并开始执行
     * Summary: 创建一个自动巡检测试单.
     *
     * @param CreateAutotestopsRequest $request
     *
     * @return CreateAutotestopsResponse
     */
    public function createAutotestops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAutotestopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 输入产品码，自动创建一个测试单，并开始执行
     * Summary: 创建一个自动巡检测试单.
     *
     * @param CreateAutotestopsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAutotestopsResponse
     */
    public function createAutotestopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAutotestopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.autotestops.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 获取测试单状态和case
     * Summary: 获取测试单详情.
     *
     * @param GetAutotestopsRequest $request
     *
     * @return GetAutotestopsResponse
     */
    public function getAutotestops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAutotestopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 获取测试单状态和case
     * Summary: 获取测试单详情.
     *
     * @param GetAutotestopsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAutotestopsResponse
     */
    public function getAutotestopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetAutotestopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.autotestops.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 基线数据回流
     * Summary: 基线数据回流
     *
     * @param ExportBaselineRequest $request
     *
     * @return ExportBaselineResponse
     */
    public function exportBaseline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportBaselineEx($request, $headers, $runtime);
    }

    /**
     * Description: 基线数据回流
     * Summary: 基线数据回流
     *
     * @param ExportBaselineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ExportBaselineResponse
     */
    public function exportBaselineEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExportBaselineResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.baseline.export', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 创建一个发布单
     * Summary: 创建一个发布单.
     *
     * @param CreateAppdeployRequest $request
     *
     * @return CreateAppdeployResponse
     */
    public function createAppdeploy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppdeployEx($request, $headers, $runtime);
    }

    /**
     * Description: 创建一个发布单
     * Summary: 创建一个发布单.
     *
     * @param CreateAppdeployRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppdeployResponse
     */
    public function createAppdeployEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAppdeployResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appdeploy.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询环境中的解决方案实例
     * Summary: 查询环境中的解决方案实例.
     *
     * @param QuerySolutioninstanceRequest $request
     *
     * @return QuerySolutioninstanceResponse
     */
    public function querySolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询环境中的解决方案实例
     * Summary: 查询环境中的解决方案实例.
     *
     * @param QuerySolutioninstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySolutioninstanceResponse
     */
    public function querySolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 导入解决方案
     * Summary: 导入解决方案.
     *
     * @param ImportSolutioninstanceRequest $request
     *
     * @return ImportSolutioninstanceResponse
     */
    public function importSolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importSolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 导入解决方案
     * Summary: 导入解决方案.
     *
     * @param ImportSolutioninstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ImportSolutioninstanceResponse
     */
    public function importSolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportSolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 检查解决方案是否可以导入
     * Summary: 检查解决方案是否可以导入.
     *
     * @param CheckSolutioninstanceImportRequest $request
     *
     * @return CheckSolutioninstanceImportResponse
     */
    public function checkSolutioninstanceImport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkSolutioninstanceImportEx($request, $headers, $runtime);
    }

    /**
     * Description: 检查解决方案是否可以导入
     * Summary: 检查解决方案是否可以导入.
     *
     * @param CheckSolutioninstanceImportRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckSolutioninstanceImportResponse
     */
    public function checkSolutioninstanceImportEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CheckSolutioninstanceImportResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.import.check', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 返回解决方案支持的操作列表
     * Summary: 返回解决方案支持的操作列表.
     *
     * @param DescribeSolutioninstanceRequest $request
     *
     * @return DescribeSolutioninstanceResponse
     */
    public function describeSolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 返回解决方案支持的操作列表
     * Summary: 返回解决方案支持的操作列表.
     *
     * @param DescribeSolutioninstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSolutioninstanceResponse
     */
    public function describeSolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.describe', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 废弃一个解决方案
     * Summary: 废弃一个解决方案.
     *
     * @param DeprecateSolutioninstanceRequest $request
     *
     * @return DeprecateSolutioninstanceResponse
     */
    public function deprecateSolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deprecateSolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 废弃一个解决方案
     * Summary: 废弃一个解决方案.
     *
     * @param DeprecateSolutioninstanceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DeprecateSolutioninstanceResponse
     */
    public function deprecateSolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeprecateSolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.deprecate', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 完成一个解决方案
     * Summary: 完成一个解决方案.
     *
     * @param FinishSolutioninstanceRequest $request
     *
     * @return FinishSolutioninstanceResponse
     */
    public function finishSolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishSolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 完成一个解决方案
     * Summary: 完成一个解决方案.
     *
     * @param FinishSolutioninstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FinishSolutioninstanceResponse
     */
    public function finishSolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return FinishSolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.finish', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: reopen一个解决方案
     * Summary: reopen一个解决方案.
     *
     * @param ReopenSolutioninstanceRequest $request
     *
     * @return ReopenSolutioninstanceResponse
     */
    public function reopenSolutioninstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reopenSolutioninstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: reopen一个解决方案
     * Summary: reopen一个解决方案.
     *
     * @param ReopenSolutioninstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ReopenSolutioninstanceResponse
     */
    public function reopenSolutioninstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ReopenSolutioninstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solutioninstance.reopen', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 导入一个云架构
     * Summary: 导入一个云架构.
     *
     * @param ImportEnvMetaRequest $request
     *
     * @return ImportEnvMetaResponse
     */
    public function importEnvMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importEnvMetaEx($request, $headers, $runtime);
    }

    /**
     * Description: 导入一个云架构
     * Summary: 导入一个云架构.
     *
     * @param ImportEnvMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImportEnvMetaResponse
     */
    public function importEnvMetaEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportEnvMetaResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.env.meta.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 导入产品元数据
     * Summary: 导入产品元数据.
     *
     * @param ImportProdMetaRequest $request
     *
     * @return ImportProdMetaResponse
     */
    public function importProdMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importProdMetaEx($request, $headers, $runtime);
    }

    /**
     * Description: 导入产品元数据
     * Summary: 导入产品元数据.
     *
     * @param ImportProdMetaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ImportProdMetaResponse
     */
    public function importProdMetaEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportProdMetaResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prod.meta.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 卸载部署单元实例
     * Summary: 卸载部署单元实例.
     *
     * @param UninstallProdinstanceDeployunitRequest $request
     *
     * @return UninstallProdinstanceDeployunitResponse
     */
    public function uninstallProdinstanceDeployunit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallProdinstanceDeployunitEx($request, $headers, $runtime);
    }

    /**
     * Description: 卸载部署单元实例
     * Summary: 卸载部署单元实例.
     *
     * @param UninstallProdinstanceDeployunitRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UninstallProdinstanceDeployunitResponse
     */
    public function uninstallProdinstanceDeployunitEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UninstallProdinstanceDeployunitResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.deployunit.uninstall', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 集群内部pod信息查询，巡检使用
     * Summary: 集群内部pod信息查询，巡检使用.
     *
     * @param QueryClusterPodsRequest $request
     *
     * @return QueryClusterPodsResponse
     */
    public function queryClusterPods($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryClusterPodsEx($request, $headers, $runtime);
    }

    /**
     * Description: 集群内部pod信息查询，巡检使用
     * Summary: 集群内部pod信息查询，巡检使用.
     *
     * @param QueryClusterPodsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryClusterPodsResponse
     */
    public function queryClusterPodsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryClusterPodsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.pods.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 集群内部kubeconfig查询巡检使用
     * Summary: 集群内部kubeconfig查询巡检使用.
     *
     * @param QueryClusterKubeconfigRequest $request
     *
     * @return QueryClusterKubeconfigResponse
     */
    public function queryClusterKubeconfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryClusterKubeconfigEx($request, $headers, $runtime);
    }

    /**
     * Description: 集群内部kubeconfig查询巡检使用
     * Summary: 集群内部kubeconfig查询巡检使用.
     *
     * @param QueryClusterKubeconfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryClusterKubeconfigResponse
     */
    public function queryClusterKubeconfigEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryClusterKubeconfigResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.kubeconfig.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 【ODP虚商迁移】公有云支持创建公网SLB
     * https://aone.alipay.com/req/33161543?from=ak&
     * Summary: 生成公网访问的slb.
     *
     * @param EnableDynamicslbRequest $request
     *
     * @return EnableDynamicslbResponse
     */
    public function enableDynamicslb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableDynamicslbEx($request, $headers, $runtime);
    }

    /**
     * Description: 【ODP虚商迁移】公有云支持创建公网SLB
     * https://aone.alipay.com/req/33161543?from=ak&
     * Summary: 生成公网访问的slb.
     *
     * @param EnableDynamicslbRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return EnableDynamicslbResponse
     */
    public function enableDynamicslbEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return EnableDynamicslbResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.dynamicslb.enable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 移除公网SLB
     * 【ODP虚商迁移】公有云支持创建公网SLB https://aone.alipay.com/req/33161543?from=ak&
     * Summary: 移除公网访问的slb.
     *
     * @param DisableDynamicslbRequest $request
     *
     * @return DisableDynamicslbResponse
     */
    public function disableDynamicslb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableDynamicslbEx($request, $headers, $runtime);
    }

    /**
     * Description: 移除公网SLB
     * 【ODP虚商迁移】公有云支持创建公网SLB https://aone.alipay.com/req/33161543?from=ak&
     * Summary: 移除公网访问的slb.
     *
     * @param DisableDynamicslbRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DisableDynamicslbResponse
     */
    public function disableDynamicslbEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DisableDynamicslbResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.dynamicslb.disable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 云游环境下应用dns的上下线
     * Summary: 云游环境下应用dns的上下线
     *
     * @param ExecClusterDnsRequest $request
     *
     * @return ExecClusterDnsResponse
     */
    public function execClusterDns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execClusterDnsEx($request, $headers, $runtime);
    }

    /**
     * Description: 云游环境下应用dns的上下线
     * Summary: 云游环境下应用dns的上下线
     *
     * @param ExecClusterDnsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ExecClusterDnsResponse
     */
    public function execClusterDnsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecClusterDnsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.dns.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 云游环境下应用容器的下线
     * Summary: 云游环境下应用容器的下线
     *
     * @param OfflineClusterContainerRequest $request
     *
     * @return OfflineClusterContainerResponse
     */
    public function offlineClusterContainer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineClusterContainerEx($request, $headers, $runtime);
    }

    /**
     * Description: 云游环境下应用容器的下线
     * Summary: 云游环境下应用容器的下线
     *
     * @param OfflineClusterContainerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return OfflineClusterContainerResponse
     */
    public function offlineClusterContainerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OfflineClusterContainerResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.container.offline', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 云游环境下应用容器的上线
     * Summary: 云游环境下应用容器的上线
     *
     * @param OnlineClusterContainerRequest $request
     *
     * @return OnlineClusterContainerResponse
     */
    public function onlineClusterContainer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineClusterContainerEx($request, $headers, $runtime);
    }

    /**
     * Description: 云游环境下应用容器的上线
     * Summary: 云游环境下应用容器的上线
     *
     * @param OnlineClusterContainerRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return OnlineClusterContainerResponse
     */
    public function onlineClusterContainerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OnlineClusterContainerResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.container.online', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询应用启动参数
     * Summary: 查询应用启动参数.
     *
     * @param QueryAppparamRequest $request
     *
     * @return QueryAppparamResponse
     */
    public function queryAppparam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAppparamEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询应用启动参数
     * Summary: 查询应用启动参数.
     *
     * @param QueryAppparamRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAppparamResponse
     */
    public function queryAppparamEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAppparamResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.appparam.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询产品解决方案的所有发布单
     * Summary: 查询产品解决方案的所有发布单.
     *
     * @param PagequerySolutionOpsplanRequest $request
     *
     * @return PagequerySolutionOpsplanResponse
     */
    public function pagequerySolutionOpsplan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequerySolutionOpsplanEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询产品解决方案的所有发布单
     * Summary: 查询产品解决方案的所有发布单.
     *
     * @param PagequerySolutionOpsplanRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return PagequerySolutionOpsplanResponse
     */
    public function pagequerySolutionOpsplanEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequerySolutionOpsplanResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solution.opsplan.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 确认解决方案的各种规划
     * Summary: 确认解决方案规划.
     *
     * @param ConfirmSolutionPlanRequest $request
     *
     * @return ConfirmSolutionPlanResponse
     */
    public function confirmSolutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmSolutionPlanEx($request, $headers, $runtime);
    }

    /**
     * Description: 确认解决方案的各种规划
     * Summary: 确认解决方案规划.
     *
     * @param ConfirmSolutionPlanRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ConfirmSolutionPlanResponse
     */
    public function confirmSolutionPlanEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ConfirmSolutionPlanResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solution.plan.confirm', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 解决方案是否完成规划
     * Summary: 解决方案是否完成规划.
     *
     * @param GetSolutionPlanstatusRequest $request
     *
     * @return GetSolutionPlanstatusResponse
     */
    public function getSolutionPlanstatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSolutionPlanstatusEx($request, $headers, $runtime);
    }

    /**
     * Description: 解决方案是否完成规划
     * Summary: 解决方案是否完成规划.
     *
     * @param GetSolutionPlanstatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetSolutionPlanstatusResponse
     */
    public function getSolutionPlanstatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetSolutionPlanstatusResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.solution.planstatus.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 分页查询迭代详情
     * Summary: 分页查询迭代详情.
     *
     * @param PagequeryProditerationRequest $request
     *
     * @return PagequeryProditerationResponse
     */
    public function pagequeryProditeration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryProditerationEx($request, $headers, $runtime);
    }

    /**
     * Description: 分页查询迭代详情
     * Summary: 分页查询迭代详情.
     *
     * @param PagequeryProditerationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PagequeryProditerationResponse
     */
    public function pagequeryProditerationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryProditerationResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.proditeration.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 部署单元批量创建
     * Summary: 部署单元批量创建.
     *
     * @param CreateProdinstanceDeployunitbatchRequest $request
     *
     * @return CreateProdinstanceDeployunitbatchResponse
     */
    public function createProdinstanceDeployunitbatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProdinstanceDeployunitbatchEx($request, $headers, $runtime);
    }

    /**
     * Description: 部署单元批量创建
     * Summary: 部署单元批量创建.
     *
     * @param CreateProdinstanceDeployunitbatchRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateProdinstanceDeployunitbatchResponse
     */
    public function createProdinstanceDeployunitbatchEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateProdinstanceDeployunitbatchResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prodinstance.deployunitbatch.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 发布单应用回滚
     * Summary: 发布单应用回滚.
     *
     * @param RollbackOpsAppRequest $request
     *
     * @return RollbackOpsAppResponse
     */
    public function rollbackOpsApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackOpsAppEx($request, $headers, $runtime);
    }

    /**
     * Description: 发布单应用回滚
     * Summary: 发布单应用回滚.
     *
     * @param RollbackOpsAppRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RollbackOpsAppResponse
     */
    public function rollbackOpsAppEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RollbackOpsAppResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.ops.app.rollback', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 发布单产品回滚
     * Summary: 发布单产品回滚.
     *
     * @param RollbackOpsProductRequest $request
     *
     * @return RollbackOpsProductResponse
     */
    public function rollbackOpsProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackOpsProductEx($request, $headers, $runtime);
    }

    /**
     * Description: 发布单产品回滚
     * Summary: 发布单产品回滚.
     *
     * @param RollbackOpsProductRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RollbackOpsProductResponse
     */
    public function rollbackOpsProductEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RollbackOpsProductResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.ops.product.rollback', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 直接查询集群的pod信息，不是查询云游的基线！
     * Summary: 查询集群pod信息.
     *
     * @param QueryClusterNativepodRequest $request
     *
     * @return QueryClusterNativepodResponse
     */
    public function queryClusterNativepod($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryClusterNativepodEx($request, $headers, $runtime);
    }

    /**
     * Description: 直接查询集群的pod信息，不是查询云游的基线！
     * Summary: 查询集群pod信息.
     *
     * @param QueryClusterNativepodRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryClusterNativepodResponse
     */
    public function queryClusterNativepodEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryClusterNativepodResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.cluster.nativepod.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询基线应用容器
     * Summary: 查询基线应用容器.
     *
     * @param PagequeryBaselineAppcontainersRequest $request
     *
     * @return PagequeryBaselineAppcontainersResponse
     */
    public function pagequeryBaselineAppcontainers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryBaselineAppcontainersEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询基线应用容器
     * Summary: 查询基线应用容器.
     *
     * @param PagequeryBaselineAppcontainersRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return PagequeryBaselineAppcontainersResponse
     */
    public function pagequeryBaselineAppcontainersEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryBaselineAppcontainersResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.baseline.appcontainers.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 回滚快照查询
     * Summary: 回滚快照查询.
     *
     * @param PagequeryRollbackSnapshotversionRequest $request
     *
     * @return PagequeryRollbackSnapshotversionResponse
     */
    public function pagequeryRollbackSnapshotversion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryRollbackSnapshotversionEx($request, $headers, $runtime);
    }

    /**
     * Description: 回滚快照查询
     * Summary: 回滚快照查询.
     *
     * @param PagequeryRollbackSnapshotversionRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return PagequeryRollbackSnapshotversionResponse
     */
    public function pagequeryRollbackSnapshotversionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryRollbackSnapshotversionResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.rollback.snapshotversion.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品是否可创建测试单
     * Summary: 产品是否可创建测试单.
     *
     * @param EnableProdAutotestRequest $request
     *
     * @return EnableProdAutotestResponse
     */
    public function enableProdAutotest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableProdAutotestEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品是否可创建测试单
     * Summary: 产品是否可创建测试单.
     *
     * @param EnableProdAutotestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return EnableProdAutotestResponse
     */
    public function enableProdAutotestEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return EnableProdAutotestResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prod.autotest.enable', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 系统参数查询
     * Summary: 系统参数查询.
     *
     * @param QuerySystemParameterRequest $request
     *
     * @return QuerySystemParameterResponse
     */
    public function querySystemParameter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySystemParameterEx($request, $headers, $runtime);
    }

    /**
     * Description: 系统参数查询
     * Summary: 系统参数查询.
     *
     * @param QuerySystemParameterRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySystemParameterResponse
     */
    public function querySystemParameterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QuerySystemParameterResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.system.parameter.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 查询发布单详情
     * 发布单详情的任务树是嵌套结构，OP目前不支持定义此类型的结构体
     * 故本接口返回了json string，调用方需要自己构造
     * Summary: 查询发布单详情.
     *
     * @param QueryOpsplanNodetreeRequest $request
     *
     * @return QueryOpsplanNodetreeResponse
     */
    public function queryOpsplanNodetree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOpsplanNodetreeEx($request, $headers, $runtime);
    }

    /**
     * Description: 查询发布单详情
     * 发布单详情的任务树是嵌套结构，OP目前不支持定义此类型的结构体
     * 故本接口返回了json string，调用方需要自己构造
     * Summary: 查询发布单详情.
     *
     * @param QueryOpsplanNodetreeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryOpsplanNodetreeResponse
     */
    public function queryOpsplanNodetreeEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryOpsplanNodetreeResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.opsplan.nodetree.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 站点信息list
     * Summary: 站点信息list.
     *
     * @param ListAapSitesRequest $request
     *
     * @return ListAapSitesResponse
     */
    public function listAapSites($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAapSitesEx($request, $headers, $runtime);
    }

    /**
     * Description: 站点信息list
     * Summary: 站点信息list.
     *
     * @param ListAapSitesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListAapSitesResponse
     */
    public function listAapSitesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListAapSitesResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.sites.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: AAP 元数据导入，包含：产品、应用、拓扑信息 。https://yuque.antfin-inc.com/tpaas/ednkxs/izdpx9s4at32mwbi?singleDoc# 《AAP：用户自定义产品接入》
     * Summary: AAP 元数据导入.
     *
     * @param ImportAapMetaRequest $request
     *
     * @return ImportAapMetaResponse
     */
    public function importAapMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importAapMetaEx($request, $headers, $runtime);
    }

    /**
     * Description: AAP 元数据导入，包含：产品、应用、拓扑信息 。https://yuque.antfin-inc.com/tpaas/ednkxs/izdpx9s4at32mwbi?singleDoc# 《AAP：用户自定义产品接入》
     * Summary: AAP 元数据导入.
     *
     * @param ImportAapMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImportAapMetaResponse
     */
    public function importAapMetaEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportAapMetaResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.meta.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: AAP 产品实例初始化
     * Summary: AAP 产品实例初始化.
     *
     * @param InitAapProductinstanceRequest $request
     *
     * @return InitAapProductinstanceResponse
     */
    public function initAapProductinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initAapProductinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: AAP 产品实例初始化
     * Summary: AAP 产品实例初始化.
     *
     * @param InitAapProductinstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return InitAapProductinstanceResponse
     */
    public function initAapProductinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return InitAapProductinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.productinstance.init', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品实例发布初始化
     * Summary: 产品实例发布初始化.
     *
     * @param InitAapReleaseRequest $request
     *
     * @return InitAapReleaseResponse
     */
    public function initAapRelease($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initAapReleaseEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品实例发布初始化
     * Summary: 产品实例发布初始化.
     *
     * @param InitAapReleaseRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InitAapReleaseResponse
     */
    public function initAapReleaseEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return InitAapReleaseResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.release.init', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品实例部署
     * Summary: 产品实例部署.
     *
     * @param DeployAapProductinstanceRequest $request
     *
     * @return DeployAapProductinstanceResponse
     */
    public function deployAapProductinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployAapProductinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品实例部署
     * Summary: 产品实例部署.
     *
     * @param DeployAapProductinstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeployAapProductinstanceResponse
     */
    public function deployAapProductinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeployAapProductinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.productinstance.deploy', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 发布单状态查询
     * Summary: 发布单.
     *
     * @param GetAapReleaseRequest $request
     *
     * @return GetAapReleaseResponse
     */
    public function getAapRelease($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAapReleaseEx($request, $headers, $runtime);
    }

    /**
     * Description: 发布单状态查询
     * Summary: 发布单.
     *
     * @param GetAapReleaseRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetAapReleaseResponse
     */
    public function getAapReleaseEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetAapReleaseResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.release.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用实例更新，比如：规格、镜像、参数等
     * Summary: 应用实例更新.
     *
     * @param UpdateAapApplicationinstanceRequest $request
     *
     * @return UpdateAapApplicationinstanceResponse
     */
    public function updateAapApplicationinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAapApplicationinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用实例更新，比如：规格、镜像、参数等
     * Summary: 应用实例更新.
     *
     * @param UpdateAapApplicationinstanceRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAapApplicationinstanceResponse
     */
    public function updateAapApplicationinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAapApplicationinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.applicationinstance.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用实例查询
     * Summary: 应用实例查询.
     *
     * @param QueryAapApplicationinstanceRequest $request
     *
     * @return QueryAapApplicationinstanceResponse
     */
    public function queryAapApplicationinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAapApplicationinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用实例查询
     * Summary: 应用实例查询.
     *
     * @param QueryAapApplicationinstanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryAapApplicationinstanceResponse
     */
    public function queryAapApplicationinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAapApplicationinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.applicationinstance.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用规格配置修改
     * Summary: 应用规格配置修改.
     *
     * @param SetAapApplicationinstanceRequest $request
     *
     * @return SetAapApplicationinstanceResponse
     */
    public function setAapApplicationinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setAapApplicationinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用规格配置修改
     * Summary: 应用规格配置修改.
     *
     * @param SetAapApplicationinstanceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return SetAapApplicationinstanceResponse
     */
    public function setAapApplicationinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetAapApplicationinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.applicationinstance.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用镜像修改
     * Summary: 应用镜像修改.
     *
     * @param SetAapImagesRequest $request
     *
     * @return SetAapImagesResponse
     */
    public function setAapImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setAapImagesEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用镜像修改
     * Summary: 应用镜像修改.
     *
     * @param SetAapImagesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SetAapImagesResponse
     */
    public function setAapImagesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetAapImagesResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.images.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品实例查询
     * Summary: 产品实例查询.
     *
     * @param QueryAapProductinstanceRequest $request
     *
     * @return QueryAapProductinstanceResponse
     */
    public function queryAapProductinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAapProductinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品实例查询
     * Summary: 产品实例查询.
     *
     * @param QueryAapProductinstanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAapProductinstanceResponse
     */
    public function queryAapProductinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAapProductinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.productinstance.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用实例详情查询
     * Summary: 应用实例详情查询.
     *
     * @param DetailAapApplicationinstanceRequest $request
     *
     * @return DetailAapApplicationinstanceResponse
     */
    public function detailAapApplicationinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detailAapApplicationinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用实例详情查询
     * Summary: 应用实例详情查询.
     *
     * @param DetailAapApplicationinstanceRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DetailAapApplicationinstanceResponse
     */
    public function detailAapApplicationinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DetailAapApplicationinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.applicationinstance.detail', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用参数更新
     * Summary: 应用参数更新.
     *
     * @param SetAapParametersRequest $request
     *
     * @return SetAapParametersResponse
     */
    public function setAapParameters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setAapParametersEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用参数更新
     * Summary: 应用参数更新.
     *
     * @param SetAapParametersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SetAapParametersResponse
     */
    public function setAapParametersEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetAapParametersResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.parameters.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品实例卸载
     * Summary: 产品实例卸载.
     *
     * @param DeleteAapProductinstanceRequest $request
     *
     * @return DeleteAapProductinstanceResponse
     */
    public function deleteAapProductinstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAapProductinstanceEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品实例卸载
     * Summary: 产品实例卸载.
     *
     * @param DeleteAapProductinstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAapProductinstanceResponse
     */
    public function deleteAapProductinstanceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAapProductinstanceResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.aap.productinstance.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 初始化云游local环境
     * Summary: 初始化云游local环境.
     *
     * @param CreateEnvRequest $request
     *
     * @return CreateEnvResponse
     */
    public function createEnv($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvEx($request, $headers, $runtime);
    }

    /**
     * Description: 初始化云游local环境
     * Summary: 初始化云游local环境.
     *
     * @param CreateEnvRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateEnvResponse
     */
    public function createEnvEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateEnvResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.env.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 云游纳管的所有环境基本信息查询
     * Summary: 云游纳管的所有环境基本信息查询.
     *
     * @param AllEnvsRequest $request
     *
     * @return AllEnvsResponse
     */
    public function allEnvs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->allEnvsEx($request, $headers, $runtime);
    }

    /**
     * Description: 云游纳管的所有环境基本信息查询
     * Summary: 云游纳管的所有环境基本信息查询.
     *
     * @param AllEnvsRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AllEnvsResponse
     */
    public function allEnvsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AllEnvsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.envs.all', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品基线基本信息分页查询
     * Summary: 产品基线基本信息分页查询.
     *
     * @param PagequeryProdsRequest $request
     *
     * @return PagequeryProdsResponse
     */
    public function pagequeryProds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryProdsEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品基线基本信息分页查询
     * Summary: 产品基线基本信息分页查询.
     *
     * @param PagequeryProdsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PagequeryProdsResponse
     */
    public function pagequeryProdsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryProdsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品基线资源元数据查询
     * Summary: 产品基线资源元数据查询.
     *
     * @param PagequeryProdsResourcesRequest $request
     *
     * @return PagequeryProdsResourcesResponse
     */
    public function pagequeryProdsResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryProdsResourcesEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品基线资源元数据查询
     * Summary: 产品基线资源元数据查询.
     *
     * @param PagequeryProdsResourcesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PagequeryProdsResourcesResponse
     */
    public function pagequeryProdsResourcesEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryProdsResourcesResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.resources.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品基线容器实例详情分页查询
     * Summary: 产品基线容器实例详情查询.
     *
     * @param PagequeryResourceinstancesContainersRequest $request
     *
     * @return PagequeryResourceinstancesContainersResponse
     */
    public function pagequeryResourceinstancesContainers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryResourceinstancesContainersEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品基线容器实例详情分页查询
     * Summary: 产品基线容器实例详情查询.
     *
     * @param PagequeryResourceinstancesContainersRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return PagequeryResourceinstancesContainersResponse
     */
    public function pagequeryResourceinstancesContainersEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryResourceinstancesContainersResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.resourceinstances.containers.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品所属应用基线元数据分页查询
     * Summary: 产品所属应用基线元数据分页查询.
     *
     * @param PagequeryProdsAppsRequest $request
     *
     * @return PagequeryProdsAppsResponse
     */
    public function pagequeryProdsApps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryProdsAppsEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品所属应用基线元数据分页查询
     * Summary: 产品所属应用基线元数据分页查询.
     *
     * @param PagequeryProdsAppsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PagequeryProdsAppsResponse
     */
    public function pagequeryProdsAppsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryProdsAppsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.apps.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品部署单元实例列表查询
     * Summary: 产品部署单元实例列表查询.
     *
     * @param QueryProdsDeploymentunitsRequest $request
     *
     * @return QueryProdsDeploymentunitsResponse
     */
    public function queryProdsDeploymentunits($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProdsDeploymentunitsEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品部署单元实例列表查询
     * Summary: 产品部署单元实例列表查询.
     *
     * @param QueryProdsDeploymentunitsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryProdsDeploymentunitsResponse
     */
    public function queryProdsDeploymentunitsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryProdsDeploymentunitsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.deploymentunits.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品基线应用所属lb资源分页查询
     * Summary: 产品基线应用所属lb资源分页查询.
     *
     * @param PagequeryResourceinstancesLbsRequest $request
     *
     * @return PagequeryResourceinstancesLbsResponse
     */
    public function pagequeryResourceinstancesLbs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryResourceinstancesLbsEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品基线应用所属lb资源分页查询
     * Summary: 产品基线应用所属lb资源分页查询.
     *
     * @param PagequeryResourceinstancesLbsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return PagequeryResourceinstancesLbsResponse
     */
    public function pagequeryResourceinstancesLbsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryResourceinstancesLbsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.resourceinstances.lbs.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 产品所属应用运维发布单创建
     * Summary: 产品所属应用运维发布单创建.
     *
     * @param CreateProdsAppopsRequest $request
     *
     * @return CreateProdsAppopsResponse
     */
    public function createProdsAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProdsAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 产品所属应用运维发布单创建
     * Summary: 产品所属应用运维发布单创建.
     *
     * @param CreateProdsAppopsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateProdsAppopsResponse
     */
    public function createProdsAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateProdsAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.appops.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 运维发布单查询
     * Summary: 运维发布单查询.
     *
     * @param GetProdsAppopsRequest $request
     *
     * @return GetProdsAppopsResponse
     */
    public function getProdsAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProdsAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 运维发布单查询
     * Summary: 运维发布单查询.
     *
     * @param GetProdsAppopsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetProdsAppopsResponse
     */
    public function getProdsAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetProdsAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.appops.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 发布单取消
     * Summary: 发布单取消.
     *
     * @param CancelProdsAppopsRequest $request
     *
     * @return CancelProdsAppopsResponse
     */
    public function cancelProdsAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelProdsAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 发布单取消
     * Summary: 发布单取消.
     *
     * @param CancelProdsAppopsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CancelProdsAppopsResponse
     */
    public function cancelProdsAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CancelProdsAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.appops.cancel', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 发布单重试
     * Summary: 发布单重试.
     *
     * @param RetryProdsAppopsRequest $request
     *
     * @return RetryProdsAppopsResponse
     */
    public function retryProdsAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryProdsAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 发布单重试
     * Summary: 发布单重试.
     *
     * @param RetryProdsAppopsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RetryProdsAppopsResponse
     */
    public function retryProdsAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RetryProdsAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.appops.retry', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: 应用缩容
     * Summary: 应用缩容.
     *
     * @param ScaleinProdsAppopsRequest $request
     *
     * @return ScaleinProdsAppopsResponse
     */
    public function scaleinProdsAppops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleinProdsAppopsEx($request, $headers, $runtime);
    }

    /**
     * Description: 应用缩容
     * Summary: 应用缩容.
     *
     * @param ScaleinProdsAppopsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ScaleinProdsAppopsResponse
     */
    public function scaleinProdsAppopsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ScaleinProdsAppopsResponse::fromMap($this->doRequest('1.0', 'yunyou.yunqing.prods.appops.scalein', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }
}
