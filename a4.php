<html>
<body>
<table border="1" align="left">
                    <br>
            <tr style="background: rgba(217,225,242,1.0);">
                <td colspan="4">
					<a href="expenses-profit.php">Back</a>
				</td>
			</tr>
		</table>      
		<br>
		<br>
<?php
	// header("Refresh:0; url=index.php");
	// session_start();
	// if(!isset($_SESSION['login'])){ //if login in session is not set
	// 	header("Location: /id20230661_myoffice/index.php");
	// 	exit;
	// }
	// else{
		$conn = mysqli_connect("localhost", "root", "", "myoffice");
		session_start();
		// Check connection
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$sql2 = "SET GLOBAL FOREIGN_KEY_CHECKS=0";
		mysqli_query($conn, $sql2);
		$cname=$_POST['cname'];
		$amt=$_POST['ramt'];
		$pdate=$_POST['rdate'];
        $db=$_POST['indb'];
		$company_name=$_COOKIE["company_name"];
		$sql = "INSERT INTO income VALUES ('','$cname','$company_name','$amt','$pdate','$db')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('data stored in a database successfully');</script>";
		} 
        else
        {
			 echo "ERROR: Hush! Sorry $sql.";
		}
		
		//$result = mysqli_query($conn,"SELECT * FROM two");
		$total=0;
		$result = mysqli_query($conn,"SELECT * FROM income");
		// $sql1="select * from expenses";
		// $res=$conn->query($sql1);
		// if($res->num_rows>0){
			header("location: expenses-profit.php");
			exit;
?>
		<div class="box-body table-responsive no-padding">
		<table style="width: 100%;" border="1" align="center">
            <tr style="background: rgba(217,225,242,1.0);">
                <th class="text-center" name="p1">ID</th>
				<th class="text-center">
                    customer name
                </th>
                <th class="text-center">
                    amount
		</th>
                <th class="text-center">
                    Amount Date
                </th>
                <th class="text-center">
                    Discription/Bank-Details
                </th>
          </tr>
              <?php
			  	while($row = mysqli_fetch_array($result)){
					
			?>
			<tr>
				<td><?php echo $row['inid']; ?></td>
				<td><?php echo $row['cname']; ?></td> 
				<td><?php echo $row['amount'];  ?></td>
				<td><?php echo $row['amt_date'];  ?></td>
				<td><?php echo $row['des'];  ?></td>
				<!-- <td><a href="ex-update.php?id= -->
				<?php //echo $row['inid'];?>
				<!-- ">Update</a></td> -->
				<td><a href="ex-delete.php?id=<?php echo $row['inid'];?>">Delete</a></td>
				
			</tr>

            <!-- echo $row['id'] . " " . $row['date']. $row['dealer_name']. $row['amount']. $row['p_u']. $row['pdate']. $row['description'];
            echo "<br />"; -->
           
		   <?php
		   $total=$total+$row['amount'];
				}
			
		   
		
		
		//echo $total;
		// echo $total;
		// Close connection
		mysqli_close($conn);
		?>
		<table border="1" align="center">
                    <br>
            <tr style="background: rgba(217,225,242,1.0);">
                
                <td colspan="3">Total Income</td>
                <td colspan="2">
				<?php 

					$_SESSION["total"] = $total;
					echo $_SESSION["total"];
			// }
				?>
				</td>
			</tr>
		</table>    
		
</body>
</html>
<!-- 
ALTER TABLE income DROP inid;

ALTER TABLE income ADD inid BIGINT( 255 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (inid) -->




