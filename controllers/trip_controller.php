<?php
include('../config/db.php');
if (isset($_POST['add_trip'])) {
    # code...
    $train_id           = $_POST['train_id'];
    $station_start_id   = $_POST['station_start_id'];
    $station_arrive_id  = $_POST['station_arrive_id'];
    $day                = $_POST['day'];
    $starting_time      = $_POST['starting_time'];
    $arriving_time      = $_POST['arriving_time'];
    $price              = $_POST['price'];
    $seats_number       = $_POST['seats_number'];

    include('../modals/trips_modal.php');
    // $trip = new trip($train_id, $station_start_id, $station_arrive_id, $starting_time, $price, $arriving_time);
    $trip = new trip();
    $trip->setTrainId($train_id);
    $trip->setStationStartId($station_start_id);
    $trip->setStationArriveId($station_arrive_id);
    $trip->setDay($day);
    $trip->setStartingTime($starting_time);
    $trip->setArrivingTime($arriving_time);
    $trip->setPrice($price);
    $trip->setSeat($seats_number);
    $trip->insertTrip();
    header("location:../Trips/trips.php");
}

if (isset($_POST['delete_trip'])) {
    # code...
    $id_trip = $_POST['id_trip'];
    include('../modals/trips_modal.php');
    $trip = new trip();
    $trip->setIdOfTrip($id_trip);
    $trip->deleteTrip();
    header("location:../Trips/trips.php");
}

//update data
if (isset($_POST['update_trip'])) {
    # code...
    $id_trip            = $_POST['id_trip'];
    $train_id           = $_POST['train_id'];
    $station_start_id   = $_POST['station_start_id'];
    $station_arrive_id  = $_POST['station_arrive_id'];
    $day                = $_POST['day'];
    $starting_time      = $_POST['starting_time'];
    $arriving_time      = $_POST['arriving_time'];
    $price              = $_POST['price'];
    $seats_number       = $_POST['seats_number'];

    include('../modals/trips_modal.php');
    $trip = new trip();
    $trip->setIdOfTrip($id_trip);
    $trip->setTrainId($train_id);
    $trip->setStationStartId($station_start_id);
    $trip->setStationArriveId($station_arrive_id);
    $trip->setDay($day);
    $trip->setStartingTime($starting_time);
    $trip->setArrivingTime($arriving_time);
    $trip->setPrice($price);
    $trip->setSeat($seats_number);
    $trip->updateTrip();
    header("location:../Trips/trips.php");
}
