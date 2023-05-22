<?php 

class Model extends PDO{
 
 private $_host='localhost';
 private $_username = 'root';
 private $_password ='root';
 private $_database = 'messagerie';

public function __construct(){
     //cela me permet si jai une nouvelle base de donnée d'insrer les valeurs directement sans reprendre la connection
         $this->_host;
         $this->_username;
         $this->_password;
         $this->_database;

     try{

    parent:: __construct('mysql:host='.$this->_host.';dbname='.$this->_database, $this->_username , $this->_password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
     

     }catch(PDOException $e){
         die('impossible de se connecter a la base de donnée');
     }

 }
 function validation($data) {

    //Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $data = trim($data);
    //Supprime les antislashs d'une chaîne
    $data = stripslashes($data);
    //Convertit les caractères spéciaux en entités HTML
    $data = htmlspecialchars($data);
    return $data;}
}

?>