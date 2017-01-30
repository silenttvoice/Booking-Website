<?php
session_start();
?>
<?php
require 'connect.php';

// Get values from form 
$datepicker = $_POST['datepicker'];
//$time = $_POST['time'];


$sql="INSERT INTO $tbl_name(name, user_id, bike_id, bike_name, datepicker)VALUES('{$_SESSION['name']}', '{$_SESSION['user_id']}', '{$_SESSION['id']}', '{$_SESSION['bike_name']}', '$datepicker' )";

$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo " <h2>Thankyou! You have successfully booked a bike(s)</h2>";
echo "<BR>";
echo "Name: {$_SESSION['name']}";
echo "<BR>";
echo "Bike: {$_SESSION['bike_name']}";
echo "<BR>";
echo "Date: $datepicker";
echo "<BR>";
echo "<BR>";
echo "<a href='index.php'> Click here to go to index page</a>";
}

else {
echo "ERROR";
}

?>
