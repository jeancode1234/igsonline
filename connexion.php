<?php
$user='root';
$pass='';
 try {
   
      $connect= new PDO('mysql:host=localhost;dbname=igs_online',$user,$pass);
   
    
 } catch (Exception $e) {
    die("Error".$e->getMessage());
 }
 
?>