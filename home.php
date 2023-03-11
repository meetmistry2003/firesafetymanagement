<!DOCTYPE html>
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
      .header a.font{
        color: #171FF6;
      }
      .header a {
        float: left;
        color:black;
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

     </style>
    
    </head>
    <body>
    <div class="header">
            <a href="#default" class="logo">Fire Safety</a>
            <div class="header-right">
              <a class="active" href="view.php">VIEW CUSTOMER HISTORY</a>
              <a href="a1.php" style="color:rgb(253, 74, 74);"><b>NEW CUSTOMER</b></a>
              <a class="active" href="login.php">BACK</a>
            </div>
          </div>
        
    <!--              
        <div id="watermark"></div> -->
        <?php
        // header("Refresh:3; url=index.php");
        session_start();
        if(!isset($_SESSION['login'])){ //if login in session is not set
            header("Location: index.php");
            exit;
        }
            $company_name=$_COOKIE["company_name"];
            $conn = mysqli_connect("localhost", "root", "", "myoffice");
            // Check connection

            if($conn === false){    
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $result = mysqli_query($conn,"SELECT * FROM cust_date where company_name='$company_name'");
            // $row = mysqli_fetch_array($result);
        ?>
        <!-- <table border="1" align="center" style="width:30%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><h1><b><i>Trust India Exim</i></b></h1></th>
                </tr>
        </table>
        <table border="1" align="right" style="width:10%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><a href="a1.php">New</a></th>
                </tr>
        </table>

        <table border="1" align="right" style="width:10%">
            <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><a href="view.php">View</a></th>
                </tr>
        </table> -->
        <br>
        <br>
        <br>
        <table style="width: 100%;">
            <tr style="background: rgba(217,225,242,1.0);">
                <th class="text-center" colspan="1" name="p1">
                    Sr.No.
                </th>
                <th class="text-center">
                    Customer-Name
                </th>
                <th>
                    Expenses/profit
                </th>

                <th class="text-center">
                    Estimate
                </th>
                <th class="text-center">
                    Income
                </th>
                <th class="text-center">
                    Expenses
                </th>
                <th class="text-center">
                    Bal./Due.
                </th>
                <th class="text-center">
                    Profit/Loss
                </th>
                
            </tr>
            <?php
            $count=1;
                while($row = mysqli_fetch_array($result))
                {
            ?>
            <tr>
            <td style="text-align:center"><?php
                    echo $count;
                    // $cname = $_COOKIE["name"];
                    // echo $cname;
                    ?>
                </td>
            
                <td style="text-align:center"><?php
                    
                    // echo $row["cname"];
                    $c=$row["cname"];
                    // $cname = $_COOKIE["name"];
                     echo $c;
                    ?>
                </td>
                <td style="text-align:center">
                    <a href="expenses-profit.php">Expenses-Profit</a>
                </td>
                <td style="text-align:center">
                <?php
                    
                    $estimate = $row["estimate"];
                    // $estimate = $_COOKIE["amo2"];
                     echo $estimate;
                    ?> ₹
                </td>
                <td style="text-align:center">
                <?php
               $result1=mysqli_query($conn,"SELECT sum(amount) from income where cname='$c'");
               $row = mysqli_fetch_array($result1);
               echo $row['sum(amount)'];
               $income=$row['sum(amount)'];
                   // $income = $_SESSION["total1"];
                   // echo $income;
                   ?> ₹
                   </td>
               <td style="text-align:center"><?php
                $result2=mysqli_query($conn,"SELECT sum(amount) from expenses where cname='$c'");
                $row1 = mysqli_fetch_array($result2);
                echo $row1['sum(amount)'];
                $expenses=$row1['sum(amount)'];
                   // $expenses = $_SESSION["total"];
                   // echo $expenses;
                
                    ?> ₹
                </td>
                    <?php
                        $bal=$estimate-$income;
                        if($bal > 0){?>
                            <td style="background: rgba(0, 210, 33, 0.8); text-align:center;"><?php echo $bal; ?> ₹</td>
                         <?php }
                          elseif($bal < 0){?>
                            <td style="background: rgba(255, 0, 0, 0.8); text-align:center;"><?php echo $bal; ?> ₹</td>
                         <?php }
                         else{
                            ?>
                            <td style="text-align:center;"><?php echo $bal; ?> ₹</td>
                            <?php  }
                    ?>
                    <?php
                        $profit=$income-$expenses;
                        if($profit > 0){?>
                            <td style="background: rgba(0, 210, 33, 0.8); text-align:center;"><?php echo $profit; ?> ₹</td>
                         <?php }
                          elseif($profit < 0){?>
                            <td style="background: rgba(255, 0, 0, 0.8); text-align:center;"><?php echo $profit; ?> ₹</td>
                         <?php }
                         else{
                            ?>
                            <td style="text-align:center;"><?php echo $profit; ?> ₹</td>
                            <?php  }
                    ?>
                   <?php
                   $count=$count+1;
                         }
                   ?>
            </tr>
        </table>
    </body>
</html>