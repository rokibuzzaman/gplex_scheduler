<?php include(PRIVATE_PATH . 'view/template/frontEnd/header.php'); ?>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 well">
        <div class="col-sm-12 form-legend">
            <h2>Patient Profile</h2>
            
        </div>
        <div class="col-sm-12 form-column">
        <p style="color: red;">Please fill in below information and one of our staffs will call you back ASAP:</p>
            <form action="<?php echo url("task=setup-appoinment&act=store"); ?>" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    
                    <label for="fname">Last Name:</label>
                    <input type="text" id="lname" name="fname" class="form-control">
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