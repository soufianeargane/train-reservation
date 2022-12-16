<?php

$date = new timer();
$arriveDate = $date->fetchArrivingTime($idOfTrip);

foreach ($arriveDate as $row) {
    // echo $row["arriving_time"];
}

// $date = date('2022-12-13');
// $time = date('11:55:00');
// $date_today = $date .' '. $time;
$date_today = $row["arriving_time"];
?>



<script type="text/javascript">
    var count_id = "<?php echo $date_today ?>";
    var countDownDate<?php echo $idOfTrip; ?> = new Date(count_id).getTime();
    var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = (countDownDate<?php echo $idOfTrip; ?> - 300000) - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("test<?php echo $_SESSION["croissante"] ?>").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            document.getElementById("test<?php echo $_SESSION["croissante"] ?>").innerHTML = "No more Reserve";
            $('#reservationYesOrNo<?php echo $_SESSION["croissante"] ?>').val("No") ;
        }
    })
</script>

<?php

echo '<p id="test' . $_SESSION["croissante"] . '"></p>';

$_SESSION["croissante"] = $_SESSION["croissante"] + 1;
?>