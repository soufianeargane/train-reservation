<?php
//If the save button of station modal has been pressed
if (isset($_POST["addBtnStation"])) {

    $station = $_POST["nameOfStation"];
    $city = $_POST["cityWhereTheStationExist"];

    include "../connection.php";
    include "../Crud-station/crud-station-controle-classes.php";

    $newStation = new crudStationConfigue();
    $newStation->setNameOfStation($station);
    $newStation->setCityOfStation($city);
    $newStation->insertData();

    //go back to the previous page
    //https://stackoverflow.com/questions/5285031/back-to-previous-page-with-header-location-in-php
    // header("location:javascript://history.go(-1);");
    header("location:../Station/station.php");
}

if (isset($_POST["deleteBtnStation"])) {

    $id = $_POST["idOfStation"];

    include "../connection.php";
    include "../Crud-station/crud-station-controle-classes.php";

    $delete = new crudStationConfigue();
    $delete->setIdOfStation($id);
    $delete->delete();

    header("location:../Station/station.php");
}

if (isset($_POST["updateBtnStation"])) {

    $id = $_POST["idOfStation"];
    $station = $_POST["nameOfStation"];
    $city = $_POST["cityOfStation"];

    include "../connection.php";
    include "../Crud-station/crud-station-controle-classes.php";

    $update = new crudStationConfigue();
    $update->setIdOfStation($id);
    $update->setNameOfStation($station);
    $update->setCityOfStation($city);
    $update->update();

    header("location:../Station/station.php");

}
