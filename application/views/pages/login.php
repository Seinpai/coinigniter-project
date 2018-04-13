<main style="flex: 1 0 auto;">
<div class="container">
    <div class="section">
        <div class="row">
			<?php
			$fattr = array('class' => 'col s12');
			echo form_open('/main/login', $fattr);
			?>                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
						<?php echo form_input(array('name'=>'email', 'id'=> 'email', 'type'=> 'text', 'placeholder'=>'Email', 'value'=> set_value('email'))); ?>
						<?php echo form_error('email','<span class="red-text">','</span>');?>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
						<?php echo form_input(array('name'=>'password', 'id'=> 'password', 'type'=> 'password', 'placeholder'=>'Password', 'value'=> set_value('password'))); ?>
						<?php echo form_error('password','<span class="red-text">','</span>');?>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                <button id="btn-login" class="btn waves-effect waves-light right" style="right: 10px;" type="submit">Login
                    <i class="material-icons right">send</i>
                </button>
                </div>
			<?php echo form_close(); ?>
        </div>
    </div>
</div>
</main>
