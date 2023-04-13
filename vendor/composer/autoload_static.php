<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a719dcfadcc8e5e1ca8e3f03bc31557
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a719dcfadcc8e5e1ca8e3f03bc31557::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a719dcfadcc8e5e1ca8e3f03bc31557::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit4a719dcfadcc8e5e1ca8e3f03bc31557::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit4a719dcfadcc8e5e1ca8e3f03bc31557::$classMap;

        }, null, ClassLoader::class);
    }
}
