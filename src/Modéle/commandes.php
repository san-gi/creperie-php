<?php


namespace App\Modéle;


class commandes
{
    private $id;
    private $name;
    private $prix;
    private $crepes = [];

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    public function setId($i)
    {
        $this->id = $i;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($n)
    {
        $this->name = $n;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrix($p)
    {
        $this->prix = $p;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    public function __toString()
    {
        return ("$this->id $this->name  $this->type ");
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
}