<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3ff9bffd92dfccc5d25d0afd48162ed
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3ff9bffd92dfccc5d25d0afd48162ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3ff9bffd92dfccc5d25d0afd48162ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
