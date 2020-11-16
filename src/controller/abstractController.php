<?php

namespace App\Controller;

//pas maintenant
class abstractController
{
  public $title;
  public $content;
  public $render;
  public function __construct()
  {
    $this->title = "salut";
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
