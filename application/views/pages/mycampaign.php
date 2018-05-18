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
      <div class="card hoverable">
        <div class="card-content center">
          <h2>My Campaign</h2>
          <div class="row">
            <a class="btn-floating btn-large waves-effect waves-light blue right modal-trigger" href="<?php echo base_url()?>main/create_campaign">
              <i class="material-icons">add</i>
            </a>
          </div>


          <div class="row">
            <div class="col s12 m12">
              <div class="ui three stackable cards">

                
                <?php foreach ($data as $key => $value) { 
                  $datestring = '%Y-%m-%d';
                  $time = time();
                  $now = mdate($datestring, $time);

                  $end = $value['campaign_end_date'];
                  $date1 = strtotime($now);
                  $date2 = strtotime($end); 
                  $convert = timespan($date1,$date2);
                  
                  Echo '<div class="card">
                  <div class="content"><span>'.$value['campaign_starter'].'
                  <i class="tiny material-icons">check_circle</i>
                  </span></div>
                  <a class="image" href="#">
                    <img src='.base_url().'public/img/background4.jpg>
                  </a>

                  <div class="content">
                    <a class="header" href="#">
                    '.$value['campaign_name'].' 
                    </a>
                  </div>
                  <div class="extra content">
                    <span class="right floated">
                      '.$convert.' Days left
                    </span>
                    <span>
                      <i class="user icon"></i>
                      '.$value['campaign_current_fund'].' Bitcoins Funded
                    </span>
                  </div>
                  <div class="ui bottom attached">
                    <div class="ui indicating progress" data-value='.$value['campaign_current_fund'].' data-total='.$value['campaign_target_fund'].'>
                      <div class="bar">
                        <div class="progress"></div>
                      </div>
                      <div class="label">Uploading Files</div>
                    </div>
                  </div>
                </div>';

                }?>
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
  