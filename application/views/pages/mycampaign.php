    <div class="row container" style="margin-top:20px;">
      <div class="col s12 m3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?php echo base_url()?>public/img/background1-fix.jpg">
          </div>
          <div class="card-content center">
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
          <h2>Wahyu Kontol</h2>

          <div class="row">
          <a class="btn-floating btn-large waves-effect waves-light blue right modal-trigger" href="#modal1">
            <i class="material-icons">add</i>
          </a>
          
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Modal Header</h4>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                      <label for="disabled">Disabled</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      This is an inline input field:
                      <div class="input-field inline">
                        <input id="email_inline" type="email" class="validate">
                        <label for="email_inline">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
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
            </div>
          </div>
        </div>

        <?php 
        // foreach ($banyakbaris as $b) 
        //     {
        //         echo '<h1>' .$b->judul. '</h1>';
        //     } 
        ?>
      </div>
    </div>
  </div>
</div>





