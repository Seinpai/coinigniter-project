
        <div class="container">
        <div class="section">
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
                    <a class="header" href="campaign/'.$value['id'].'">
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
                </div>
              </div>
            </div>
        </div>
      </div>

