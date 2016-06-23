<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4267cd0da015edc1ae786eff615a2e5f
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'niklaslu\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'niklaslu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4267cd0da015edc1ae786eff615a2e5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4267cd0da015edc1ae786eff615a2e5f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
