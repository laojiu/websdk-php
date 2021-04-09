<?php

/**
 * Copyright 1999-2021 iFLYTEK Corporation

 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace IFlytek\Xfyun\Speech\Constants;

/**
 * 语音转写常量
 *
 * @author guizheng@iflytek.com
 */
class LfasrConstants
{
    public const URI_PREPARE = 'https://raasr.xfyun.cn/api/prepare';
    public const URI_UPLOAD = 'https://raasr.xfyun.cn/api/upload';
    public const URI_MERGE = 'https://raasr.xfyun.cn/api/merge';
    public const URI_GET_PROGRESS = 'https://raasr.xfyun.cn/api/getProgress';
    public const URI_GET_RESULT = 'https://raasr.xfyun.cn/api/getResult';
    public const SLICE_PIECE_SIZE = 1024 * 1024 * 10;
    public const ORIGIN_SLICE_ID = 'aaaaaaaaaa';
}
