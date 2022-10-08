<?php

namespace iutnc\deefy\loader;

class Psr4ClassLoader{

    function __construct(string  $prefixe,string $chemin){
        $this->loadClass($chemin);
    }

    function loadClass($classname){
        $filename=str_replace('\\', DIRECTORY_SEPARATOR, $classname).'.php';
        print $filename;
        if (is_file($filename))
            require_once "Psr4ClassLoader.php";
    }

    function register(){
        spl_autoload_register('loadClass');
    }
}