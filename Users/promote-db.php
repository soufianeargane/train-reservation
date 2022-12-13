
<?php
if (isset($_POST["promoteBtnUser"])) {


    $idOfUser = $_POST["idOfUser"];

    include "../config/db.php";
    include "./promote-classe.php";

    $user = new promoteUser();
    $user->promote($idOfUser);

    session_start();
    $_SESSION['role'] = 1;

    header("location:./users.php");
}

