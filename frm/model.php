<?php
namespace frm;

abstract class Model {

	public static function factory($name)
	{
        $config = require(APP.'config/app.php');
        
		$model_name = strtolower($name);

        if (file_exists(APP.'model'.DIRECTORY_SEPARATOR.$model_name.EXT))
        {
            require_once APP.'model'.DIRECTORY_SEPARATOR.$model_name.EXT;
        }
        $model_name = $config['app_namespace'].'\model\Model_' . ucfirst($model_name);
        
		return new $model_name();
	}

}
