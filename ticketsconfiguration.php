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
}

if(isset($_POST['trip-day']))
{
      $day = $_POST['trip-day'];
      $_SESSION['date'] = $day;
      
      $ticket = new configtickets();
      $ticket ->  fetchtickets($day);      
}

?>

