<?php
/**
* La classe Database permet d'initialiser la base de donnée.
*
* @author MARC DEVY
*/
namespace App;


use PDO;

Class Database{

    private $host;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $pdo;
    public function __construct( $dbname, $host = 'localhost' , $dbuser= 'root', $dbpwd= '')
    {
        $this->host= $host;
        $this->dbname= $dbname;
        $this->dbuser= $dbuser;
        $this->dbpwd= $dbpwd;
    }
    public function getPDO()
    {

        return $this->pdo?? $this->pdo = new PDO("mysql:host=localhost;dbname={$this->dbname}", $this->dbuser, $this->dbpwd);

    }


}