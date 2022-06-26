
<!--Dashboard Header-->
<?php include(PRIVATE_PATH . 'view/template/backEnd/header.php'); ?>
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
                <a href="<?= url('task=logout') ?>">Logout</a>
            <div class="ts-user dropdown cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                <div class="dropdown-toggle d-flex justify-content-center align-items-center">
                    <span class="ts-user-greetings">Good Evening</span>
                    <span class="ts-user-name">IBRAHIM </span>
                    <img class="ts-user-pic" src="assets/images/admin-user.svg" alt="">
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= url('task=logout') ?>">Logout</a>
                  
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
                <span class="ts-d-acc-name-text text-uppercase">DASHBOARD</span>
            </div>
            <div class="ts-d-date">
                <input type="text" id="datepicker">
                <span class="bi bi-filter ts-d-filter"></span>
            </div>
        </div>
        <!--       End Header Components-->


     

        <!--        Work Process-->
        <div class="ts-d-workprocess-table-area mt-4">
            <div class="row">
            <?php
            if(isset($success)){
                ?>
                    <div class="col-lg-12 alert alert-success alert-dismissible"  style="margin-bottom:0">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p style="margin-bottom:0"> <?= $success ?></p>
                            </div>
                <?php
            }
        ?>
                <div class="col-lg-12">
                    <div class="ts-workprocess-table-main">
                        <div class="ts-workprocess-table-header">
                            <p class="ts-components-title text-uppercase">Appointment List</p>
                            <span><i class="bi bi-three-dots-vertical"></i></span>
                        </div>
                        <div class="ts-workprocess-table-content table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col"> SL.No</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile Number</th>
                                    <th scope="col">Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($appointments as $appointment){
                                            ?>
                                                <tr>
                                                    <th class="text-center"></th>
                                                    <td> <?= $appointment['fname'] ?></td>
                                                    <td> <?= $appointment['lname'] ?></td>
                                                    <td> <?= $appointment['email'] ?? '-' ?></td>
                                                    <td> <?= $appointment['mobile'] ?></td>
                                                    <td> <?= $appointment['message'] ?? '-' ?></td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--     End Work Process-->


    </div>
    <!--    End Main Content Area-->
</div>
<?php include(PRIVATE_PATH . 'view/template/backEnd/footer.php'); ?>
<!--all scripts-->

