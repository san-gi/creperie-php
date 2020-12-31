<?php

use App\Controller\Erreur;
use App\Controller\front;
use App\Controller\Menu;
use App\controller\adminController;
use App\controller\apiController;
use App\Modéle\userManager;
use App\Modéle\user;

require '../vendor/autoload.php';
session_start ();
if(isset($_POST["username"]) && isset($_POST["mail"])  && isset($_POST["password"])){
    $users= new userManager();
    $users->setConnexion();
    $user = new user([
        "username" => $_POST["username"],
        "password" =>  $_POST["password"],
        "mail" => $_POST["mail"],
        "img" => "",
        "commandes" => ""]);
    $users->add($user);
    $_SESSION["user"] = $user;
}else if(isset($_POST["mail"])  && isset($_POST["password"])){
    $users= new userManager();
    $users->setConnexion();
    $user = $users->get($_POST["mail"]);
    if($user->getPassword()==$_POST["password"]){
        $_SESSION["user"] = $user;
    }
}
if(isset($_POST["disconect"])){
    session_destroy();
    session_start();
}
if ($_SERVER["REQUEST_URI"] === "/") {
    $page = new front();
} else if ($_SERVER["REQUEST_URI"] == "/menu") {
    $page = new Menu();
} else if (preg_match('/^\/admin/', $_SERVER["REQUEST_URI"])==1) {
    $page = new adminController(0);
} else if (preg_match("/^\/api\//i",$_SERVER["REQUEST_URI"]) == 1) {
    $page = new adminController(1);
} else {
    $page = new Erreur("404");
}
?>
<?= $page->render ?>