<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<div id="wrapper">
		<div id="banner">
		</div>

		<nav id="navigation">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="no_book.php">Book A Bike</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>

		<div id="content_area">
			<form action="add_register.php" method="POST">
            Name: <input type="text" name="name"><br />
            Date of Birth (DD/MM/YYYY): <input type="text" name="date_of_birth"><br />
            Name of Contact: <input type="text" name="name_of_contact"><br />
            Email Address: <input type="text" name="email_address"><br />
            Contact Number: <input type="text" name="contact_number"><br />
            <br><input type="submit" value="Submit" name="submit"> <input type="reset" value="Clear"><br>
            </form>
        </div>
		<div id="sidebar">
			
			
		</div>

		<footer>
			<p>All Rights Reserved</p>
		</footer>
	</div>
</body>
</html>

