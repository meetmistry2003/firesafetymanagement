<?php
// header("Refresh:0; url=index.php");
// session_start();
// if(!isset($_SESSION['login'])){ //if login in session is not set
//     header("Location: /id20230661_myoffice/index.php");
//     exit;
// }
// else{
$id=" ";
$date=" ";
$ramount=" ";
$amdate=" ";
$description=" ";
$conn = mysqli_connect("localhost", "root", "", "myoffice");


    $id = $_GET["id"];
    $sql1="SELECT * FROM income WHERE inid=$id";
    $result1 = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result1);
    $cname=$row["cname"];
    $ramount=$row["amount"];
    $amdate=$row["amt_date"];
    $description=$row["des"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title id="tie">TIE</title>
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
			<a href="#default" class="logo">Incomes-Update of <?php echo $cname;?></a>
            <div class="header-right">
                
              <a class="active" href="expenses-profit.php">BACK</a>

              
            </div>
          </div>
   
    </head>
    <body>
    
                <br>
                <br>
           
      
                <table style="width: 60%;" align="center">
                    <tr style="background: rgba(217,225,242,1.0);">
                        <th class="text-center">
                            Date
                        </th>

                        <th class="text-center">
                            Receive Amount
                        </th>
                        
                        <th class="text-center">
                            Discription/Bank-Details
                        </th>
                        <!-- <th class="text-center">
                            Online Transection
                        </th> -->
                    </tr>
               
                <form action="test1.php" method="post">
                        <input type="hidden" value="<?php echo $id; ?>" name="id" id="id" >
                            <tr>
                            <th><input type="Date" placeholder="Price Date" name="rdate" id="rdate" value="<?php echo $amdate;?>"  required></th>
                                <th><input type="number" placeholder="Receive Amount" name="ramt" id="ramt" value="<?php echo $ramount;?>"  required></th>
                                
                                <th><input type="text" placeholder="description/bank-details" name="indb"  class="abc" id="indb" value="<?php echo $description;?>"  required></th>
                                <th class="text-center"><button type="submit" colspan="6" class="submit" id="b3">Submit</button></th>
                            </tr>
                            </form> 
                            <?php// } ?>
            </table>
                        <!-- </tbody> -->
                   
        
                    
    </body>
</html>      