<?php
include_once '../config/db.php';
class trip extends Dbcon
{
    private $id_trip;
    private $train_id;
    private $station_start_id;
    private $station_arrive_id;
    private $starting_time;
    private $arriving_time;
    private $price;
    // setters and getters
    public function setIdOfTrip($id_trip)
    {
        $this->id_trip = $id_trip;
    }
    public function getIdOfTrip()
    {
        return $this->id_trip;
    }
    public function setTrainId($train_id)
    {
        $this->train_id = $train_id;
    }
    public function getTrainId()
    {
        return $this->train_id;
    }
    public function setStationStartId($station_start_id)
    {
        $this->station_start_id = $station_start_id;
    }
    public function getStationStartId()
    {
        return $this->station_start_id;
    }
    public function setStationArriveId($station_arrive_id)
    {
        $this->station_arrive_id = $station_arrive_id;
    }
    public function getStationArriveId()
    {
        return $this->station_arrive_id;
    }
    public function setStartingTime($starting_time)
    {
        $this->starting_time = $starting_time;
    }
    public function getStartingTime()
    {
        return $this->starting_time;
    }
    public function setArrivingTime($arriving_time)
    {
        $this->arriving_time = $arriving_time;
    }
    public function getArrivingTime()
    {
        return $this->arriving_time;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    //insert data
    public function insertTrip()
    {
        $stmt = $this->connect()->prepare("INSERT INTO `trips`(`train_id`,`station_start_id`,`station_arrive_id`,`starting_time`,`price`,`arriving_time`) VALUES (?,?,?,?,?,?)");
        $stmt->execute([$this->train_id, $this->station_start_id, $this->station_arrive_id, $this->starting_time, $this->price, $this->arriving_time]);
    }


    //fetch all data
    public function fetchAllTrips()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM `trips`");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
