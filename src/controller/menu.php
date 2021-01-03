<?php

namespace App\Controller;

use App\Modéle\commandes;
use App\Modéle\commandesManager;
use App\Modéle\CrepeManager;
use App\Modéle\factureManager;
use App\Modéle\ingredient_crepesManager;
use App\Modéle\ingredientManager;

class Menu
{
    public $title;
    public $content;
    public $render;
    public $crepeManager;
    public $ingredientManager;
    public $factureManager;
    public $crepes;
    public $user;
    public $commandManager;
    public $crepesCommand;
    public $crepesInFacture;
    public $facture;


    public function __construct()
    {
        $this->title = "salut";
        $this->crepeManager = new CrepeManager();
        $this->crepeManager->setConnexion();
        $this->crepes = $this->crepeManager->getAll();

        $this->ingredientManager = new ingredient_crepesManager();
        $this->ingredientManager->setConnexion();
        $this->crepesInFacture = [];



        if (isset($_SESSION["user"])) {

            $this->factureManager = new factureManager();
            $this->factureManager->setConnexion();
            $this->facture = $this->factureManager->getFactureEnCours($_SESSION["user"]->getMail());
            if (isset($_POST["ValidationCommande"])) {
                $this->facture->setEtat("Clos");
                $this->factureManager->update($this->facture);
                $this->facture = $this->factureManager->getFactureEnCours($_SESSION["user"]->getMail());
            }
            $this->commandManager = new commandesManager();
            $this->commandManager->setConnexion();
            if (isset($_POST["SuppressionItem"])) {

                $this->commandManager->delete($this->commandManager->getFirstByCrepe($_POST["SuppressionItem"]));
            }
            $this->crepesCommand = $this->commandManager->getAllbyFacture($this->facture->getId());

            foreach ($this->crepesCommand as $c){
                $this->crepesInFacture[] = $this->crepeManager->getByNAme($c->getCrepe());
            }
            if (isset($_POST["crepeName"])) {

                $this->crepesInFacture[] = $this->crepeManager->getByNAme($_POST["crepeName"]);
                $this->commandManager->add(new commandes([
                    "crepe" => $_POST["crepeName"],
                    "facture" => $this->facture->getId()
                ]));
            }

                $this->user = $this->renderer("../Src/Vue/userConnect.php");
        }
        else{
            $this->user = $this->renderer("../Src/Vue/userNoConnect.php");
        }



        $this->content = $this->renderer("../Src/Vue/menu.php");
        $this->render = $this->renderer("../Src/Vue/template.php");
        $this->crepesCommand = [];
    }

    public function renderer($path)
    {
        ob_start();
        require $path;
        return ob_get_clean();
    }

}