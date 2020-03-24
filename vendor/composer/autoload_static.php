<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit026add5e71dc29effeafcacfe574dcbe
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit026add5e71dc29effeafcacfe574dcbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit026add5e71dc29effeafcacfe574dcbe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
