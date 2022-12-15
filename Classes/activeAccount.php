<?php
include "./config/db.php";
class activation extends Dbcon
{


    public function __construct($id)
    {
        $stmt = $this->connect()->prepare("UPDATE `user` SET `activeAccount`=1 WHERE id=?");

        $stmt->execute([$id]);
    }
}
