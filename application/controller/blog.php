<?php
namespace app\controller;
use frm\ControllerTemplate;
use frm\View;
use frm\Model;
use qqUploader;

class Controller_Blog extends ControllerTemplate {
    
    public function action_list()
    {
        $model = Model::factory('blog');
        $items = $model->find_all();
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->auto_render = FALSE;
            echo View::factory('blog/list')->set('items', $items);
            return;
        }
        
        $this->template->content = View::factory('blog/list')
            ->set('items', $items);
    }
    
    public function action_view($id)
    {
        $model = Model::factory('blog');
        $item = $model->find($id);
        
        $this->template->content = View::factory('blog/view')
            ->set('item', $item);
    }
    
    public function action_add()
    {
        $this->auto_render = FALSE;
        if( ! empty($_POST))
        {
            $values = [
                'name' => $_POST['name'],
                'text' => $_POST['text'],
            ];
            // filename
            if(!empty($_POST['file']))
            {
                $values['file'] = $_POST['file'];
            }
            $model = Model::factory('blog');
            if($item = $model->save($values))
            {
                echo 'Успешно';
            }
            else
            {
                echo 'Ошибка';
            }
            return;
        }
        
        echo View::factory('blog/add');
    }
    
    public function action_edit($id)
    {
        $this->auto_render = FALSE;
        
        $model = Model::factory('blog');
        $item = $model->find($id);
        
        if( ! empty($_POST))
        {
            $values = [
                'name' => $_POST['name'],
                'text' => $_POST['text'],
            ];
            // filename
            if(!empty($_POST['file']))
            {
                $values['file'] = $_POST['file'];
            }
            $model = Model::factory('blog');
            if($item = $model->save($values, $item->id))
            {
                echo 'Успешно';
            }
            else
            {
                echo 'Ошибка';
            }
            return;
        }
        
        echo View::factory('blog/edit')
            ->set('item', $item);
    }
    
    public function action_delete($id)
    {
        $model = Model::factory('blog');
        $item = $model->delete($id);
        
        header('Location: /blog/list');
    }
    
    public function action_upload()
    {
        $this->auto_render = FALSE;
        
        if (file_exists(FRM.'vendor'.DIRECTORY_SEPARATOR.'upload'.EXT))
        {
            require_once FRM.'vendor'.DIRECTORY_SEPARATOR.'upload'.EXT;
        }
        
        // list of valid extensions, ex. array("jpeg", "xml", "bmp")
        $allowedExtensions = array();
        // max file size in bytes
        $sizeLimit = 10 * 1024 * 1024;

        $uploader = new qqUploader\qqFileUploader($allowedExtensions, $sizeLimit);

        // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
        $result = $uploader->handleUpload(UPLOADS);

        // to pass data through iframe you will need to encode all html tags
        echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
    }
    
}