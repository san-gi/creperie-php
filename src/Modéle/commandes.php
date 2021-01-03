<?php


namespace App\Modéle;


class commandes
{
    private $id;
    private $crepe;
    private $facture;

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
    public function setCrepe($c)
    {
        $this->crepe = $c;
    }
    public function getCrepe()
    {
        return $this->crepe;
    }
    public function setFacture($f)
    {
        $this->facture = $f;
    }
    public function getFacture()
    {
        return $this->facture;
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