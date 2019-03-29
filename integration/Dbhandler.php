<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dbhandler
 *
 * @author Gebruiker
 */

$db = new Dbhandler();
if ($db->findwoord("lepel") == TRUE){
    $db->printWoord();
}
else{
    echo "Geen KAAAAAAAAASSSSSS vnadaag";
}


class Dbhandler {
    //dit noemen in 00 een attribute
    private $woord;
    
    //een functie in 00 heet een method
    function findWoord($woord){
        $result = FALSE;
        $this->woord = $woord;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
       ];         
                
       $host = '127.0.0.1';
       $charset = 'utf8mb4';
       $db = 'palindroom';
       $user = "root";
       $password = "";
       
       $host = "mysql:host=$host;dbname=$db;charset=$charset";
       
       $sql = "SELECT * FROM palindromen WHERE woord='".$woord."';";
       
       try {
           //stap2
           $conn = new PDO($host, $user, $password, $options);
           //stap 3
           $stmt = $conn->query($sql);
           //stap 4
           if ($stmt->rowCount() ==1){
               $result = TRUE;
           }
       }
       catch (PDOexception $e) {
           echo "jou text" . $e->getMessage()."(".$e->getCode().").";
       }
               
          return $result; 
     
    }
    
    function printWoord(){
        echo $this->woord;
    }

}
