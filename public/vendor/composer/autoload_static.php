<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfac7dee91137c2dbddb20c2ee7c5f329
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfac7dee91137c2dbddb20c2ee7c5f329::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfac7dee91137c2dbddb20c2ee7c5f329::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfac7dee91137c2dbddb20c2ee7c5f329::$classMap;

        }, null, ClassLoader::class);
    }
}
