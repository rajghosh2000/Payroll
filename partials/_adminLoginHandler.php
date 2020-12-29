<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $adminID = $_POST['signInIDA'];
        $adminpwd = $_POST['signInPasswordA'];

        if((strcmp($adminID,'admin') == 0) && (strcmp($adminpwd,'1234') == 0))
        {
            session_start();
            $_SESSION['signedIn'] = true;
            $_SESSION['usr'] = "admin";
            header("Location: Location: /Payroll/index.php");
        }
        else
        {
            echo 'Err !!! Check You Credentials';
            header("Location: /Payroll/index.php");
        }
    }
?>