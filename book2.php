<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: "0", maxDate: "+14D" });
  });
  </script>
<?php 
session_start();
?>
<?php
require 'connect.php';

if(isset($_GET['id'])){

$took_id = $_GET['id'];
$_SESSION['id'] = $_GET['id'];
	
$select_query = "select * from bikes where bike_id='$took_id'";

$run_query = mysql_query($select_query);
?>
<table cellpadding="2" cellspacing="2" border="2">
	<tr>
		
		<th>Name</th>
		<th>Image</th>
		<th>Select Date</th>
		<th>Book</th>
		
	</tr>
	<?php while($row=mysql_fetch_array($run_query)){ ?>
	<tr>
		<form action="book3.php" method="POST">
		<td><?php echo $row[bike_name]; ?></td>
		<?php echo "<td>";?> <img src="<?php echo $row[bike_image]; ?>" height="250" width="300"> <?php echo "</td>";?>
		<td>Select Date: <input type="text" id="datepicker" name="datepicker"></td>
		<td><input type="submit" name="Submit" value="Book"></td>
	</tr>
	<?php }} ?>
</table>
