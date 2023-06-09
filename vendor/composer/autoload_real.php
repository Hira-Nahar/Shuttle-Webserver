<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd1ea90b84c5ff08216bc6b0c89ddb0eb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd1ea90b84c5ff08216bc6b0c89ddb0eb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd1ea90b84c5ff08216bc6b0c89ddb0eb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd1ea90b84c5ff08216bc6b0c89ddb0eb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
