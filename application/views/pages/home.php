        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                <br><br>
                <h1 class="flow-text"><strong>Online CrowdFunding For </strong></h1>
                <div style="margin-top: 30px;">
                    <div class="type-wrap">
                        <div id="typed-strings">
                            <h1>The Loved Ones.</h1>
                            <h1>The Poor.</h1>
                            <h1>The Creative.</h1>
                            <h1>The Humanity.</h1>
                        </div>
                        <span id="typed" style="font-size: 50px; margin-top: 2rem;"></span>
                    </div>
                </div>
                </div>
            </div>
            <div class="parallax"><img src="<?php echo base_url()?>public/img/background4-fix.jpg" alt="Unsplashed background img 1"></div>
            <div class="banner-overlay"></div>
        </div>



        <div class="black">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                    <h2 class="center white-text"><i class="material-icons">sentiment_very_satisfied</i></h2>
                    <h5 class="center white-text">100++ Campaign Funded</h5>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                    <h2 class="center white-text"><i class="material-icons">group</i></h2>
                    <h5 class="center white-text">1000++ Generous People who have joined</h5>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                    <h2 class="center white-text"><i class="material-icons">attach_money</i></h2>
                    <h5 class="center white-text">2++ Bitcoin Donations Collected</h5>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="grey lighten-3">
            <div class="section">
                <div class="col s12 m4">
                    <h1 class="center black-text">Completed Campaign</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="grey lighten-3">
            <div class="section" >
                <div class="carousel carousel-slider center"  data-indicators="true">
                  <div class="carousel-fixed-item">
                      <a class="btn waves-effect indigo pulse">Make a Donations</a>
                  </div>
                  <div class="carousel-item">
                      <h2>First Panel</h2>
                      <a href="#one!"><img src="<?php echo base_url()?>public/img/background1-fix.jpg"></a>
                  </div>
                  <div class="carousel-item">
                      <h2>Second Panel</h2>
                      <a href="#one!"><img src="<?php echo base_url()?>public/img/background1-fix.jpg"></a>
                  </div>
                  <div class="carousel-item">
                      <h2>Third Panel</h2>
                      <a href="#one!"><img src="<?php echo base_url()?>public/img/background1-fix.jpg"></a>
                  </div>
                  <div class="carousel-item">
                      <h2>Fourth Panel</h2>
                      <a href="#one!"><img src="<?php echo base_url()?>public/img/background1-fix.jpg"></a>
                  </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <div class="col s12 m4">
                    <h3 class="center black-text">Trusted CrowdFunding Platform</h3>
                    <h5 class="center black-text">Thousands of People Raise Money in CoinIgniter Every Day</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12">
                <div class="ui three stackable cards">
<<<<<<< HEAD
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
=======

                  <div class="card">
                    <div class="content"><span>
                      Elliot
                      <i class="tiny material-icons">check_circle</i>
                    </span></div>
                    <a class="image" href="#">
                      <img src="<?php echo base_url()?>public/img/background4.jpg">
>>>>>>> 4e480fc40d6cdc1d440854e81e882aa81c86ed85
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
                      <div class="ui indicating progress" data-value="10" data-total="20">
                        <div class="bar">
                          <div class="progress"></div>
                        </div>
                        <div class="label">Uploading Files</div>
                      </div>
                    </div>
                  </div>

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
                      <div class="ui indicating progress" data-value="18" data-total="20">
                        <div class="bar"></div>
                      </div>
                    </div>
                  </div>

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
                      <div class="ui indicating progress" data-value="18" data-total="20" id="example5">
                        <div class="bar"></div>
                      </div>
                    </div>
                  </div>

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
                      <div class="ui indicating progress" data-value="18" data-total="20" id="example5">
                        <div class="bar"></div>
                      </div>
                    </div>
                  </div>

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
                      <div class="ui indicating progress" data-value="18" data-total="20" id="example5">
                        <div class="bar"></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div id="btn-show-more" class="row center">
                <a href="campaign" class="btn waves-effect indigo pulse">Show More</a>
            </div>
        </div>
      </div>


      <div class="grey lighten-3" style="margin-top: 30px;">
        <div class="container">
            <div class="section">
                <h3 class="center black-text">Why Choose Us</h3>
                <div class="row">
                    <!-- <div class="col m1">
                    </div> -->
                    <div class="col m6">
                        <img class="responsive-img" src="<?php echo base_url()?>public/img/background4.jpg">
                    </div>
                    <div class="col m5 s12">
                      <ul class="collapsible popout">
                        <li>
                          <div class="collapsible-header active"><i class="material-icons">filter_drama</i>First</div>
                          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                          <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="col m1">
                    </div>
                </div>
            </div>
        </div>
      </div>
