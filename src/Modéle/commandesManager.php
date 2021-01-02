<?php


namespace App\Modéle;


class commandesManager
{
    private $connexion;
    public function __construct()
    {

    }
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
                $result[] = new commandes($row);
            }
            return $result;
        }

    }
}