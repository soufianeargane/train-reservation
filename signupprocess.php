<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';
$tokenVerify = md5(rand());


if (isset($_POST["testX10"])) {


      $mail = new PHPMailer(true);

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = "DummyEmail12121213@gmail.com";
      $mail->Password = "sgeowfyblihetvdx";
      $mail->SMTPSecure = "ssl";
      $mail->Port = 465;

      $mail->setFrom("DummyEmail12121213@gmail.com");
      $mail->addAddress($_POST["email"]);

      $mail->isHTML(true);

      $mail->Subject = "test";

      $mail->Body = "<h3>You have Been registred in YouTrain</h3>
                   <h5>Click the link bolow to verify your email</h5> 
                   <br><br>
                   <a href='http://localhost/train-reservation/login.php?tokenVerify=$tokenVerify'>Click Meeeeeee</a>";

      $mail->send();
}

if (isset($_POST['name']) && isset($_POST['email'])  &&  isset($_POST['password'])) {
      require_once("signupconfig.php");
      $signup = new signupconfig();


      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $signup->setemail($_POST['email']);
      } else {
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=add correct email');
      }
      if (($_POST['comfirm-password'] == $_POST['password']) && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == true) {
            $signup->setpass(password_hash($_POST['password'], PASSWORD_DEFAULT));
      } else {
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=repeat correct password');
      }

      $var1 = $signup->getname();
      $var2 = $signup->getemail();
      $var3 = $signup->getpass();
      if (!empty($var1) && !empty($var2) && !empty($var3)) {
            $signup->insertData();
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=added succesfully');
      } else {
            header('location:register.php?color=bg-red-500 text-white font-bold rounded-t px-4 py-2&&message=fill with valid  infos');
      }
      if (preg_match("/^[a-z0-9_-]{3,15}$/", $_POST['name'])) {
            $signup->setname($_POST['name']);
      } else {
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=add correct name');
      }


      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $signup->setemail($_POST['email']);
      } else {
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=add correct email');
      }
      if (($_POST['comfirm-password'] == $_POST['password']) && (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) == true) {
            $signup->setpass(password_hash($_POST['password'], PASSWORD_DEFAULT));
      } else {
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=repeat correct password');
      }

      $var1 = $signup->getname();
      $var2 = $signup->getemail();
      $var3 = $signup->getpass();
      if (!empty($var1) && !empty($var2) && !empty($var3)) {
            session_start();
            $signup->insertData($tokenVerify);
            $_SESSION["messageOfValidationOfEmail"]="A Message has been send to your email ! Please check it so you can Verify";
            header('location:register.php?color=bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full&&message=added succesfully');
      } else {
            header('location:register.php?color=bg-red-500 text-white font-bold rounded-t px-4 py-2&&message=fill with valid  infos');
      }
}
