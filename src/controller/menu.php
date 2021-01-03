<?php

namespace App\Controller;

use App\Modéle\CrepeManager;
use App\Modéle\ingredient_crepesManager;
use App\Modéle\ingredientManager;

class Menu
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $ingredientManager;
    public $crepes;
    public $user;
    public $crepesCommand;

    public function __construct()
    {
        $this->title = "salut";
        $this->crepeManager = new CrepeManager();
        $this->crepeManager->setConnexion();
        $this->ingredientManager = new ingredient_crepesManager();
        $this->ingredientManager->setConnexion();
        $this->crepes = $this->crepeManager->getAll();

        if (!isset($_SESSION["commande"])) {
            $_SESSION["commande"] = [];
        }else{
            foreach ($_SESSION["commande"] as $i){
                $this->crepesCommand[] = $this->crepeManager->getByNAme($i);
            }
        }

        if (isset($_POST["crepeName"])) {
            $_SESSION["commande"][] = $_POST["crepeName"];
        }

        if (isset($_SESSION["user"]))
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
        else
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");
        $this->content = $this->renderer("../Src/Vue/menu.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
        $this->crepesCommand = [];
    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }

}