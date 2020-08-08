<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e26fdd783dee225ef4489468023b8bf
{
    public static $files = array (
        '02275ea99e7bdb89d5cb119ae125ae03' => __DIR__ . '/../..' . '/Core/Utils/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e26fdd783dee225ef4489468023b8bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e26fdd783dee225ef4489468023b8bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}