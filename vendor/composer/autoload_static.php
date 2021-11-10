<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5abdaaf6477b1354a3e813e8290d9fba
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5abdaaf6477b1354a3e813e8290d9fba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5abdaaf6477b1354a3e813e8290d9fba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
