<?php
// header("Refresh:0; url=index.php");
// session_start();
// if(!isset($_SESSION['login'])){ //if login in session is not set
//     header("Location: index.php");
//     exit;
// }
// else{
// ALTER TABLE cust_det AUTO_INCREMENT=1;

		$conn = mysqli_connect("localhost", "root", "", "myoffice");
		// session_start();
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$company_name=$_POST['company_name'];
        $owner_name=$_POST['owner_name'];
        $password=$_POST['password'];
		// echo $est;
		$sql = "INSERT INTO contractor VALUES ('$company_name','$owner_name','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('data stored in a database successfully');</script>";
		} 
        else
        {
			 echo "ERROR: Hush! Sorry $sql.";
		}

        $result = mysqli_query($conn,"SELECT * FROM contractor");
		?>
		<div class="box-body table-responsive no-padding">
		<table style="width: 50%;" align="center">
            <tr style="background: rgba(217,225,242,1.0);">
              <th class="text-center" name="p1">sr no.</th>
              <th class="text-center">Company name</th>
              <th class="text-center">Owner name</th>
              <th class="text-center">Password</th>
          </tr>
              <?php
		$count=1;
		while($row = mysqli_fetch_array($result))
        {
			?>
	<tr>
	<th class="text-center"><?php echo $count?></th> 
	<th class="text-center"><?php echo $row['company_name'];  ?></th>
    <th class="text-center"><?php echo $row['owner_name'];  ?></th>
	<th class="text-center"><?php echo $row['password'];  ?></th>
	</tr>
	<?php
		$company_name= $row['company_name'];
        $owner_name= $row['owner_name'];
		$password= $row['password'];
		$count=$count+1;
        }
		// header("location: /id20230661_myoffice1/expenses-profit.php");
    	// exit;
				// setcookie("id", $id);
				// setcookie("name", $cname);
				// setcookie("amo2", $amount);
					// $_SESSION["id"]= $id;
					// $_SESSION["name"]= $cname;
					// $_SESSION["amo2"] = $amount;
					// echo $_SESSION["name"];
					// echo $_SESSION["amo2"];
	
		// Close connection
		mysqli_close($conn);
      // }
      header("location: /Myoffice/login.php");
			exit;
		?>

</body>
</html>