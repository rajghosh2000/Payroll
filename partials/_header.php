<?php
   echo '<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
   <a class="navbar-brand" href="#">
        <img src = "img/Logo-Payroll.png" width="100" height="75" class="d-inline-block align-top" alt="" loading="lazy">
       
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="#"> Pay System for University Operations <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#"></a>
       </li>
     </ul>
     <div class="md:flex items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Home</a>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Shop</a>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Contact</a>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">About</a>
                </div>
            </div>
       <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#singupModalC">Client SignUp</button>
       <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="button" data-toggle="modal" data-target="#signInmodalC">Client SignIn</button>
       <button class="btn btn-outline-success my-2 my-sm-0 ml-lg-2" type="button" data-toggle="modal" data-target="#signInmodalA">Administrator SignIn</button>
   </div>
 </nav>';

 include 'partials/_signInmodalClient.php';
 include 'partials/_signUpmodalClient.php';
 include 'partials/_signInmodalAdmin.php';
?>