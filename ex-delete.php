<?php

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $conn = mysqli_connect("localhost", "root", "", "myoffice");
        $sql = "DELETE FROM expenses WHERE eid = '$id'";

        if(mysqli_query($conn,$sql)){
            echo "<script>alert('data deleted in a database successfully');</script>";
            header("location: expenses-profit.php");
    exit;
        }
        else
        {
             echo "ERROR: Hush! Sorry $sql.";
        }
        
    }
    

?>