<?php
require_once('dbConnect.php');
class loginconfig
{
      private $name;
      private $email;
      private $password;
      public function __construct($email = "", $password = "")
      {
            $this->email = $email;
            $this->password = $password;
            $this->dbcon = new PDO("mysql:host=localhost;dbname=sgtt", 'root', '');
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

      public function fetchAll()
      {

            try {
                  $stm = $this->dbcon->prepare("select * FROM user");
                  $stm->execute();
                  $stm->fetchAll();
            } catch (Exception $e) {
                  return $e->getMessage();
            }
      }

      public function login()
      {

            session_start();

            try {
                  $stm = $this->dbcon->prepare("SELECT * FROM user where email = :email");
                  $stm->execute(['email' => $this->email]);
                  $user = $stm->fetchAll();

                  if (count($user) > 0 && password_verify($this->password, $user[0]['password']) == true && ($_SESSION["token"] == $user[0]["token"] || $user[0]["activeAccount"] == 1)) {

                        include "./Classes/activeAccount.php";
                        $active = new activation($user[0]['id']);
                        $_SESSION['id'] = $user[0]['id'];
                        $_SESSION['email'] = $user[0]['email'];
                        $_SESSION['name'] = $user[0]['name'];
                        $_SESSION['password'] = $user[0]['password'];
                        $_SESSION['role'] = $user[0]['role'];
                        $a1 = explode("@", $_SESSION['email']);
                        $_SESSION['username'] = $a1[0];
                        return true;
                  } else {
                        false;
                  }
            } catch (Exception $e) {
                  return $e->getMessage();
            }
      }
}
