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
       // $query = $this->connexion->prepare("INSERT INTO Personne(nom, prenom) values (?, ?)");
        //$query->execute([$p->getName(), $p->getType()]);
    }
    public function getAll()
    {
     
         $request = 'select * from crepe';
         $query = $this->connexion->prepare($request);
         $result = array();
         if ($query->execute()) {
             foreach ($query as  $row) {
                 $result[] = new Crepe( $row);
             }
             return $result;
         }
        
    }
    public function get($id)
    {
        // $request = "select * from Personne where id = $id";
        // $query = $this->connexion->prepare($request);
        // $result = array();
        // if ($query->execute()) {
        //     foreach ($query as  $row) {
        //         $result[] = new Personne( $row);
        //     }
        //     return $result[0];
        // }
        
    }
    public function delete(Crepe $perso)
    {
        //$query = $this->connexion->prepare("delete * from Personne where id = ? ;");
        //$query->execute([$perso->getId()]);
    }
    public function update(Crepe $p)
    {
        //$query = $this->connexion->prepare("UPDATE  Personne Set nom = ?, prenom = ? where id = ? ;");
        //$query->execute([$p->getNom(), $p->getPrenom(),$p->getId()]);
    }
}
