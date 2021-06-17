 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>History</title>
  <link rel="stylesheet" type="text/css" href="css/style_3.css">
 	<link rel="stylesheet" type="text/css" href="css/view.css">
 	<link rel="stylesheet" type="text/css" href="css/link.css">

 </head>
 <body style="background-color:#bfd2d8; color: white;">
   
 	<?php 

		include 'config.php';

		$sql = "select * FROM transaction";

		$query = mysqli_query($con,$sql); 

    ?>
       <?php
		    include 'link.php';
       ?>
 		<div class="container">
 			<h1 class="text-center pt-4"><p style="color:white"><center><p style="color: white;">History</p></center><B><U></U></B></p></h1>
 			<br>
 					<div class="table-responsiv">
 						<table class="table table-hover table-sm table-scriped table-condensed table-borderd">
 							<thead>
 								<tr>
 									<th scope="col" class="text-center py-2">Id</th>
 									<th scope="col" class="text-center py-2">Sender</th>
 									<th scope="col" class="text-center py-2">Receiver</th>
 									<th scope="col" class="text-center py-2">Balance</th>
                           <th scope="col" class="text-center py-2">dete&time</th>
 								</tr>
 							</thead>
 							<tbody>
                  <?php 

                        include 'config.php';

                        $sql = "select * FROM transaction";

                         $query = mysqli_query($con,$sql); 

                 
 									while($rows=mysqli_fetch_assoc($query)) 
 									{
 						?>
 									<tr>
 										<td class="py-2"><?php echo $rows['id']?></td>
 										<td class="py-2"><?php echo $rows['sender']?></td>
 										<td class="py-2"><?php echo $rows['receiver']?></td>
 										<td class="py-2"><?php echo $rows['balance']?></td>
                              <td class="py-2"><?php echo $rows['datetime']?></td>
 									</tr>
 								<?php
 									}
 								?>
 							</tbody>
 						</table>
 					</div>
 		</div>
    </body>
 </html>