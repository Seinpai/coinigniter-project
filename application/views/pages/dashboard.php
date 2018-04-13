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
                <h2>Donasi Saya</h2>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="card-content center">
                <h2>Campaign Saya</h2>
                <div>
                    <canvas id="myChart1"></canvas>
                </div>
            </div>
		</div>
	</div>
</div>


<script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var ctx1 = document.getElementById("myChart1").getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>




