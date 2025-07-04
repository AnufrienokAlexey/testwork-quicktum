<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa254671f9cb04f6b0ba2139b0da9843
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'T' => 
        array (
            'Test\\PhpDevCommunity\\' => 21,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'PhpDevCommunity\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Test\\PhpDevCommunity\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdevcommunity/php-dotenv/tests',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'PhpDevCommunity\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdevcommunity/php-dotenv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa254671f9cb04f6b0ba2139b0da9843::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa254671f9cb04f6b0ba2139b0da9843::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa254671f9cb04f6b0ba2139b0da9843::$classMap;

        }, null, ClassLoader::class);
    }
}
