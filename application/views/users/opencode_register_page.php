<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OpenCode Registration</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" style="background-color: #073763">
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-8">
				<div class="jumbotron">
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4">
						<h2><b>Register</b></h2>
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
						<div class="btn btn-success btn-lg"><?php echo anchor('Opencode/login','Login');?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>