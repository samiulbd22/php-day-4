<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cf6c68ef45dfe3cf3d73fba01c07cde
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3cf6c68ef45dfe3cf3d73fba01c07cde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3cf6c68ef45dfe3cf3d73fba01c07cde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3cf6c68ef45dfe3cf3d73fba01c07cde::$classMap;

        }, null, ClassLoader::class);
    }
}