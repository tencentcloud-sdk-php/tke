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
 * SetNodePoolNodeProtection请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getNodePoolId() 获取节点池id
 * @method void setNodePoolId(string $NodePoolId) 设置节点池id
 * @method array getInstanceIds() 获取节点id
 * @method void setInstanceIds(array $InstanceIds) 设置节点id
 * @method boolean getProtectedFromScaleIn() 获取节点是否需要移出保护
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) 设置节点是否需要移出保护
 */
class SetNodePoolNodeProtectionRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 节点池id
     */
    public $NodePoolId;

    /**
     * @var array 节点id
     */
    public $InstanceIds;

    /**
     * @var boolean 节点是否需要移出保护
     */
    public $ProtectedFromScaleIn;

    /**
     * @param string $ClusterId 集群id
     * @param string $NodePoolId 节点池id
     * @param array $InstanceIds 节点id
     * @param boolean $ProtectedFromScaleIn 节点是否需要移出保护
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProtectedFromScaleIn",$param) and $param["ProtectedFromScaleIn"] !== null) {
            $this->ProtectedFromScaleIn = $param["ProtectedFromScaleIn"];
        }
    }
}
