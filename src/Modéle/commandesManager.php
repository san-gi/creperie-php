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
    public function add(commandes $p)
    {
        $query = $this->connexion->prepare("INSERT INTO commandes (crepe, facture) values ( ?, ?)");
        $query->execute([$p->getCrepe(), $p->getFacture()]);
    }
    public function get($id)
    {
        $request = "select * from commandes where id = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$id])) {
            foreach ($query as $row) {
                $result[] = new commandes($row);
            }
            return $result[0];
        }
    }
    public function delete(commandes $u)
    {
        $query = $this->connexion->prepare("delete from commandes where id = ? ");
        $query->execute([$u->getId()]);
    }

    public function update(commandes $p)
    {

        $query = $this->connexion->prepare("UPDATE commandes set crepe = ?, facture = ? where id = ? ");
        $query->execute([$p->getCrepe(), $p->getFacture(),$p->getId()]);

    }
}