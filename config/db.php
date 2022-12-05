<?php
class Dbcon
{
      public function connect(){
            try {
                  
                  $username = 'root';
                  $password = '';
                  $db       = new PDO('mysql:host=localhost;dbname=sgtt',$username, $password);
             return $db;
            } catch (PDOExeption $e) {
                  print $e -> getMessage();
                  die();
            }
      }
}