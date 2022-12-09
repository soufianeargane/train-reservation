<?php
if(isset($_POST['name']) && isset($_POST['email'])  &&  isset($_POST['password']))
{     
      require_once("signupconfig.php");
      $signup = new signupconfig();
      
      if(preg_match("/^[a-z0-9_-]{3,15}$/",$_POST['name']))
      {$signup -> setname($_POST['name']);}
      else {header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=add correct name');}


      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {$signup -> setemail($_POST['email']);} else { header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=add correct email');}
      if(($_POST['comfirm-password'] == $_POST['password']) && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == true)
      {$signup -> setpass(password_hash($_POST['password'], PASSWORD_DEFAULT));}else{header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=repeat correct password');}

      $var1=$signup -> getname();
      $var2=$signup -> getemail();
      $var3 =$signup -> getpass();
      if(!empty($var1) && !empty($var2) && !empty($var3))
      {
      $signup -> insertData();
      header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=added succesfully');
        }   else 
       {
       header('location:register.php?color=bg-red-500 text-white font-bold rounded-t px-4 py-2&&message=fill with valid  infos');
      }
}