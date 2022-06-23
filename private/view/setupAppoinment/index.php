<?php include(PRIVATE_PATH . 'view/template/frontEnd/header.php'); ?>
<?php
    // dd($errors);
?>
<div class="row">
    <div class="p-4 pb-5 col-sm-8 col-sm-offset-2 well">
        <?php
            if(isset($success)){
                ?>
                    <div class="mt-4 col-sm-12 alert alert-success" role="alert">
                        <?= $success ?>
                    </div>
                <?php
            }
        ?>
        <?php
            if(isset($cannotSave)){
                ?>
                    <div class="mt-4 col-sm-12 alert alert-danger" role="alert">
                        <?= $cannotSave ?>
                    </div>
                <?php
            }
        ?>
        <div class="col-sm-12 form-legend">
            <h2>Patient Profile</h2> 
        </div>
        <div class="col-sm-12 form-column">
        <p">Please fill in below information and one of our staffs will call you back ASAP:</p>
            <form action="<?php echo url("task=setup-appoinment&act=store"); ?>" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                    <p style="color: red;"><?= isset($errors['fname']) ? $errors['fname'] : '' ?></p>
                </div>

                <div class="form-group">
                    <label for="fname">Last Name:</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                    <p style="color: red;"><?= isset($errors['lname']) ? $errors['lname'] : '' ?></p>
                </div>

                <div class="form-group">
                    <label for="fname">Mobile Phone No.:</label>
                    <input type="number" id="mobile" name="mobile" class="form-control">
                    <p style="color: red;"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></p>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea rows="5" class="form-control" name="message" placeholder="Message" id="ts-d-message"></textarea>
                </div>

                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>

</div>
<?php include(PRIVATE_PATH . 'view/template/frontEnd/header.php'); ?>