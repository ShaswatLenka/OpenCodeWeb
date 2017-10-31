<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OpenCode login</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->helper('url');
		?>
		<div class="container">
			<div class="jumbotron" style="background-color: gray">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
				<div class="jumbotron">
				<div class="row">
					<div class="col-lg-offset-5 col-sm-5">
						<h2><b>Login</b></h2>
					</div>
					<div class="col-sm-2">
						<a href = "<?php echo base_url(); ?>home"><h2><small>Skip</small></h2></a>
					</div>
				</div>
					<div class="row">
					 <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
  
								<div class="col-lg-offset-3 col-lg-6">
									<form action="" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<div class="form-group has-feedback">
            						<input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
           							 <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        						</div>
								</div><br/>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<div class="form-group">
          							<input type="password" class="form-control" name="password" placeholder="Password" required="">
          								<?php echo form_error('password','<span class="help-block">','</span>'); ?>
        						</div>
								</div>
								<div class="checkbox">
							<!--		<label><input type="checkbox"> remember me</label>-->
								</div>
							<!--		<b><a href="#">Forgot Password ?</a></b>-->
								<div class="col-lg-6">
									<div class="form-group">
            							<input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        							</div>
								</div>
									</form>
								</div>
							</div>
						<hr/>
							<p>Don't have an account?&nbsp;&nbsp;Register now!</p>
						<div class="row">
							<div class="col-lg-offset-5 col-sm-4">
								<div class="btn btn-default btn-lg"><?php echo anchor('Opencode/registration','Register');?></div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>