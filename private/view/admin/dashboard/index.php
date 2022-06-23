
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
                            <p class="ts-components-title text-uppercase">WORK PROCESS</p>
                            <span><i class="bi bi-three-dots-vertical"></i></span>
                        </div>
                        <div class="ts-workprocess-table-content table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col"> SL.No</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Creator</th>
                                    <th scope="col">Client ID</th>
                                    <th scope="col">TIME</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-center" scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-done">Done</span>
                                            <span class="ts-status-done"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-expired">Expired</span>
                                            <span class="ts-status-expired"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-pending">Pending</span>
                                            <span class="ts-status-pending"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">4</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-process">Process</span>
                                            <span class="ts-status-process"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">5</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-done">Done</span>
                                            <span class="ts-status-done"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">6</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <div class="ts-status-area">
                                            <span class="ts-status-text-process">Process</span>
                                            <span class="ts-status-process"></span>
                                        </div>
                                    </td>
                                    <td>Otto</td>
                                </tr>
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

