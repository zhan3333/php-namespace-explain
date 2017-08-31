<?php
/**
 * @desc 全局空间
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 17:37
 */

/**
 * 没有定义命名空间的文件，属于全局空间
 * 受空间影响的包括 常量、函数、类
 * 全局空间使用一个 \  表示，通常在使用时可以省略
 * 存在的目的:
 *  1. 定义根空间
 *  2. 兼容旧版本中无命名空间的写法
 */

// 全局空间中，定义一个类
class User
{

}

// 全局空间中，定义一个函数
function get_name () {
    return 'test';
}

// 全局空间中，赋值一个变量
$name = 'test';

// 全局中，new一个对象
$user = new User();

// 全局中，调用一个函数
get_name();
// 不忽略全局标识
\get_name();

// 全局中，使用一个变量
echo $name;
// 不忽略全局标识
// 无

// 全局中，使用一个内置函数
echo strlen($name);
// 不忽略全局标识
\strlen($name);

// 全局中，使用一个内置变量
echo PHP_EOL;
// 不忽略全局标识
echo \PHP_EOL;

// 全局中，使用一个内置类
$e = new Exception();
// 不忽略
$e = new \Exception();