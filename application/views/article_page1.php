			<?php
			foreach ($results as $row) {
			$ptitle = $row->ptitle;
			$iurl = $row->iurl;
			$authorId = $row->authorId;
			$categoryId = $row->categoryId;
			$pcontent = $row->pcontent;
			$psummery = $row->psummery;
			
			}?>
		<?php $this->load->helper('url');
		?>
			<!-- Start of body -->
			<div class="row">
				<div class="col-lg-8">
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url()."/uploads/".$iurl; ?>" height="440" width="720"></img>
				</div>
					<div class="col-lg-4">
						<h3>Other popular Articles</h3>
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
				<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
				<p>--------------------------------------------------------------------</p><br/>
					</div>
			</div>

			<div class="row">
			<div class="col-lg-8">
				<p><?php echo $iurl; ?></p>
				<h1><b><?php echo $ptitle; ?></b></h1>
				<h4><?php echo $authorId; ?></h4>
				<b><?php echo $categoryId; ?></b>
				<h4><?php echo $pcontent; ?></h4>
			<b><?php echo $psummery; ?></b>
			</div>

			<div class="col-lg-4">
						
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>

					<div class="col-lg-4">
						
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>

					<div class="col-lg-4">
						
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>
				<?php
if($this->session->userdata('isUserLoggedIn')){
//            $data['mopennews'] = $this->mopennews->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('opennews_article_comment_page');
        }else{
           $this->load->view('opennews_article_login_comment_page');
        } ?>
			</div>
			<h2>Gallery</h2>
			<div class="row">
			<div class="col-lg-3">
			<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			</div>
			
			<div class="row">
				<h3>You may also like</h3>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>

			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>

			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
					
			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$psummery);?></p>
					
			</div>

			</div>
		</div>