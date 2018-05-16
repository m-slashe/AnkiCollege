<?php


function loadClasses($className)
{
    $filePath = ABSPATH . 'src' . DS . 'classes' . DS . str_replace('\\', DS, $className) . '.php';
    
    if(file_exists($filePath)){
        require_once $filePath;
    }
}

function loadClassesDAO($className)
{
    $filePath = ABSPATH . 'src' . DS . 'classes' . DS . 'DAO' . DS . str_replace('\\', DS, $className) . '.php';
    
    if(file_exists($filePath)){
        require_once $filePath;
    }
}

spl_autoload_register('loadClasses');
spl_autoload_register('loadClassesDAO');