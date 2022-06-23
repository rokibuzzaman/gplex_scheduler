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
<style>
    .well {
	margin-top: 4%;
}

.form-legend {
	padding-bottom: 2em;
}
 </style>
<body>
<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 well">
				<div class="col-sm-12 form-legend">
					<h2>Patient Profile</h2>
                    
				</div>
				<div class="col-sm-12 form-column">
                <p style="color: red;">Please fill in below information and one of our staffs will call you
back ASAP:</p>
					<form action="success" method="post">
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
                        <textarea rows="5" class="form-control" name="message" placeholder="Message" id="ts-d-message">
                                    </textarea>
							
						</div>
						<input type="submit" value="Submit" class="btn btn-primary">
					</form>
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
