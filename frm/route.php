<?php
namespace frm;

class Route {
    
    public $config = NULL;
    
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }
    
    public function process()
    {
        $controller_name = $this->config['default_route'][0];    
        $action_name = $this->config['default_route'][1];
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($url[1])) 
        {
            $controller_name = $url[1];
        }
        if (!empty($url[2]))
        {
            $action_name = $url[2];
        }
        
        $arguments_list = [];
        for($i=3;$i<=count($url);$i++)
        {
            if ( ! empty($url[$i]))
            {
                $arguments_list[] = $url[$i];
            }
        }
        
        if (file_exists(APP.'controller'.DIRECTORY_SEPARATOR.$controller_name.EXT))
        {
            require_once APP.'controller'.DIRECTORY_SEPARATOR.$controller_name.EXT;
        }
        $controller_name = $this->config['app_namespace'].'\controller\Controller_' . ucfirst($controller_name);
        
        $controller = new $controller_name();
        return $controller->run($action_name, $arguments_list);
    }
    
}