

<?php

include "../Classes/cities.php";
class Train extends Dbcon
{

    private $id_train;
    private $Name_train;



    public function setIdTrain($id_train)
    {
        $this->id_train = $id_train;
    }

    public function getIdTrain()
    {
        return $this->id_train;
    }

    public function setNameTrain($Name_train)
    {
        $this->Name_train = $Name_train;
    }

    public function getNameTrain()
    {
        return $this->Name_train;
    }



    public function InsertData()
    {
        $stm = $this->connect()->prepare("INSERT INTO `train`(`name`) VALUES (?)");
        $stm->execute([$this->Name_train]);
    }


    public function ShowAllData()
    {
        $stm = $this->connect()->prepare("SELECT * FROM `train`");
        $stm->execute();
        return $stm->fetchAll();
    }



    public function update()
    {
        $stm = $this->connect()->prepare("UPDATE `train` SET `name`=? WHERE id_train=?");

        $stm->execute([$this->Name_train, $this->id_train]);
    }

    public function delete()
    {
        $stm = $this->connect()->prepare("DELETE FROM `train` WHERE id_train=?");
        $stm->execute([$this->id_train]);
        // return $stm->fetchAll();
    }
    public function CountTrain(){
        $stm = $this->connect()->prepare("SELECT COUNT(*) as 'countTrain' FROM `train`");
        $stm->execute(); 
        $s = $stm->fetch();
        return $s['countTrain'];

    }
}

// PROSESS

if (isset($_POST["Add_train"])) {

    $Name_train = $_POST["Name_train"];



    $New_train = new train();
    $New_train->setNameTrain($Name_train);

    $New_train->InsertData();


    header("location:../Train/train.php");
}


//show data

$show_data  =   new train();

$all_data   =   $show_data->ShowAllData();


if (isset($_GET["id_train"])) {

    // $id_train=$_GET["id_train"];

    $deleteTrain = new Train();

    $deleteTrain->setIdTrain($_GET["id_train"]);

    $deleteTrain->delete();


    header("location: ../Train/train.php");
}
if (isset($_POST["update"])) {

    $Name_update = new Train();

    $Name_update->setIdTrain($_POST["id_trainn"]);

    $Name_update->setNameTrain($_POST["Name_update"]);

    $Name_update->update();

    header("location: ../Train/train.php");
}






?>