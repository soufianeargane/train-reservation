<?php
include "../config/db.php";
include "./timer.php";

$idOfTrip = "1";

$date = new timer();
$arriveDate = $date->fetchArrivingTime($idOfTrip);

foreach ($arriveDate as $row) {
    echo $row["arriving_time"];
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<body>

    <?php
    // $date = date('2022-12-13');
    // $time = date('11:55:00');
    // $date_today = $date .' '. $time;
    $date_today = $row["arriving_time"];
    ?>

    <input id="First" type="text" value="A">
    <input id="Second" type="text" value="B">
    <button onclick="swap()">swap</button>

    <script type="text/javascript">
        function swap(){
            var temp = $('#First').val()
           $('#First').val($('#Second').val());
           $('#Second').val(temp); 
        } 
        var count_id = "<?php echo $date_today ?>";
        var countDownDate = new Date(count_id).getTime();
        var x = setInterval(function() {

            var now = new Date().getTime();

            var distance = (countDownDate - 300000) - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("test").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if(distance<0){
                document.getElementById("test").innerHTML ="No more Reserve"
            }
        })
    </script>
    <?php
    echo '<p id="test"></p>'
    ?>

</body>



</html>