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
 * 单句的详细识别结果，包含单个词的时间偏移，一般用于生成字幕的场景。
 *
 * @method string getFinalSentence() 获取单句最终识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalSentence(string $FinalSentence) 设置单句最终识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSliceSentence() 获取单句中间识别结果，使用空格拆分为多个词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSliceSentence(string $SliceSentence) 设置单句中间识别结果，使用空格拆分为多个词
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWrittenText() 获取口语转书面语结果，开启改功能才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrittenText(string $WrittenText) 设置口语转书面语结果，开启改功能才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartMs() 获取单句开始时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartMs(integer $StartMs) 设置单句开始时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndMs() 获取单句结束时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndMs(integer $EndMs) 设置单句结束时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWordsNum() 获取单句中词个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordsNum(integer $WordsNum) 设置单句中词个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWords() 获取单句中词详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWords(array $Words) 设置单句中词详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSpeechSpeed() 获取单句语速，单位：字数/秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置单句语速，单位：字数/秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpeakerId() 获取声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）
单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpeakerId(integer $SpeakerId) 设置声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）
单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEmotionalEnergy() 获取情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmotionalEnergy(float $EmotionalEnergy) 设置情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSilenceTime() 获取本句与上一句之间的静音时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSilenceTime(integer $SilenceTime) 设置本句与上一句之间的静音时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEmotionType() 获取情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmotionType(array $EmotionType) 设置情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWordResults() 获取关键词识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordResults(array $KeyWordResults) 设置关键词识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class SentenceDetail extends AbstractModel
{
    /**
     * @var string 单句最终识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalSentence;

    /**
     * @var string 单句中间识别结果，使用空格拆分为多个词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SliceSentence;

    /**
     * @var string 口语转书面语结果，开启改功能才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrittenText;

    /**
     * @var integer 单句开始时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartMs;

    /**
     * @var integer 单句结束时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndMs;

    /**
     * @var integer 单句中词个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordsNum;

    /**
     * @var array 单句中词详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Words;

    /**
     * @var float 单句语速，单位：字数/秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeechSpeed;

    /**
     * @var integer 声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）
单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpeakerId;

    /**
     * @var float 情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmotionalEnergy;

    /**
     * @var integer 本句与上一句之间的静音时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SilenceTime;

    /**
     * @var array 情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmotionType;

    /**
     * @var array 关键词识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordResults;

    /**
     * @param string $FinalSentence 单句最终识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SliceSentence 单句中间识别结果，使用空格拆分为多个词
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WrittenText 口语转书面语结果，开启改功能才有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartMs 单句开始时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndMs 单句结束时间（毫秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WordsNum 单句中词个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Words 单句中词详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SpeechSpeed 单句语速，单位：字数/秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpeakerId 声道或说话人 Id（请求中如果设置了 speaker_diarization或者ChannelNum为双声道，可区分说话人或声道）
单声道话者分离时不同的值代表不同的说话人； 8k双声道话者分离时speakerId的值为0代表左声道，值为1代表右声道。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EmotionalEnergy 情绪能量值，取值为音量分贝值/10。取值范围：[1,10]。值越高情绪越强烈。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SilenceTime 本句与上一句之间的静音时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EmotionType 情绪类型（可能为空，有2种情况 1、没有对应资源包；2、情绪跟语音效果相关，如果情绪不够强烈时可能无法识别）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWordResults 关键词识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FinalSentence",$param) and $param["FinalSentence"] !== null) {
            $this->FinalSentence = $param["FinalSentence"];
        }

        if (array_key_exists("SliceSentence",$param) and $param["SliceSentence"] !== null) {
            $this->SliceSentence = $param["SliceSentence"];
        }

        if (array_key_exists("WrittenText",$param) and $param["WrittenText"] !== null) {
            $this->WrittenText = $param["WrittenText"];
        }

        if (array_key_exists("StartMs",$param) and $param["StartMs"] !== null) {
            $this->StartMs = $param["StartMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }

        if (array_key_exists("WordsNum",$param) and $param["WordsNum"] !== null) {
            $this->WordsNum = $param["WordsNum"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new SentenceWords();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("SpeechSpeed",$param) and $param["SpeechSpeed"] !== null) {
            $this->SpeechSpeed = $param["SpeechSpeed"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("SilenceTime",$param) and $param["SilenceTime"] !== null) {
            $this->SilenceTime = $param["SilenceTime"];
        }

        if (array_key_exists("EmotionType",$param) and $param["EmotionType"] !== null) {
            $this->EmotionType = $param["EmotionType"];
        }

        if (array_key_exists("KeyWordResults",$param) and $param["KeyWordResults"] !== null) {
            $this->KeyWordResults = [];
            foreach ($param["KeyWordResults"] as $key => $value){
                $obj = new KeyWordResult();
                $obj->deserialize($value);
                array_push($this->KeyWordResults, $obj);
            }
        }
    }
}
