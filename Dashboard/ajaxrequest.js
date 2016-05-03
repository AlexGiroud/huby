/**
 * Created by Alex on 02/05/16.
 */
function hahaha(){
    var entree = [];
    var sortie = [];
    var now = new Date();
    now = Date.now();
    var nbentree = 0;
    var nbsortie = 0;
    $.ajax({
        url: '../PHP_FILES/SelectedPeriodStats.php',
        type: 'get',
        data: {'start': '01-01-2015', 'end': '30-12-2016', 'flow': 'in'},
        success: function(data, status) {
            var result = JSON.parse(data);
            $.each(result, function(key, value){
               entree[key]= Date.parse(value["Date"]);
                if(new Date(entree[key]).getUTCFullYear() == new Date(now).getUTCFullYear() && new Date(entree[key]).getUTCMonth() == new Date(now).getUTCMonth() && new Date(entree[key]).getUTCDay() == new Date(now).getUTCDay()){
                    nbentree++;
                }
            });
            if(nbentree - nbsortie >= 0){
                $('#nbpresent').text(nbentree-nbsortie);
            }
            $('#nbentreetotal').text(result.length);
            $('#nbentree').text(nbentree);
        }
    });
    $.ajax({
        url: '../PHP_FILES/SelectedPeriodStats.php',
        type: 'get',
        data: {'start': '01-01-2015', 'end': '30-12-2016', 'flow': 'out'},
        success: function(data, status) {
            var result = JSON.parse(data);
            $.each(result, function(key, value){
                sortie[key]= Date.parse(value["Date"]);
                if(new Date(sortie[key]).getUTCFullYear() == new Date(now).getUTCFullYear() && new Date(sortie[key]).getUTCMonth() == new Date(now).getUTCMonth() && new Date(sortie[key]).getUTCDay() == new Date(now).getUTCDay()){
                    nbsortie++;
                }
            });
            if(nbentree - nbsortie >= 0){
                $('#nbpresent').text(nbentree-nbsortie);
            }
            $('#nbsortietotal').text(result.length);
            $('#nbsortie').text(nbsortie);
        }
    });
    $.ajax({
        url: '../PHP_FILES/SelectedPeriodStats.php',
        type: 'get',
        data: {'start': '01-01-2015', 'end': '30-12-2016', 'flow': 'chartin'},
        success: function(data, status) {
            var result = JSON.parse(data);
            var Data = [];
            $.each(result, function (key, value){
                var temp = value["dt"].split("-");
                Data.push({x: new Date(temp[0],temp[1]), y: parseInt(value["entries"])});
            });
            chart(Data);
        }
    });


}
function chart (data) {
    var chart = new CanvasJS.Chart("chartContainer",
        {
            title:{
                text: "Nombre d'entrées"
            },
            animationEnabled: false,
            axisY:{
                includeZero: false,
                interval: 2
            },

            data: [
                {
                    type: "stepLine",
                    toolTipContent: "{x}: {y}%",
                    markerSize: 5,
                    dataPoints: data
                }

            ]
        });

    chart.render();
}