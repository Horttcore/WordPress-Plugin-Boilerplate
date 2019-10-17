<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda0abead8e31d461479b146854ae5396
{
    public static $files = array (
        '0574455ed43b1227e38b82debfca07b6' => __DIR__ . '/../..' . '/inc/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RalfHortt\\WordPressPluginBoilerplate\\' => 37,
        ),
        'H' => 
        array (
            'Horttcore\\Plugin\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RalfHortt\\WordPressPluginBoilerplate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Horttcore\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/horttcore/wp-plugin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda0abead8e31d461479b146854ae5396::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda0abead8e31d461479b146854ae5396::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
