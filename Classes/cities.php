<?php
include_once '../config/db.php';
class cities extends Dbcon
{


    public function fetchCities()
    {

        $stmt = $this->connect()->prepare("SELECT * FROM `ville` ");

        $stmt->execute();

        return $stmt;
    }
}
