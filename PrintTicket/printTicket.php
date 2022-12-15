<?php
include "../fpdf185/fpdf.php";
session_start();


$nameFromSession = $_SESSION["name"];
$idTrip = "1";



//make a connection to the Data Base
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "sgtt";
$connection = mysqli_connect($serverName, $userName, $password, $dataBase);
//end

$query = mysqli_query($connection, "SELECT * FROM `tickets` INNER JOIN `trips` JOIN `ville` JOIN `train` ON tickets.trip_id =$idTrip AND tickets.city_from_id = ville.id AND trips.train_id=train.id_train");
$data = mysqli_fetch_assoc($query);

$query2 = mysqli_query($connection, "SELECT * FROM `tickets` INNER JOIN `trips` JOIN `ville` ON tickets.trip_id =$idTrip AND tickets.city_to_id = ville.id");
$data2 = mysqli_fetch_assoc($query2);





$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);

// Imag('image path',x position , y position , width , height)
$pdf->Image('../img/test.jpg', 10, 10, 189, 55);

$pdf->Cell(189, 55, '', 1, 0);
$pdf->Cell(1, 1, '', 0, 1);


//Start space
$pdf->Cell(100, 5, '', 0, 1);

//setfont('FontFamily', B / I / U , FontSize)

//Cell(width,height ,'text',border,new line,'text align')
$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(100, 5, 'Name Of Passanger', 0, 0);
$pdf->Cell(45, 5, 'Price', 0, 0);
$pdf->Cell(45, 5, 'Train', 0, 1); // end line

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(100, 5, $nameFromSession, 0, 0);
$pdf->Cell(45, 5, $data["price"], 0, 0);
$pdf->Cell(45, 5, $data["name"], 0, 1); //end line

//espace
$pdf->Cell(190, 5, '', 0, 1); //end line


$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(45, 5, 'From', 0, 0);
$pdf->Cell(45, 5, 'To', 0, 0);
$pdf->Cell(100, 5, '', 0, 1); //end line

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(45, 5, $data["ville"], 0, 0);
$pdf->Cell(45, 5, $data2["ville"], 0, 0);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(27.5, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Seat', 0, 0);
$pdf->Cell(27.5, 5, '', 0, 1); //end line

$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(45, 5, '', 0, 0);
$pdf->Cell(45, 5, '', 0, 0);
$pdf->SetFont('', '', 12);
$pdf->Cell(27.5, 5, '', 0, 0);
$pdf->Cell(45, 5, $data["seat"], 0, 0);
$pdf->Cell(27.5, 5, '', 0, 1); //end line

//espace
$pdf->Cell(190, 5, '', 0, 1); //end line

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Depature', 0, 0);
$pdf->Cell(45, 5, 'Arrive', 0, 0);
$pdf->Cell(100, 5, '', 0, 1); //end line

$pdf->SetFont('', '', 12);
$pdf->Cell(2, 5, '', 0, 0);
$pdf->Cell(45, 5, $data["starting_time"], 0, 0);
$pdf->Cell(45, 5, $data["arriving_time"], 0, 0);

//end space
$pdf->Cell(100, 5, '', 0, 1);



















// this mthode generate pdf file and send it to client
$pdf->Output();
