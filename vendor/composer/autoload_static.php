<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ca66e9ba97e96341d5be631eeabb138
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ca66e9ba97e96341d5be631eeabb138::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ca66e9ba97e96341d5be631eeabb138::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ca66e9ba97e96341d5be631eeabb138::$classMap;

        }, null, ClassLoader::class);
    }
}