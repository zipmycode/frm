<?php
namespace frm;

abstract class Controller {
    
    public function before()
    {
        
    }

    public function after()
    {
        
    }
    
    public function run($action, $args = [])
    {
        $this->before();

        $action = 'action_'.$action;
        
        // fix
        if (strpos($action, '?'))
        {
            $exploded_action = explode('?', $action);
            $action = $exploded_action[0];
        }
        
        if ( ! method_exists($this, $action))
        {
            throw new \Exception('The requested URL '.$action.' was not found on this server.',404);
        }

        //$result = $this->{$action}();
        $result = call_user_func_array([$this, $action], $args);

        $this->after();

        return $result;
    }
    
}