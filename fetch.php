<?php
include './config/db.php';
class fetchCities extends Dbcon
{

    public function fetchAllCities()
    {

        $stmt = $this->connect()->prepare("SELECT * FROM `ville` ");

        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function fetchFewTrips()
    {
        $stmt = $this->connect()->prepare("SELECT trips.* , 
        v_start.ville as start , s_end.ville as end, train.name as name FROM trips 
        inner join ville as v_start on v_start.id=trips.station_start_id 
        inner join ville as s_end on s_end.id=trips.station_arrive_id 
        INNER JOIN train on trips.train_id = train.id_train limit 4
        ");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
