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
    include 'partials/_header.php';
    include 'partials/_dbconnect.php';


    echo'
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-32 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-1 text-gray-900">Employee List</h1>
                </div>
                <div class="lg:w-3/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                <p class="lg:w-2/3 mx-auto text-center leading-relaxed text-base">List of employes set to retire</p>
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Employee ID</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Name</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Date of Birth</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Date of Joining</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Date of Retirement</th>
                        <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                    </tr>
                    </thead>
                    <tbody>';


                    $sql_retire = "SELECT * FROM `employee` WHERE date_of_retirement <= ADDDATE(CURRENT_DATE, 31) AND date_of_retirement >= CURRENT_DATE";
                    $res_retire = mysqli_query($con,$sql_retire);
    
                    // <!-- Use a for loop to iterate through the row -->
            
                    while($row = mysqli_fetch_assoc($res_retire))
                    {
                        $eid = $row['emp_id'];
                        $ename = $row['emp_name'];
                        $dob = $row['dob'];
                        $doj = $row['date_of_joining'];
                        $dor = $row['date_of_retirement'];

                        echo'
                            <tr>
                                <td class="px-4 py-3">'.$eid.'</td>
                                <td class="px-4 py-3">'.$ename.'</td>
                                <td class="px-4 py-3">'.$dob.'</td>
                                <td class="px-4 py-3">'.$doj.'</td>
                                <td class="px-4 py-3">'.$dor.'</td>
                                <td class="w-10 text-center">
                                </td>
                            </tr>
                        ';
                    }

            echo'        
                    </tbody>
                    
                </table>
                </div>
                <hr>
                <button class="text-dark bg-green-500 border-0 py-2 px-24 focus:outline-none hover:bg-green-400 rounded lg:text-lg" data-toggle="modal" data-target="#addEmp">
                    Add Employee
                </button>
                <hr>
                <div class="flex w-full md:justify-start justify-center items-end">
                    <div class="relative mr-4 w-full lg:w-full xl:w-1/2 w-2/4">
                        <label for="hero-field" class="leading-7 text-sm text-gray-600"><strong>Update Employee Credentials<strong></label>
                        <input type="text" id="hero-field" placeholder="Search using Employee ID" name="hero-field" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button class="inline-flex text-white bg-green-500 border-0 lg:py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded lg:text-lg">Search Employee</button>
                    
                </div>
                <div class="max-w-4xl p-2 mx-auto my-16 bg-white dark:bg-gray-800 rounded-md shadow-md">
                        <h2 class="text-lg text-gray-700 dark:text-white font-semibold capitalize">Employee Info</h2>
                        
                        <form>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="Id">Emplyoee ID</label>
                                    <input type="text" name="e_id" id="e_id" readonly class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="Name">Name</label>
                                    <input type="text" name="e_name" id="e_name" readonly class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                 
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="position">Position</label>
                                    <input type="text" name="e_pos" id="e_pos" readonly class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                 
                                <div></div>
                                <div class="px-6">
                                    <input type="checkbox" id="stop_pay" name="stop_pay" value="PAY STOP">
                                    <label for="stop_pay"> Stop Pay for Employee</label><br>
                                </div>

                            </div>

                            <div class="flex justify-end mt-6">
                                <button class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Update Account Information</button>
                            </div>
                        </form>
                </div>
            </div>
            </section>
          
           
    ';
    include 'partials/_newEmpModal.php';
    include 'partials/_footer.php';
    echo'
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