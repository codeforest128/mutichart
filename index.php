<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script src="https://chartjs-plugin-datalabels.netlify.com/chartjs-plugin-datalabels.js"></script>
	<style>
		.container-fluid {
			margin:20px 0px 20px;
		}
		.orangefont {
			color: #ffc107;
		}
		.btn {
			margin:5px;
		}
		.card {
			margin-bottom: 10px;
		}
		.top-row .card {
			margin-bottom: 10px;
			height: 100%;
		}
		.top-row{
			margin-bottom: 10px;
		}
		.orangediv1,.orangediv {
			background-color: #ffc107;
			color: white;
		}
		.buttonasign {
			justify-content: center;
			display: flex;
		}
		.no-left-padding{
			padding-left: 0px !important;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row top-row">
			<div class="col-sm-3">
			  <div class="card bg-light ">
			    <div class="card-body text-center">
			      <img src="1.png">
			    </div>
			  </div>
			</div>
			<div class="col-sm-2 no-left-padding">
			  <div class="card bg-light">
			    <div class="card-body text-center">
			      <h1 class="orangefont">31</h1>
			      <br>
			      <p>Number of Completed Traning</p>
			    </div>
			  </div>
			</div>
			<div class="col-sm-2 no-left-padding">
			  <div class="card bg-light">
			    <div class="card-body text-center">
			      <h1 class="orangefont">347</h1>
			      <br>
			      <p class="card-text">Actual number of Participant</p>
			    </div>
			  </div>
			</div>
			<div class="col-sm-2 no-left-padding">
			  <div class="card bg-light">
			    <div class="card-body text-center">
			      <h1 class="orangefont">1940</h1>
			      <br>
			      <p class="card-text">Traning man hours</p>
			    </div>
			  </div>
			</div>
			<div class="col-sm-3 no-left-padding">
			  <div class="card bg-light">
			    <div class="card-body text-center">
			      <div class="row buttonasign">
			      	<button type="button" class="btn btn-yellow orangediv col-sm-3">2017</button>
					<button type="button" class="btn btn-yellow orangediv col-sm-3">2016</button>
					<button type="button" class="btn btn-yellow orangediv col-sm-3">2015</button>
			      </div>
			      <br>
			      <div class="row buttonasign">
			      	<button type="button" class="btn btn-yellow orangediv1 col-sm-2">Q1</button>
					<button type="button" class="btn btn-yellow orangediv1 col-sm-2">Q2</button>
					<button type="button" class="btn btn-yellow orangediv1 col-sm-2">Q3</button>
					<button type="button" class="btn btn-yellow orangediv1 col-sm-2">Q4</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="card bg-light">
					<canvas id="bar-chart" height="700"></canvas>
				</div>
			</div>
			<div class="col-sm-7 no-left-padding">
				<div class="row">
					<div class="col-sm-6">
						<div class="card bg-light ">
							<canvas id="doughnut-chart" height="330"></canvas>
						</div>
					</div>
					<div class="col-sm-6 no-left-padding">
						<div class="row">
							<div class="col-sm-12">
								<div class="card bg-light">
									<canvas id="halfdoughnut-chart" height="179"></canvas>
								</div>
							</div>
						</div>
						<div class="row top-row">
							<div class="col-sm-6">
							  <div class="card bg-light">
							    <div class="card-body text-center">
							      <h3 class="orangefont">$27K</h3>
							      <br>
							      <p class="card-text">Costs</p>
							    </div>
							  </div>
							</div>
							<div class="col-sm-6 no-left-padding">
							  <div class="card bg-light">
							    <div class="card-body text-center">
							      <h3 class="orangefont">$78</h3>
							      <br>
							      <p class="card-text">Iraining Costs per person</p>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card bg-light">
							<canvas id="graph" height="357"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	var ctx_1 = document.getElementById('bar-chart').getContext('2d');
	var myChart_1 = new Chart(ctx_1, {
	  type: 'horizontalBar',
	  data: {
	    labels: ["Email Management", "Production Traning 3", "Production Traning 1", "Production Traning 2", "Conflict Management", "Work, Health&Safety", "Advanced Presentation Skills", "Effective Presentation Skills", "Mastering Hard Conversations", "Working Effective in Teams", "Facilitation Skills", "Development", "Applied Project Management", "Data Visualisation Traning", "Power BI"],
	    datasets: [{
	      data: [47,41,39,39,38,30,19,19,16,14,12,9,8,8,8],
	      backgroundColor: "#ffc107"
	    }]
	  },
	  options: {
	    showAllTooltips: true,
	    title: {
	        display: true,
	        text: 'Actual Number of Participant by Traning Name'
	    },
	    tooltips: {
	      enabled: true,
	      displayColors: false,
	      yPadding: 20,
	      xPadding: 30,
	      caretSize: 10,
	      backgroundColor: 'rgba(240, 240, 240, 1)',
	      bodyFontSize: 16,
	      bodyFontColor: 'rgb(50, 50, 50)',
	      borderColor: 'rgba(0,0,0,1)',
	      borderWidth: 1,
	      cornerRadius: 0,
	      yAlign: 'bottom',
	      xAlign: 'center',
	      position: 'custom',
	      custom: function(tooltip) {
	        if (!tooltip) return;
	        // disable displaying the color box;
	        tooltip.displayColors = false;
	      },
	      callbacks: {
	        // use label callback to return the desired label
	        label: function(tooltipItem, data) {
	          return tooltipItem.yLabel + " : " + tooltipItem.xLabel;
	        },
	        // remove title
	        title: function(tooltipItem, data) {
	          return;
	        }
	      }
	    },
	    responsive: false,
	    legend: {
	      display: false
	    },
	    scales: {
	      yAxes: [{
	        ticks: {
	          beginAtZero: true,
	        },
	        gridLines: {
	          display: false
	        },
	      }],
	      xAxes: [{
	        ticks: {
	          stepSize: 10
	        }
	      }],
	    },
	    plugins: {
	      datalabels: {
	        align: 'end',
	        anchor: 'end',        
	        backgroundColor: function(context) {
	          return context.dataset.backgroundColor;
	        },
	        borderRadius: 4,
	        color: 'white',
	        formatter: Math.round
	      }
	    }
	  }
	});
	var ctx_2 = document.getElementById('doughnut-chart').getContext('2d');
	var myChart_2 = new Chart(ctx_2, {
		type: 'doughnut',
	    data: {
	      labels: ["External", "Internal"],
	      datasets: [
	        {
	          label: "Actual Number of Participant by Traning Type",
	          backgroundColor: ["#ffc107", "#b9c8d6"],
	          data: [220,127]
	        }
	      ]
	    },
	    options: {
	      title: {
	        display: true,
	        text: 'Actual Number of Participant by Traning Type'
	      }
	    }
	});
	var ctx_3 = document.getElementById('halfdoughnut-chart').getContext('2d');
	var myChart_3 = new Chart(ctx_3, {
		type: 'doughnut',
	    data: {
		    datasets: [
		        {
		            data: [87, 13],
		            backgroundColor: [
		                "#ffc107",
		                "#ffffff",
		            ],
		            label: 'Expenditures'
		        }]
	    },
	    options: {
	    	responsive: true,
	    	rotation: 1 * Math.PI,
	      	circumference: 1 * Math.PI,
	      	title: {
	        display: true,
	        text: 'Occupancy Rate',
	        tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
					  //get the concerned dataset
					  var dataset = data.datasets[tooltipItem.datasetIndex];
					  //calculate the total of this data set
					  var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
					    return previousValue + currentValue;
					  });
					  //get the current items value
					  var currentValue = dataset.data[tooltipItem.index];
					  //calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
					  var percentage = Math.floor(((currentValue/total) * 100)+0.5);

					  return percentage + "%";
				}
				}
			} 
	      }
	    }
	});
	var ctx_4 = document.getElementById('graph').getContext('2d');
	var myChart_4 = new Chart(ctx_4, {
		type: 'line',
	     data: {
	     labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
	     datasets: [{
		         fill: true,
		         data: [248,150,110,240,108,105,70,350,230,140,115,20],
		         backgroundColor: '#efd68c',
		         borderColor:'#ffc107',
		         borderWidth: 1,
		         lineTension:0,
		         pointRadius:0,
		     }]
	     },
	     options: {
	        title: {
		        display: true,
		        text: 'Traning Man Hours by MonthName'
		    },
	     }
	});
</script>
</html>