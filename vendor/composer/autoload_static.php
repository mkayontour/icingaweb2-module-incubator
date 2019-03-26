<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafa15525fc8a2b24be10cfb4694d7e70
{
    public static $files = array (
        'a2c78434f64e5f5ed402f42eee19c025' => __DIR__ . '/..' . '/ipl/stdlib/src/functions_include.php',
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ipl\\Stdlib\\' => 11,
            'ipl\\Html\\' => 9,
        ),
        'g' => 
        array (
            'gipfl\\Translation\\' => 18,
            'gipfl\\SystemD\\' => 14,
            'gipfl\\Protocol\\NetString\\' => 25,
            'gipfl\\Protocol\\JsonRpc\\' => 23,
            'gipfl\\Protocol\\Generic\\' => 23,
            'gipfl\\Protocol\\Exception\\' => 25,
            'gipfl\\LinuxHealth\\' => 18,
            'gipfl\\IcingaWeb2\\' => 17,
            'gipfl\\Cli\\' => 10,
            'gipfl\\Calendar\\' => 15,
        ),
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ipl\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/stdlib/src',
        ),
        'ipl\\Html\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/html/src',
        ),
        'gipfl\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/translation/src',
        ),
        'gipfl\\SystemD\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/systemd/src',
        ),
        'gipfl\\Protocol\\NetString\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol-netstring/src',
        ),
        'gipfl\\Protocol\\JsonRpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol-jsonrpc/src',
        ),
        'gipfl\\Protocol\\Generic\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol/src/Generic',
        ),
        'gipfl\\Protocol\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/protocol/src/Exception',
        ),
        'gipfl\\LinuxHealth\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/linux-health/src',
        ),
        'gipfl\\IcingaWeb2\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/icingaweb2/src',
        ),
        'gipfl\\Cli\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/cli/src',
        ),
        'gipfl\\Calendar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipfl/calendar/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafa15525fc8a2b24be10cfb4694d7e70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafa15525fc8a2b24be10cfb4694d7e70::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitafa15525fc8a2b24be10cfb4694d7e70::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}