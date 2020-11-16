<?php
namespace App\Modéle;
class Crepe
{
    private $id;
    private $name;
    private $type;
    private $img;

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
    public function setType($t)
    {
        $this->type = $t;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setImg($i)
    {
        $this->img = $i;
    }
    public function getImg()
    {
        return $this->img;
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
