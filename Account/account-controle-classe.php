<?php
include "../config/db.php";

class Accounts extends Dbcon
{

    private $id;
    private $nameAccount;
    private $emailAccount;
    private $CurrentPass;
    private $NewPass;
    private $RepeatPass;
    private $nowpass;

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setNameAccount($nameAccount)
    {
        $this->nameAccount = $nameAccount;
    }

    public function setemailAccount($emailAccount)
    {
        $this->emailAccount = $emailAccount;
    }

    public function setCurrentPass($CurrentPass)
    {
        $this->CurrentPass = $CurrentPass;
    }

    public function setNewPass($NewPass)
    {
        $this->NewPass = $NewPass;
    }

    public function setRepeatPass($RepeatPass)
    {
        $this->RepeatPass = $RepeatPass;
    }

    public function setnowpass($nowpass)
    {
        $this->nowpass = $nowpass;
    }


    public function emptyInputs()
    {
        if (empty($this->nameAccount) || empty($this->emailAccount) || empty($this->CurrentPass)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    public function invalideName()
    {
        if (!preg_match("/^[a-zA-Z\s]*$/", $this->nameAccount)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    public function invalideEmail()
    {
        if (!filter_var($this->emailAccount, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    public function checkOldPassword()
    {

        if (password_verify($this->CurrentPass, $_SESSION['password']) == true) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function checkNewPassword()
    {

        if ($this->NewPass == $this->RepeatPass) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function confirmationOfUpdate()
    {
        session_start();
        // Not working always return false
        if ($this->emptyInputs() == false) {
            $_SESSION["messageAccount"] = "Make sure that the blanc of the name or email or current password are not empty";
            header("Location:./account.php");
            exit();
        }

        if ($this->invalideName() == false) {
            $_SESSION["messageAccount"] = "Make sure that the Name contain only these caracteres : a-z , A-Z";
            header("Location:./account.php");
            exit();
        }
        if ($this->invalideEmail() == false) {
            $_SESSION["messageAccount"] = "Please write an acceptable email";
            header("Location:./account.php");
            exit();
        }
        if ($this->checkOldPassword() == false) {
            $_SESSION["messageAccount"] = "Invalid password";
            header("Location:./account.php");
            exit();
        }

        if ($this->checkNewPassword() == false) {
            $_SESSION["messageAccount"] = "Pleaze Repeat the same Password";
            header("Location:./account.php");
            exit();
        }

        if ($this->NewPass == null || $this->RepeatPass == null || $this->NewPass == "" || $this->RepeatPass == "" || $this->NewPass == " " || $this->RepeatPass == " ") {

            // if only the name or the emain has been changed
            $this->updateAccount2();
            header("Location:" . $_SESSION["URLNNOW"]);

            exit();
        }

        $this->updateAccount();


        header("Location:" . $_SESSION["URLNNOW"]);

    }

    public function updateAccount()
    {
        $hashedPassword = password_hash($this->NewPass, PASSWORD_DEFAULT);
        $stm = $this->connect()->prepare("UPDATE `user` SET `name`=?,`email`=?,`password`=?  WHERE id = " . $this->id);

        $_SESSION['name'] = $this->nameAccount;
        $_SESSION['email'] = $this->emailAccount;
        $_SESSION['password'] = $hashedPassword;
        $_SESSION['username'] = explode("@", $_SESSION['email']);

        $stm->execute([$this->nameAccount, $this->emailAccount, $hashedPassword]);
    }



    // if only the name or the emain has been changed
    public function updateAccount2()
    {
        $stm = $this->connect()->prepare("UPDATE `user` SET `name`=?,`email`=? WHERE id = " . $this->id);

        $_SESSION['name'] = $this->nameAccount;
        $_SESSION['email'] = $this->emailAccount;
        $_SESSION['username'] = explode("@", $_SESSION['email']);

        $stm->execute([$this->nameAccount, $this->emailAccount]);
    }


}
