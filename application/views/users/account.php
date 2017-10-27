<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php echo $user['username']; ?>!</h3>
    <div class="account-info">
        <p><b>Username: </b><?php echo $user['username']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
    </div>
</div>
</body>
</html>