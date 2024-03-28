<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit853735dd17dce6c36cfca3d493deaa15
{
    public static $files = array (
        '7f55c0c8faca7d96e425512293db1ad1' => __DIR__ . '/../..' . '/includes/wp/wp-includes/formatting.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zigaform\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zigaform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Zigaform\\Admin\\List_data' => __DIR__ . '/../..' . '/includes/admin/class-admin-list.php',
        'Zigaform\\Template' => __DIR__ . '/../..' . '/includes/class-template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit853735dd17dce6c36cfca3d493deaa15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit853735dd17dce6c36cfca3d493deaa15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit853735dd17dce6c36cfca3d493deaa15::$classMap;

        }, null, ClassLoader::class);
    }
}
