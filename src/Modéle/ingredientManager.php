<?php


namespace App\Modéle;


class ingredientManager
{
    public function setConnexion()
    {
        $co = new Database(array(
            "User" => "sitePHP",
            "Serveur" => "192.168.1.21",
            "Pass" => "sitePHP;",
            "BD" => "crepe"
        ));
        $this->connexion = $co->getConnexion();
    }
    public function getAll()
    {

        $request = 'select * from commandes';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new ingre($row);
            }
            return $result;
        }

    }
}