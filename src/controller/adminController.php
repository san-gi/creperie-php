<?php

namespace App\controller;

use App\Modéle\CrepeManager;

use App\Modéle\Crepe;
use App\Modéle\userManager;

class adminController
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $crepes;
    public $userManager;
    public $users;
    public $commandesManager;
    public $commandes;
    public $table;
    public $user;

    public function __construct($code)
    {
        if(isset($_SESSION["user"]))
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
        else
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");
        $this->title = "admin";


        switch ($_SERVER["REQUEST_URI"]){
            case "/admin/crepes":
                $this->crepeManager = new CrepeManager();
                $this->crepeManager->setConnexion();
                $this->crepes = $this->crepeManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/crepes.php");
                break;
            case "/admin/user":
                $this->userManager = new userManager();
                $this->userManager->setConnexion();
                $this->users = $this->userManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/users.php");
                break;
            case "/admin/commandes":
                $this->table = $this->renderer("../Src/Vue/404.php");
                break;
            case "/admin/ingrédients":
                $this->table = $this->renderer("../Src/Vue/404.php");
                break;
            default:
                $this->table = $this->renderer("../Src/Vue/404.php");
                break;
        }
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