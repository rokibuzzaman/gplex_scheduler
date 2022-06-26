<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Ticketing Systems | Profile</title>
</head>
<body>
<div class="ts-d-header-area fixed-top">
    <div class="container-fluid">
        <div class="ts-d-header-main">
            <div class="ts-ds-logo">
                <a href="">
                    <img src="assets/images/logo.svg" alt="">
                </a>
            </div>
            <!-- <div class="ts-user">
                <p><span class="ts-user-greetings">Good Evening</span>
                    <span class="ts-user-name">IBRAHIM</span>
                    <img class="ts-user-pic" src="assets/images/admin-user.svg" alt="">
                </p>
            </div> -->
            <div class="ts-user dropdown cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                <span class="ts-user-name"><?= strtoupper($_SESSION['username']) ?> </span>
                <!-- <div class="dropdown-toggle d-flex justify-content-center align-items-center">
                    <span class="ts-user-name">IBRAHIM </span>
                    <img class="ts-user-pic" src="assets/images/admin-user.svg" alt="">
                </div> -->
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                </div> -->
            </div>
        </div>
    </div>
</div>