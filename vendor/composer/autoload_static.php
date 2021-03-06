<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc601ed79b1519aa828194e34da9fc881
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'P' => 
        array (
            'PDepend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'PDepend\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdepend/pdepend/src/main/php/PDepend',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPMD\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpmd/phpmd/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc601ed79b1519aa828194e34da9fc881::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc601ed79b1519aa828194e34da9fc881::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc601ed79b1519aa828194e34da9fc881::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
