<?php
    echo'<!doctype html>

    <html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="icon" href="img/Logo-Payroll.png">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="partials/css/style.css">
    
        <title>PayRoll</title>
    </head>
    
    <style>
    
    
    </style>
    
    <body>';
        include 'partials/_header.php' ;
        include 'partials/_dbconnect.php';
    
        $eid = $_SESSION['uid'];
        $sql = "SELECT * FROM employee RIGHT JOIN payinfo ON employee.emp_id = payinfo.emp_id WHERE employee.emp_id = '$eid'";
        $res = mysqli_query($con,$sql);
    
        // <!-- Use a for loop to iterate through the row -->

        while($row = mysqli_fetch_assoc($res))
        {
            $ename = $row['emp_name'];
            $epos = $row['emp_position'];
            $egr = $row['emp_grade'];
            $dob = $row['dob'];
            $doj = $row['date_of_joining'];
            $dor = $row['date_of_retirement'];
            $bp  = $row['basicpay'];
            $itax = $row['income_tax'];
            $lamt = $row['loan_amt'];
            $gpf = $row['gpf'];
            $misc = $row['misc'];
            $lic = $row['lic'];
            $gross = $row['gross_pay'];
            $net = $row['net_pay'];
        }

        echo'
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-24 mx-auto my-5">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <div class="w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">Welcome, '.$eid.'</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">'.$ename.'</h1>
                        <div class="flex mb-4">
                            <span class="flex items-center">
                                
                            </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                            
                            </span>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 lg:w-56 bg-gray-700 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Position</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="'.$epos.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 lg:w-56 bg-gray-700 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Grade</button>

                                    <input class="py-3 px-6  bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="'.$egr.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col  rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 lg:w-56 bg-gray-700 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Date of Birth</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="'.$dob.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 bg-gray-700 lg:w-56 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Date of Retirement</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="'.$dor.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 bg-gray-700 lg:w-56 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Date of Joining</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="'.$doj.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 bg-gray-700 lg:w-56 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Basic Pay</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="₹ '.$bp.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                       
                        
                        <hr>
                        <div class="container px-5 mx-auto lg:mx-2">
                            <div class="w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Employee ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Income Tax Amoount</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">GPF</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">LIC</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Loan Amount</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Miscellaneous</th>
                                    <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="px-4 py-3">'.$eid.'</td>
                                    <td class="px-4 py-3">₹ '.$itax.'</td>
                                    <td class="px-4 py-3">₹ '.$gpf.'</td>
                                    <td class="px-4 py-3">₹ '.$lic.'</td>
                                    <td class="px-4 py-3">₹ '.$lamt.'</td>
                                    <td class="px-4 py-3">₹ '.$misc.'</td>
                                    <td class="w-10 text-center">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 bg-gray-700 lg:w-56 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Gross Pay</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="₹ '.$gross.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                        <div class="flex items-start justify-start pb-3 md:py-0 md:w-1/2">
                            <form>
                                <div class="flex flex-col rounded-lg border dark:border-gray-600 overflow-hidden lg:flex-row">
                                    <button class="py-3 px-4 bg-gray-700 lg:w-56 text-gray-100 text-sm font-medium tracking-wider uppercase hover:bg-gray-700 focus:bg-gray-600 focus:outline-none" disabled>Net Pay</button>

                                    <input class="py-3 px-6 bg-white font-extrabold dark:bg-gray-800 text-dark outline-none placeholder-gray-500 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" readonly placeholder="" value="₹ '.$net.'" aria-label="Enter your email">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </section>';

























        include 'partials/_footer.php';

        echo'<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
        </script>
</body>

</html>';

?>