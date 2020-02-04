<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e09948d45f04153430337468d88e771
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit6e09948d45f04153430337468d88e771' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit6e09948d45f04153430337468d88e771' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6e09948d45f04153430337468d88e771::$classMap;

        }, null, ClassLoader::class);
    }
}
