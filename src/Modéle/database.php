<?php


namespace App\Modéle;
use \PDO;
use \Exception;
class Database
{
    private $User;
    private $Serveur;
    private $Pass;
    private $BD;
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    public function setUser($u)
    {
        $this->User = $u;
    }
    public function getUser()
    {
        return $this->User;
    }
    public function setServeur($s)
    {
        $this->Serveur = $s;
    }
    public function getServeur()
    {
        return $this->Serveur;
    }
    public function setPass($p)
    {
        $this->Pass = $p;
    }
    public function getPass()
    {
        return $this->Pass;
    }
    public function setBD($b)
    {
        $this->BD = $b;
    }
    public function getBD()
    {
        return $this->BD;
    }
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    public function getConnexion()
    {
        $connexion ="";
        try {
            
            $connexion = new PDO("mysql:host={$this->Serveur};dbname={$this->BD}", $this->User, $this->Pass);
            $connexion->exec("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            echo 'Erreur :' . $e->getMessage() . '<br/>';
            echo 'N :' . $e->getCode();
        }
        return $connexion;
    }
}
