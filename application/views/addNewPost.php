<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Post Management
        <small>Add / Edit Post</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Post Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addPost" action="<?php echo base_url() ?>addNewPost" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="ptitle">Post Title</label>
                                        <input type="text" class="form-control required" id="ptitle" name="ptitle" maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <select class="form-control required" id="author" name="author">
                                            <option value="0">Select Author</option>
                                            <?php
                                            if(!empty($authors))
                                            {
                                                foreach ($authors as $at)
                                                {
                                                    ?>
                                                    <option value="<?php echo $at->authorId ?>"><?php echo $at->author ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control required" id="category" name="category">
                                            <option value="0">Select Category</option>
                                            <?php
                                            if(!empty($categories))
                                            {
                                                foreach ($categories as $cg)
                                                {
                                                    ?>
                                                    <option value="<?php echo $cg->categoryId ?>"><?php echo $cg->category ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="iurl">Image URL</label>
                                        <input type="text" class="form-control required" id="iurl"  name="iurl">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pcontent">Post Content here..</label>
                                        <input type="text" class="form-control required" id="pcontent"  name="pcontent">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="psummery">Post Summery</label>
                                        <input type="text" class="form-control required" id="psummery" name="psummery" maxlength="200">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addPost.js" type="text/javascript"></script>