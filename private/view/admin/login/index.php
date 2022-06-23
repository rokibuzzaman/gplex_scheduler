<?php 
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Ticketing Systems</title>
</head>
<body>
<div class="ts-login-page-area">
    <div class="ts-login-page-main">
        <!--**********************************
                   Login Page Logo
        ***********************************-->

        <div class="ts-login-logo mb-3">
            <a href="">
                <img class="img-fluid" src="assets/images/logo.svg" alt="">
            </a>
        </div>



           <!--**********************************
                         Login Card
           ***********************************-->
        <div class="ts-login-card-area">

            <p class="ts-login-title text-center text-uppercase">
                Schedule Management System
            </p>

            <div class="ts-login-card-body my-5">
                <form action="">
                    <label class="user-input-wrp">
                        <input type="text" class="inputText" required/>
                        <span class="floating-label">User Name</span>
                        <img class="ts-user-icon" src="assets/images/user.svg" alt="">
                    </label>

                    <label class="user-input-wrp">
                        <input type="password" class="inputText" required/>
                        <span class="floating-label">Password</span>

                        <img class="ts-lock-icon" src="assets/images/lock.svg" alt="">
                        <img class="ts-eye-icon" src="assets/images/eye.svg" alt="">
                    </label>

                    <button class="ts-login-btn" type="submit">Login</button>

                </form>

            </div>
            <div class="ts-login-card-footer text-center">
                <small>Powered by gPlex</small>
            </div>
        </div>
        <!--        End Login Card-->


       <!--**********************************
                     Copyright
        ***********************************-->
        <div class="ts-login-page-copyright">
            <p>Copyright &copy; Genusys Inc. All rights reserved</p>
        </div>


      <!--*****************************************
          Bottom Fixed Image only for Login Page
       *****************************************-->
        <div class="ts-login-bottom-image">
            <img src="assets/images/login-bg.svg" alt="">
        </div>
    </div>
</div>


<!--all scripts-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<!--all scripts-->
</body>
</html>
