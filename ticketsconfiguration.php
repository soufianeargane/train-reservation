<?php
session_start();

include './ticketsclass.php';
include './config/db.php';
class configtickets extends Dbcon
{
      public function fetchtickets($date)
      {
            $stmt = $this->connect()->prepare("SELECT `id_trip`, `train_id`, `station_start_id`, `station_arrive_id`, `starting_time`, `price`, `arriving_time`, `day` FROM `trips` WHERE `day` =:date");
            $arr['date']=$date;
            
            
            $stmt ->execute($arr);
            
            $result = $stmt->fetchAll();
            if(is_array($result))
            {
                 return $result;
            }
            else
            {
                  return false;
            }
      }

      public function addticket($var1,$var2,$var3,$var4,$var5,$var6,$var7)
      {
            $sql= "INSERT INTO `tickets`(`city_from_id`, `city_to_id`, `Departure`, `trip_id`, `id_user`, `qte`, `Total_price`) VALUES (?,?,?,?,?,?,?)";
            $stm = connect() ->prepare($sql);
            $stmt->execute([$name, $surname, $sex]);
      }

      public function getarrivingcity($id)
      {
            
            $stmt = $this->connect()->prepare("SELECT `ville` FROM `ville` WHERE `id` =:id");
            $arr1['id']=$id;
            $stmt ->execute($arr1);
            $result = $stmt->fetchAll();
            if(is_array($result))
            {return $result;}
            else
            { return false; }
      }
}



if(isset($_POST['showticket']))
{
      unset($_SESSION['price']);
      unset($_SESSION['qte.']); 
      unset($_SESSION['qte1']);
      $_SESSION['qte.']  = 1;
      $_SESSION['qte1']  = 1;
      $id = $_POST['station-arrive'];
      $_SESSION['price'] = $_POST['price'];
      $name = new configtickets();
      $name  -> getarrivingcity($id);

      $_SESSION['station_start_id'] = $_POST['station_start_id'];
      $_SESSION['station_arrive_id'] = $_POST['station_arrive_id'];
      $_SESSION['starting_time'] = $_POST['starting_time'];
      $_SESSION['id_trip'] = $_POST['id_trip'];
       $id_user= $_SESSION['id'];
       $_SESSION['totalprice'] = $_POST['total-PRICE'];
       $name ->addticket($_SESSION['station_start_id'],$_SESSION['station_arrive_id'],$_SESSION['starting_time'],$_SESSION['id_trip'], $id_user, $_SESSION['qte.'], $_SESSION['totalprice'] );


}


if(isset($_POST['calcualte']))
{

 unset($_SESSION['qte.']);
 $_SESSION['qte.']  = 1;
 $_SESSION['qte.'] = $_POST['quantity'];
 $start_id = $_SESSION['station_start_id'];
 $arrive_id = $_SESSION['station_arrive_id'];
 $starting_time =$_SESSION['starting_time'];
 $trip_id = $_SESSION['id_trip'];
 $user_id = $_SESSION['id'];


$anc = new configtickets();
}

if(isset($_POST['trip-day']))
{
      $day = $_POST['trip-day'];
      $_SESSION['date'] = $day;
      $ticket = new configtickets();
      $ticket ->  fetchtickets($day);      
}

if(isset($_POST['firstclassbtn']))
{
      unset($_SESSION['qte1']);
      $_SESSION['qte1']  = 1;
      $_SESSION['qte1'] = $_POST['quantity1'];
      $anc = new configtickets();
      
}




?>

