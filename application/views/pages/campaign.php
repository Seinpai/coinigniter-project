<main style="flex: 1 0 auto;">
<div class="container">
    <div class="section">
        <div class="middle">
            <h4><?php echo $title; ?></h4>
        </div>

        <div class="row">
            <div class="col s12 m7">
        		<img class="responsive-img" src="<?php echo base_url()?>public/img/background1-fix.jpg">
            </div>
            <div class="col s12 m5">
                <h5>Dana Terkumpul</h5>
                <h6><?php echo $danaterkumpul?> dari <?php echo $danamax?></h6>
            	<div class="ui indicating progress" data-value="<?php echo $danaterkumpul?>" data-total="<?php echo $danamax?>" id="example5">
                    <div class="bar"></div>
                </div>
                <?php
                if ($isfundedyet == "0") {
                	echo '<a href="#testdonate" class="waves-effect waves-light btn-large ">Donate Now</a>';
                }else{
                	echo '<a href="#testdonate" class="waves-effect waves-light btn-large disabled">Donate Now</a>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <h5 class="flow-text"><?php echo $deskripsi?></h5>
                <a href="#name"><h5>started by <?php echo $campaignsterter?></h5></a>
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
		    	<p class="flow-text"><?php echo $details;?></p>
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
