<?php 
$id=$_POST['id'];
   
    $ramt=$_POST['ramt'];
    $rdate=$_POST['rdate'];
    $indb=$_POST['indb'];
    $company_name=$_COOKIE["company_name"];
    $conn = mysqli_connect("localhost", "root", "", "myoffice");
             //UPDATE `two` SET `id`='[value-1]',`date`='[value-2]',`dealer_name`='[value-3]',`amount`='[value-4]',`p_u`='[value-5]',`pdate`='[value-6]',`description`='[value-7]' WHERE 1;
            // 'UPDATE two SET `date` = "$date", `dealer_name` = "$name", `amount` = "$amount", `p_u` = "$paidunpaid", `pdate` ="$amdate", `description` = "$description" WHERE `id` = "$id"';
        $query = "UPDATE income SET `company_name` = '$company_name',`amount` = '$ramt', `amt_date` ='$rdate', `des` = '$indb' WHERE `income`.`inid` = '$id'";
        if(mysqli_query($conn, $query)){
            echo "<script>alert('data stored in a database successfully');</script>";
        }
        else
        {
             echo "ERROR: Hush! Sorry $sql.";
        }

        header("location: expenses-profit.php");
        exit;
?>