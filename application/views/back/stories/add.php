<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('stories')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li><a href="<?=base_url()?>admin/stories"><?php echo translate('stories')?></a></li>
			<li class="active"><a href="#"><?php echo translate('add_story')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<!--Block Styled Form -->
		<!--===================================================-->
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
		        <div class="panel">
		            
		            <?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$success_alert?>
	            </div>
			<?php endif ?>
			<?php if (!empty($danger_alert)): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>

	                <?=$danger_alert?>
	                 <?=validation_errors()?>
	            </div>
			<?php endif ?>
	    	<?php /*if (!empty(validation_errors())): ?>
                <div class="widget" id="profile_error">
                    <div style="border-bottom: 1px solid #e6e6e6;">
                        <div class="card-title" style="padding: 0.5rem 1.5rem; color: #fcfcfc; background-color: #de1b1b; border-top-right-radius:0.25rem; border-top-left-radius:0.25rem;">You <b>Must Provide</b> the Information(s) bellow</div>
                        <div class="card-body" style="padding: 0.5rem 1.5rem; background: rgba(222, 27, 27, 0.10);">
                            <style>
                                #profile_error p {
                                    color: #DE1B1B !important; margin: 0px !important; font-size: 12px !important;
                                }
                            </style>
                            <?= validation_errors();?>
                        </div>
                    </div>
                </div>
            <?php 
                endif;*/
            ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('add_story')?></h3>
			</div>
			<!--Horizontal Form-->
			<!--===================================================-->
			<form class="form-horizontal" id="story_form" method="POST" action="<?=base_url()?>admin/stories/do_add" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('title')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="title" value="<?php if(!empty($form_contents)){echo $form_contents['title'];}?>" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-amount"><b><?php echo translate('description')?></b></label>
						<div class="col-sm-9">
							<div class="input-group">
								<textArea name="description" class="form-control textarea"><?php if(!empty($form_contents)){echo $form_contents['description'];}?></textArea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('partner_name')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="partner_name" value="<?php if(!empty($form_contents)){echo $form_contents['partner_name'];}?>" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('posted_by')?></b></label>
						<div class="col-sm-9">
						    <select name="posted_by" class="form-control" required>
						        <option value="">Select Posted By User</option>
                <?php
                $members =  $this->db->get_where('member', array('is_blocked' => 'no','is_closed' => 'no', 'is_completed' => 1))->result();
                foreach ($members as $member) {
                        ?>
                        <option value="<?php echo $member->member_id; ?>"  <?php if(!empty($form_contents)){ echo $form_contents['posted_by'] == $member->member_id ? 'selected' : ''; }?> ><?php echo $member->first_name.' '.$member->last_name; ?></option> 
                        <?php } ?>
            </select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('post_time')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" name="post_time" value="<?php if(!empty($form_contents)){echo $form_contents['post_time'];}?>" required="">
						</div>
					</div>
					 	<div class="form-group">
						<label class="col-sm-2 control-label" for="image"><b><?php echo translate('image')?></b></label>
	                    <div class="col-sm-10">
		                    <div class="col-sm-6" style="margin:2px; padding:2px;">
								<img class="img-responsive img-border blah" src="<?=base_url()?>uploads/plan_image/default_image.png" class="img-sm">
		                    </div>
		                    <!-- <div class="col-sm-2"></div> -->
		                </div>
		                <div class="col-sm-12" style="margin-top: 10px">
		                    <div class="col-sm-10 col-sm-offset-2" >
		                        <span class="pull-left btn btn-default btn-file margin-top-10">
		                            <?php echo translate('select_a_photo')?>
		                            <input type="file" name="image[]" class="form-control imgInp" multiple="multiple">
		                        </span>
		                    </div>
		                </div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<a href="<?=base_url()?>admin/packages" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a>
					<!-- <a href="#" class="btn btn-primary" type="submit">Submit</a> -->
	                <button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('submit')?></button>
				</div>
			</form>
			<!--===================================================-->
			<!--End Horizontal Form-->
		</div>
            </div>
        </div>
		<!--===================================================-->
		<!--End Block Styled Form -->
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>
<script>
	$(function () {
	    //bootstrap WYSIHTML5 - text editor
	 //   $('.textarea').wysihtml5();
	     $('.datepicker').datepicker();
	})
</script>
<script>
	// SCRIT FOR IMAGE UPLOAD
    function readURL_all(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var parent = $(input).closest('.form-group');
            reader.onload = function (e) {
                parent.find('.wrap').hide('fast');
                parent.find('.blah').attr('src', e.target.result);
                parent.find('.wrap').show('fast');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".panel-body").on('change', '.imgInp', function () {
        readURL_all(this);
    });
</script>