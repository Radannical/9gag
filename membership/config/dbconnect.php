<?php

class Config extends PDO{

    public $db;
    private $db_engine      = 'mysql';
    private $db_host        = 'localhost';

    private $db_user        = 'username';
    private $db_password    = 'password';
    private $db_base        = 'membership';

    function __construct()
    {
        try{
            //setter: sets the database handler
            $this->db = new PDO("".$this->db_engine.":host=$this->db_host; dbname=$this->db_base", $this->db_user,$this->db_password);
        }
        catch (PDOException $e){
            $e->getMessage();
            // die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }

}