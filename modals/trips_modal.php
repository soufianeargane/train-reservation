<?php

class trip extends Dbcon
{
    private $id_trip;
    private $train_id;
    private $station_start_id;
    private $station_arrive_id;
    private $day;
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
    public function setDay($day)
    {
        $this->day = $day;
    }
    public function getDay()
    {
        return $this->day;
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
        $stmt = $this->connect()->prepare("INSERT INTO `trips`(`train_id`,`station_start_id`,`station_arrive_id`,`starting_time`,`price`,`arriving_time`, `day`) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute([$this->train_id, $this->station_start_id, $this->station_arrive_id, $this->starting_time, $this->price, $this->arriving_time, $this->day]);
    }


    //fetch all data
    public function fetchAllTrips()
    {
        $stmt = $this->connect()->prepare("SELECT trips.* , 
        v_start.ville as start , s_end.ville as end, train.name as name FROM trips 
        inner join ville as v_start on v_start.id=trips.station_start_id 
        inner join ville as s_end on s_end.id=trips.station_arrive_id 
        INNER JOIN train on trips.train_id = train.id_train
        ");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    //fetch single data
    public function fetchSingleTrip()
    {
        $stmt = $this->connect()->prepare("SELECT trips.* , 
        v_start.ville as start , s_end.ville as end, train.name as name FROM trips 
        inner join ville as v_start on v_start.id=trips.station_start_id 
        inner join ville as s_end on s_end.id=trips.station_arrive_id 
        INNER JOIN train on trips.train_id = train.id_train WHERE id_trip=?");
        $stmt->execute([$this->id_trip]);
        $result = $stmt->fetch();
        return $result;
    }
    // delete data
    public function deleteTrip()
    {
        $stmt = $this->connect()->prepare("DELETE FROM `trips` WHERE id_trip=?");
        $stmt->execute([$this->id_trip]);
    }

    // update data
    public function updateTrip()
    {
        $stmt = $this->connect()->prepare("UPDATE `trips` 
                SET `train_id`=?,`station_start_id`=?,`station_arrive_id`=?,
                `starting_time`=?,`price`=?,`arriving_time`=?, `day`=? WHERE id_trip=?");
        $stmt->execute([$this->train_id, $this->station_start_id, $this->station_arrive_id, $this->starting_time, $this->price, $this->arriving_time, $this->day, $this->id_trip]);
    }

    public function CountTrips(){
        $stm = $this->connect()->prepare("SELECT COUNT(*) as 'countTrip' FROM `trips`");
        $stm->execute(); 
        $s = $stm->fetch();
        return $s['countTrip'];

    }




}
