<?php
/**
 * @desc 使用命名空间
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 18:05
 */

require 'name_space.php';
require 'name_space_2.php';
require 'lib/lib_name_space.php';

require 'dir_a/index.php';
require 'dir_b/index.php';

function get_name () {
    return '全局';
}

class User {
    public static $name = '全局';
}

// 测试三者的使用
echo \App\get_name() . PHP_EOL;         // -> App
echo \App2\get_name() . PHP_EOL;        // -> App2
echo get_name() . PHP_EOL;              // -> 全局
echo \get_name() . PHP_EOL;             // -> 全局

echo PHP_EOL;
echo \App\User::$name . PHP_EOL;        // -> App
echo \App2\User::$name . PHP_EOL;       // -> App2
echo User::$name . PHP_EOL;             // -> 全局
echo \User::$name . PHP_EOL;            // -> 全局

echo PHP_EOL;
echo \App\lib\get_name() . PHP_EOL;

/**
 * 不同文件下的相同命名空间冲突
 */
echo PHP_EOL;
echo \App\dir_x\get_name() . PHP_EOL;
