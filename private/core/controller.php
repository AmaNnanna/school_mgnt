<?php

/**
 * Main Controller class
 */
class Controller
{
    public function view($view, $data = [])
    {
        //code...
        extract($data);

        if (file_exists("../private/views/" . $view . ".php")) {
            require("../private/views/" . $view . ".php");
        } else {
            require("../private/views/404.php");
        }
    }

    public function load_model($model)
    {
        if (file_exists("../private/models/" . ucfirst($model) . ".php")) {
            require("../private/models/" . ucfirst($model) . ".php");
            return $model = new $model();
        }
        return false;
    }
}