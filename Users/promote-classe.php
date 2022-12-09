<?php

class promoteUser extends Dbcon{

    public function promote($id){
        $stmt = $this->connect()->prepare("UPDATE `user` SET `role`= 1 WHERE id= $id");
        $stmt->execute();

    }
}