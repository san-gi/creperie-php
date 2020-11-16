<?php

namespace App\Controller;

use App\Modéle\CrepeManager;

class Menu
{
  public $title;
  public $content;
  public $render;
  public $crepeManager;
  public $crepes;
  public function __construct()
  {
    $this->title = "salut";
    $this->crepeManager = new CrepeManager();
    
    $this->crepeManager->setConnexion();
    $this->crepes = $this->crepeManager->getAll();
    $this->content = $this->renderer("../Src/Vue/menu.php");
    $this->render = $this->renderer("../Src/Vue/template.php");
  }
  public function renderer($path)
  {
    ob_start();
    require $path;
    return ob_get_clean();
  }
}
