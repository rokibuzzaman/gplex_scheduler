
<!--Dashboard Header-->
<?php include(PRIVATE_PATH . 'view/template/backEnd/header.php'); ?>

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
                <li><a class="active" href="<?= url('task=dashboard') ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li><a href="<?= url('task=profile') ?>"><i class="bi bi-person-fill"></i> Profile</a></li>
                <li><a href="<?= url('task=logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
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
                                        $serialStart = $appointmentData['count_start_from'] ?? 1;
                                        foreach($appointmentData['data'] as $appointment){
                                            ?>
                                                <tr>
                                                    <th class="text-center"><?= $serialStart++ ?></th>
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
                        
                        <nav aria-label="Page navigation example">
                            <b>Page : </b>
                            <ul class="pagination">
                                <?php
                                    for($i=1; $i<=$appointmentData['total_page']; $i++ ){
                                        ?>
                                            <li class="page-item"><a class="page-link" href="<?= url("task=dashboard&page={$i}") ?>"><?= $i ?></a></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </nav>

                </div>
            </div>
        </div>
        <!--     End Work Process-->
    </div>
    <!--    End Main Content Area-->
</div>
<?php include(PRIVATE_PATH . 'view/template/backEnd/footer.php'); ?>
<!--all scripts-->

