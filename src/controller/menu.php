<?php

namespace App\Controller;


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
}
