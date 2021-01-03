<?php

namespace App\Modéle;
class CrepeManager
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
 
    public function add(Crepe $p)
    {

        $query = $this->connexion->prepare("INSERT INTO crepe (img, name, type) values (?, ?, ?)");
        $query->execute([$p->getImg(), $p->getName(), $p->getType()]);
    }

    public function getAll()
    {

        $request = 'select * from crepe';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new Crepe($row);
            }
            return $result;
        }

    }

    public function get($id)
    {
        $request = "select * from crepe where id = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$id])) {
            foreach ($query as $row) {
                $result[] = new Crepe($row);
            }
            return $result[0];
        }
    }

    public function getByNAme($name)
    {
        $request = "select * from crepe where name = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute([$name])) {
            foreach ($query as $row) {
                $result[] = new Crepe($row);
            }
            return $result[0];
        }
    }

    public function delete(Crepe $c)
    {

        $query = $this->connexion->prepare("delete from crepe where id = ? ");

        $query->execute([$c->getId()]);
    }

    public function update(Crepe $p)
    {

        $query = $this->connexion->prepare("UPDATE crepe set img = ?, name = ?, type = ? where id = ? ");
        $query->execute([$p->getImg(), $p->getName(), $p->getType(), $p->getId()]);

    }
}
