<?php
/**
 * @desc 使用命名空间
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 18:05
 */

require 'name_space.php';
require 'name_space_2.php';

function get_name () {
    return '全局';
}

class User {
    public $name = '全局';
}

// 测试三者的使用
echo \App\get_name() . PHP_EOL;
echo \App2\get_name() . PHP_EOL;
echo get_name() . PHP_EOL;