<?php

namespace App\controller;

use App\Modéle\commandesManager;
use App\Modéle\CrepeManager;

use App\Modéle\Crepe;
use App\Modéle\factureManager;
use App\Modéle\ingredient_crepesManager;
use App\Modéle\ingredientManager;
use App\Modéle\user;
use App\Modéle\userManager;

class adminController
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $crepes;
    public $userManager;
    public $users;
    public $commandesManager;
    public $commandes;
    public $ingredients;
    public $ingredientManager;
    public $factures;
    public $factureManager;
    public $ingCrepe;
    public $ingCrepeManager;
    public $table;
    public $user;

    public function __construct()
    {
        $this->userManager = new userManager();
        if(isset($_SESSION["user"])){
            $this->user = $this->renderer("../Src/Vue/userConnect.php");
            if(!$_SESSION["user"]->getRole()=="admin"){
                header("Location: /");
            }
        }
        else {
            header("Location: /");
        }
        $this->title = "admin";


        switch ($_SERVER["REQUEST_URI"]){
            case "/admin/crepes":
                $this->crepeManager = new CrepeManager();
                $this->crepeManager->setConnexion();
                $this->crepes = $this->crepeManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/crepes.php");
                break;
            case "/admin/user":
                $this->userManager = new userManager();
                $this->userManager->setConnexion();
                $this->users = $this->userManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/users.php");
                break;
            case "/admin/commandes":
                $this->commandesManager = new commandesManager();
                $this->commandesManager->setConnexion();
                $this->commandes = $this->commandesManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/commandes.php");
                break;
            case "/admin/ingredients":
                $this->ingredientManager = new ingredientManager();
                $this->ingredientManager->setConnexion();
                $this->ingredients = $this->ingredientManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/ingredients.php");
                break;
            case "/admin/ingredients_crepe":
                $this->ingCrepeManager = new ingredient_crepesManager();
                $this->ingCrepeManager->setConnexion();
                $this->ingCrepe = $this->ingCrepeManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/ingredients_crepe.php");
                break;
            case "/admin/facture":
                $this->factureManager = new factureManager();
                $this->factureManager->setConnexion();
                $this->factures = $this->factureManager->getAll();
                $this->table = $this->renderer("../Src/Vue/admin/facture.php");
                break;
            default:
                $this->table = $this->renderer("../Src/Vue/404.php");
                break;
        }
        $this->content = $this->renderer("../Src/Vue/admin/menu.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }
}