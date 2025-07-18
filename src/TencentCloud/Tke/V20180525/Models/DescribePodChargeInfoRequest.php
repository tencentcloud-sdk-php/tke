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
 * DescribePodChargeInfo请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID。TKE 集群可通过 [DescribeClusters](https://cloud.tencent.com/document/api/457/31862) 接口返回值中的ClusterId获取。
 * @method void setClusterId(string $ClusterId) 设置集群 ID。TKE 集群可通过 [DescribeClusters](https://cloud.tencent.com/document/api/457/31862) 接口返回值中的ClusterId获取。
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getName() 获取Pod名称
 * @method void setName(string $Name) 设置Pod名称
 * @method array getUids() 获取Pod的Uid，可以通过Uids 来批量查询，也可以通过 Namespace 和 Name 来查询某个 Pod 的计费信息。Uids 不传时，Namespace 和 Name 必须同时传。
 * @method void setUids(array $Uids) 设置Pod的Uid，可以通过Uids 来批量查询，也可以通过 Namespace 和 Name 来查询某个 Pod 的计费信息。Uids 不传时，Namespace 和 Name 必须同时传。
 */
class DescribePodChargeInfoRequest extends AbstractModel
{
    /**
     * @var string 集群 ID。TKE 集群可通过 [DescribeClusters](https://cloud.tencent.com/document/api/457/31862) 接口返回值中的ClusterId获取。
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string Pod名称
     */
    public $Name;

    /**
     * @var array Pod的Uid，可以通过Uids 来批量查询，也可以通过 Namespace 和 Name 来查询某个 Pod 的计费信息。Uids 不传时，Namespace 和 Name 必须同时传。
     */
    public $Uids;

    /**
     * @param string $ClusterId 集群 ID。TKE 集群可通过 [DescribeClusters](https://cloud.tencent.com/document/api/457/31862) 接口返回值中的ClusterId获取。
     * @param string $Namespace 命名空间
     * @param string $Name Pod名称
     * @param array $Uids Pod的Uid，可以通过Uids 来批量查询，也可以通过 Namespace 和 Name 来查询某个 Pod 的计费信息。Uids 不传时，Namespace 和 Name 必须同时传。
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uids",$param) and $param["Uids"] !== null) {
            $this->Uids = $param["Uids"];
        }
    }
}
