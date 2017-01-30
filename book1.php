<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Book A Bike</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<div id="wrapper">
		<div id="banner">
		</div>

		<nav id="navigation">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="book1.php">Book A Bike</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>

		<div id="content_area">
		<h2>Please Login To Book A Bike</h2>

<?php
require 'connect.php';

$select_posts = "select * from bikes ";

$run_posts = mysql_query($select_posts);
?>
<table cellpadding="2" cellspacing="2" border="2">
	<tr>
		
		<th>Name</th>
		<th>Image</th>
		<th>Select Bike</th>
	</tr>
	<?php while($row=mysql_fetch_array($run_posts)){ ?>
	<tr>
		
		<td><?php echo $row[bike_name]; ?></td>
		<?php $_SESSION['bike_name'] = $row['bike_name'];?>
		<?php echo "<td>";?> <img src="<?php echo $row[bike_image]; ?>" height="250" width="300"> <?php echo "</td>";?>
		<td><a href="book2.php?id=<?php echo $row[bike_id];?>">Select</td>
	</tr>
	<?php } ?>
 
</table>
    </div>

		<div id="sidebar">
			
			Welcome: <?php echo $_SESSION['name']; ?> <br /><br />
			<a href="logout.php">Logout</a>
		</div>

	    <footer>
			<p>All Rights Reserved</p>
	    </footer>
	</div>
</body>
</html>

