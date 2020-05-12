<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15ec33606ca4ea6f60b64214cbb16efa
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\Extensions\\Cache\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\Extensions\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGraphQL\\Extensions\\Cache\\AbstractCache' => __DIR__ . '/../..' . '/src/AbstractCache.php',
        'WPGraphQL\\Extensions\\Cache\\Backend\\AbstractBackend' => __DIR__ . '/../..' . '/src/Backend/AbstractBackend.php',
        'WPGraphQL\\Extensions\\Cache\\Backend\\FileSystem' => __DIR__ . '/../..' . '/src/Backend/FileSystem.php',
        'WPGraphQL\\Extensions\\Cache\\Backend\\OPCache' => __DIR__ . '/../..' . '/src/Backend/OPCache.php',
        'WPGraphQL\\Extensions\\Cache\\CacheManager' => __DIR__ . '/../..' . '/src/CacheManager.php',
        'WPGraphQL\\Extensions\\Cache\\CachedValue' => __DIR__ . '/../..' . '/src/CachedValue.php',
        'WPGraphQL\\Extensions\\Cache\\FieldCache' => __DIR__ . '/../..' . '/src/FieldCache.php',
        'WPGraphQL\\Extensions\\Cache\\MeasurePerformance' => __DIR__ . '/../..' . '/src/MeasurePerformance.php',
        'WPGraphQL\\Extensions\\Cache\\QueryCache' => __DIR__ . '/../..' . '/src/QueryCache.php',
        'WPGraphQL\\Extensions\\Cache\\Utils' => __DIR__ . '/../..' . '/src/Utils.php',
        'WPGraphQL\\Extensions\\Cache\\WPCLICommand' => __DIR__ . '/../..' . '/src/WPCLICommand.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15ec33606ca4ea6f60b64214cbb16efa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15ec33606ca4ea6f60b64214cbb16efa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15ec33606ca4ea6f60b64214cbb16efa::$classMap;

        }, null, ClassLoader::class);
    }
}
