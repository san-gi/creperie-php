<?php
namespace App\Modéle;
class Ingrédiant
{
    private $id;
    private $crepe;
    private $ingrédiant;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCrepe()
    {
        return $this->crepe;
    }

    /**
     * @param mixed $crepe
     */
    public function setCrepe($crepe)
    {
        $this->crepe = $crepe;
    }

    /**
     * @return mixed
     */
    public function getIngrédiant()
    {
        return $this->ingrédiant;
    }

    /**
     * @param mixed $ingrédiant
     */
    public function setIngrédiant($ingrédiant)
    {
        $this->ingrédiant = $ingrédiant;
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
