<?php


namespace App\Modéle;


class userManager
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
    public function add(User $p)
    {

        $query = $this->connexion->prepare("INSERT INTO user (username, password, mail,img,commandes) values (?, ?, ?, ?, ?)");
        $query->execute([$p->getUsername(), $p->getPassword(), $p->getMail()," "," "]);
    }
    public function get($mail)
    {
        $request = "select * from user where mail = ?";
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute(["admin"])) {
            foreach ($query as $row) {
                $result[] = new user($row);
            }
            return $result[0];
        }
    }

    public function getAll()
    {

        $request = 'select * from user';
        $query = $this->connexion->prepare($request);
        $result = array();
        if ($query->execute()) {
            foreach ($query as $row) {
                $result[] = new user($row);
            }
            return $result;
        }

    }
}