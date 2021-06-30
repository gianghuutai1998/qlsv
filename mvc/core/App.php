<?php
class App
{
    protected $controller = "Home";
    protected $action = "Default";
    protected $params=[];

    function __construct()
    {
        $arr =  $this->urlProcess();

        $this->controllerProcess($arr);
        $this->actionProcess($arr);
        $this->paramsProcess($arr);
        
        call_user_func_array([$this->controller, $this->action], $this->params);    
    }
    function urlProcess()
    {
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"],"/")));
        }
    }
    
    function controllerProcess(&$url)   
    {  
        $controller_uri  = "";
        if(isset($url[0])) {
            $controller_uri = sprintf("mvc/controllers/%s.php", $url[0]);
        }
        
        if(file_exists($controller_uri)){
            $this->controller = $url[0];
            array_shift($url);
        }
        $controller_uri = sprintf("mvc/controllers/%s.php", $this->controller);
        
        require_once sprintf($controller_uri);
        $this->controller = new $this->controller;
    }
    function actionProcess(&$url)
    {     
        if(!isset($url[0])) return;
        if(method_exists($this->controller, $url[0])){
            $this->action = $url[0];
            array_shift($url); 
        }
          
    }
    function paramsProcess($url)
    {
        if(!isset($url[0])) return;
        $this->params = array_slice($url, 0);
    }
    
}
?>