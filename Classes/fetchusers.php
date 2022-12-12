<?php

class users extends Dbcon {

    public function fetchRegularUsers (){
        $stmt = $this->connect()->prepare("SELECT * FROM `user` WHERE role = 0");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

    public function fetchAdmins (){
        $stmt = $this->connect()->prepare("SELECT * FROM `user` WHERE role = 1");
        $stmt->execute();
        return $stmt->fetchAll();
    }



}