<?php
// header("Refresh:0; url=index.php");
// session_start();
// if(!isset($_SESSION['login'])){ //if login in session is not set
//     header("Location: /id20230661_myoffice/index.php");
//     exit;
// }
// else{
$hsncode=" ";
$id=" ";
$date=" ";
$product=" ";
$dname=" ";
$amo=" ";
$pu=" ";
$qty=" ";
$unit=" ";
$amodate=" ";
$dis=" ";
$pd=" ";

$conn = mysqli_connect("localhost", "root", "", "myoffice");



    // if(!isset($_GET["id"])){
    //     header("location: /id20230661_myoffice1/ex-update.php");
    //     exit;
    // }
    $id = $_GET["id"];
    echo "<script>Console.log('$id');</script>";

    $sql1="SELECT * FROM expenses WHERE eid=$id";

    $result1 = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result1);
    $hsncode=$row["hsncode"];
    $cname=$row["cname"];
    $dname=$row["dname"];
    $product=$row["pname"];
    $date=$row["date"];
    $amo=$row["amount"];
    $qty=$row["qty"];
    $unit=$row["unit"];
    $pu=$row["p_u"];
    $amodate=$row["amt_date"];
    $pd=$row["productdis"];
    $dis=$row["des"];
//     echo "<script>Console.log('$id');</script>";
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title id="tie">TIE</title>
        <link rel="stylesheet" href="style.css">
		
        <script type="text/javascript" src="jquery-3.6.0.min.js"
        src="jautocalc.js"></script>
        <!DOCTYPE html>
<html>
<head>
        <title id="ti">TIE</title>
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
        font-size: 14px;
      }
      .search {
        width: 80%;
      }
      .submit {
        width: 70px;
        background-color: #1c87c9;
        color: #ffffff;
      }
     </style>
    
    </head>
    <div class="header">
    <a href="#default" class="logo">TRUST INDIA EXIM</a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo"> </a>
			<a href="#default" class="logo">Expenses-Update of  <?php echo $cname; ?> </a>
            <div class="header-right">
                
              <a class="active" href="expenses-profit.php">BACK</a>

              
            </div>
          </div>
    </head>
    <body>
    <br>
            
                    <br>
                    <br>
                    <table style="width: 100%;">
            <tr style="background: rgba(217,225,242,1.0);">
            <th class="text-center">
                        HSN CODE
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
            <form action="test.php" method="post">
                <!-- <tbody id="tbody"> -->
                <input type="hidden" value="<?php echo $id; ?>" name="id" id="id">
                    <!-- <tr> -->
<!--                     
                    <th class="text-center"><input type="text" class="search"  placeholder="dealers Name" name="dname" id="dname" value="<?php //echo $dname;?>" required></th>
                    <th class="text-center"><input type="text" class="search" placeholder="product Name" name="pname" id="pname" value="<?php //echo $product;?>" required></th>
                    <th class="text-center"><input type="date" class="search" placeholder="Date"name="date" id="date" value="<?php //echo $date;?>"  required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="Amount" name="amt" id="amt" value="<?php //echo $amo;?>"  required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="qty" name="qty" id="qty" value="<?php //echo $qty;?>" required></th>
                    <th class="text-center"><select name="pu" class="search" id="pu" value="<?php //echo $pu;?>"  required>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                          </select></th>
                          <th class="text-center"><input type="Date" class="search" placeholder="Price Date" name="amtdate" id="amtdate" value="<?php //echo $amodate;?>"  required></th>
                          <th class="text-center"><input type="text" class="search" placeholder="description" name="dis" value="<?php //echo $dis;?>"  class="abc" id="dis" required></th>
                          <th class="text-center"><button type="submit" colspan="6" class="submit" id="b3">Submit</button></th>
                    </tr> -->
                    <tr>
                    <th class="text-center"><input type="text" class="search"  placeholder="HSN CODE" name="hsncode" id="hsncode" value="<?php echo $hsncode;?>" required></th>
                    <th class="text-center"><input type="text" class="search"  placeholder="dealers Name" name="dname" id="dname" value="<?php echo $dname;?>" list="dn" required>
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
                    <th class="text-center"><input type="text" class="search" placeholder="product Name" name="pname" id="pname" value="<?php echo $product;?>" list="pn" required>
                    <datalist id="pn">
                            <option>Volvo</option>
                            <option>Saab</option>
                            <option>Mercedes</option>
                            <option>Audi</option>
                        </datalist>
                    </th>
                    <th class="text-center"><input type="date" class="search" placeholder="Date"name="date" id="date" value="<?php echo $date;?>" required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="Amount" name="amt" id="amt" value="<?php echo $amo;?>" required></th>
                    <th class="text-center"><input type="number" class="search" placeholder="qty" name="qty" id="qty" value="<?php echo $qty;?>" required></th>
                    <th class="text-center"><select name="unit" class="search" id="unit" value="<?php echo $unit;?>" required>
                            <option value="nos">NOS</option>
                            <option value="ft">Ft</option>
                            <option value="mtr">Mtr</option>
                          </select></th>
                    <th class="text-center"><select name="pu" class="search" id="pu" value="<?php echo $pu;?>" required>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                          </select></th>
                          <th class="text-center"><input type="Date" class="search" placeholder="Price Date" name="pdate" id="pdate" value="<?php echo $amodate;?>" required></th>
                          <th class="text-center"><input type="text" class="search" placeholder="product des." name="pd"  class="abc" id="pd" value="<?php echo $pd;?>"  required></th>
                          <th class="text-center"><input type="text" class="search" placeholder="description" name="db"  class="abc" id="db" value="<?php echo $dis;?>"  required></th>
                          <th class="text-center"><button type="submit" colspan="6" class="submit" id="b3">Submit</button></th>
                    </tr>
                </table>
                <?php //} ?>
                <!-- </tbody> -->
            </form> 
        
    </body>
</html>      