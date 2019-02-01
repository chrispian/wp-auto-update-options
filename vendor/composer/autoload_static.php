<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a618ec503473bd4ed431f3faace4911
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CHB_Auto_Update_Settings_Manager\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CHB_Auto_Update_Settings_Manager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CHB_Auto_Update_Settings_Manager\\Core' => __DIR__ . '/../..' . '/src/Core.php',
        'CHB_Auto_Update_Settings_Manager\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'CHB_Auto_Update_Settings_Manager\\Options' => __DIR__ . '/../..' . '/src/Options.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a618ec503473bd4ed431f3faace4911::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a618ec503473bd4ed431f3faace4911::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a618ec503473bd4ed431f3faace4911::$classMap;

        }, null, ClassLoader::class);
    }
}