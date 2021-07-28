<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f209f7ced3401aa64440b39a70b9ae0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f209f7ced3401aa64440b39a70b9ae0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f209f7ced3401aa64440b39a70b9ae0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f209f7ced3401aa64440b39a70b9ae0::$classMap;

        }, null, ClassLoader::class);
    }
}