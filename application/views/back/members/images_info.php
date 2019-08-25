<div class="fluid">
	<div class="fixed-fluid">
		<div class="fluid">
			<div class="panel">
				<div class="panel-body">
					<!--Dark Panel-->
			        <!--===================================================-->
			        <div class="pull-right">

					</div>

			        <div class="text-left">
			        	<h4>Member ID - <?=$value->member_profile_id?></h4>
			        </div>
			       
			        <div class="panel panel-dark">
			            <div class="panel-heading">
			                <h3 class="panel-title"><?php echo translate('profile_image')?></h3>
			            </div>
			            <div class="panel-body">

                                <?php $pimages = json_decode($value->profile_image);

                                if(isset($pimages[0]->verified)){
                                    ?>

                                <table class="table table-condenced">
                                    <tr>
                                        <td>
                                            <img src="<?=base_url()?>uploads/profile_image/<?=$pimages[0]->thumb?>" class='img-sm'>
                                        </td>
                                        <td>
                                              <?php
                                            if($pimages[0]->verified == 'no')
                                            {
                                            $verified_button = "<button data-target='#p_image_modal' data-toggle='modal' class='btn btn-dark btn-xs add-tooltip' data-toggle='tooltip' data-placement='top' title= '".translate('verified')."' onclick='profileImageVerified(\"".$pimages[0]->verified."\", ".$value->member_id.")'><i class='fa fa-ban'></i></button>
                                            ";
                                            }
                                            elseif ($pimages[0]->verified == 'yes') {
                                                $verified_button = "<button data-target='#p_image_modal' data-toggle='modal' class='btn btn-success btn-xs add-tooltip' data-toggle='tooltip' data-placement='top' title='".translate('unverified')."' onclick='profileImageVerified(\"".$pimages[0]->verified."\", ".$value->member_id.")'><i class='fa fa-check'></i></button>
                                            ";
                                            }

                                            echo $verified_button;
?>
                                        </td>
                                    </tr>
                                </table>
                            <?php } else { echo "No Image Found."; }  ?>
			            </div>
			        </div>			
			        		
			        <div class="panel panel-dark">
			            <div class="panel-heading">
			                <h3 class="panel-title"><?php echo translate('gallery_images')?></h3>
			            </div>
			            <div class="panel-body">

                            <?php $gimages = json_decode($value->gallery);

//print_r($gimages); die;

                            if(isset($gimages[0]->verified)){
                                ?>

                                <table class="table table-condenced">

                                    <?php  foreach ($gimages as $gimage) {

                                        ?>
                                    <tr>
                                        <td>


                                            <img src="<?= base_url() ?>uploads/gallery_image/<?= $gimage->image ?>"
                                                 class='img-sm'>
                                            <?php ?>

                                        </td>
                                        <td>
                                            <?php
                                            if ($gimage->verified == 'no') {
                                                $verified_button = "<button data-target='#g_image_modal' data-toggle='modal' class='btn btn-dark btn-xs add-tooltip' data-toggle='tooltip' data-placement='top' title= '" . translate('verified') . "' onclick='galleryImageVerified(\"" . $gimage->index . "\",\"" . $gimage->verified . "\", " . $value->member_id . ")'><i class='fa fa-ban'></i></button>
                                            ";
                                            } else {
                                                $verified_button = "<button data-target='#g_image_modal' data-toggle='modal' class='btn btn-success btn-xs add-tooltip' data-toggle='tooltip' data-placement='top' title='" . translate('unverified') . "' onclick='galleryImageVerified(\"" . $gimage->index . "\",\"" . $gimage->verified . "\", " . $value->member_id . ")'><i class='fa fa-check'></i></button>
                                            ";
                                            }

                                            echo $verified_button;
                                             ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            <?php  } else { echo "No Images Found."; } ?>

			            </div>
			        </div>			

				</div>
			</div>
		</div>
	</div>
</div>