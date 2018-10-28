<?php 

class Mess extends Conexion {
    private $id;
    private $subj;
    private $today;
    private $message;
    private $de;
    private $para;

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

    /**
     * Get the value of subj
     */ 
    public function getSubj()
    {
        return $this->subj;
    }

    /**
     * Set the value of subj
     *
     * @return  self
     */ 
    public function setSubj($subj)
    {
        $this->subj = $subj;

        return $this;
    }

    /**
     * Get the value of today
     */ 
    public function getToday()
    {
        return $this->today;
    }

    /**
     * Set the value of today
     *
     * @return  self
     */ 
    public function setToday($today)
    {
        $this->today = $today;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of de
     */ 
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set the value of de
     *
     * @return  self
     */ 
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get the value of para
     */ 
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set the value of para
     *
     * @return  self
     */ 
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    public function __construct() 
    {
        parent::__construct();
    }

    public function correosUsuario() {
        $_query = "select * from mess where para = '".$this->para."'";
        $resultado = $this->conectar()->query($_query);

        while($correo = $resultado->fetch_assoc()) {
            echo '<tr><td>'.$correo["de"].'</td><td>'.$correo["today"].'</td><td>'.$correo["subj"].'</td></tr>';
        }
    }
}