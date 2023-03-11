<html>
<head>
        <title id="ti">Fire Safety</title>
        <link rel="stylesheet" href="style.css">
		
        <script type="text/javascript" src="jquery-3.6.0.min.js"
        src="jautocalc.js"></script>

        <style>
   html{
  height: 100%;
}
body{
  position: relative;
  height: 100%;
}

body:before{
  content: ' ';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background:  url(background.png);
  background-position: center;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  z-index: -1;
  opacity: 2.5;
}
.header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 15px 10px;
      }
      
      .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
      }
      
      .header a.logo {
        font-size: 25px;
        font-weight: bold;
      }
      
      .header a:hover {
        background-color: #ddd;
        color: black;
      }
      
      .header a.active {
        background-color: rgb(253, 74, 74);
        color: white;
      }
      
      .header-right {
        float: right;
      }
      
      @media screen and (max-width: 500px) {
        .header a {
          float: none;
          display: block;
          text-align: left;
        }
        
        .header-right {
          float: none;
        }
      }

      input {
        padding: 10px 10px;
        border: 0;
        font-size: 16px;
      }
      .search {
        width: 100%;
      }
      .submit {
        width: 70px;
        background-color: #1c87c9;
        color: #ffffff;
      }
     </style>
    
    </head>
    <div class="header">
            <a href="#default" class="logo">Fire Safety</a>
            <div class="header-right">
                
              <a class="active" href="home.php">BACK</a>

              
            </div>
          </div>
    <body>
        <br>
        <br>
        <br>
        <table align="center" >
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th class="text-center"><b>Search :</b> 
                    <form action="view.php" method="post">
                <!-- <tbody id="tbody"> -->
                <td><input type="text" class="search" placeholder="search customer details" name="cname" id="cname" required></td>
                        <td><button type="submit" class="submit" colspan="4" onclick="btn2()" class="btn btn-outline-success" id="b2">search</button></td>
                    
                </table>
                <!-- </tbody> -->
            </form> 
                    </th>
                </tr>
                </tr>
        </table>
        
                
        <table align="left" style="width:30%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><h1><b><i>Expenses</i></b></h1></th>
                </tr>
            </table>
                
               


<?php
            // session_start();
            // $cn= $_SESSION['cname'];
        //    $cn = $_GET['c'];
        //    echo $cn;
        // header("Refresh:0; url=index.php");
        // session_start();
        // if(!isset($_SESSION['login'])){ //if login in session is not set
        //     header("Location: /id20230661_myoffice/index.php");
        //     exit;
        // }
        // else{
            $conn = mysqli_connect("localhost", "root", "", "myoffice");
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            // $result = mysqli_query($conn,"SELECT * FROM two");
            $total=0;
            $cn=" ";
            $cn=$_POST["cname"];
            $company_name=$_COOKIE["company_name"];
            $result = mysqli_query($conn,"SELECT * FROM expenses where cname='$cn' AND company_name='$company_name'");
            // $sql1="select * from expenses";
            // $res=$conn->query($sql1);
            // if($res->num_rows>0){
        
    ?>
   

            <div class="box-body table-responsive no-padding">
            <table style="width: 100%;" align="center">
                <tr style="background: rgba(217,225,242,1.0);">
                <th class="text-center" name="p1">ID</th>
                    <th class="text-center">
                        HSN CODE
                    </th>
                    <th class="text-center" style="width: 8%;">
                        CUSTOMER NAME
                    </th>
                    <th class="text-center">
                    VENDOR NAME
                    </th>
                    <th class="text-center">
                        PRODUCT
                        NAME
                    </th>
                    <th class="text-center">
                        DATE
                    </th>
                    <th class="text-center">
                        AMOUNT
                    </th>
                    <th class="text-center">
                        QTY
                    </th>
                    <th class="text-center">
                        UNIT
                    </th>
                    <th class="text-center">
                        PAID/UN.
                    </th>
                    
                    <th class="text-center">
                        AMOUNT DATE
                    </th>
                    <th class="text-center">
                        PRODUCT DES.
                    </th>
                    <th class="text-center">
                        DESCRIPTION
                    </th>
                    
              </tr>
                  <?php
                  $count=1;
                      while($row = mysqli_fetch_array($result)){
                        
                ?>
                <tr class="text-center"><th class="text-center"><?php // echo $row['eid']; 
                echo $count;?></th>
                <th class="text-center"><?php echo $row['hsncode']; ?></th>
                <th class="text-center"><?php echo $row['cname']; ?></th> 
                <th class="text-center"><?php echo $row['dname'];  ?></th>
                <th class="text-center"><?php echo $row['pname'];  ?></th>
                <th class="text-center"><?php echo $row['date'];  ?></th>
                <th class="text-center"><?php echo $row['amount'];  ?> ₹</th>
                <th class="text-center"><?php echo $row['qty'];  ?></th>
                <th class="text-center"><?php echo $row['unit']; ?></th>
                <th class="text-center"><?php echo $row['p_u'];  ?></th>
                <th class="text-center"><?php echo $row['amt_date'];  ?></th>
                <th class="text-center"><?php echo $row['productdis'];  ?></th>
                <th class="text-center"><?php echo $row['des'];  ?></th>
                    <th class="text-center"><a href="ex-update.php?id=<?php echo $row['eid'];?>">Update</a></th>
                    <th class="text-center"><a href="ex-delete.php?id=<?php echo $row['eid'];?>">Delete</a></th>
                    
                </tr>
    
                <!-- echo $row['id'] . " " . $row['date']. $row['dealer_name']. $row['amount']. $row['p_u']. $row['pdate']. $row['description'];
                echo "<br />"; -->
               
               <?php
               $total=$total+$row['amount'];
               $count++;
                    }
                
               
            
            
            //echo $total;
            // echo $total;
            // Close connection
            mysqli_close($conn);
            
            ?>
            <br>
        <br>
            <table align="center" style="width: 18%" >
                        <br>
                <tr style="background: rgba(217,225,242,1.0);">
                    
                    <th class="text-center" colspan="4">Total Expenses</th>
                    <th class="text-center" colspan="2">
                    <?php 
    
                        $_SESSION["total"] = $total;
                        echo $_SESSION["total"];
                    ?>
                    ₹</th>
                </tr>
            </table>
               

