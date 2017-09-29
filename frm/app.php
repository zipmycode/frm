<?php
namespace frm;

class App {
    
    public static $version = '0.1';
    public static $author = 'klimkin artur, skype:smlab.pvl';
    
    public $config = NULL;
    
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }
    
    public function run()
    {
        $route = new Route($this->config);
        $route->process();
    }
    
}