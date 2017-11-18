  <main role="main">
      <div class="album text-muted">
      	<br>
        <div class="container">
          
		<div class="col-md-10">
		  <div class="card">
		  	<div class="row">
				<div class="col-md-3">
				  <img src="<?php echo base_url().$Thumbnail_link ; ?>" style="height:315px">
				</div>
				<div class="col-md-3">
				  <iframe width="560" height="315" src="<?php echo $Trailer_link; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="card-body">
					<h3 class="card-title"><strong><?php echo $Movie_Name; ?></strong></h3>
					<p class="card-text"><?php echo $Description; ?></p>
					<p><strong>Director:</strong><?php echo $Director; ?><br>
					<!-- <p> --><strong>Stars:</strong><?php echo $Stars; ?><br>
					<!-- <p> --><strong>Genre:</strong><?php echo $Genre; ?></p>
					<center><a href="Payment.html" class="btn btn-primary">CLICK TO PURCHASE/RENT</a><center>

				</div>
			</div>
		  </div>
		</div>

		</div>
	  </div>
	</main>			
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public_html/js/jquery-3.2.1.slim.min.js"></script>
    <script src="public_html/js/popper.min.js"></script>
    <script src="public_html/js/bootstrap.min.js"></script>
  </body>
</html>