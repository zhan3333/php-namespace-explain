<?php
/**
 * @desc 命名空间使用
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 18:19
 */
namespace App3;

// 导入 App空间
require 'name_space.php';

/**
 * 使用方式
 * 1. 非命名空间: 无空间名称
 * 2. 限定命名:  非 \ 开头，但是带有空间名称
 * 3. 完全限定命名： \ 开头的使用
 */

// 定义一个函数

function get_name () {
    return 'App2';
}

// 非命名空间调用
echo get_name();

// 限定名称
echo \get_name();

// 完全限定
echo \App\get_name();
echo \App3\get_name();