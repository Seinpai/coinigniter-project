          <div class="row container" style="margin-top:20px;">  
            <div class="col s12 m3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?php echo base_url()?>public/img/background1-fix.jpg">
          </div>
          
          <div class="card-content center">
            <?php $first = $this->session->userdata['first_name'];$last = $this->session->userdata['last_name'];$full_name = $first.' '.$last; ECHO $full_name?>
            <a class="waves-effect waves-light btn">Edit Profile</a>
          </div>
          <div class="card-action">
           <ul>
            <li><a href="<?php echo base_url()?>main" class="black-text">Overview</a></li>
            <li><a href="<?php echo base_url()?>main/mycampaign" class="black-text">Campaign Saya</a></li>
            <li><a href="<?php echo base_url()?>main/mydonation" class="black-text">Donasi Saya</a></li>
          </ul>
        </div>
      </div>
    </div>
  
            <div class="col s12 m9">
                <h4>New Campaign</h4>
                <div>
                  <?php  
                  $fattr = array('class' => 'col s12');
                  echo form_open('/main/create_campaign');?>
                  <div class="row">
                    <div class="input-field col s12">
                      <?php echo form_input(array('name'=>'Campaign', 'id'=> 'Campaign', 'type'=> 'text', 'placeholder'=>'Campaign Name', 'value'=> set_value('Campaign'))); ?>
                      <?php echo form_error('Campaign','<span class="red-text">','</span>');?>
                      <label for="Campaign">Campaign Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <?php echo form_input(array('name'=>'targetfund', 'id'=> 'targetfund', 'type'=> 'text', 'placeholder'=>'Target Fund', 'value'=> set_value('targetfund'))); ?>
                      <?php echo form_error('targetfund','<span class="red-text">','</span>');?>
                      <label for="targetfund">Target Fund</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <?php echo form_textarea(array('name'=>'desc', 'id'=> 'desc', 'type'=> 'multiline  ', 'placeholder'=>'Campaign Description', 'value'=> set_value('desc'), 'class' => 'materialize-textarea' )); ?>
                      <?php echo form_error('desc','<span class="red-text">','</span>');?>
                      <label for="desc">Campaign Description</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <?php echo form_input(array('name'=>'date', 'id'=> 'date', 'type'=> 'text', 'placeholder'=>'yyyy/mm/dd', 'value'=> set_value('date'))); ?>
                      <label for="desc">Duration</label>
                    </div>
                  </div>
                  <div class="row">
                    <a>
                      <?php echo form_button(array('content'=>'Add', 'style'=>'right: 10px' , 'class'=>'btn waves-effect waves-light right', 'type'=> 'submit'));?>
                    </a>
                  </div>
                  <?php echo form_close();?>
                </div>
              </div>
            </div>
