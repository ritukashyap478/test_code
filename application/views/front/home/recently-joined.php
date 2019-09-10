
<section class="slice sct-color-2">
    <div class="container">
        <div class="section-title section-title--style-1 text-center">
            <h3 class="section-title-inner">
            <span><?php echo translate('Recently_Joined_Memebers')?></span>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>
        <span class="space-xs-xl"></span>
        <div class="swiper-js-container">
            <div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="2" data-swiper-xs-space-between="10">
                <div class="swiper-wrapper pb-5">
                    <?php foreach ($recent_members as $recent_member): ?>
                        <div class="swiper-slide" data-swiper-autoplay="2000">
                            <div class="block block--style-5">
                                <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover home-p-member">
<a onclick="return goto_profile(<?=$recent_member->member_id?>)">
                                    <div class="profile-picture profile-picture--style-2">
                                        <?php
                                        $image = json_decode($recent_member->profile_image, true);
                                        if(isset($image[0]['verified']) && $image[0]['verified'] == 'yes') {
                                            if (file_exists('uploads/profile_image/'.$image[0]['profile_image'])) {
                                            ?>
                                            <?php
                                                $pic_privacy = $recent_member->pic_privacy;
                                                $pic_privacy_data = json_decode($pic_privacy, true);
                                                $is_premium = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata('member_id'), 'membership');
                                                if($pic_privacy_data[0]['profile_pic_show']=='only_me'){
                                                    if($recent_member->member_id != $this->session->userdata('member_id')){

                                            ?>
                                               <div class="home_pm"><img src="<?=base_url()?>uploads/profile_image/default.jpg"></div>
                                            <?php }else{ ?>
                                               <div class="home_pm">
												<img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image'].'?t='.time()?>">
                                                </div>
                                                <?php } }elseif ($pic_privacy_data[0]['profile_pic_show']=='premium' and $is_premium==2) {
                                                ?>
                                                    <div class="home_pm">
													<img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image'].'?t='.time()?>">
													</div>
                                                <?php }elseif ($pic_privacy_data[0]['profile_pic_show']=='premium' and $is_premium==1) {
                                                ?>
                                                    <div class="home_pm"><img src="<?=base_url()?>uploads/profile_image/default.jpg"></div>
                                                <?php }elseif ($pic_privacy_data[0]['profile_pic_show']=='all') {
                                                ?>
                                                <div class="home_pm">
												 <img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image'].'?t='.time()?>">
												 </div>
                                            <?php }else{ ?>
                                                <div class="home_pm"><img src="<?=base_url()?>uploads/profile_image/default.jpg"></div>
                                            <?php }
                                            }
                                            else {
                                            ?>
                                                <div class="home_pm">
												<img src="<?=base_url()?>uploads/profile_image/default.jpg">
												</div>
                                            <?php
                                            } }  else {
                                            ?>
                                            <div class="home_pm">
                                                <img src="<?=base_url()?>uploads/profile_image/default.jpg">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <!-- <img src="<?=base_url()?>template/front/uploads/profile_image/"> -->
                                    </div>
</a>
                                    <div class="card-body text-center">
                                       <a onclick="return goto_profile(<?=$recent_member->member_id?>)"> <h3 class="heading heading-5 premium_heading"><?=$recent_member->first_name." ".$recent_member->last_name?></h3></a>
                                        <!-- <h3 class="heading heading-light heading-sm strong-300">CEO of Webpixels</h3> -->
                                        <div class="carousel-item-info">
                                         
                                                <?php /*
                                                    $followers = $this->db->get_where('member', array('member_id' => $premium_member->member_id))->row()->follower;
                                                    $following_json = $this->db->get_where('member', array('member_id' => $premium_member->member_id))->row()->followed;
                                                    $following = json_decode($following_json, true);
                                                ?>
                                                <li>
                                                <span class="c-base-1 strong-500"><?=$followers?></span> <?=translate('follower(s)')?></li>
                                                <li>
                                                <span class="c-base-1 strong-500"><?=count($following)?></span> <?=translate('following')?></li>
<?php */?>


                                             
<?php $from = new \DateTime(date("Y-m-d", $recent_member->date_of_birth));
$to   = new \DateTime('today');
echo $from->diff($to)->y.'yrs';
?>,
                                              <?=$recent_member->height?>ft,
                                              <?php $p_language = $this->Crud_model->get_type_name_by_id('member', $recent_member->member_id, 'language');
                                              $p_language_data = json_decode($p_language, true);
                                               ?>

                                              <?=$this->Crud_model->get_type_name_by_id('language', $p_language_data[0]['mother_tongue']);?>,

<?php 
$p_spiritual_and_social_background = $this->Crud_model->get_type_name_by_id('member', $recent_member->member_id, 'spiritual_and_social_background');
            $p_spiritual_and_social_background_data = json_decode($p_spiritual_and_social_background, true);

?>
<?=$this->Crud_model->get_type_name_by_id('religion', $p_spiritual_and_social_background_data[0]['religion']);?>,


<?php
 $p_present_address = $this->Crud_model->get_type_name_by_id('member', $recent_member->member_id, 'present_address');
            $p_present_address_data = json_decode($p_present_address , true);
 $belongs_to = $this->Crud_model->get_type_name_by_id('member', $recent_member->member_id, 'belongs_to');  
?>
                                             
<?php if($p_present_address_data [0]['country']){echo $this->Crud_model->get_type_name_by_id('state', $p_present_address_data [0]['state']).', '.$this->Crud_model->get_type_name_by_id('country', $p_present_address_data [0]['country']);}?></strong>, From <strong><?= $belongs_to ?></strong>
                                              


                                          
                                        </div>
                                        <?php if($recent_member->member_id == $this->session->userdata('member_id')){ ?>
                                            <a href="<?=base_url()?>home/profile" class="btn btn-rounded  btn-outline btn-styled btn-sm btn-base-1  mt-2 text-white"><?=translate('Connect_Now')?></a>
                                        <?php } else { ?>
                                            <a class="btn btn-rounded btn-styled btn-outline btn-sm btn-base-1  mt-2 text-white" onclick="return goto_profile(<?=$recent_member->member_id?>)"><?=translate('Connect_Now')?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
    </div>
</section>