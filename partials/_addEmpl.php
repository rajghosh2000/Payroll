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
        $bp = 0;

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
                    $jsondata = file_get_contents("json/pay.json");
                    $json = json_decode($jsondata,true);
                    $i=0;
                    while($i<5)
                    {
                        if(strcmp(($json['basicPay'][$i]['title']),$epos)==0)
                        {
                            $bpay = $json['basicPay'][$i]['bp'];
                            $bp = (double)($bpay);
                            break;
                        }
                        $i++;
                    }
                    $itax = 2200; //Income tax
                    $lic = 600;  // LIC Amt
                    $gpf = 1000; // GPF amt
                    $lamt = 0;  // Any loan if taken
                    $misc = 0;  // Extra amt or commission;

                    // 5 % ---- TA charges 
                    // 5 % ---- CCA charges
                    // 32 % ---- HRA charges
                    // 16 % ---- DA charges

                    $gross = ($bp) + (2 * 0.05 * $bp) + (0.32 * $bp) + (0.16 * $bp) + ($misc);

                    $net = ($gross) - ($itax + $lic + $gpf + $lamt);
                    
                    $sql_pay = "INSERT INTO `payinfo`(`emp_id`, `basicpay`, `income_tax`, `loan_amt`, `gpf`, `misc`, `lic`, `gross_pay`, `net_pay`) VALUES ('$eid','$bp','$itax','$lamt','$gpf','$misc','$lic','$gross','$net')";
                    $res_pay = mysqli_query($con,$sql_pay);
                    if($res_pay)
                    {
                        $showAlert = true;
                        header("Location: /Payroll/admin.php?addUser=true");
                        exit();
                    }
                    else
                    {
                        $showErr = "Pay not Added!!";
                    }
                }
                else
                {
                    $showErr="Details not added!!";
                }
        }
        header("Location: /Payroll/admin.php?err=$showErr"); 
    }
?>
