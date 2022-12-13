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
    public function CountUser(){
        $stm = $this->connect()->prepare("SELECT COUNT(*) as 'countUsers' FROM `user` where role=0");
        $stm->execute(); 
        $s = $stm->fetch();
        return $s['countUsers'];

    }
    public function CountAdmin(){
        $stm = $this->connect()->prepare("SELECT COUNT(*) as 'CountAdmins' FROM `user` where role=1");
        $stm->execute(); 
        $s = $stm->fetch();
        return $s['CountAdmins'];

    }



}