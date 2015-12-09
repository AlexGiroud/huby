
<html>
	<head>
		<title>Huby</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="assets/js/Chart.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">
<script defer>
$(document).ready(function(){
	var ctx = document.getElementById("myChart").getContext("2d");
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};	
var options = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero : true,

    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines : true,

    //String - Colour of the grid lines
    scaleGridLineColor : "rgba(0,0,0,.05)",

    //Number - Width of the grid lines
    scaleGridLineWidth : 1,

    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,

    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,

    //Boolean - If there is a stroke on each bar
    barShowStroke : true,

    //Number - Pixel width of the bar stroke
    barStrokeWidth : 2,

    //Number - Spacing between each of the X value sets
    barValueSpacing : 5,

    //Number - Spacing between data sets within X values
    barDatasetSpacing : 1,

    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

};
var myBarChart = new Chart(ctx).Bar(data, options);

});


</script>


		<!-- Header -->
			<header id="header" class="alt">
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="generic.php">A propos de nous</a></li>
					<li><a href="#">....</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Huby</h2>
				<p>Votre pointeuse intelligente</p>
				<ul class="actions">
				<!--
					<li><a href="#" class="button big special">Learn More</a></li>
				!-->
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Fabrique d'Objet Libre</h2>
							<p>La fabrique d’objets libre est une association, elle est identifiée sur fablabs.io comme fablab respectant la charte MIT.</p>
							<ul class="actions">
								<li>
									<a href="http://www.fablab-lyon.fr/" target="_blank" class="button alt">plus d'infos</a>
								</li>
							</ul>
						</div>
					</article>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
			$('#nbVisiteur').load('nb.php');
			setInterval(function(){

$('#nbVisiteur').load('nb.php');
			}, 3000);
		});
	</script>




					<article class="feature right">
<canvas id="myChart" width="350" height="350"></canvas>

	<div class="content">
							<h2>Nombre de visiteurs : <a><?php echo '<a id="nbVisiteur"></a>';?></a></h2>



							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
						<a href="#" class="image"><img src="http://placehold.it/225x150" alt="" /></a>
					</div>
					
				</div>
			</section>

		<!-- Three -->










		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Contactez-nous</h2>
						<p>Envoyez un message a l'administrateur !</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Nom complet" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Adresse email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Envoyer" /></li>
							<li><input type="reset" class="alt" value="Rénitialiser" /></li>
						</ul>
					</form>
				</div>
			</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>