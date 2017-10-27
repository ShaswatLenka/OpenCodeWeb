<?php

$postId = '';
$ptitle = '';
$categoryId = '';
$authorId = '';
$pcontent = '';
$psummery = '';
$iurl = '';
//$roleId = '';

if(!empty($postInfo))
{
    foreach ($postInfo as $pf)
    {
        $postId = $pf->postId;
        $ptitle = $pf->ptitle;
        $categoryId = $pf->categoryId;
        $authorId = $pf->authorId;
        $pcontent = $pf->pcontent;
        $psummery = $pf->psummery;
        $iurl = $pf->iurl;
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-posts"></i> Post Management
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
                        <h3 class="box-title">Edit Post Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editPost" method="post" id="editPost" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="ptitle">Post Title</label>
                                        <input type="text" class="form-control" id="ptitle" placeholder="Post Title" name="ptitle" value="<?php echo $ptitle; ?>" maxlength="100">
                                        <input type="hidden" value="<?php echo $postId; ?>" name="postId" id="postId" />    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <select class="form-control" id="author" name="author">
                                            <option value="0">Select Author</option>
                                            <?php
                                            if(!empty($authors))
                                            {
                                                foreach ($authors as $at)
                                                {
                                                    ?>
                                                    <option value="<?php echo $at->authorId; ?>" <?php if($at->authorId == $authorId) {echo "selected=selected";} ?>><?php echo $at->author ?></option>
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
                                        <select class="form-control" id="category" name="category">
                                            <option value="0">Select Category</option>
                                            <?php
                                            if(!empty($categories))
                                            {
                                                foreach ($categories as $cg)
                                                {
                                                    ?>
                                                    <option value="<?php echo $cg->categoryId; ?>" <?php if($cg->categoryId == $categoryId) {echo "selected=selected";} ?>><?php echo $cg->category ?></option>
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
                                        <input type="text" class="form-control" id="iurl" placeholder="Enter Image Path" name="iurl" value="<?php echo $iurl; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pcontent">Post Content</label>
                                        <input type="text" class="form-control" id="pcontent" placeholder="Post Content Here.." name="pcontent" value="<?php echo $pcontent; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="psummery">Post Summery</label>
                                        <input type="text" class="form-control" id="psummery" placeholder="Post Summery Here.." name="psummery" value="<?php echo $psummery; ?>">
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

<script src="<?php echo base_url(); ?>assets/js/editPost.js" type="text/javascript"></script>