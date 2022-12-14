<!DOCTYPE html>
<?php
include_once './config/db.php';
session_start();
class Ticket extends Dbcon
{
    public function getTicket()
    {
        $db = $this->connect();
        $sql = "SELECT tickets.*, v_start.ville as start , s_end.ville as end, price FROM tickets inner join ville as v_start on v_start.id=tickets.city_from_id inner join ville as s_end on s_end.id=tickets.city_to_id INNER join trips on tickets.trip_id = trips.id_trip
        WHERE tickets.user_id = $_SESSION[id]";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
$ticket = new Ticket();
$tickets = $ticket->getTicket();
// echo "<pre>";
// print_r($tickets);
// echo "</pre>";
// echo $_SESSION['id'];


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
</head>

<body>

    <div class=" grid justify-center  pt-10">
        <h1 class="text-center font-bold text-sky-600 text-4xl">Check all your reservations</h1>

    </div>


    <?php
    foreach ($tickets as $ticket) {


    ?>
        <div class="  rounded-lg md:h-96">
            <div class="sm:block md:flex   justify-center pt-10 ">

                <div class="grid gap-4 block mx-auto w-4/5 p-6 md:p-14 bg-gray-100 border border-gray-200 rounded-lg shadow-md md:w-6/12 hover:bg-gray-200 ">

                    <div class="lg:grid grid-cols-2 grid grid-cols-2">
                        <h5 class="font-bold">City from :</h5>
                        <h6><?php echo $ticket['start'] ?></h6>
                    </div>

                    <div class="lg:grid grid-cols-2 grid grid-cols-2">
                        <h5 class="font-bold">City to :</h5>
                        <h6><?php echo $ticket['end'] ?></h6>
                    </div>

                    <div class="lg:grid grid-cols-2 grid grid-cols-2">
                        <h5 class="font-bold">Departure :</h5>
                        <h6><?php echo  $ticket['Reservation_time'] ?></h6>
                    </div>
                    <div class="lg:grid grid-cols-2 grid grid-cols-2">
                        <h5 class="font-bold">Price :</h5>
                        <h6><?php echo  $ticket['price'] ?> $</h6>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- Slider controls -->

    </div>

    <!-- js -->
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <!-- <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script> -->
</body>

</html>