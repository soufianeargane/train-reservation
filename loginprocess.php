<?php
if(isset($_POST['email']) && isset($_POST['password']))
{
      require_once("loginConfig.php");
      $info =new loginconfig();
      $info -> setemail($_POST['email']);
      $info -> setpass($_POST['password']);

      $login = $info ->login();
      if($login)
      {
            header('location:page.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=added succesfully');

      }else
      {
            header('location:register.php');

      }
}
?>