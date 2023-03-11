<!DOCTYPE html>
<html>
<head>
        <title id="ti">Fire Safety</title>
        <link rel="stylesheet" href="style.css">
		
        <script type="text/javascript" src="jquery-3.6.0.min.js" src="jautocalc.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
      #ven{
            color: red;
        }
      input {
        padding: 10px 10px;
        border: 0;
        font-size: 14px;
      }
      .search {
        width: 80%;
      }
      .submit {
        width: 55px;
        background-color: #1c87c9;
        color: #ffffff;
      }
     </style>
    
    </head>
    <div class="header">
    <a href="#default" class="logo">Fire Safety</a>
            <div class="header-right">
                
              <a class="active" href="home.php">HOME</a>
              <a id="ven" href="vendor.php"><b>NEW VENDOR</b></a>
              <a href="product.php"><b>NEW PRODUCT</b></a>
            
            </div>
          </div>
          <body>
             
                
        <table  align="left" style="width:30%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><h1><b><i>Expenses</i></b></h1></th>
                </tr>
                <br>
               
            <br>
            <br>
            </table>
            <br>
            <br>
            <br>
        <table style="width: 100%;">
            <tr style="background: rgba(217,225,242,1.0);">
                <th class="text-center">
                    HSN CODE
                </th>
                <th class="text-center">
                    CUSTOMER NAME
                </th>
                <th class="text-center">
                    VENDOR NAME
                </th>
                <th class="text-center">
                    PRODUCT NAME
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
                <!-- <th class="text-center">
                    Online Transection
                </th> -->
            </tr>
            <form action="a3.php" method="post">
                <!-- <tbody id="tbody"> -->
                    <tr>
                    <th class="text-center"><input type="text" class="search"  placeholder="HSN CODE" name="hsncode" id="hsncode" required></th>
                    <th class="text-center"><input type="text" class="search"  placeholder="customer Name" name="cname" id="cname" required></th>
                    <th class="text-center"><input type="text" class="search"  placeholder="dealers Name" name="dname" id="dname" list="dn" required>
                    <datalist id="dn">
                            <?php $conn = mysqli_connect("localhost", "root", "", "myoffice");
                            // session_start();
                            // Check connection
                            if($conn === false){
                                die("ERROR: Could not connect. "
                                    . mysqli_connect_error());
                            }
                            $result = mysqli_query($conn,"SELECT dname FROM dealer");
                            ?>
                                  <?php
                           
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                            <option><?php echo $row['dname'];?></option>
                            <?php }
                            mysqli_close($conn);
		                    ?>
                        </datalist>
                    </th>
                    <th class="text-center"><input type="text" class="search" placeholder="product Name" name="pname" id="pname" list="pn" required>
                    <datalist id="pn">
                            <?php $conn = mysqli_connect("localhost", "root", "", "myoffice");
                            // session_start();
                            // Check connection
                            if($conn === false){
                                die("ERROR: Could not connect. "
                                    . mysqli_connect_error());
                            }
                            $result = mysqli_query($conn,"SELECT pname FROM product");
                            ?>
                                  <?php
                           
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                            <option><?php echo $row['pname'];?></option>
                            <?php }
                            mysqli_close($conn);
		                    ?>
                        </datalist>
                    </th>
                    <th class="text-center"><input type="date" class="search" placeholder="Date"name="date" id="date" value="date" required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="Amount" name="amt" id="amt" required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="qty" name="qty" id="qty" required></th>
                    <th class="text-center"><select name="unit" class="search" id="unit" required>
                            <option value="nos">Nos</option>
                            <option value="ft">Ft</option>
                            <option value="mtr">Mtr</option>
                          </select></th>
                    <th class="text-center"><select name="pu" class="search" id="pu" required>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                          </select></th>
                          <th class="text-center"><input type="Date" class="search" placeholder="Price Date" name="pdate" id="pdate" required></th>
                          <th class="text-center"><input type="text" class="search" placeholder="product des." name="pd"  class="abc" id="pd" required></th>
                          <th class="text-center"><input type="text" class="search" placeholder="description" name="db"  class="abc" id="db" required></th>
                          <th class="text-center"><button type="submit" colspan="6" class="submit" id="b3">Submit</button></th>
                    </tr>
                </table>
                <!-- </tbody> -->
            </form> 
            <br>
            <br>
            <br>


            <?php
            // session_start();
            // header("Refresh:0; url=index.php");
            
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
            $company_name=$_COOKIE["company_name"];
            $result = mysqli_query($conn,"SELECT * FROM expenses where company_name='$company_name'");
            // $sql1="select * from expenses";
            // $res=$conn->query($sql1);
            // if($res->num_rows>0){
        
    ?>
            <div class="box-body table-responsive no-padding">
            <table style="width: 100%;" align="center">
                <tr style="background: rgba(217,225,242,1.0);" >
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
                //   require('db_config.php');
                  $count=1;
                      while($row = mysqli_fetch_array($result)){
                        
                ?>
                <tr>
                <th class="text-center"><?php // echo $row['eid']; 
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
                <!-- <th id=<?php //$row['eid'];?>></th> -->
                <th><a onclick="javascript:confirmationDelete($(this));return false;" href="ex-delete.php?id=<?php echo $row['eid']; ?>">Delete</a></th>
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
           
            </table>
            <br>
            
            <table align="center">
                        <br>
                <tr style="background: rgba(217,225,242,1.0);">
                    
                <th class="text-center" colspan="3">Total Expenses</th>
                <th class="text-center" colspan="2">
                    <?php 
    
                        $_SESSION["total"] = $total;
                        echo $_SESSION["total"];
                    ?> ₹
                    </th>
                </tr>
            </table>
               
            <table  align="left" style="width:30%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><h1><b><i>Incomes</i></b></h1></th>
                </tr>
                <br>
               
            <br>
            <br>
            </table>
<br>
<br>
<br>

<form>
    <table style="width: 100%;">
        <tr style="background: rgba(217,225,242,1.0);">
        <th class="text-center">
                customer name
            </th>

            <th class="text-center">
                 Amount
            </th>
            
            <th class="text-center">
                Amount Date
            </th>
            <th class="text-center">
                Discription/Bank-Details
            </th>
            <!-- <th class="text-center">
                Online Transection
            </th> -->
        </tr>
    </form>
        <form action="a4.php" method="post">
            <!-- <tbody id="tbody"> -->
                <tr>
                <th class="text-center"><input type="text" placeholder="customer name" class="search" name="cname" id="cname" required></th>
                <th class="text-center"><input type="number" placeholder="Receive Amount" class="search" name="ramt" id="ramt" required></th>
                <th class="text-center"><input type="Date" placeholder="Price Date" name="rdate" class="search" id="rdate" required></th>
                <th class="text-center"><input type="text" placeholder="description/bank-details" name="indb" class="search" class="abc" id="indb" required></th>
                <th class="text-center"><button type="submit" colspan="6" class="submit" id="b3">Submit</button></th>
                </tr>
           
        </form> 
</table> 
        <br>
        <br>
        <br>     
		<br>
		<br>
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
		$result = mysqli_query($conn,"SELECT * FROM income where company_name='$company_name'");
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
          </tr>
              <?php
              $count=1;
			  	while($row = mysqli_fetch_array($result)){
					
			?>
			<tr>
            <th class="text-center"><?php //echo $row['inid'];
            echo $count; ?></th>
            <th class="text-center"><?php echo $row['cname']; ?></th> 
            <th class="text-center"><?php echo $row['amount'];  ?> ₹</th>
            <th class="text-center"><?php echo $row['amt_date'];  ?></th>
            <th class="text-center"><?php echo $row['des'];  ?></th>
            <th class="text-center"><a href="in-update.php?id=<?php echo $row['inid'];?>">Update</a></th>
            <!-- <th class="text-center"><a href="in-delete.php?id=<?php //echo $row['inid'];?>">Delete</a></th> -->
            <th><a onclick="javascript:confirmationDelete($(this));return false;" href="in-delete.php?id=<?php echo $row['inid']; ?>">Delete</a></th>
				
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
        </table>
        <br>
     
		<table align="center">
                    <br>
            <tr style="background: rgba(217,225,242,1.0);">
                
            <th class="text-center" colspan="3">Total Income</th>
            <th class="text-center" colspan="2">
				<?php 

					$_SESSION["total1"] = $total1;
					echo $_SESSION["total1"];
            // }
				?> ₹
				</th>
			</tr>
		</table>    
		<br>
        <br>     
		<br>
</body>
<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr(href);
}

</script>
</html>
            