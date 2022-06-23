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
<!--Dashboard Header-->
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
                <div class="dropdown-toggle d-flex justify-content-center align-items-center">
                    <span class="ts-user-greetings">Good Evening</span>
                    <span class="ts-user-name">IBRAHIM </span>
                    <img class="ts-user-pic" src="assets/images/admin-user.svg" alt="">
                </div>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Logout</a>
                  
                </div>

            </div>
        </div>
    </div>
</div>

<div class="ts-d-main-area">
    <!--    Sidebar-->
    <div class="ts-d-sidebar-area">

        <!--        Profile Avatar-->
        <div class="ts-d-user-avatar">
            <img src="assets/images/profile-user.svg" alt="">
            <span class="ts-d-user-avatar-name">
                Genuity Systems
            </span>
        </div>


        <div class="ts-d-sidebar-navigation mt-5">
            <h6>NAVIGATION</h6>
            <ul class="ts-d-nav">
                <li><a class="active" href="dashboard.html"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li><a href="profile.html"><i class="bi bi-person-fill"></i> Profile</a></li>
                <li><a href="profile.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                
            </ul>
        </div>

    </div>
    <!--    End Sidebar-->

    <!--    Main Content Area-->
    <div class="ts-d-common-area">

        <!--        Header Components-->
        <div class="ts-d-top-header mb-2">
            <div class="ts-d-acc-name">
                <span class="bi bi-list"></span>
                <span class="ts-d-acc-name-text text-uppercase">Profile</span>
            </div>
            <!--      <div class="ts-d-date">-->
            <!--        <input type="text" id="datepicker">-->
            <!--        <span class="bi bi-filter ts-d-filter"></span>-->
            <!--      </div>-->
        </div>
        <!--       End Header Components-->


        <!--        Profile Area-->
        <div class="ts-d-profile-area">

            <div class="ts-d-profile-main">
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="ts-d-profile-content">
                            <div class="ts-d-profile-avatar">
                                <img src="assets/images/person.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-9">
                        <div class="ts-d-profile-r-contents mt-5">
                            <div class="ts-d-profile-meta">

                                <div class="ts-d-profile-designation mb-4">
                                    <h3 class="text-uppercase">ibrahim momin khan</h3>
                                    <h6 class="text-capitalize">Corporate Marketing Sales</h6>
                                </div>

                                <div class="ts-d-profile-details">
                                    <p>
                                        <span class="ts-d-personal">
                                            <i class="bi bi-calendar"></i> 30 November, 1993
                                        </span>
                                        <span class="ts-d-profile-edit">edit</span>
                                    </p>
                                    <p>
                                        <span class="ts-d-personal"><i class="bi bi-telephone-fill"></i> +880 1714 000000</span>
                                        <span class="ts-d-profile-edit">edit</span>
                                    </p>
                                    <p>
                                        <span class="ts-d-personal"><i
                                                class="bi bi-envelope"></i> ibrahim@genusys.us</span>
                                        <span class="ts-d-profile-edit">edit</span>
                                    </p>
                                    <p>
                                        <span class="ts-d-personal"><i class="bi bi-house-door"></i> Farmgate, Dhaka-1215</span>
                                        <span class="ts-d-profile-edit">edit</span>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <!--    End Main Content Area-->
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="assets/js/main.js"></script>
<!--all scripts-->
</body>
</html>
