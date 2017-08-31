# 使用

1. 非限定命名使用
2. 限定命名使用
3. 完全限定名称使用

- 类比与文件系统
    1. 在当前目录下直接使用文件(当前路径) `vim 123.txt`
    2. 在当前目录下的文件夹中使用文件(相对路径) `vim dir_a/123.txt`
    3. 在根目录下的访问(绝对路径) `vim /data/wwwroot/dir/123.txt`
- 命名空间中使用
    1. 在当前命名空间下使用 `get_name()`
    2. 使用子命名空间下的文件 `lib\get_name()`
    3. 相对于根目录下的访问 `\App\lib\get_name()`