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
            $sql_check = "SELECT * FROM `emp_userinfo` WHERE emp_id = '$eidv'";
            $resu = mysqli_query($con,$sql_check);
            $numrows2 = mysqli_num_rows($resu);
            
            if($numrows2==1)
            {
                $showError = "Exists";
            }
            else
            {
                $showAlert = true;
                header("Location: /Payroll/clientSignUp.php");
                exit();
            }
        }
        else
        {
            $showError = "true";
        }
        header("Location: /index.php?err=$showError"); 
    }
?>