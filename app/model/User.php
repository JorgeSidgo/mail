<?php

include '../app/config/Conexion.php';

Class User extends Conexion{

    private $id;
    private $email;
    private $userName;
    private $pass;
    
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function login() {



        $_query = "select * from users where userName = '".$this->userName."' and pass = '".$this->pass."'";

        $resultado = $this->conectar()->query($_query);
/*         var_dump($resultado);
        die(); */
        if(!$resultado) {
            header("location: ../src/redirect.php");
        } else 
        {
            header("location: ../src/webmail.php");
        }
    }
}
