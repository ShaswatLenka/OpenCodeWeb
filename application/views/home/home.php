		
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

         					$this->load->view('home/home1',$data);

       					 }
       					 else
       					 {
          					 $this->load->view('home/home2');
       					 } ?>
  		</nav>
  	</div>
  </div>
            <br>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center heading-section">
                        <h2>Let's revolutionize the way we develop</h2>
						<h3>The Official Open Source Society of NIT Rourkela</h3>
					</div>
				</div>

				
            	<div class="row">
            		<figure class="col-md-5 justify_text animate-box ">
            		<br><br>
						<p><strong>Whether you’ve just mastered how to make the computer output “Hello World,” assembling the modules for your next media player with your very own everything-neon interface, or have a half-baked idea for a potentially disruptive software solution in the pipeline, you are more than welcome to collaborate with us and take a step towards building the next big thing. Login, Fork, Code…that’s all there is.</strong></p> 
						</figure>
				

					<div class="col-sm-7 animate-box img-centre">
						<img class="img-responsive" src="<?php echo base_url('assetsWeb/images/HelloWorld.jpg')?>"/>
            		</div>
            	</div>
            	
      
            	<div class="row">
					<div class="col-sm-7 animate-box">
            <br><br>
						<img class="img-responsive" src="<?php echo base_url('assetsWeb/images/Idea.jpg')?>"/>
						<br>
            		</div> 

            		<div class="col-sm-5 justify_text animate-box">
            		<br><br>
						<p><strong>Hate Coding? Well here’s some news, OpenCode is not just a society of developers. It’s a society of people across the entire spectrum of disciplines. It’s a place where a member is exposed to all aspects of development, right from drawing out Use Cases and Sequence Diagrams, to writing out Test Cases and plotting Bug Models. See, no coding anywhere yet. UX/UI design and Technical Writing are some of the more diverse fields. In short, if you have an idea or can implement an existing idea in an optimised way, this is just the place for you.</strong></p> 
            		</div>
            	</div>

            <br>
            	<div class="row">
                <figure class="col-md-5 justify_text animate-box ">
                <br><br><br>
            <p><strong>Join us and be a part of the rapidly growing Open Source community of Creative Coders, Roboticists, Product Developers, UX/UI Designers and yes…. Developers. Get mentored and take the highway to effective and professional software development. Witness your ideas materialize into actual usable consumer-grade products.</strong></p> 
            </figure>
        
            <div class = "col-sm-1"></div>
          <div class="col-sm-6 animate-box img-centre">
            <img class="img-responsive" src="<?php echo base_url('assetsWeb/images/Workflow.png')?>"/>
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
                   <div class="img">
                        <a href="<?php echo base_url(); ?>projects/saturday"><img src="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg" width="350" height="300" alt="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg">
                            <div class="overlay"></div></a>
                            </div>
                         <div class="caption">
                        <a href="<?php echo base_url(); ?>projects/saturday"><h4>Saturday</h4></a>
                    </div>
                </div>
            </div>
        <div class="col-sm-4">
                <div class="thumbnail text-center">
                    <div class="img">
                        <a href="<?php echo base_url(); ?>projects/chessbot"><img src="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg" width="350" height="300" alt="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg">
                            <div class="overlay"></div></a>
                            </div>
                    <div class="caption">
                        <a href="<?php echo base_url(); ?>projects/chessbot"><h4>chessbot</h4></a>
                    </div>
                </div>
            </div>

        <div class="col-sm-4">
                <div class="thumbnail text-center">
                    <div class="img">
                        <a href="<?php echo base_url(); ?>projects/minipaint"><img src="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg" width="350" height="300" alt="<?php echo base_url(); ?>assetsWeb/images/saturday.jpg">
                            <div class="overlay"></div></a>
                            </div>
                    <div class="caption">
                        <a href="<?php echo base_url(); ?>projects/minipaint"><h4>MinPaint</h4></a>
                    </div>
                </div>
            </div>
         </div>
    </div>
<br><br>
