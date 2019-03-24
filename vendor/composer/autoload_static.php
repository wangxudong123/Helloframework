<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4bd6f758a3b839e4031e4badafba7e5
{
    public static $classMap = array (
        'App\\controller\\index\\IndexController' => __DIR__ . '/../..' . '/App/controller/index/IndexController.class.php',
        'App\\model\\index\\IndexModel' => __DIR__ . '/../..' . '/App/model/index/IndexModel.class.php',
        'Core\\App' => __DIR__ . '/../..' . '/Core/App.class.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/Core/Controller.class.php',
        'Core\\Core' => __DIR__ . '/../..' . '/Core/Core.class.php',
        'Core\\Custom' => __DIR__ . '/../..' . '/Core/Custom.class.php',
        'Core\\Error' => __DIR__ . '/../..' . '/Core/Error.class.php',
        'Core\\Http\\Cookie' => __DIR__ . '/../..' . '/Core/Http/Cookie.class.php',
        'Core\\Http\\Request' => __DIR__ . '/../..' . '/Core/Http/Request.class.php',
        'Core\\Lib\\Filter' => __DIR__ . '/../..' . '/Core/lib/Filter.class.php',
        'Core\\Model' => __DIR__ . '/../..' . '/Core/Model.class.php',
        'Core\\RouteService' => __DIR__ . '/../..' . '/Core/RouteService.class.php',
        'Core\\Validate' => __DIR__ . '/../..' . '/Core/Validate.class.php',
        'Core\\db\\Db' => __DIR__ . '/../..' . '/Core/db/Db.class.php',
        'Core\\db\\Driver' => __DIR__ . '/../..' . '/Core/db/Driver.class.php',
        'Core\\db\\driver\\Mysql' => __DIR__ . '/../..' . '/Core/db/driver/Mysql.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita4bd6f758a3b839e4031e4badafba7e5::$classMap;

        }, null, ClassLoader::class);
    }
}
