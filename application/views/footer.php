		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p><strong>&copy;Copyright 2017 OpenCode. All Rights Reserved.</strong></p>
						</div>
						<div class="col-md-6 social-text-align">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<p><strong>Contacts:</strong></p>
						</div>
						<div class="col-md-3">
							<p><strong>President: +91 8763145905</strong></p>
						</div>

						<div class="col-md-3">
							<p><strong>Vice-President: +91 9040409540 </strong></p>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-6">
						<p><strong>Design Partner: DesignTab</strong> </p>

						</div>
					</div> <br>
						

					<div class="row">
						<div class="col-md-6">
							<p><strong>Faculty Advisor: Dr. Paresh Kale</strong></p>
						</div>
						<div class="col-md-6">
							
						</div>
					</div><br>
				</div>
			</div>
		</footer>
	

	<!-- jQuery -->
	<script src="<?php echo base_url('assetsWeb/js/jquery.min.js')?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assetsWeb/js/jquery.easing.1.3.js')?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assetsWeb/js/bootstrap.min.js')?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assetsWeb/js/jquery.waypoints.min.js')?>"></script>

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url('assetsWeb/js/main.js')?>"></script>
	<!-- JS for image clicks -->
	<script src = "<?php echo base_url('assetsWeb/js/onclick.js')?>"></script>
	
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();

		
		
	});	

	</script>


<script src="<?php echo base_url('assetsWeb\mixitup\dist/mixitup.min.js')?>"></script>

	</body>
</html>
