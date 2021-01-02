<?php
namespace App\Modéle;
class Ingredient_crepe
{
    private $id;
    private $crepe;
    private $ingredient;

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
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param mixed $ingredient
     */
    public function setIngredient($ingrdient)
    {
        $this->ingredient = $ingredient;
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
