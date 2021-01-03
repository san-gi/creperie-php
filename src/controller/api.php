<?php

namespace App\controller;

class api{
    public $title;
    public $content;
    public $render;
    public $user;
    public function __construct()
    {
        if(isset($_SESSION["user"]))
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
        else
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");


















        $this->title = "salut";
        $this->content = $this->renderer("../Src/Vue/404.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
    }


    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }
}