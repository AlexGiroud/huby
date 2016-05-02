<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Visitor graphic</title>
		<meta content='width=device-width, initial-scale=1' name='viewport'/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
		<script src="ajaxGetPost.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function charts(data,ChartType)
			{
				var c=ChartType;
				var jsonData=data;
				google.load("visualization", "1", {packages:["corechart"], callback: drawVisualization});
				function drawVisualization() 
				{
					var data = new google.visualization.DataTable();
					data.addColumn('string', 'Country');
					data.addColumn('number', ' visite');
					$.each(jsonData, function(i,jsonData)
					{
						var value=jsonData.value;
						var name=jsonData.name;
						data.addRows([ [name, value]]);
					});

					var options = {
						title : "Nombre de visite",
						colorAxis: {colors: ['#54C492', '#cc0000']},
						datalessRegionColor: '#dedede',
						defaultColor: '#dedede'
					};

					var chart;
					if(c=="ColumnChart")
					chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

					else if(c=="GeoChart")
					chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

					chart.draw(data, options);
				}
			}

			$(document).ready(function () 
			{
				url='nbvisites.json';
				ajax_data('GET',url, function(data)
				{
					charts(data,"ColumnChart"); 
				});
			});
		</script>
		<style>
			body{font-family:arial}
		</style>
</head>
  <body>
	<div id="chart_div" style="width: 570px; height: 400px;"></div>   
  </body>
</html>