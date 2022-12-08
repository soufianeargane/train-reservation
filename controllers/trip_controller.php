<?php
if (isset($_POST['add_trip'])) {
    # code...
    $train_id           = $_POST['train_id'];
    $station_start_id   = $_POST['station_start_id'];
    $station_arrive_id  = $_POST['station_arrive_id'];
    $starting_time      = $_POST['starting_time'];
    $arriving_time      = $_POST['arriving_time'];
    $price              = $_POST['price'];

    include('../modals/trips_modal.php');
    // $trip = new trip($train_id, $station_start_id, $station_arrive_id, $starting_time, $price, $arriving_time);
    $trip = new trip();
    $trip->setTrainId($train_id);
    $trip->setStationStartId($station_start_id);
    $trip->setStationArriveId($station_arrive_id);
    $trip->setStartingTime($starting_time);
    $trip->setArrivingTime($arriving_time);
    $trip->setPrice($price);
    $trip->insertTrip();
    header("location:../Trips/trips.php");
}
