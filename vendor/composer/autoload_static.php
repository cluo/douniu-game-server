<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71b817d92dfa3443e2c1c2ac3d79421f
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BGame\\Douniu\\' => 13,
            'BGameServer\\Douniu\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BGame\\Douniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/lizhibin/douniu-game/lib',
        ),
        'BGameServer\\Douniu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/game-server',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71b817d92dfa3443e2c1c2ac3d79421f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71b817d92dfa3443e2c1c2ac3d79421f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}