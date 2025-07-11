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
 * EnableEventPersistence请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getLogsetId() 获取cls服务的logsetID
 * @method void setLogsetId(string $LogsetId) 设置cls服务的logsetID
 * @method string getTopicId() 获取cls服务的topicID
 * @method void setTopicId(string $TopicId) 设置cls服务的topicID
 * @method string getTopicRegion() 获取topic所在地域，默认为集群所在地域
 * @method void setTopicRegion(string $TopicRegion) 设置topic所在地域，默认为集群所在地域
 */
class EnableEventPersistenceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string cls服务的logsetID
     */
    public $LogsetId;

    /**
     * @var string cls服务的topicID
     */
    public $TopicId;

    /**
     * @var string topic所在地域，默认为集群所在地域
     */
    public $TopicRegion;

    /**
     * @param string $ClusterId 集群ID
     * @param string $LogsetId cls服务的logsetID
     * @param string $TopicId cls服务的topicID
     * @param string $TopicRegion topic所在地域，默认为集群所在地域
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
