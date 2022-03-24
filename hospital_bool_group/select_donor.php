<!DOCTYPE html>
<html>

	<head>
		<title>SELECT_DONOR</title>
	</head>
	
	<body>

	<div class="container">
      <div class="row col-md-6 col-md-offset-3" >
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>SELECT DONOR</h1>

		  </div>	
		  <div class="panel-body">
		   <form name="main" action="view_donor_blood_record.php" method="post">
		  <div class="form-group">
                <label for="blood_group">SELECT BLOOD DONOR ID</label>
                  <SELECT type="text" class="form-control" id="donor_id" name="donor_id" >
                    
                  <?php 
	
	$sname="localhost";
	$uname="root";
	$password="";
	$db_name="hospital";
	$blood_group=$_POST["blood_group"];
	$status="FALSE";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

					
							    $sql_get1= "SELECT * FROM blood_record WHERE blood_group='$blood_group' AND realease_status='$status'";
								$report1=mysqli_query($conn,$sql_get1);
								if($report1 == TRUE){
while($row1=mysqli_fetch_array($report1)) 
									{

echo "<OPTION value='";
echo $row1['id'];
echo "'>";
echo $row1['id'];
echo"</OPTION>";
									}
								}  
?>
      
                 </SELECT>
                 <input type="submit" name="submit" value="submit" class="btn btn-primary col-xs-4"></input>  
              </div>	
            </br>
            </br>
            </br>
<?php 
	
	$sname="localhost";
	$uname="root";
	$password="";
	$db_name="hospital";
	$blood_group=$_POST["blood_group"];
	$status="FALSE";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

					
							    $sql_get= "SELECT * FROM blood_record WHERE blood_group='$blood_group' AND realease_status='$status'";
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
				</div>
			<a href="remove_blood.php" style="display:flex; justify-content: space-around;" >BACK</a>
          	</form>  	

	</body>
</html>
