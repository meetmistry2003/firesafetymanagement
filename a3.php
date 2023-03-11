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
        //     header("Location: /id20230661_myoffice/index.php");
        //     exit;
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
		$date=$_POST['date'];
		$hsncode=$_POST['hsncode'];
        $dname=$_POST['dname'];
		$cname=$_POST['cname'];
		$pname=$_POST['pname'];
		$amt=$_POST['amt'];
		$qty=$_POST['qty'];
		$unit=$_POST['unit'];
        $p_u=$_POST['pu'];
		$pdate=$_POST['pdate'];
        $db=$_POST['db'];
		$pd=$_POST['pd'];
		$company_name=$_COOKIE["company_name"];
		$sql = "INSERT INTO expenses VALUES ('','$hsncode','$cname','$dname','$pname','$date','$amt','$qty','$unit','$p_u','$pdate','$pd','$db','$company_name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('data stored in a database successfully');</script>";
		} 
        else
        {
			 echo "ERROR: Hush! Sorry $sql.";
		}
		
		//$result = mysqli_query($conn,"SELECT * FROM two");
		$total=0;
		$result = mysqli_query($conn,"SELECT * FROM expenses");
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
                    dealer name
                </th>
                <th class="text-center">
                    product name
                </th>
                <th class="text-center">
                    date
                </th>
                <th class="text-center">
                    amount
                </th>
                <th class="text-center">
                    qty
                </th>
                <th class="text-center">
                    Paid/Unpaid
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
				<td><?php echo $row['eid']; ?></td>
				<td><?php echo $row['cname']; ?></td> 
				<td><?php echo $row['dname'];  ?></td>
				<td><?php echo $row['pname'];  ?></td>
				<td><?php echo $row['date'];  ?></td>
				<td><?php echo $row['amount'];  ?></td>
				<td><?php echo $row['qty'];  ?></td>
				<td><?php echo $row['p_u'];  ?></td>
				<td><?php echo $row['amt_date'];  ?></td>
				<td><?php echo $row['des'];  ?></td>
				<!-- <td><a href="ex-update.php?id= -->
				<?php //echo $row['eid'];?>
				<!-- ">Update</a></td> -->
				<td><a href="ex-delete.php?id=<?php echo $row['eid'];?>">Delete</a></td>
				
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
                
                <td colspan="3">Total Expenses</td>
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
ALTER TABLE expenses DROP eid;

ALTER TABLE expenses ADD  eid BIGINT( 255 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (eid) -->