<footer class="page-footer indigo  darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">CoinIgniter</h5>
                <p class="grey-text text-lighten-4">A Platform to Donate Using Bitcoins</p>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">About Us</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">Our Team</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">Term and Conditions</a>
                </li>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Take Actions!</h5>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">CrowdFunding</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">Donation</a>
                </li>
                <li>
                    <a class="grey-text text-lighten-3" href="#!">Join Us</a>
                </li>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 CoinIgniter Dev Team
        </div>
    </div>
</footer>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
<!-- Add your site or application content here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?php echo base_url()?>public/component/progress.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/js/materialize.min.js"></script>
<script src="<?php echo base_url()?>public/js/plugins.js"></script>
<script src="<?php echo base_url()?>public/js/init.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->

<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<script>

    $('.progress')
      .progress();

     window.onload = function () { $("#load.progress").fadeOut("slow"); };
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            // $(".progress").fadeOut("slow");
            $('.collapsible').collapsible();
            $('.modal').modal({
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .7, // Opacity of modal background
                    inDuration: 500, // Transition in duration
                    outDuration: 500, // Transition out duration
                    startingTop: '10%', // Starting top style attribute
                    endingTop: '20%', // Ending top style attribute
                }
            );
        });
    </script>
</body>

</html>
