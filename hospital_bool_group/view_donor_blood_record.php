<!DOCTYPE html>
<html>

	<head>
		<title>BLOOD_DONATION_RECORDS</title>
	</head>

	<body>

	<div class="container">
      <div class="row col-md-6 col-md-offset-3" >
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>BLOOD DONATION RECORDS</h1>
		  </div>		
<?php 
	
	$sname="localhost";
	$uname="root";
	$password="";
	$db_name="hospital";
	$donor_id=$_POST["donor_id"];
	$currentDate = new DateTime();
  $released_date= $currentDate->format('Y-m-d H:i:s');
	$realease_status="TRUE";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

$sql_update = "UPDATE blood_record SET released_date = '$released_date', realease_status= '$realease_status' WHERE id = '$donor_id'";
$update = mysqli_query($conn,$sql_update);

							    $sql_get= "SELECT * FROM blood_record WHERE realease_status='$realease_status'";
								$report=mysqli_query($conn,$sql_get);
								if($report == TRUE){

									echo "<table border='5'>";
									echo "<tr><th>ID</th><th>DONOR NAME</th><th>BLOOD GROUP</th><th>BLOOD QUANTITY(l)</th><th>CREATED DATE</th><th>RELEASED DATE</th><th>RELEASE STATUS</th></tr>";

									while($row=mysqli_fetch_array($report))
									{
										echo "<tr><td>";
										echo$row['id'];
										echo "</td><td>";					
										echo$row['donor_name'];
										echo "</td><td>";
										echo$row['blood_group'];
										echo "</td><td>";
										echo$row['blood_quantity'];
										echo "</td><td>";
										echo$row['created_date'];
										echo "</td><td>";
										echo$row['released_date'];
										echo "</td><td>";					
										echo$row['realease_status'];
										echo "</td></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";
									}
									echo"</table>";
								}else{

									echo "NO RECORD FOUND";

					}

		
?>
					<div class="panel-body">
            
      			</div>
			</div> 	
		</div> 
	</div>

			<link rel="stylesheet" type="text/css" href="bootstrap.css" />
			<form>
				<div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
       
                   <button class="btn btn-primary col-xs-4" onclick="window.print();">GET_PDF_FILE</button>
              </div>
			<a href="remove_blood.php" style="display:flex; justify-content: space-around;" >BACK</a>
          	</form>  	

	</body>
</html>
