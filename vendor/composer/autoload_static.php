<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8d98bd859e6758ab70c980824acd146
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'habibullinrustam\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'habibullinrustam\\' => 
        array (
            0 => __DIR__ . '/..' . '/habibullinrustam',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8d98bd859e6758ab70c980824acd146::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8d98bd859e6758ab70c980824acd146::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
