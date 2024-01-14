<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite5ee81a332ab86971d332d4b37b6b0aa
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

        spl_autoload_register(array('ComposerAutoloaderInite5ee81a332ab86971d332d4b37b6b0aa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite5ee81a332ab86971d332d4b37b6b0aa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite5ee81a332ab86971d332d4b37b6b0aa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
