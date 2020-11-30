<?php

use App\Controller\Erreur;
use App\Controller\front;
use App\Controller\Menu;
use App\controller\adminController;
use App\controller\apiController;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_URI"] === "/") {
    $page = new front();
} else if ($_SERVER["REQUEST_URI"] == "/menu") {
    $page = new Menu();
} else if ($_SERVER["REQUEST_URI"] == "/admin") {
    $page = new adminController(0);
} else if (preg_match("/^\/api\//i",$_SERVER["REQUEST_URI"]) == 1) {
    $page = new adminController(1);
} else {
    $page = new Erreur("404");
    var_dump($_SERVER["REQUEST_URI"]);
}
?>
<?= $page->render ?>