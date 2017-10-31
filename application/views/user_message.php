<div class="container">
	<div class="col-sm-1-offset col-sm-8">

						 <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
		
		<h3><strong>Your idea sumbmitted susseccfully!!</strong><small>	  We will contact soon.	</small>Thanks<h3>
			<?php foreach ($results as $idea) {
				$title = $idea->messageTitle;
				$content = $idea->message;
				$category = $idea->category;
				$status = $idea->status;
			}	
				?>
			<p><strong>Title :- </strong><?php echo $title; ?></p>
			<p><strong>Your message :-  </strong><?php echo $content; ?></p>
			<p><strong>Category :- </strong><?php echo $category; ?></p>
			<p><strong>Project status :- </strong><?php echo $status; ?></p>
	</div>
</div>