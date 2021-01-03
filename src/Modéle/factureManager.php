<?php


namespace App\Modéle;


class factureManager
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

        $request = 'select * from facture';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new Facture($row);

            }

            return $result;
        }


    }
    public function add(Facture $p)
    {
        $query = $this->connexion->prepare("INSERT INTO facture (user, price,date,etat) values ( ?, ?, ?,?)");
        $query->execute([$p->getUser(), $p->getPrice(),$p->getDate(),$p->getEtat()]);
    }
    public function get($id)
    {
        $request = "select * from facture where id = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$id])) {
            foreach ($query as $row) {
                $result[] = new Facture($row);
            }
            return $result[0];
        }
    }
    public function getFactureEnCours($mail)
    {
        $request = "select * from facture where user = ? and etat = 'Non valider'";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$mail])) {
            foreach ($query as $row) {
                $result[] = new Facture($row);
                return $result[0];
            }
        }
        $facture = new Facture([
            "user" => $mail,
            "price" => 0,
            "date" => "2020-02-02",
            "etat" => "Non valider",
        ]);
        $this->add($facture);
        return $facture;
    }
    public function delete(Facture $u)
    {
        $query = $this->connexion->prepare("delete from facture where id = ? ");
        $query->execute([$u->getId()]);
    }

    public function update(Facture $p)
    {


        $query = $this->connexion->prepare("UPDATE facture set user = ?, prix = ?,date = ?,etat = ? where id = ? ");
        $query->execute([$p->getUser(), $p->getPrice(),$p->getDate(),$p->getEtat(),$p->getId()]);

    }
}