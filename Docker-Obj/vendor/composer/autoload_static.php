<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit616281fb1babab802c0718e4fdcd44db
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Machines\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Machines\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit616281fb1babab802c0718e4fdcd44db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit616281fb1babab802c0718e4fdcd44db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
