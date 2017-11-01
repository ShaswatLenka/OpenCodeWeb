		<!-- Start Of Guidelines -->
		<div class = "container">
		<div class = "row">
		<div class=" animate-box ">
		<h1>Hi! Read through the guidelines and start your own project.</h1><br>
		<h2><strong>Guidelines:</strong></h2>

		<h3  class = "justify_text" >
			<strong>A.To start a software project and collaborate with OpenCode you need to have a basic understanding of: </strong>   
		</h3>	
		<p>0. <strong> [most important]</strong> What is Open Source and How do Open Source Communities Work. You need to be a good googler :P</p>
		<p>1. How to use a Version Control System Like <strong>git</strong> and code sharing platforms like <strong>github</strong>. A good place to start is <a target="_blank" href ="https://www.youtube.com/watch?v=DR7MLaAKcUk&list=PLfdtiltiRHWFEbt9V04NrbmksLV4Pdf3j"> here</a></p>
		<p>2. Have some experience in any programming language.</p>
		<h3><strong>B. To start a robotics Project:</strong> </h3>
		<p>1. You should have a basic idea on microcontrollers like arduino or PIC etc.</p>
		<p>2. You should have a basic idea on embedded C </p>
		<p>3. Your contribution to differenent aspects of robotics(electronics, coding and mechanical) will require some pre-requisite knowledge on that field.</p>

		<h3><strong>C. To start any other Project:</strong> </h3>
		
		<h3><strong>Next Step:</strong></h3>
		<p>1. Create your OpenCode account</p>
		<p>2. Submit and describe your idea. (You will be directed to the ideas page only after you create an account) </p>
		<p>3. Your idea will be pitched in the community and selected on these criteria </p>
		<p> Voila! Once your idea is selected we will get in touch with you!</p> 	

		</div>
		</div>
		</div>

		<!-- End of Guidelines-->
		<!--start idea form-->
			<div class="container">
					
					<?php
						if($this->session->userdata('isUserLoggedIn')){
          						 $data['Mopencode'] = $this->Mopencode->getRows(array('id'=>$this->session->userdata('userId')));
           			 //load this header
           					 $this->load->view('others/idea_form');
       					 }else{
          					 $this->load->view('others/non_idea_form');
       						 } ?>

				</div>
		<!-- end idea form -->