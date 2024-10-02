<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/HotelReservationSystemforWeddings/configurations/config.php';

$userfname=$_POST ["userFName"];
$userusername=$_POST ["userName"];
$useremail=$_POST ["userEmail"];
$userpassword=$_POST ["userPSW"];

$sql="INSERT INTO users VALUES('','$userfname','$userusername','$useremail','$userpassword')";

if($connection->query($sql))
{
    header("Location: userAccount.php");
    exit(); 

}
else
{
    echo "Error".$connection->error;
}

$connection->close();

?>