<?php

namespace App\controller;

use App\Modéle\commandes;
use App\Modéle\commandesManager;
use App\Modéle\Crepe;
use App\Modéle\CrepeManager;
use App\Modéle\Facture;
use App\Modéle\factureManager;
use App\Modéle\Ingredient;
use App\Modéle\ingredient_crepesManager;
use App\Modéle\ingredientManager;
use App\Modéle\Ingredient_crepe;
use App\Modéle\user;
use App\Modéle\userManager;

class api{
    public $title;
    public $content;
    public $render;
    public $user;
    public $commandesManager;
    public $userManager;
    public $crepeManager;
    public $ingCrepeManager;
    public $factureManager;
    public $ingredientManager;
    public function __construct()
    {
        if(isset($_SESSION["user"]))
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
        else
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");

        $url = explode("/",$_SERVER["REQUEST_URI"]);

        if(isset($_POST["submit"])){
            switch ($url[2]){
                case "commandes":
                    $this->commandesManager = new commandesManager();
                    $this->commandesManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":
                            $c = new commandes([
                                "crepe" => $_POST["crepe"],
                                "facture" => $_POST["facture"]
                            ]);
                            $this->commandesManager->add($c);
                            break;
                        case  "edit":
                            $c = new commandes([
                                "crepe" => $_POST["crepe"],
                                "facture" => $_POST["facture"],
                                "id" => $_POST["id"],
                            ]);
                            $this->commandesManager->update($c);
                            break;
                        case  "delete":
                            $a = $this->commandesManager->get($_POST["id"]);
                            $this->commandesManager->delete($a);
                            break;
                    }
                    break;
                case "user":
                    $this->userManager = new userManager();
                    $this->userManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":
                            $u = new user([
                                "username"=> $_POST["username"],
                               "password"=> $_POST["password"],
                                "mail"=> $_POST["mail"],
                                "img"=> $_POST["img"],
                                "role"=> $_POST["role"],
                            ]);
                            $this->userManager->add($u);
                            break;
                        case  "edit":
                            $u = new user([
                                "username"=> $_POST["username"],
                                "password"=> $_POST["password"],
                                "mail"=> $_POST["mail"],
                                "img"=> $_POST["img"],
                                "role"=> $_POST["role"],
                                "id"=> $_POST["id"],
                            ]);
                            $this->userManager->update($u);
                            break;
                        case  "delete":
                            $a = $this->userManager->get($_POST["mail"]);
                            $this->userManager->delete($a);
                            break;
                    }
                    break;
                case "crepes":
                    $this->crepeManager = new CrepeManager();
                    $this->crepeManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":
                            $c = new Crepe([
                                "name" => $_POST["name"],
                                "type" => "1",
                                "img" => $_POST["img"],
                                "desc" => $_POST["desc"],
                                "price" => "price"]);
                            $this->crepeManager->add($c);
                            break;
                        case  "edit":
                            $c = new Crepe([
                                "name" => $_POST["name"],
                                "price" => "price",
                                "type" => "1",
                                "img" => $_POST["img"],
                                "id" => $_POST["id"],
                                "desc" => $_POST["desc"]]);
                            $this->ccrepeManager->update($c);
                            break;
                        case  "delete":
                            $a = $this->crepeManager->get($_POST["id"]);
                            $this->crepeManager->delete($a);
                            break;
                    }
                    break;
                case "ingredients_crepe":
                    $this->ingCrepeManager = new ingredient_crepesManager();
                    $this->ingCrepeManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":
                            $c = new Ingredient_crepe([
                                "crepe" => $_POST["crepe"],
                                "ingredient" => $_POST["ingredient"]
                            ]);
                            $this->ingCrepeManager->add($c);
                            break;
                        case  "edit":
                            $c = new Ingredient_crepe([
                                "crepe" => $_POST["crepe"],
                                "ingredient" => $_POST["ingredient"],
                                "id" => $_POST["id"],
                            ]);
                            $this->ingCrepeManager->update($c);
                            break;
                        case  "delete":
                            $a = $this->ingCrepeManager->get($_POST["id"]);
                            $this->ingCrepeManager->delete($a);
                            break;
                    }
                    break;
                case "facture":
                    $this->factureManager = new factureManager();
                    $this->factureManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":
                            $c = new Facture([
                                "user" => $_POST["user"],
                                "price" => $_POST["price"],
                                "date" => $_POST["date"],
                                "etat" => $_POST["etat"],
                            ]);
                            $this->factureManager->add($c);
                            break;
                        case  "edit":
                            $c = new Facture([
                                "user" => $_POST["user"],
                                "price" => $_POST["price"],
                                "date" => $_POST["date"],
                                "id" => $_POST["id"],
                                "etat" => $_POST["etat"],
                            ]);

                            $this->factureManager->update($c);
                            break;
                        case  "delete":
                            $a = $this->factureManager->get($_POST["id"]);
                            $this->factureManager->delete($a);
                            break;
                    }
                    break;
                case "ingredients":
                    $this->ingredientManager = new ingredientManager();
                    $this->ingredientManager->setConnexion();
                    switch ($_POST["submit"]){
                        case  "post":

                            $c = new Ingredient([
                                "name" => $_POST["name"],
                                "price" => $_POST["price"]
                            ]);
                            $this->ingredientManager->add($c);
                            break;
                        case  "edit":
                            $c = new Ingredient([
                                "name" => $_POST["name"],
                                "price" => $_POST["price"],
                                "id" => $_POST["id"],
                            ]);
                            $this->ingredientManager->update($c);
                            break;
                        case  "delete":
                            $a = $this->ingredientManager->get($_POST["id"]);
                            $this->ingredientManager->delete($a);
                            break;
                    }
                    break;
            }
        }

        header("Location: /admin/$url[2]");
        $this->title = "api";
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