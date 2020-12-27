<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        include '_dbconnect.php';
        $eidv = $_POST['valId'];

        $sql_exists = "SELECT * FROM `employee` WHERE emp_id = '$eidv'";
        $res_exists = mysqli_query($con,$sql_exists);
        $numrows = mysqli_num_rows($res_exists);

        if($numrows==1)
        {
            $showAlert = true;
            header("Location: /Payroll/clientSignUp.php");
            exit();
        }
        else
        {
            $showError = "true";
        }
        header("Location: /Payroll/index.php?err=$showError"); 
    }
?>