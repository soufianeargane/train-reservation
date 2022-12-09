<?php
require_once("dbConnect.php");

class signupconfig
{

      private $name;
      private $email;
      private $password;
      protected $dbcon;

      public function __construct($name = "", $email = "", $password = "")
      {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            // $this ->dbcon = new PDO(DB_TYPE.":host =".DB_HOST.";dbname =".DB_NAME, DB_USER,DB_PWD);
            $this->dbcon = new PDO("mysql:host=localhost;dbname=sgtt", 'root', '');
      }
      public function setname($name)
      {
            $this->name = $name;
      }
      public function getname()
      {
            return $this->name;
      }
      public function setemail($email)
      {
            $this->email = $email;
      }
      public function getemail()
      {
            return $this->email;
      }
      public function setpass($password)
      {
            $this->password = $password;
      }
      public function getpass()
      {
            return $this->password;
      }
      public function insertData()
      {
            try {
                  $data = ['name' => $this->name, 'email' => $this->email, 'password' => $this->password, 'role' => 0];
                  $sql  = "INSERT INTO user(name, email, password, role) VALUES (:name,:email,:password,:role)";
                  $stmt = $this->dbcon->prepare($sql);
                  $stmt->execute($data);
            } catch (Exception $e) {
                  return $e->getMessage();
            }
      }
}
