<!DOCTYPE html>
<html>
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
        border: 1;
        font-size: 16px;
      }
      .search {
        width: 40%;
      }
      .submit {
        width: 80px;
        background-color: #1c87c9;
        color: #ffffff;
      }
     </style>
    
    </head>
    <div class="header">
            <a href="#default" class="logo">Fire Safety</a>
            <div class="header-right">
                
              <a class="active" href="home.php">Home</a>
            
           
              
            </div>
          </div>
    <body>
   	
        
        <form action="a6.php" method="post">
        <table border="1" align="center" style="width:50%">
            
                <tr>
                    <th><h2><b>PRODUCT NAME  <input type="text" placeholder="Enter the name" class="search" name="pname" id="pname" required/></b></h2></th>
                </tr>
            </br> 
                <tr>
                    <th><button type="submit" onclick="btn()" class="submit" name="b1">Save</button></th>
                </tr>      
                </tr>   
            <br>
        </form>
       
        <?php
// header("Refresh:0; url=index.php");
// session_start();
// if(!isset($_SESSION['login'])){ //if login in session is not set
//     header("Location: /id20230661_myoffice/index.php");
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
		
		// echo $est;
	

        $result = mysqli_query($conn,"SELECT * FROM product");
		?>
		<div class="box-body table-responsive no-padding">
		<table style="width: 50%;" align="center">
            <tr style="background: rgba(217,225,242,1.0);">
              <th class="text-center" name="p1">sr no.</th>
              <th class="text-center">Product name</th>
          </tr>
              <?php
		$count=1;
		while($row = mysqli_fetch_array($result))
        {
			?>
	<tr>
	<th class="text-center"><?php echo $count?></th> 
	<th class="text-center"><?php echo $row['pname'];  ?></th>
	</tr>
	<?php
		// $cname= $row['cname'];
		// $amount= $row['estimate'];
		// $count=$count+1;
        
        $count++;
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
		
        // header("location: /id20230661_myoffice/vendor.php");
        // exit;
      // }
      mysqli_close($conn);
		?>
            <!-- <script>
    var n=
    abc+=document.getElementById("tbody1").insertRow().innerHTML="<td colspan='3' >"+n+"</td><td>"+p1+"</td><td>"+w+"</td><td>"+t+"</td><td>"+l+"</td><td>"+price+"</td><td>"+quantity+"</td><td>"+a+"</td><td>"+amount+"</td>";
                   
-->

            <!-- </script> -->

           
        <!-- <table style="width: 100%;" border="1"  id="tb">
            <tr style="background: rgba(217,225,242,1.0);" border="1">
                <th class="text-center" colspan="1">
                    sr no
                </th>
            
                <th class="text-center" colspan="3">
                    Date
                </th>
                
                <th class="text-center">
                    Dealers Name
                </th>
                
                <th class="text-center">
                    Amount
                </th>
                
                <th class="text-center" >
                    Paid/Unpaid
                </th> -->
                <!-- <th class="text-center">
                    Price
                </th>
                <th class="text-center">
                    Quantity
                </th>
                <th class="text-center" id="gf">
                    ganfeet
                </th>
                <th class="text-center">
                    Amount
                </th> -->
                
            </tr>
            <form action="invoice.html" method="post">
                <tbody id="tbody1">
                    
                </tbody>
                 <br>
            <tfoot>
                <br>
                <table border="1" align="right" style="visibility:hidden";>
                    <tbody id="tb9">
                        <br>
                <tr style="background: rgba(217,225,242,1.0);">
                    
                    <td colspan="3">Total amount</td>
                    
                    
                    
                </tr>
                </tbody>
                </table>
         
                <table border="1" align="center" style="visibility:hidden;">
                <tbody id="tb3">
                    <br>
            <tr style="background: rgba(217,225,242,1.0);">
                
                <td colspan="3">Total Expenses</td>
                <td colspan="2">final price</td>
                
                
            </tr>
        </tbody>
   
        <tbody id="tb4" style="width:30%;">
            <tr style="background: rgba(217,225,242,1.0);">
                <td colspan="3">Amount</td>
                             
            </tr>
            
        </tbody>
  </table>          </tfoot>
        </table>
    </form> 
        <!-- <form action="a2.html" method="post">
               
        <table  align="center" style="width:30%">
               <tr class="" style="background: rgba(217,225,242,1.0)">
                <tr>
                    <th><button type="button" class="mybtn" name="submit" onclick="myfun('dv')" >Save</button></th>
                </tr>
                <span id="response"></span>
            </table>
            </form> -->
          
          
    <br>
        <!-- <table style="width: 100%;" border="1"  id="tb">
            <tr style="background: rgba(217,225,242,1.0);" border="1">
                <th class="text-center" colspan="1">
                    sr no
                </th>
            
                <th class="text-center" colspan="3">
                    Date
                </th>
                
                
                <th class="text-center">
                    Amount
                </th>

                 <th class="text-center">
                    Discription
                </th> -->
               <!-- <th class="text-center">
                    Quantity
                </th>
                <th class="text-center" id="gf">
                    ganfeet
                </th>
                <th class="text-center">
                    Amount
                </th> -->
                
            </tr>
            <form action="invoice.html" method="post">
                <tbody id="tbody1">
                    
                
                </tbody>
                 <br>
            <tfoot>
                <br>
                <br>
                <br>
                <br>
                <table border="1" align="right" style="visibility:hidden";>
                    <tbody id="tb9">
                        <br>
                <tr style="background: rgba(217,225,242,1.0);">
                    
                    <td colspan="3">Total amount</td>
                    
                    
                    
                </tr>
                </tbody>
                </table>
           <br>
           <br>
                <table border="1" align="center" style="visibility:hidden;">
                <tbody id="tb3">
                    <br>
            <tr style="background: rgba(217,225,242,1.0);">
                
                <td colspan="3">Total Expenses</td>
                <td colspan="2">final price</td>
                
                
            </tr>
        </tbody>
   
        <tbody id="tb4" style="width:30%;">
            <tr style="background: rgba(217,225,242,1.0);">
                <td colspan="3">Amount</td>
                             
            </tr>
            
        </tbody>
  </table>          </tfoot>
        </table>

        <br> 
    
    </footer>          
       </table>          
           
       </div>     
                    
       </div>     
    </body>
</html>