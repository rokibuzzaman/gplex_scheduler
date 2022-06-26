<?php
    include(PRIVATE_PATH . 'view/template/backEnd/header.php');
?>

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
                <li><a class="active" href="<?php echo url('task=dashboard'); ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li><a href="<?php echo url('task=profile'); ?>"><i class="bi bi-person-fill"></i> Profile</a></li>
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
                                <!-- <img src="assets/images/person.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-9">
                        <div class="ts-d-profile-r-contents mt-5">
                            <div class="ts-d-profile-meta">

                                <div class="ts-d-profile-designation mb-4">
                                    <p><span class="text-uppercase" style="font-size:20px"> <?php echo $_SESSION['name'];?></span>
                                    <!-- <span class="ts-d-profile-edit">edit</span></p> -->
                                   
                                </div>

                                <div class="ts-d-profile-details">
                                    <p>
                                        <span class="ts-d-personal">
                                            <i class="bi bi-calendar"></i><?php echo $_SESSION['username'];?>
                                        </span>
                                        <!-- <span class="ts-d-profile-edit">edit</span> -->
                                    </p>
                                   
                                    <p>
                                        <span class="ts-d-personal"><i
                                                class="bi bi-envelope"></i> <?php echo $_SESSION['email'];?></span>
                                        <!-- <span class="ts-d-profile-edit">edit</span> -->
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
<?php include(PRIVATE_PATH . 'view/template/backEnd/footer.php'); ?> 