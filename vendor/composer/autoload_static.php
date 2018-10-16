<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dec3d4b78a55b432e4ac63ad4cf40e6
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'duzun\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'duzun\\' => 
        array (
            0 => __DIR__ . '/..' . '/duzun/hquery/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'h' => 
        array (
            'hQuery' => 
            array (
                0 => __DIR__ . '/..' . '/duzun/hquery/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dec3d4b78a55b432e4ac63ad4cf40e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dec3d4b78a55b432e4ac63ad4cf40e6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0dec3d4b78a55b432e4ac63ad4cf40e6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
