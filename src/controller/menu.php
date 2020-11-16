<?php

namespace App\Controller;

use App\Modéle\CrepeManager;

class Menu
{
  public $title;
  public $content;
  public $render;
  public $crepe;
  public function __construct()
  {
    $this->title = "salut";
    $this->crepe = new CrepeManager();
    $this->crepe->setConnexion();
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
