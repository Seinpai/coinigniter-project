            <div>
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
              <div class="modal-footer">

              </div>
            </div>