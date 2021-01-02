<?php

namespace App\Controller;


class front
{
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
        $this->title = "Bienvenue !";
        $this->content = $this->renderer("../Src/Vue/home.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }
}
