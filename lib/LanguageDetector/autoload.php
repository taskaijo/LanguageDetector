<?php
/**
 *  Autoloader function generated by crodas/Autoloader
 *
 *  https://github.com/crodas/Autoloader
 *
 *  This is a generated file, do not modify it.
 */

spl_autoload_register(function ($class) {
    /*
        This array has a map of (class => file)
    */

    // classes {{{
    static $classes = array (
  'languagedetector\\sortinterface' => '//SortInterface.php',
  'languagedetector\\ngramparser' => '//NGramParser.php',
  'languagedetector\\format' => '//Format.php',
  'languagedetector\\learn' => '//Learn.php',
  'languagedetector\\sort\\pagerank' => '/Sort/PageRank.php',
  'languagedetector\\formatinterface' => '//FormatInterface.php',
  'languagedetector\\detect' => '//Detect.php',
  'languagedetector\\config' => '//Config.php',
  'languagedetector\\format\\php' => '/Format/PHP.php',
  'languagedetector\\distance\\outofplace' => '/Distance/OutOfPlace.php',
  'languagedetector\\distanceinterface' => '//DistanceInterface.php',
);
    // }}}


    $class = strtolower($class);
    if (isset($classes[$class])) {

        if (!class_exists($class, false) && !interface_exists($class, false)) {

            require __DIR__  . $classes[$class];

        }
        return true;
    }

    return false;
});


