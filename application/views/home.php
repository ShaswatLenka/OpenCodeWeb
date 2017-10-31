		
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
				</div>
			</div>
		</header>

        <div class="jumbotron">
  <video id="video-background" preload="" muted="" autoplay="" loop="">
      <source src="<?php echo base_url('assetsWeb/videos/video1.mp4')?>" type="video/mp4">
  </video>
  <div class = "container">
  	<div class "row">
  		<nav class =" col-sm-12">
  			<p class = "col-sm-2"><a href = "<?php echo base_url(); ?>about"><strong>About</strong></a></p>
  			<p class = "col-sm-2"><a href = "<?php echo base_url(); ?>team"><strong>Team</strong></a></p>
  			<p class = "col-sm-2"><a href = "<?php echo base_url(); ?>projects"><strong>Projects</strong></a></p>
  			<p class = "col-sm-2"><a href = "<?php echo base_url(); ?>start_project"><strong>Start a project</strong></a></p>
  					
  			<?php
						if($this->session->userdata('isUserLoggedIn')){
								$this->load->model('Mopencode');
          						$data['results'] = $this->Mopencode->getRows(array('user_id'=>$this->session->userdata('userId')));
           			 //load this header

         					$this->load->view('home1',$data);

       					 }
       					 else
       					 {
          					 $this->load->view('home2');
       					 } ?>
  		</nav>
  	</div>
  </div>
            <br>
            <br>


        	
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center heading-section">
                        <h2>Let's revolutionize the way we code.</h2>
						<h3>The Official Open Source Society of NIT Rourkela</h3>
					</div>
				</div>

				<section class="container">
            	<div class="row">
            		<figure class="col-sm-4 justify_text animate-box ">
						<p><strong>Whether you have started with the “hello world”, building the next Word Processor or building a product that would change the world…you are welcome to collaborate with us. Login, Start and represent the community!</strong></p>            			
            		</div>
            	</div>
            		</figure>
            </section>
            <div class="container">
            	<div class="row">
            	<div class="col-sm-8"></div>
            		<div class="col-sm-4 justify_text animate-box">
						<p><strong>We are doing our best to make OpenCode interdisciplinary…  Don’t worry if coding is not fun for you…just send us an idea that can be developed into a product and get started…</strong></p>            			
            		</div>
            	</div>
            </div>
            <div class="container">
            	<div class="row">
            		<div class="col-sm-4 justify_text animate-box">
						<p><strong>Join Us and be a part of the rapidly growing Open Source community of software developers, robotolics, product developers and designers!</strong></p>            			
            		</div>
            	</div>
            </div>
            <br><br><br>
            <div id="fh5co-services-section">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
							<div class="holder-section">
								<h3>App</h3>
								<p>We have some really interesting apps to get your hands dirty, dive in!</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
							<div class="holder-section">
								<h3>Web</h3>
								<p>Join us and build apps that speak to the world</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="fa fa-cogs" aria-hidden="true"></i>
							<div class="holder-section">
								<h3>Robotics</h3>
								<p>AI, Brain Compter Interface, Internet Of things? What do you want to create? </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
                            <i class="fa fa-plus" aria-hidden="true"></i>
							<div class="holder-section">
								<h3>Create</h3>
								<p>Join the Force now! Pitch in your awesome ideas in the community and start coding with us! </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
                       <i class="fa fa-code-fork" aria-hidden="true"></i>
							<div class="holder-section">
								<h3>Collaborate</h3>
								<p>We are a collaborative society, we'll make sure you are not coding alone in a corner :P </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                            <div class="holder-section">
								<h3>Deploy</h3>
								<p>Publish and document your product and make a change in the world!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- End: fh5co-services-section -->
       <section class = 'jumbotron animate-box'>
<div class = 'container'>
<div class = 'row text-center'>
<h2>Here are some projects to start with</h2>
<h3 class = 'name'></h3>
</div>
</div>
</section> 

 <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail text-center">
                    <img alt="" class="img-responsive" src="<?php echo base_url('assetsWeb/images/saturday.jpg')?>">

                    <div class="caption">
                        <h4>Saturday</h4>
                    </div>
                </div>
            </div>
		<div class="col-sm-4">
                <div class="thumbnail text-center">
                    <img alt="" class="img-responsive" src="<?php echo base_url('assetsWeb/images/saturday.jpg')?>">  

                    <div class="caption">
                        <h4>chessbot</h4>
                    </div>
                </div>
            </div>

		<div class="col-sm-4">
                <div class="thumbnail text-center">
                    <img alt="" class="img-responsive" src="<?php echo base_url('assetsWeb/images/saturday.jpg')?>">  

                    <div class="caption">
                        <h4>MinPaint</h4>
                    </div>
                </div>
            </div>
     	 </div>
 	</div>
<br><br>
