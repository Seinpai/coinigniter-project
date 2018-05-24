<div class="container">
	<h1>Paypal</h1>
	<div class="row">
		<div class="col s4">
			<img class="responsive-img" src="<?php echo base_url()?>public/img/background4.jpg">
		</div>
		<div class="col s8">
			<?php
			$fattr = array('class' => 'col s12');
			echo form_open('/paymentpaypal/donate', $fattr);
			?>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
						<?php echo form_input(array('required','name'=>'Money', 'id'=> 'Money', 'type'=> 'number', 'placeholder'=>'Rp.', 'value'=> set_value('Money'))); ?>
						<?php echo form_error('Money','<span class="red-text">','</span>');?>
                        <label for="Money">Money</label>
                    </div>
                </div>
                <div class="row">
                <button id="btn-login" class="btn waves-effect waves-light right" style="right: 10px;" type="submit">Donate
                    <i class="material-icons right">send</i>
                </button>
                </div>
			<input type="hidden" name="id" value="<?php echo $id?>" />
			<input type="hidden" name="user_id" value="<?php echo $this->session->userdata['id']?>" />
			<?php echo form_close(); ?>
		</div>
	</div>
</div>