<br>
            <br>
            <br>     
		
                
        <table align="left" style="width:30%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><h1><b><i>Income</i></b></h1></th>
                </tr>
            </table>
<?php

		$conn = mysqli_connect("localhost", "root", "", "myoffice");
		// Check connection
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		//$result = mysqli_query($conn,"SELECT * FROM two");
		$total1=0;
        $company_name=$_COOKIE["company_name"];
		$result = mysqli_query($conn,"SELECT * FROM income where cname='$cn' AND company_name='$company_name'");
		// $sql1="select * from expenses";
		// $res=$conn->query($sql1);
		// if($res->num_rows>0){
	
?>
		<div class="box-body table-responsive no-padding">
		<table style="width: 100%;" align="center">
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
                <th class="text-center">
                    Update
                </th>
                <th class="text-center">
                    Update
                </th>
          </tr>
              <?php
              $count=1;
			  	while($row = mysqli_fetch_array($result)){
					
			?>
			<tr>
				<th><?php echo $count; ?></th>
				<th><?php echo $row['cname']; ?></th> 
				<th><?php echo $row['amount'];  ?> ₹</th>
				<th><?php echo $row['amt_date'];  ?></th>
				<th><?php echo $row['des'];  ?></th>
				<th><a href="ex-update.php?id=<?php echo $row['inid'];?>">Update</a></th>
				<th><a href="ex-delete.php?id=<?php echo $row['inid'];?>">Delete</a></th>
				
			</tr>

            <!-- echo $row['id'] . " " . $row['date']. $row['dealer_name']. $row['amount']. $row['p_u']. $row['pdate']. $row['description'];
            echo "<br />"; -->
           
		   <?php
		   $total1=$total1+$row['amount'];
           $count++;
				}
			
		   
		
		
		//echo $total;
		// echo $total;
		// Close connection
		mysqli_close($conn);
		?>
		 <table align="center" style="width: 18%" >
                        <br>
                <tr style="background: rgba(217,225,242,1.0);">
                    
                    <th class="text-center" colspan="4">Total Income</th>
                    <th class="text-center" colspan="2">
				<?php 

					$_SESSION["total1"] = $total1;
					echo $_SESSION["total1"];
            // }
				?>
				₹</th>
			</tr>
		</table>    
		

</body>
</html>