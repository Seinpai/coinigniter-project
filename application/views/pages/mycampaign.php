    <div class="row container" style="margin-top:20px;">
      <div class="col s12 m3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?php echo base_url()?>public/img/background1-fix.jpg">
          </div>
          
          <div class="card-content center">
            <!-- <?php foreach ($data as $key => $value) { Echo '<h4>'.$value.'</h4>';}?> -->
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
      <div class="card hoverable">
        <div class="card-content center">
          <h2>My Campaign</h2>
          <div class="row">
            <a class="btn-floating btn-large waves-effect waves-light blue right modal-trigger" href="#modal1">
              <i class="material-icons">add</i>
            </a>

            <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>New Campaign</h4>
                <div class="row">
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
                      <label for="desc">Campaign Description</label>
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
              <div class="modal-footer">

              </div>
            </div>
          </div>


          <div class="row">
            <div class="col s12 m12">
              <div class="ui three stackable cards">

                <div class="card">
                  <div class="content"><span>
                    Elliot
                    <i class="tiny material-icons">check_circle</i>
                  </span></div>
                  <a class="image" href="#">
                    <img src="<?php echo base_url()?>public/img/background4.jpg">
                  </a>

                  <div class="content">
                    <a class="header" href="#">Campaign Title Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                  </div>
                  <div class="extra content">
                    <span class="right floated">
                      23 Days left
                    </span>
                    <span>
                      <i class="user icon"></i>
                      0.0009 Bitcoins Funded
                    </span>
                  </div>
                  <div class="ui bottom attached">
                    <div class="ui indicating progress" data-value="14" data-total="20">
                      <div class="bar">
                        <div class="progress"></div>
                      </div>
                      <div class="label">Uploading Files</div>
                    </div>
                  </div>
                </div>

                <?php 
                foreach ($data as $key => $value) 
                  { 
                    echo '<h4>'.$value['id'].'</h4>';
                  }
                ?>
                <!-- <div class="card">
                  <div class="content"><span>
                    Elliot
                    <i class="tiny material-icons">check_circle</i>
                  </span></div>
                  <a class="image" href="#">
                    <img src="<?php echo base_url()?>public/img/background4.jpg">
                  </a>

                  <div class="content">
                    <a class="header" href="#">Campaign Title Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                  </div>
                  <div class="extra content">
                    <span class="right floated">
                      23 Days left
                    </span>
                    <span>
                      <i class="user icon"></i>
                      0.0009 Bitcoins Funded
                    </span>
                  </div>
                  <div class="ui bottom attached">
                    <div class="ui indicating progress" data-value="14" data-total="20">
                      <div class="bar">
                        <div class="progress"></div>
                      </div>
                      <div class="label">Uploading Files</div>
                    </div>
                  </div>
                </div> -->

              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>
  </div>
  