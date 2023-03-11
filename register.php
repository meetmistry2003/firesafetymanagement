<!DOCTYPE html>
<html>

    <head>
        <title id="ti">Fire Safety</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.6.0.min.js"
        src="jautocalc.js"></script>

        <style>
   html{
  height: 100%;
}
body{
    background-color: #ffffff;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
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
        padding: 0px 450px;
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
        font-size: 30px;
        font-weight: bold;
        width:100%;
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
          float: right;
        }
      }
form{
    height: 360px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 55%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #000000;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 30px;
    font-weight: 500;
    line-height: 0px;
    color: rgb(253, 74, 74);
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
    
</head>
<body>
          <div class="header">
            <a href="#default" class="logo">Fire Safety</a>
            <div class="header-right">
              <a class="active" href="login.php">LOGIN</a>  
            </div>
          </div>
<?php
session_start();
$errorMsg = "";
// $validUser = $_SESSION['login'] === true;
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else {$_SESSION["login"] = true;
  if($validUser) {
    header("location: home.php"); die();
   }
}
}

?>

  <form name="input" action="registerdata.php" method="post">
  <h3>Register Here</h3>
    <label for="Company Name">Company Name:</label><input type="text" value="" placeholder="Compnay Name" id="company_name" name="company_name" />
    <label for="Owner Name">Owner Name:</label><input type="text" value="" placeholder="Owner Name" id="owner_name" name="owner_name" />
    <label for="password">Password:</label><input type="password" value="" placeholder="password" id="password" name="password" />
    <div class="error"><?= $errorMsg ?></div>
    <input type="submit" value="Home" name="sub" />
  </form>
</body>
</html>