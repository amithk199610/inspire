<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fdd7768df04a4ef0eff1df8a0323fac
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amjithk\\Inspire\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amjithk\\Inspire\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fdd7768df04a4ef0eff1df8a0323fac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fdd7768df04a4ef0eff1df8a0323fac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fdd7768df04a4ef0eff1df8a0323fac::$classMap;

        }, null, ClassLoader::class);
    }
}