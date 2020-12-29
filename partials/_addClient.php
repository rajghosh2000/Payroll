<?php
    $err="false";
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        include '_dbconnect.php';
        $empid = $_POST['e_id'];
        $emppwd = $_POST['e_pwd'];
        $empcpwd = $_POST['e_cpwd'];

        if($emppwd == $empcpwd)
        {
            $emp_phash = password_hash($emppwd, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `emp_userinfo` (`emp_id`, `emp_pwd`, `usr_stamp`) VALUES ('$empid', '$emp_phash', current_timestamp())";

            $res = mysqli_query($con,$sql);

            if($res)
                {
                    $showAlert = true;
                    header("Location: /index.php?userId=true");
                    exit();
                }
            else
                {
                    $err="Details not added!!";
                }
        }
        header("Location: /index.php?errCL=$err"); 
    }
?>                