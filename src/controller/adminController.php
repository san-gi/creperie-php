<?php

namespace App\controller;

use App\Modéle\CrepeManager;

use App\Modéle\Crepe;

class adminController
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $crepes;
    public $url;

    public function __construct($code)
    {

        $this->title = "admin";
        $this->crepeManager = new CrepeManager();
        $this->crepeManager->setConnexion();
        if ($code == 1 && isset($_POST["submit"])) {

            if ($_POST["submit"] == "post") {
                $a = new Crepe(["name" => $_POST["name"],
                    "type" => "1",
                    "img" => $_POST["img"]]);
                $this->crepeManager->add($a);
            } else if ($_POST["submit"] == "edit") {
                $a = new Crepe(["name" => $_POST["name"],
                    "type" => "1",
                    "img" => $_POST["img"],
                    "id" => $_POST["id"]]);
                $this->crepeManager->update($a);
            } else if ($_POST["submit"] == "delete") {
                $a = $this->crepeManager->get($_POST["id"]);
                $this->crepeManager->delete($a);
            }
        }


        $this->crepes = $this->crepeManager->getAll();
        $this->content = $this->renderer("../Src/Vue/admin/menu.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }
}