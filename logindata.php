<html>
    <head>
    </head>
    <body>
<?php
		$conn = mysqli_connect("localhost", "root", "", "myoffice");
		// session_start();
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$company_name=$_POST['company_name'];
        $password=$_POST['password'];
		// echo $est;

        $query = "SELECT company_name,password FROM contractor WHERE company_name='$company_name' AND password='$password'";

    $result_can = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result_can)) {

        $check_username = $row['company_name'];
        $check_password = $row['password'];
    }
    if ($company_name == $check_username && $password == $check_password) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:  /Myoffice/home.php");
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: /Myoffice/login.php");
    }
    setcookie("company_name", $company_name, time() + (86400 * 30), "/");
    ?>
    
</body>
</html>