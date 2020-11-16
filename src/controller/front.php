<?php

namespace App\Controller;


class front
{
  public $title;
  public $content;
  public function __construct()
  {

    $this->title = "salut";
    $this->content = $this->render("../Src/Vue/home.php");
    var_dump($this->render("../Src/Vue/template.php"));
  }
  public function render($path)
  {
    ob_start();
    require $path;
    return ob_get_clean();
  }
}
