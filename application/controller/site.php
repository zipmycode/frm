<?php
namespace app\controller;
use frm\ControllerTemplate;

class Controller_Site extends ControllerTemplate {
    
    public function action_index()
    {
        $this->template->content = 'Главная страница.&nbsp;<a href="/blog/list">Перейти в блог</a>';
    }
    
}