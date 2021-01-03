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

        $request = 'select * from ingrediants';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new Ingredient($row);
            }
            return $result;

        }

    }
    public function add(Ingredient $p)
    {

        $query = $this->connexion->prepare("INSERT INTO ingrediants (name, price) values ( ?, ?)");
        $query->execute([$p->getName(), $p->getPrice()]);
    }
    public function get($id)
    {
        $request = "select * from ingrediants where id = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$id])) {
            foreach ($query as $row) {
                $result[] = new Ingredient($row);
            }
            return $result[0];
        }
    }
    public function delete(Ingredient $u)
    {
        $query = $this->connexion->prepare("delete from ingrediants where id = ? ");
        $query->execute([$u->getId()]);
    }

    public function update(Ingredient $p)
    {

        $query = $this->connexion->prepare("UPDATE ingrediants set name = ?, price = ? where id = ? ");
        $query->execute([$p->getName(), $p->getPrice(),$p->getId()]);

    }
}