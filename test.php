<?php
   
        // $id=$_POST["id"];
        $id = $_POST["id"];
        $hsncode=$_POST["hsncode"];
        $dname=$_POST["dname"];
        $product=$_POST["pname"];
        $date =$_POST["date"];
        $amo=$_POST["amt"];
        $qty=$_POST["qty"];
        $unit=$_POST["unit"];
        $pu=$_POST["pu"];
        $amodate=$_POST["pdate"];
        $pd=$_POST["pd"];
        $dis=$_POST["db"];
        $company_name=$_COOKIE["company_name"];
        // echo "<script>Console.log('$id');</script>";
        $conn = mysqli_connect("localhost", "root", "", "myoffice");
        //UPDATE `two` SET `id`='[value-1]',`date`='[value-2]',`dealer_name`='[value-3]',`amount`='[value-4]',`p_u`='[value-5]',`pdate`='[value-6]',`description`='[value-7]' WHERE 1;
        // 'UPDATE two SET `date` = "$date", `dealer_name` = "$name", `amount` = "$amount", `p_u` = "$paidunpaid", `pdate` ="$amdate", `description` = "$description" WHERE `id` = "$id"';
        // $query = "UPDATE expenses SET `dname` = '{$dname1}',`pname` = '{$product1}',`date` = '{$date1}', `amount` = '{$amo1}', `p_u` = '{$pu1}', `amt_date` ='{$amodate1}', `des` = '{$dis1}' WHERE `expenses`.`eid` = '{$id}'";
        $query = "UPDATE `expenses` SET `hsncode`='$hsncode',`dname`='$dname',`pname`='$product',`date`='$date',`amount`='$amo',`qty`='$qty',`unit`='$unit',`p_u`='$pu',`amt_date`='$amodate',`productdis`='$pd',`des`='$dis',`company_name`='$company_name' WHERE `expenses`.`eid` = '$id'";
        if(mysqli_query($conn, $query)){
                    
                    echo "<script>alert('data updated in a database successfully');</script>";
                    // header("location: /id20230661_myoffice1/expenses-profit.php");
                    
                }
                else
                {
                     echo "ERROR: Hush! Sorry $sql.";
                     
                }
    
                header("location: expenses-profit.php");
			exit;

    ?>