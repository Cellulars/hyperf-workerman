

# Hyperf + Workerman 框架项目



## 环境要求

 - PHP >= 7.2

 - Swoole PHP extension >= 4.4，and Disabled `Short Name`

 - OpenSSL PHP extension

 - JSON PHP extension

 - PDO PHP extension （If you need to use MySQL Client）

 - Redis PHP extension （If you need to use Redis Client）

 - Protobuf PHP extension （If you need to use gRPC Server of Client）

   

## 快速安装
进入项目根目录，执行  `./install.sh`





##  普通安装

1.在项目根目录下，执行  `composer install` 安装Hyperf依赖库，并会在项目根目录生成 vendor 文件夹存放composer加载的包。

2.进入 workerman 目录下执行  `composer install` 安装Workerman依赖库，并在下目录生成 vendor 文件夹存放composer加载的包。






## 项目启动

**一.启动Hyperf程序**

1.在项目根目录下，执行  `php bin/hyperf.php server:watch` 命令启动项目，即Watcher热更新插件启动。

2.将在端口“9501”上启动cli-server，并将其绑定到所有网络接口。可访问 http://localhost:9501/ 在浏览器打开。



**二.启动Workerman程序**

1.进入workerman文件夹，执行 `php start.php start`命令启动。

