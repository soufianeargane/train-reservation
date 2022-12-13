<?php

class timer extends Dbcon
{

    public function fetchArrivingTime($id)
    {
        $stmt = $this->connect()->prepare("SELECT arriving_time FROM `trips` WHERE id_trip = $id");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
