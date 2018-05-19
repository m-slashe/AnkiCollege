<?php


function loadClasses($className)
{
    $filePath = ABSPATH . 'src' . DS . 'classes' . DS . str_replace('\\', DS, $className) . '.php';
    
    if(!file_exists($filePath))
    {
        throw new Exception( "File path '{$filePath}' not found.");
    }
    
    require_once $filePath;
}

spl_autoload_register('loadClasses');