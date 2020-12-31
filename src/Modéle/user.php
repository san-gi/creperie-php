<?php


namespace App\Modéle;


class user
{
    private $id;
    private $username;
    private $password;
    private $mail;
    private $img;
    private $role;
    private $commandes;

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
    public function setPassword($i)
    {
        $this->password = $i;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setUsername($n)
    {
        $this->username = $n;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setMail($m)
    {
        $this->mail = $m;
    }
    public function getMail()
    {
        return $this->mail;
    }

    public function setImg($i)
    {
        $this->img = $i;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setCommandes($c)
    {
        $this->commandes = $c;
    }
    public function getCommandes()
    {
        return $this->commandes;
    }
    public function setRole($r)
    {
        $this->commandes = $r;
    }
    public function getRole()
    {
        return $this->role;
    }

    public function __toString()
    {
        return ("$this->id $this->name  ");
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