<?php
    $showErr = "false";
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        include '_dbconnect.php';
        $eid = $_POST['e_id'];
        $ename = $_POST['e_name'];
        $epos = $_POST['e_pos'];
        $edob = $_POST['dob'];
        $edoj = date("Y-m-d");

        $sql_exists = "SELECT * FROM `employee` WHERE emp_id = '$eid'";
        $res_exists = mysqli_query($con,$sql_exists);
        $numrows = mysqli_num_rows($res_exists);

        if($numrows>0)
        {
            $showErr = "Employee Exists";
        }
        else
        {
            $e_gr = 'D';
        
                switch($epos)
                {
                    case 'Assistant Director':
                        $e_gr = 'A';
                        break;
                    case 'Senior Supervisor':
                        $e_gr = 'B';
                        break;
                    case 'Junior Supervisor':
                        $e_gr = 'B';
                        break;
                    case 'General Officer':
                        $e_gr = 'C';
                        break;
                    case 'Clerk':
                        $e_gr = 'D';
                        break;
                }
                $edor = date('Y-m-d', strtotime($edob. ' + 21900 days'));

                $deptid = substr($eid, 0, 4);

                $sql = "INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_position`, `emp_grade`, `dob`, `date_of_joining`, `date_of_retirement`, `dept_id`) VALUES ('$eid', '$ename', '$epos', '$e_gr', '$edob', '$edoj', '$edor', '$deptid')";

                $res = mysqli_query($con,$sql);

                if($res)
                {
                    $showAlert = true;
                    header("Location: /Payroll/admin.php?addUser=true");
                    exit();
                }
                else
                {
                    $showErr="Details not added!!";
                }
        }
        header("Location: /Payroll/admin.php?err=$showErr"); 
    }
?>