<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit479367cf957017ee3355b86749c880cb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TinyComputer\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TinyComputer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit479367cf957017ee3355b86749c880cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit479367cf957017ee3355b86749c880cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
