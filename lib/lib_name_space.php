<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/31
 * Time: 20:27
 */

/**
 * 约定
 * 1. 有一个根命名空间 \
 * 2. 有一个项目根命名空间 \App
 * 3. 根据文件系统中的目录，来设定命名空间
 */

namespace App\lib;

function get_name () {
    return 'App\lib';
}