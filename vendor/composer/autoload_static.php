<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0c7891f51b542ec7d9a0e321e04ed56
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0c7891f51b542ec7d9a0e321e04ed56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0c7891f51b542ec7d9a0e321e04ed56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0c7891f51b542ec7d9a0e321e04ed56::$classMap;

        }, null, ClassLoader::class);
    }
}
