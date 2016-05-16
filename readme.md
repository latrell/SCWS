# SCWS

该项目封装 [简易中文分词系统](https://github.com/hightman/scws) 为 Laravel 拓展包。

## 安装

```
composer require latrell/scws dev-master
```

更新你的依赖包 ```composer update``` 或者全新安装 ```composer install```。

## 使用

要使用本服务提供者，你必须自己注册服务提供者到Laravel服务提供者列表中。

打开配置文件 `config/app.php`。

找到key为 `providers` 的数组，在数组中添加服务提供者。

```php
    'providers' => [
        // ...
        Latrell\Scws\ScwsServiceProvider::class,
    ]
```

找到key为 `aliases` 的数组，在数组中注册Facades。

```php
    'aliases' => [
        // ...
        'Scws' => Latrell\Scws\Facades\Scws::class,
    ]
```

运行 `php artisan vendor:publish` 命令，发布配置文件到你的项目中。
