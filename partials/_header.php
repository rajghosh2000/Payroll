<?php

  session_start();

   echo '<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
   <a class="navbar-brand" href="/index.php">
        <img src = "img/Logo-Payroll.png" width="100" height="75" class="d-inline-block align-top" alt="" loading="lazy">
       
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="/index.php"> Pay System for University Operations <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"></a>
       </li>
     </ul>
     <div class="md:flex items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a style="text-decoration:none" class="my-1 text-sm text-gray-500 font-medium hover:text-green-500 md:mx-4 md:my-0" href="/index.php">Home</a>
                    <a style="text-decoration:none" class="my-1 text-sm text-gray-500 font-medium hover:text-green-500 md:mx-4 md:my-0" href="#">Contact</a>
                    <a style="text-decoration:none" class="my-1 text-sm text-gray-500 font-medium hover:text-green-500 md:mx-4 md:my-0" href="#">About</a>
                </div>
     </div>';

     if(isset($_SESSION['signedIn']) && $_SESSION['signedIn']==true)
      {   
        if(strcmp($_SESSION['usr'],'admin')==0)
        {
          echo '
          <p class="my-1 text-sm text-white font-medium hover:text-indigo-500 md:mx-4 md:my-0"> Welcome, Admin</p>
          <a href ="/Payroll/admin.php" type="button" class="btn btn-outline-success ml-2" >Admin Page</a>
          '; 
        }
        elseif(strcmp($_SESSION['usr'],'client')==0)
        {
          echo'<p class="my-1 text-sm text-white font-medium hover:text-indigo-500 md:mx-4 md:my-0"> Welcome, '.$_SESSION['uid'].'</p>
          <a href ="/Payroll/clientPaySlip.php" type="button" class="btn btn-outline-success ml-2" >Client Page</a>
          '; 
        }
        echo '<a href ="partials/_logout.php" type="button" class="btn btn-outline-success ml-2" >Logout</a>';
      }
    else 
    {
        echo '
        <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#singupModalC">Client SignUp</button>
        <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="button" data-toggle="modal" data-target="#signInmodalC">Client SignIn</button>
        <button class="btn btn-outline-success my-2 my-sm-0 ml-lg-2" type="button" data-toggle="modal" data-target="#signInmodalA">Administrator SignIn</button>';

        
    }
    echo'    </div>
      </nav>';


 include 'partials/_signInmodalClient.php';
 include 'partials/_signUpmodalClient.php';
 include 'partials/_signInmodalAdmin.php';


    if(isset($_GET['addUser']) && $_GET['addUser']=="true")
    {
        echo '<script>alert("User added");</script>';
    }

    if(isset($_GET['err']) && $_GET['err']=="true")
    {
        echo '<script>alert("Employee ID doesnot exists!!! Please try again");</script>';
    }

    if(isset($_GET['err']) && $_GET['err']=="Exists")
    {
        echo '<script>alert("Employee Account already exists!!! Please Login");</script>';
    }

    if(isset($_GET['userId']) && $_GET['userId']=="true")
    {
        echo '<script>alert("User Details added !!! You can Sign In Now");</script>';
    }
    if(isset($_GET['errLogin'])&& $_GET['errLogin']=="true")
    {
      echo '<script>alert("Login Error Check Credentials");</script>';
    }
    if(isset($_GET['errCL'])&& $_GET['errCL']=="false")
    {
      echo '<script>alert("Pasword didnot match");</script>';
    }

?>