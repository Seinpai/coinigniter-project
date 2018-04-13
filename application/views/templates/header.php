<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coin Igniter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="<?php echo base_url();?>site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url();?>public/css/normalize.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/component/progress.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/component/card.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url();?>public/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.2/dist/Chart.bundle.min.js"></script>
    </head>

    <body style="display: flex;min-height: 100vh;flex-direction: column;">
    <header>
        <ul id="dropdown1" class="dropdown-content">
			<?php
			if(!empty($this->session->userdata['email'])){
				echo "<li>
                <a class=\"black-text center\" href=".base_url()."main".">Dashboard</a>
            </li>
            <li class=\"divider\"></li>
			<li>
				<a class=\"black-text center\" href=".base_url()."main/logout".">logout</a>
			</li>
            ";
			} else {
				echo "
						<li>
							<a class=\"black-text center\" href=".base_url()."main/register".">Join</a>
						</li>
						<li class=\"divider\"></li>
						<li>
							<a class=\"black-text center\" href=".base_url()."main/login".">Login</a>
						</li>";
			}
			?>
        </ul>

        <nav id="nav-bar" class="indigo  lighten-1" role="navigation">
        <div class="progress" id="load" style="position:absolute; margin:0;">
            <div class="indeterminate"></div>
        </div>
            <div class="nav-wrapper container">

                <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo white-text">COIN!GNITER</a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class="white-text" href="#crowdfund">Crowd Funding</a>
                    </li>
                    <li>
                        <a class="white-text" href="#donation">Donations</a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">
							<?php
								if(empty($this->session->userdata['email'])){
									echo "<i class=\"material-icons white-text right\">menu
											<i class=\"material-icons right\">arrow_drop_down</i>
										</i> ";
								} else {
									echo "<i class=\"material-icons white-text right\">person
											<i class=\"material-icons right\">arrow_drop_down</i>
										</i> ";
								}
							?>
                        </a>
                    </li>
                    <li>
                        <a id="btn-search" class="white-text">Search Campaign
                            <i class="material-icons left">search</i>
                        </a>
                    </li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li>
                        <a href="#crowdfund">Crowd Funding</a>
                    </li>
                    <li>
                        <a href="#donation">Donations</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>register">Join</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>login">Login</a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>

        <nav id="search-bar" class="indigo  lighten-1" role="navigation" style="display: none">
            <div class="nav-wrapper">
                <form method="post" action="<?php echo base_url();?>search">
                    <div class="input-field">
                        <input id="search" name="search" type="search" required>
                        <label style="top:-10px" class="label-icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                        <i id="btn-search-close" class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>

</header>
