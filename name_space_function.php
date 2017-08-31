<?php
/**
 * @desc 命名空间下函数的使用
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 18:13
 */

namespace App;

// 测试全局函数和自定义函数

/**
 * 定义一个函数
 * 函数使用 App\strlen()
 * @param $str
 * @return int
 */
function strlen ($str) {
    return \strlen($str) - 1;
}

$name = 'zhan';
echo \App\strlen($name) . PHP_EOL;
echo strlen($name) . PHP_EOL;
echo \strlen($name) . PHP_EOL;
