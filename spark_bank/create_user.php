
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>creat user</title>
	<link rel="stylesheet" type="text/css" href="css/user2.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	<!--<link rel="stylesheet" type="text/css" href="style5.css">-->
</head>
<body style="background-color:#bfd2d8; color: white;">
	<?php
	include 'config.php';
 
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$balance = $_POST['balance'];

		$sql = "insert into user_1(name,email,balance)
		values('$name','$email','$balance')";

		$result = mysqli_query($con,$sql);

		if ($result) 
		{
			echo "<script>
				alert('data succesful inserted');
					window.location='transfermony.php';
			</script>";
		
		}
	}
    ?>

	<div class="container">
		<div class="user">
			<form action="" method="POST">
				<h2>USER</h2>
				<input type="text" name="name" placeholder ="Name"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<input type="balance" name="balance" placeholder="Balance">
<br>
				<button name="submit">CREAT</button>
				<button name="view">VIEW</button>
			</form>
			
		</div>
		<div class="ime">
			<img src="imeges/logo_2.jpg" width="300px">
		</div>
	</div>
</body>
</html>