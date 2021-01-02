<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Modéle\commandes;
use App\Modéle\CrepeManager;

class Menu
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $crepes;
    public $user;

    public function __construct()
    {
        $this->title = "salut";
        $this->crepeManager = new CrepeManager();
        $this->crepeManager->setConnexion();
        $this->crepes = $this->crepeManager->getAll();
        if(isset($_SESSION["user"]))
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
        else
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");
        $this->content = $this->renderer("../Src/Vue/menu.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
        if(!isset($_SESSION["commande"])){
            $_SESSION["commande"] = [];
        }
        var_dump( $_SESSION["commande"]);
        if(isset($_POST["crepeName"])){

            $_SESSION["commande"][] = $_POST["crepeName"];
        }

    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }
=======

class Menu
{
  public $title;
  public $content;
  public $render;
  public function __construct()
  {
    $this->title = "salut";
    $this->content = $this->renderer("../Src/Vue/menu.php");
    $this->render = $this->renderer("../Src/Vue/template.php");
  }
  public function renderer($path)
  {
    ob_start();
    require $path;
    return ob_get_clean();
  }
>>>>>>> 6ea5c1c6a04b85bf3bba0deedb511451a334ec02
}
