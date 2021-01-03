<?php


namespace App\Modéle;


class ingredient_crepesManager
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

        $request = 'select * from ingCrepe';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new Ingredient_crepe($row);
            }
            return $result;
        }

    }
    public function add(Ingredient_crepe $p)
    {
        $query = $this->connexion->prepare("INSERT INTO ingCrepe (crepe, ingredient) values ( ?, ?)");
        $query->execute([$p->getCrepe(), $p->getIngredient()]);
    }
    public function get($id)
    {
        $request = "select * from ingCrepe where id = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$id])) {
            foreach ($query as $row) {
                $result[] = new Ingredient_crepe($row);
            }
            return $result[0];
        }
    }
    public function delete(Ingredient_crepe $u)
    {
        $query = $this->connexion->prepare("delete from ingCrepe where id = ? ");
        $query->execute([$u->getId()]);
    }

    public function update(Ingredient_crepe $p)
    {
        $query = $this->connexion->prepare("UPDATE ingCrepe set crepe = ?, ingredient = ? where id = ? ");
        $query->execute([$p->getCrepe(), $p->getIngredient(),$p->getId()]);

    }
}