<script src="<?=base_url()?>template/front/js/jquery.inputmask.bundle.min.js"></script>

<section class="slice sct-color-2" style="background:#ddd;">
    <div class="profile">
        <div class="container">
            <?php foreach ($get_member as $member): ?>
                <div class="row cols-md-space cols-sm-space cols-xs-space">
				
				      <div class="col-md-10 offset-md-1">
				
<?php if (!empty($success_alert)): ?>
                        <div class="col-12" id="success_lg_alert">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <?=$success_alert?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($danger_alert)): ?>
                        <div class="col-12" id="danger_lg_alert">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <?=$danger_alert?>
                            </div>
                        </div>
                    <?php endif ?>
                       
					   
                 
                        <?php
                            $basic_info = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'basic_info');
                            $basic_info_data = json_decode($basic_info, true);

                            $present_address = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'present_address');
                            $present_address_data = json_decode($present_address, true);

                            $family_info = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'family_info');
                            $family_info_data = json_decode($family_info, true);

                            $education_and_career = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'education_and_career');
                            $education_and_career_data = json_decode($education_and_career, true);

                            $physical_attributes = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'physical_attributes');
                            $physical_attributes_data = json_decode($physical_attributes, true);

                            $language = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'language');
                            $language_data = json_decode($language, true);

                            $hobbies_and_interest = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'hobbies_and_interest');
                            $hobbies_and_interest_data = json_decode($hobbies_and_interest, true);

                            $personal_attitude_and_behavior = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'personal_attitude_and_behavior');
                            $personal_attitude_and_behavior_data = json_decode($personal_attitude_and_behavior, true);

                            $residency_information = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'residency_information');
                            $residency_information_data = json_decode($residency_information, true);

                            $spiritual_and_social_background = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'spiritual_and_social_background');
                            $spiritual_and_social_background_data = json_decode($spiritual_and_social_background, true);

                            $life_style = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'life_style');
                            $life_style_data = json_decode($life_style, true);

                            $astronomic_information = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'astronomic_information');
                            $astronomic_information_data = json_decode($astronomic_information, true);

                            $astronomic_information = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'astronomic_information');
                            $astronomic_information_data = json_decode($astronomic_information, true);

                            $permanent_address = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'permanent_address');
                            $permanent_address_data = json_decode($permanent_address, true);

                            $additional_personal_details = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'additional_personal_details');
                            $additional_personal_details_data = json_decode($additional_personal_details, true);

                            $u_manglik=$spiritual_and_social_background_data[0]['u_manglik'];

                            $partner_expectation = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'partner_expectation');
                            $partner_expectation_data = json_decode($partner_expectation, true);
                            
                        ?>
						
						  <div class="text-center">
                                        <h2 class="heading heading-2 strong-700">
                                          <?php echo translate('complete_your_profile')?>
                                        </h2>     
                                       <h6 class="heading-6">The site administrator has requested some required information about you, <br>So that you can listed in this website.</h6>										
                                    </div>
									
						<div class="clearfix"></div><br>			
						
                        <form id="complete_profile_form" class="form-default" role="form" action="<?=base_url()?>home/profile/complete_profile_update" method="POST">
                            <div class="widget">
                                <div class="card z-depth-2-top" id="profile_load">
                                    <?php if (!empty(validation_errors())): ?>
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
                                        endif;
                                    ?>
                                    <!---div class="card-title">
                                        <h1 class="heading heading-1 strong-500 text-center">
                                            <b><?php echo translate('complete_your_profile_to_get_listed')?></b>
                                        </h1>                                        
                                    </div-->
                                    <div class="card-body" style="padding: 1.5rem 0.5rem;">
                                        
										

                                         <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                            <div id="edit_required_information">
                                                <div class="card-inner-title-wrapper  pt-0">
                                                    <h3 class="card-inner-title pull-left">
                                                    <?php echo translate('required_information')?> </h3>
                                                </div>
                                                <div class='clearfix'></div><br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="first_name" class="text-uppercase c-gray-light"><?php echo translate('first_name')?>*</label>
                                                            <input type="text" class="form-control no-resize" name="first_name" value="<?php if(!empty($form_contents)){echo $form_contents['first_name'];} else{echo $member->first_name;}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
