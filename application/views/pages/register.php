
<main style="flex: 1 0 auto;">
<div class="container">
    <div class="section">
        <!-- <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div> -->
        <div class="card large hoverable">
    <!-- Card Content -->
            <div class="row" style="padding-top: 80px; margin:20px;">
                <?php 
                    $fattr = array('class' => 'col s12');
                    echo form_open('/main/register', $fattr); 
                ?>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <?php echo form_input(array('name'=>'firstname', 'type'=> 'text','id'=> 'firstname', 'placeholder'=>'First Name', 'value' => set_value('firstname'))); ?>
                            <label for="first_name">Name</label>
                            <?php echo form_error('firstname','<span class="red-text">','</span>');?>
                        </div>
                        <div class="input-field col s6">
                            <?php echo form_input(array('name'=>'lastname', 'type'=> 'text', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'value'=> set_value('lastname'))); ?>
                            <?php echo form_error('lastname','<span class="red-text">','</span>');?>
                            <label for="lastname">lastname</label>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'type'=> 'text', 'placeholder'=>'Email', 'value'=> set_value('email'))); ?>
                            <?php echo form_error('email','<span class="red-text">','</span>');?>
                            <label for="email">email</label>
                        </div>
                    </div>
                    <div class="row">
                        <a>
                            <?php echo form_button(array('content'=>'<i class="material-icons right">send</i>Sign up', 'style'=>'right: 10px' , 'class'=>'btn waves-effect waves-light right', 'type'=> 'submit'));?>
                        </a>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</main>