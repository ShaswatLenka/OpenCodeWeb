
		<div id="fh5co-portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>Our Projects</h2>
						<h3>You can become a contributor too! Here are some projects to start with!</h3>
					</div>
				</div>

		<div id="fh5co-portfolio-section">
			<div class="container">
<!--  app = apps, card = web, icon = robotics -->
				<div id="portfoliolist" class="animate-box">
					
					<div class="portfolio all card" data-cat="card">
						<div class="portfolio-wrapper">				
							<img src="<?php echo base_url('assetsWeb/images/portfolio_pic1.jpg')?>" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Aarambh</a>
									<span class="text-category">A vernacular programming language</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>				

					<div class="portfolio all app" data-cat="app">
						<div class="portfolio-wrapper">			
							<img src="<?php echo base_url('assetsWeb/images/portfolio_pic2.jpg')?>" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Easy Paint</a>
									<span class="text-category">A minimal Paint App</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>		
					
					<div class="portfolio all icon" data-cat="icon">
						<div class="portfolio-wrapper">						
							<img src="<?php echo base_url('assetsWeb/images/portfolio_pic3.jpg')?>" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Chess Bot</a>
									<span class="text-category">A chess playing bot</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>									
				</div>
			</div>
		</div>

		
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
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


