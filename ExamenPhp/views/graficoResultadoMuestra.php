
<div id="container" style="width:100%; height:400px;"></div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var options ={
          chart: {
              renderTo: 'container',
              type: 'column',

          },
          title: {
            text: 'Resultados del Analisis'
        },
          yAxis: {
            title: {
                text: 'PPM'
            }
        },
           series: [{
           }]
        };
        $.getJSON(function(){
           options.series[0].data = $analisisResultado->graficoXId();
           var chart = new Highcharts.Chart(options);
        });
    });
</script>