 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>view user</title>
  <link rel="stylesheet" type="text/css" href="css/style_3.css">
 	<link rel="stylesheet" type="text/css" href="css/view.css">
 	<link rel="stylesheet" type="text/css" href="css/link.css">

 		<style type="text/css">
      button
      {
        transition: 1.5s;
      }
      button:hover
      {
        background-color:#1b579b;
        color: white;
      }
    </style>
 </head>
 <body style="background-color:#bfd2d8;">

 	<?php 

		include 'config.php';

		$selectquery = "SELECT * FROM user_1";

		$result = mysqli_query($con,$selectquery); 

    ?>
       <?php
		    include 'link.php';
       ?>
 		<div class="container">
 			<h1 class="text-center pt-4"><p style="color:white"><B><U>User</U></B></p></h1>
 			<br>

 			<div class="row">
 				<div class="col">
 					<div class="table-responsiv">
 						<table class="table table-hover table-sm table-scriped table-condensed table-borderd">
 							<thead>
 								<tr>
 									<th scope="col" class="text-center py-2">Id</th>
 									<th scope="col" class="text-center py-2">Name</th>
 									<th scope="col" class="text-center py-2">E-mail</th>
 									<th scope="col" class="text-center py-2">Balance</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php
 									while($rows=mysqli_fetch_assoc($result)) 
 									{
 								?>
 									<tr>
 										<td class="py-2"><?php echo $rows['id']?></td>
 										<td class="py-2"><?php echo $rows['name']?></td>
 										<td class="py-2"><?php echo $rows['email']?></td>
 										<td class="py-2"><?php echo $rows['balance']?></td>
 									</tr>
 								<?php
 									}
 								?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
    </body>
 </html>