<div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="last_name" class="text-uppercase c-gray-light"><?php echo translate('last_name')?>*</label>
                                                            <input type="text" class="form-control no-resize" name="last_name" value="<?php if(!empty($form_contents)){echo $form_contents['last_name'];} else{echo $member->last_name;}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="gender" class="text-uppercase c-gray-light"><?php echo translate('gender')?>*</label>
                                                            <?php
                                                                if (!empty($form_contents)) {
                                                                    echo $this->Crud_model->select_html('gender', 'gender', 'name', 'edit', 'form-control form-control-sm selectpicker', $form_contents['gender'], '', '', '');
                                                                }
                                                                else {
                                                                    echo $this->Crud_model->select_html('gender', 'gender', 'name', 'edit', 'form-control form-control-sm selectpicker', $member->gender, '', '', '');
                                                                }
                                                            ?> 
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="email" class="text-uppercase c-gray-light"><?php echo translate('email')?>*</label>
                                                            <input type="hidden" name="old_email" value="<?=$member->email?>">
                                                            <input type="email" class="form-control no-resize" name="email" value="<?php if(!empty($form_contents)){echo $form_contents['email'];} else{echo $member->email;}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="date_of_birth" class="text-uppercase c-gray-light"><?php echo translate('date_of_birth')?>* </label>
                                                            <?php
                                                                    $month = [
                                                                        '1' => 'January',
                                                                        '2' => 'February',
                                                                        '3' => 'March',
                                                                        '4' => 'April',
                                                                        '5' => 'May',
                                                                        '6' => 'June',
                                                                        '7' => 'July',
                                                                        '8' => 'August',
                                                                        '9' => 'September',
                                                                        '10' => 'October',
                                                                        '11' => 'November',
                                                                        '12' => 'December'
                                                                    ];
                                                                    $current_year = date("Y");
                                                                    
                                                                    $old_date = date('d', $member->date_of_birth);
                                                                    $old_month = date('m', $member->date_of_birth);
                                                                    $old_year = date('Y', $member->date_of_birth);
                                                                    ?>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                          <div class="form-group">
																		
                                                                            <select name="monthob" id="mobrth" class="form-control form-control-sm">
                                                                            <option value="">Month</option>
                                                                            <?php foreach ($month as $key => $value) : ?>
                                                                            <option value="<?php echo $key; ?>" <?php if($key == $old_month) { echo "selected"; } ?>>
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                            <?php endforeach; ?>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
																		    <div class="form-group">
                                                                            <select name="dateob" id="dobrth" class="form-control form-control-sm">
                                                                            <option value="">Date</option>
                                                                            </select>
                                                                            <input type="hidden" id="old_dob" value="<?php echo $old_date; ?>">
                                                                           </div>
                                                                        </div>
                                                                        <div class="col-md-4">
																		     <div class="form-group">
                                                                            <select name="yearob" id="yobrth" class="form-control form-control-sm">
                                                                            <option value="">Year</option>
                                                                            <?php for( $y = 1970; $y <= $current_year; $y++ ) { ?>
                                                                            <option value = "<?php echo $y; ?>" <?php if($y == $old_year) { echo "selected"; } ?>>
                                                                                <?php echo $y; ?>
                                                                            </option>
                                                                            <?php } ?>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            
                                                                                var mobr = $('#mobrth').val();
                                                                                var mon31 = ['1', '3', '5', '7','8', '10', '12'];
                                                                                var mon30 = ['4', '6', '9', '11'];
                                                                                if( $.inArray(mobr, mon31) != -1 ) {
                                                                                    date_drop(31);
                                                                                }
                                                                                else if( $.inArray(mobr, mon30) != -1 ) {
                                                                                    date_drop(30);
                                                                                    
                                                                                }   else if( mobr == 2 ) {
                                                                                    date_drop(28);
                                                                                }
                                                                        });
                                                                        function date_drop(nmbr_days) {
                                                                            var old_dob = $('#old_dob').val();
                                                                            var date_html = "<option>Date</option>";
                                                                                    for( var i = 1; i <= nmbr_days; i++ ) {
                                                                                        if( i == old_dob ) { var selected = "selected"; }   else { var selected = ""; }
                                                                                        date_html += "<option value='"+i+"' "+selected+">"+i+"</option>";
                                                                                    }
                                                                                    $('#dobrth').html(date_html);
                                                                        }
                                                                    </script>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <label for="height" class="text-uppercase c-gray-light"><?php echo translate('height')?>*</label>
                                                            <div class="input-group">
                                                                <select name="height"  class="form-control form-control-sm selectpicker">
                                                                    <option value="">Select Height</option>
                                                                    <?php foreach($height_array as $h => $height) {?>
                                                                    <option value="<?php echo $h; ?>" <?php if(!empty($form_contents)){echo $form_contents['height'] == $h ? 'selected' : '' ;} else{echo $member->height == $h ? 'selected' : '';}?>><?php echo $height ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="row">                           
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="religion" class="text-uppercase c-gray-light"><?php echo translate('religion')?></label>
                                                            <?php
                                                                if (!empty($form_contents)) {
                                                                    echo $this->Crud_model->select_html('religion', 'religion', 'name', 'edit', 'form-control form-control-sm selectpicker present_religion_f_edit', $form_contents['religion'], '', '', '');
                                                                }
                                                                else {
                                                                    echo $this->Crud_model->select_html('religion', 'religion', 'name', 'edit', 'form-control form-control-sm selectpicker present_religion_f_edit', $spiritual_and_social_background_data[0]['religion'], '', '', ''); 
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="caste" class="text-uppercase c-gray-light"><?php echo translate('caste')?></label>
                                                            <?php
                                                                if (!empty($spiritual_and_social_background_data[0]['religion'])) {
                                                                    if (!empty($spiritual_and_social_background_data[0]['caste'])) {
                                                                        echo $this->Crud_model->select_html('caste', 'caste', 'caste_name', 'edit', 'form-control form-control-sm selectpicker present_caste_f_edit', $spiritual_and_social_background_data[0]['caste'], 'religion_id', $spiritual_and_social_background_data[0]['religion'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('caste', 'caste', 'caste_name', 'edit', 'form-control form-control-sm selectpicker present_caste_f_edit', '', 'religion_id', $spiritual_and_social_background_data[0]['religion'], ''); 
                                                                    }   
                                                                } 
                                                                elseif (!empty($form_contents['religion'])){
                                                                    if (!empty($form_contents['caste'])) {
                                                                        echo $this->Crud_model->select_html('caste', 'caste', 'caste_name', 'edit', 'form-control form-control-sm selectpicker present_caste_f_edit', $form_contents['caste'], 'religion_id', $form_contents['religion'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('caste', 'caste', 'caste_name', 'edit', 'form-control form-control-sm selectpicker present_caste_f_edit', '', 'religion_id', $form_contents['religion'], '');
                                                                    }
                                                                }
                                                                else {
                                                                ?>
                                                                    <select class="form-control form-control-sm selectpicker present_caste_f_edit" name="caste">
                                                                        <option value=""><?php echo translate('choose_a_religion_first')?></option>
                                                                    </select>
                                                                <?php
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="mother_tongue" class="text-uppercase c-gray-light"><?php echo translate('mother_tongue')?></label>
                                                            <?php
                                                                if (!empty($form_contents)) {
                                                                    echo $this->Crud_model->select_html('language', 'mother_tongue', 'name', 'edit', 'form-control form-control-sm selectpicker', $form_contents['mother_tongue'], '', '', '');
                                                                }
                                                                else {
                                                                    echo $this->Crud_model->select_html('language', 'mother_tongue', 'name', 'edit', 'form-control form-control-sm selectpicker', $language_data[0]['mother_tongue'], '', '', '');
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="marital_status" class="text-uppercase c-gray-light"><?php echo translate('marital_status')?></label>
                                                            <?php
                                                                if (!empty($form_contents)) {
                                                                    echo $this->Crud_model->select_html('marital_status', 'marital_status', 'name', 'edit', 'form-control form-control-sm selectpicker', $form_contents['marital_status'], '', '', '');
                                                                }
                                                                else {
                                                                    echo $this->Crud_model->select_html('marital_status', 'marital_status', 'name', 'edit', 'form-control form-control-sm selectpicker', $basic_info_data[0]['marital_status'], '', '', '');
                                                                }
                                                            ?> 
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="country" class="text-uppercase c-gray-light"><?php echo translate('living_in_country')?></label>
                                                            <?php
                                                                if (!empty($form_contents)) {
                                                                    echo $this->Crud_model->select_html('country', 'country', 'name', 'edit', 'form-control form-control-sm selectpicker present_country_f_edit', $form_contents['country'], '', '', '');
                                                                }
                                                                else {
                                                                    echo $this->Crud_model->select_html('country', 'country', 'name', 'edit', 'form-control form-control-sm selectpicker present_country_f_edit', $present_address_data[0]['country'], '', '', ''); 
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="state" class="text-uppercase c-gray-light"><?php echo translate('living_in_state')?></label>
                                                            <?php
                                                                if (!empty($present_address_data[0]['country'])) {
                                                                    if (!empty($present_address_data[0]['state'])) {
                                                                        echo $this->Crud_model->select_html('state', 'state', 'name', 'edit', 'form-control form-control-sm selectpicker present_state_f_edit', $present_address_data[0]['state'], 'country_id', $present_address_data[0]['country'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('state', 'state', 'name', 'edit', 'form-control form-control-sm selectpicker present_state_f_edit', '', 'country_id', $present_address_data[0]['country'], ''); 
                                                                    }   
                                                                } 
                                                                elseif (!empty($form_contents['country'])){
                                                                    if (!empty($form_contents['state'])) {
                                                                        echo $this->Crud_model->select_html('state', 'state', 'name', 'edit', 'form-control form-control-sm selectpicker present_state_f_edit', $form_contents['state'], 'country_id', $form_contents['country'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('state', 'state', 'name', 'edit', 'form-control form-control-sm selectpicker present_state_f_edit', '', 'country_id', $form_contents['country'], '');
                                                                    }
                                                                }
                                                                else {
                                                                ?>
                                                                    <select class="form-control form-control-sm selectpicker present_state_f_edit" name="state">
                                                                        <option value=""><?php echo translate('choose_a_country_first')?></option>
                                                                    </select>
                                                                <?php
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="city" class="text-uppercase c-gray-light"><?php echo translate('living_in_city')?></label>
                                                            <?php
                                                                if (!empty($present_address_data[0]['state'])) {
                                                                    if (!empty($present_address_data[0]['city'])) {
                                                                        echo $this->Crud_model->select_html('city', 'city', 'name', 'edit', 'form-control form-control-sm selectpicker present_city_f_edit', $present_address_data[0]['city'], 'state_id', $present_address_data[0]['state'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('city', 'city', 'name', 'edit', 'form-control form-control-sm selectpicker present_city_f_edit', '', 'state_id', $present_address_data[0]['state'], ''); 
                                                                    }   
                                                                } 
                                                                elseif (!empty($form_contents['state'])){
                                                                    if (!empty($form_contents['city'])) {
                                                                        echo $this->Crud_model->select_html('city', 'city', 'name', 'edit', 'form-control form-control-sm selectpicker present_city_f_edit', $form_contents['city'], 'state_id', $form_contents['state'], '');
                                                                    } else {
                                                                        echo $this->Crud_model->select_html('city', 'city', 'name', 'edit', 'form-control form-control-sm selectpicker present_city_f_edit', '', 'state_id', $form_contents['state'], '');
                                                                    }
                                                                }
                                                                else {
                                                                ?>
                                                                    <select class="form-control form-control-sm selectpicker present_city_f_edit" name="city">
                                                                        <option value=""><?php echo translate('choose_a_state_first')?></option>
                                                                    </select>
                                                                <?php
                                                                }
                                                            ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="postal_code" class="text-uppercase c-gray-light"><?php echo translate('postal-Code')?></label>
                                                            <input type="text" class="form-control no-resize" name="postal_code" value="<?php if(!empty($form_contents)){echo $form_contents['postal_code'];} else{echo $present_address_data[0]['postal_code'];}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="mobile" class="text-uppercase c-gray-light"><?php echo translate('mobile')?></label>
                                                            <input type="hidden" name="old_mobile" value="<?=$get_member[0]->mobile?>">
                                                            <input type="text" class="form-control no-resize" name="mobile" value="<?=$get_member[0]->mobile?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="belongs_to" class="text-uppercase c-gray-light"><?php echo translate('belongs_to')?></label>
                                                            <input type="hidden" name="old_belongs_to" value="
                                                            <?php if(!empty($form_contents)){echo $form_contents['belongs_to'];} else{echo $member->belongs_to;}?>">
                                                            <input type="text" class="form-control no-resize" name="belongs_to" value="<?php if(!empty($form_contents)){echo $form_contents['belongs_to'];} else{echo $member->belongs_to;}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="highest_education" class="text-uppercase c-gray-light"><?php echo translate('highest_education')?></label>
                                                            <?php
                                                            if(isset($form_contents['highest_education'])){
                                                                $form_contents['highest_education'] = $form_contents['highest_education'];
                                                            }else{
                                                                $form_contents['highest_education'] = '';
                                                            }

                                                            echo $this->Crud_model->select_html('education_level', 'highest_education', 'education_level_name', 'edit', 'form-control form-control-sm selectpicker', $form_contents['highest_education'], '', '', '');

                                                           /*<input type="text" class="form-control no-resize" name="highest_education" value="<?php if(!empty($form_contents)){echo $form_contents['highest_education'];} else{echo $education_and_career_data[0]['highest_education'];}?>">*/ ?>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="occupation" class="text-uppercase c-gray-light"><?php echo translate('occupation')?></label>
                                                            <input type="text" class="form-control no-resize" name="occupation" value="<?php if(!empty($form_contents['occupation'])){echo $form_contents['occupation'];} else{echo $education_and_career_data[0]['occupation'];}?>">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    

                                            </div>
                                        </div>
										
										
										<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                            <div id="edit_introduction">
                                                <div class="card-inner-title-wrapper  pt-0">
                                                    <h3 class="card-inner-title pull-left">
                                                    <?php echo translate('introduction')?> </h3>
                                                </div>
                                                <div class='clearfix'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group has-feedback">
                                                            <textarea name="introduction" class="form-control no-resize" rows="6"><?php if(!empty($form_contents['introduction'])){echo $form_contents['introduction'];} else{echo $member->introduction;}?></textarea>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										
                                    <div class="text-center">
                                            <button type="submit" class="btn btn-base-1 btn-rounded btn-xl btn-shadow"><i class="ion-checkmark"></i> <?php echo translate('save')?></button>
                                        </div>
                                     </div>                                       
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $(".height_mask").inputmask({
            mask: "9.99",
            greedy: false,
            definitions: {
                '*': {
                    validator: "[0-9]"
                }
            }
        });
    });
</script>
<script>
    $(".present_country_f_edit").change(function(){
        var country_id = $(".present_country_f_edit").val();
        if (country_id == "") {
            $(".present_state_f_edit").html("<option value=''><?php echo translate('choose_a_country_first')?></option>");
            $(".present_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_state_f_edit").html(data);
                    $(".present_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".present_state_f_edit").change(function(){
        var state_id = $(".present_state_f_edit").val();
        if (state_id == "") {
            $(".present_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/city/state_id/"+state_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_city_f_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });

    $(".permanent_country_f_edit").change(function(){
        var country_id = $(".permanent_country_f_edit").val();
        if (country_id == "") {
            $(".permanent_state_f_edit").html("<option value=''><?php echo translate('choose_a_country_first')?></option>");
            $(".permanent_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".permanent_state_f_edit").html(data);
                    $(".present_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".permanent_state_f_edit").change(function(){
        var state_id = $(".permanent_state_f_edit").val();
        if (state_id == "") {
            $(".permanent_city_f_edit").html("<option value=''><?php echo translate('choose_a_state_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/city/state_id/"+state_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".permanent_city_f_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".prefered_country_f_edit").change(function(){
        var country_id = $(".prefered_country_f_edit").val();
        if (country_id == "") {
            $(".prefered_state_f_edit").html("<option value=''><?php echo translate('choose_a_country_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_state_f_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });


    $(".present_religion_f_edit").change(function(){
        var religion_id = $(".present_religion_f_edit").val();
        if (religion_id == "") {
            $(".present_caste_f_edit").html("<option value=''><?php echo translate('choose_a_religion_first')?></option>");
            $(".present_sub_caste_f_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_caste_f_edit").html(data);
                    $(".present_sub_caste_f_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".present_caste_f_edit").change(function(){
        var caste_id = $(".present_caste_f_edit").val();
        if (caste_id == "") {
            $(".present_sub_caste_f_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_sub_caste_f_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });

    $(".prefered_religion_edit").change(function(){
        var religion_id = $(".prefered_religion_edit").val();
        if (religion_id == "") {
            $(".prefered_caste_edit").html("<option value=''><?php echo translate('choose_a_religion_first')?></option>");
            $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_caste_edit").html(data);
                    $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".prefered_caste_edit").change(function(){
        var caste_id = $(".prefered_caste_edit").val();
        if (caste_id == "") {
            $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {  
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_sub_caste_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
</script>