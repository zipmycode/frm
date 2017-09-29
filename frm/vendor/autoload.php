<?php

function __autoload($class_name)
{
    /*$directories = array(
        'frm/classes/',
        'application/controller/',
        'application/model/',
    );
   
    foreach($directories as $directory)
    {
        $class_name = strtolower($class_name);
        var_dump(file_exists($directory.$class_name.EXT), $directory.$class_name.EXT);
        if(file_exists($directory.$class_name.EXT))
        {
            require_once($directory.$class_name.EXT);
            return TRUE;
        }           
    }*/
    $class_name = strtolower($class_name);
    //var_dump($class_name.EXT);
    if(file_exists($class_name.EXT))
    {
        require_once($class_name.EXT);
        return TRUE;
    }
}