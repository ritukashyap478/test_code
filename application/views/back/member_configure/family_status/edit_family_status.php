<!--Horizontal Form-->
<!--===================================================-->
<?php
foreach ($get_family_status as $value) 
{
?>
	<form class="form-horizontal" id="family_status_form" action="" method="post">
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label" for="demo-hor-inputemail"><b><?php echo translate('family_status_name')?></b></label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" name="family_status_id" value="<?=$value->family_status_id;?>">
					<input type="text" class="form-control" name="name" value="<?=$value->name;?>">
				</div>
			</div>
		</div>
	</form>
<?php
}
?>
<!--===================================================-->
<!--End Horizontal Form-->