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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAsrVocab请求参数结构体
 *
 * @method string getVocabId() 获取热词表ID
 * @method void setVocabId(string $VocabId) 设置热词表ID
 * @method string getName() 获取热词表名称，长度在1-255之间
 * @method void setName(string $Name) 设置热词表名称，长度在1-255之间
 * @method array getWordWeights() 获取词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或100，数组长度不大于1000 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
 * @method void setWordWeights(array $WordWeights) 设置词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或100，数组长度不大于1000 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
 * @method string getWordWeightStr() 获取词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。
当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略
 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
 * @method void setWordWeightStr(string $WordWeightStr) 设置词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。
当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略
 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
 * @method string getDescription() 获取热词表描述，长度在0-1000之间
 * @method void setDescription(string $Description) 设置热词表描述，长度在0-1000之间
 */
class UpdateAsrVocabRequest extends AbstractModel
{
    /**
     * @var string 热词表ID
     */
    public $VocabId;

    /**
     * @var string 热词表名称，长度在1-255之间
     */
    public $Name;

    /**
     * @var array 词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或100，数组长度不大于1000 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
     */
    public $WordWeights;

    /**
     * @var string 词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。
当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略
 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
     */
    public $WordWeightStr;

    /**
     * @var string 热词表描述，长度在0-1000之间
     */
    public $Description;

    /**
     * @param string $VocabId 热词表ID
     * @param string $Name 热词表名称，长度在1-255之间
     * @param array $WordWeights 词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或100，数组长度不大于1000 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
     * @param string $WordWeightStr 词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。
当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略
 (注意：如果仅更新热词表名称或者描述字段，请求不用带本参数）
     * @param string $Description 热词表描述，长度在0-1000之间
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
        if (array_key_exists("VocabId",$param) and $param["VocabId"] !== null) {
            $this->VocabId = $param["VocabId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WordWeights",$param) and $param["WordWeights"] !== null) {
            $this->WordWeights = [];
            foreach ($param["WordWeights"] as $key => $value){
                $obj = new HotWord();
                $obj->deserialize($value);
                array_push($this->WordWeights, $obj);
            }
        }

        if (array_key_exists("WordWeightStr",$param) and $param["WordWeightStr"] !== null) {
            $this->WordWeightStr = $param["WordWeightStr"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
