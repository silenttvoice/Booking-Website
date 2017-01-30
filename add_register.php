<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="booking"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$date_of_birth=$_POST['date_of_birth'];
$name_of_contact=$_POST['name_of_contact'];
$email_address=$_POST['email_address'];
$contact_number=$_POST['contact_number'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, date_of_birth, name_of_contact, email_address, contact_number)VALUES('$name','$date_of_birth','$name_of_contact','$email_address','$contact_number')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
header('Location: login.php');
}

else {
echo "ERROR";
}
?> 

