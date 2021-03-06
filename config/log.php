<?php

// +----------------------------------------------------------------------
// | framework
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://framework.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/framework
// +----------------------------------------------------------------------

return [
    // 设置日志文件名
    'single'      => 'single',
    // 最多保留50个文件
    'max_files'   => 50,
    // 日志每10兆分割文件
    'file_size'   => 10485760,
    // 设置记录目录的类型
    // 'level'       => ['error'],
    // 日志类型分别写入文件
    'apart_level' => ['error', 'sql'],
];