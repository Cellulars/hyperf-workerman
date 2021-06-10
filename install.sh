#根目录
directory=$(cd "$(dirname "$0")";pwd);

echo "开始安装Hyperf相关composer依赖库...\n";
composer install;
echo "开始安装Workerman相关composer依赖库...\n";
cd $directory/workerman;
composer install;
cd $directory;
echo "安装完成...";
echo "执行 php bin/hyperf.php server:watch 命令启动项目。"
