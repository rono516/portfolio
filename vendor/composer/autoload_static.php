<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ba54b6e1f7725556f8d7e1a30ffc2df
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ba54b6e1f7725556f8d7e1a30ffc2df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ba54b6e1f7725556f8d7e1a30ffc2df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ba54b6e1f7725556f8d7e1a30ffc2df::$classMap;

        }, null, ClassLoader::class);
    }
}
