<?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo ' function openulr(    ) {';  
    echo '  if (confirm("Are you sure you want to open new URL")) {';  
    echo '    document.location = newurl;';
    echo '  }';  
    echo '}';  
    echo '</script>';  
}  
?>  
<! doctype html>  
<html>  
<head>  
<meta charset="utf-8">  
 
<?php  
createConfirmationmbox();  
?>  
</head>  
<body>  
<center>  

<strong>  <b> <a href="javascript:openulr('expenses-profit.php');"> Open new URL </a> </b> </strong>  
 
</center>  
</body>  
</html> 