<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b6a00ebd2eb5cb1197d1565ddf7108d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eway\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eway\\' => 
        array (
            0 => __DIR__ . '/..' . '/eway/eway-rapid-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b6a00ebd2eb5cb1197d1565ddf7108d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b6a00ebd2eb5cb1197d1565ddf7108d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
