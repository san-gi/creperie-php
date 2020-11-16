<?php

namespace App\Controller;


class Erreur
{
  public $title;
  public $content;
  public $render;
  public function __construct($erreur)
  {
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
