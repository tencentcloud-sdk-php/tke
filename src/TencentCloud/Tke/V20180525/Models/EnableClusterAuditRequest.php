<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableClusterAudit请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getLogsetId() 获取CLS日志集ID
 * @method void setLogsetId(string $LogsetId) 设置CLS日志集ID
 * @method string getTopicId() 获取CLS日志主题ID
 * @method void setTopicId(string $TopicId) 设置CLS日志主题ID
 * @method string getTopicRegion() 获取topic所在region，默认为集群当前region
 * @method void setTopicRegion(string $TopicRegion) 设置topic所在region，默认为集群当前region
 */
class EnableClusterAuditRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string CLS日志集ID
     */
    public $LogsetId;

    /**
     * @var string CLS日志主题ID
     */
    public $TopicId;

    /**
     * @var string topic所在region，默认为集群当前region
     */
    public $TopicRegion;

    /**
     * @param string $ClusterId 集群ID
     * @param string $LogsetId CLS日志集ID
     * @param string $TopicId CLS日志主题ID
     * @param string $TopicRegion topic所在region，默认为集群当前region
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }
    }
}
