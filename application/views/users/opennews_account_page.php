<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php echo $mopennews['name']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $mopennews['name']; ?></p>
        <p><b>Email: </b><?php echo $mopennews['email']; ?></p>
        <!--<p><b>Phone: </b><?php //echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php //echo $user['gender']; ?></p>-->
    </div>
</div>
</body>
</html>