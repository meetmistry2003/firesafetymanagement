
<html>
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
			<a href="#default" class="logo">List Of Customer</a>
			
            <div class="header-right">
                
              <a class="active" href="expenses-profit.php">Expenses-Profit</a>

              
            </div>
          </div>
	<body>
	      
		<br>
		<br>
	
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
		$cname=$_POST['cname'];
    $est=$_POST['es'];
    $company_name=$_COOKIE["company_name"];
		$sql = "INSERT INTO cust_date VALUES ('$cname','$est','$company_name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('data stored in a database successfully');</script>";
		} 
        else
        {
			 echo "ERROR: Hush! Sorry $sql.";
		}

        $result = mysqli_query($conn,"SELECT * FROM cust_date");
		?>
		<div class="box-body table-responsive no-padding">
		<table style="width: 50%;" align="center">
            <tr style="background: rgba(217,225,242,1.0);">
              <th class="text-center" name="p1">sr no.</th>
              <th class="text-center">customer name</th>
              <th class="text-center">Amount</th>
              <th class="text-center">company_name</th>
          </tr>
              <?php
		$count=1;
		while($row = mysqli_fetch_array($result))
        {
			?>
	<tr>
	<th class="text-center"><?php echo $count?></th> 
	<th class="text-center"><?php echo $row['cname'];  ?></th>
	<th class="text-center"><?php echo $row['estimate'];  ?> ₹</th>
  <th class="text-center"><?php echo $row['company_name'];  ?></th>
	</tr>
	<?php
		$cname= $row['cname'];
		$amount= $row['estimate'];
    $company_name= $row['company_name'];
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
      header("location: /Myoffice/expenses-profit.php");
			exit;
		?>

</body>
</html>
<!-- 
ALTER TABLE cust_date DROP id;

ALTER TABLE cust_date ADD  id BIGINT( 255 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (id) -->