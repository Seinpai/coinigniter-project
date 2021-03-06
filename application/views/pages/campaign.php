<main style="flex: 1 0 auto;">
<div class="container">
    <div class="section">
        <div class="middle">
            <h4><?php echo $data['campaign_name']; ?></h4>
        </div>

        <div class="row">
            <div class="col s12 m7">
        		<img class="responsive-img" src="<?php echo base_url()?>public/img/background1-fix.jpg">
            </div>
            <div class="col s12 m5">
                <h5>Dana Terkumpul</h5>
                <h6><?php echo $data['campaign_current_fund']?> dari <?php echo $data['campaign_target_fund']?></h6>
            	<div class="ui indicating progress" data-value="<?php echo $data['campaign_current_fund']?>" data-total="<?php echo $data['campaign_target_fund']?>" id="example5">
                    <div class="bar"></div>
                </div>
                <?php
                if ($data['isfundedyet'] == "0") {
                	echo '<a class="dropdown-button btn btn-large" href="#" data-activates="dropdown1">Donate Now</a>';
                }else{
                	echo '<a href="#testdonate" class="waves-effect waves-light btn-large disabled">Donate Now</a>';
                }
				?>
				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
					<form id="my_form_paypal" method="post" action="<?php echo base_url()?>paymentpaypal">
						<input type="hidden" name="id" value="<?php echo $data['id']?>" />
						<li><a href="javascript:{}" onclick="document.getElementById('my_form_paypal').submit();"><i class="material-icons">payment</i>Paypal</a></li>
					</form>
					<li class="divider"></li>
					<form id="my_form_btc" method="post" action="<?php echo base_url()?>paymentbitcoin">
							<input type="hidden" name="member_id" value="<?php echo $data['id']?>" />
						<li><a href="javascript:{}" onclick="document.getElementById('my_form_btc').submit();"><i class="material-icons">attach_money</i>Bitcoin</a></li>
					</form>
				</ul>
	  
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <h5 class="flow-text"><?php echo $data['campaign_description']?></h5>
                <a href="#name"><h5>started by <?php echo $data['campaign_starter']?></h5></a>
            </div>
        </div>

        <div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a href="#test1">Detail</a></li>
		        <li class="tab col s3"><a href="#test2">Donatur</a></li>
		      </ul>
		    </div>
		    <div id="test1" class="col s12">
		    	<p class="flow-text"><?php echo $data['campaign_details'];?></p>
		    </div>
		    <div id="test2" class="col s12 m6">
		    	<ul class="collection">
				    <li class="collection-item avatar" style="top: 22px;">
				      <img src="<?php echo base_url()?>public/img/yuna.jpg" style="top: 0px;" alt="" class="circle">
				      <span class="title">Title</span>
				      <span class="title right">Rp. 200.000</span>
				    </li>
				</ul>
				<ul class="collection">
				    <li class="collection-item avatar" style="top: 22px;">
				      <img src="<?php echo base_url()?>public/img/yuna.jpg" style="top: 0px;" alt="" class="circle">
				      <span class="title">Title</span>
				      <span class="title right">Rp. 200.000</span>
				    </li>
				</ul>
				<ul class="collection">
				    <li class="collection-item avatar" style="top: 22px;">
				      <img src="<?php echo base_url()?>public/img/yuna.jpg" style="top: 0px;" alt="" class="circle">
				      <span class="title">Title</span>
				      <span class="title right">Rp. 200.000</span>
				    </li>
				</ul>
		    </div>
		</div>
    </div>
</div>
</main>

<script>	
	  $('.dropdown-trigger').dropdown();
</script>
