<?php 
abstract class Controller{
    public function model($model)
    {
        $model_path = sprintf("mvc/models/%s.php",  $model);
        require_once $model_path;
        return new $model;
    }
    public function view($view, $data = [])
    {
        $view_path = sprintf("mvc/views/%s.php",   $view);
        require_once $view_path;

    }
}

?>