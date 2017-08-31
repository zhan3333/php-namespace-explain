<?php
/**
 * @desc 命名空间讲解
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/31 17:50
 */

/**
 * 1. 命名空间的概念
 *  命名空间类似于文件夹的存在， 我们文件夹中，有根目录 / ，有文件夹名，有层次关系
 *  同样的，命名空间有全局空间相当于根目录，文件夹名相当于命名空间。
 * 2. 为什么要有命名空间
 *  1. 解决文件命名冲突的问题
 *  2. 解决类名、方法名、常量名冲突的问题
 * 3. 如何定义命名空间
 *  1. 使用关键字 namespace
 *  2. 使用namespace时，前面不允许出现除了declare之外的语句
 */

/**
 * 接下来我们定义两个文件，空间分别为 App App2
 */

// 定义命名空间
namespace App;

function get_name () {
    return 'App';
}

class User {
    public $name = 'App';
}
