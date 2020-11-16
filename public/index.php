<?php

use App\Controller\Erreur;
use App\Controller\front;
use App\Controller\Menu;

require '../vendor/autoload.php';

if($_SERVER["REQUEST_URI"]==="/"){
    $page = new front();
}else if($_SERVER["REQUEST_URI"] =="/menu"){
    $page = new Menu();
}else{
    $page = new Erreur("404");
}
?>
<?= $page->render ?>