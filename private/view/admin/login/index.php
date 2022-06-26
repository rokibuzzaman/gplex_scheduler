<?php include(PRIVATE_PATH . 'view/template/backEnd/header.php'); ?>
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
            <?php
            if(isset($errors)){
                ?>
                    <!-- <div class="mt-4 col-sm-12 alert alert-danger" role="alert">
                        <?= $errors ?>
                    </div> -->

                    <div class="col-lg-12 alert alert-danger alert-dismissible"  style="margin-bottom:0">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p style="margin-bottom:0"> <?= $errors ?></p>
                            </div>
                <?php
            }
        ?>



            <div class="ts-login-card-body my-5">
                <form action="<?php echo url('task=login&act=processLogin'); ?>" name="submit" method="POST">
                    <label class="user-input-wrp">
                        <input type="text" class="inputText" name="email" required/>
                        <span class="floating-label">User Name</span>
                        <img class="ts-user-icon" src="assets/images/user.svg" alt="">
                    </label>

                    <label class="user-input-wrp">
                        <input type="password" class="inputText" name="password" required/>
                        <span class="floating-label">Password</span>

                        <img class="ts-lock-icon" src="assets/images/lock.svg" alt="">
                        <img class="ts-eye-icon" src="assets/images/eye.svg" alt="">
                    </label>

                    <button class="ts-login-btn" type="submit" name="submit">Login</button>

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
<?php include(PRIVATE_PATH . 'view/template/backEnd/footer.php'); ?>