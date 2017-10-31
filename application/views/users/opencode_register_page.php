<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OpenCode Registration</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
		<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>"></script>
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" style="background-color: gray">
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-8">
				<div class="jumbotron">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-6">
						<h2><b>Register</b></h2>
					</div>
					<div class="col-sm-2">
						<a href = "<?php echo base_url(); ?>home"><h2><small>Skip</small><h2></a>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
				<form action="" method="post">
					<div class="form-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div><br/>
					<div class="form-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div><br/>
					<div class="form-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div><br/>
					<div class="form-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div><br/>
					<div class="col-lg-6">
				<div class="form-group">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
        </div>
					</div>
				</form>
					</div>
				</div>
				<hr/>
						<p>Already have an account!&nbsp;&nbsp;Login now!</p>
						<div class="row">
							<div class="col-sm-5">
							</div>
						<div class="col-sm-4">
						<div class="btn btn-default btn-lg"><?php echo anchor('Opencode/login','Login');?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>