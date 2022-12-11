<?php


if (isset($_POST["updateBtnAccount"])) {


    $id = $_POST["idAccount"];
    $nameAccount = $_POST["nameAccounts"];
    $emailAccount = $_POST["emailAccounts"];
    $CurrentPass = $_POST["CurrentPass"];
    $NewPass = $_POST["NewPass"];
    $RepeatPass = $_POST["RepeatPass"];
    $nowpass = $_POST["NowPass"];

    


    include "./account-controle-classe.php";
    $account = new Accounts();
    $account->setNameAccount($nameAccount);
    $account->setemailAccount($emailAccount);
    $account->setCurrentPass($CurrentPass);
    $account->setNewPass($NewPass);
    $account->setRepeatPass($RepeatPass);
    $account->setid($id);
    
    $account->confirmationOfUpdate();
    
}
