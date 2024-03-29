<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60145119133f41619aec171fb47fb2b6
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
        '5e46f7b4b44229f5f9ba72e447019a42' => __DIR__ . '/../..' . '/function.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Counter' => __DIR__ . '/../..' . '/classes/Counter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit60145119133f41619aec171fb47fb2b6::$classMap;

        }, null, ClassLoader::class);
    }
}
