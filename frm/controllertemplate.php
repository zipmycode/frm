<?php
namespace frm;

abstract class ControllerTemplate extends Controller {
    
    public $template = 'template';
    
    public $auto_render = TRUE;
    
    public function before()
    {
        parent::before();

        if ($this->auto_render === TRUE)
        {
            $this->template = View::factory($this->template);
        }
    }

    public function after()
    {
        if ($this->auto_render === TRUE)
        {
            echo $this->template->render();
        }

        parent::after();
    }
    
}