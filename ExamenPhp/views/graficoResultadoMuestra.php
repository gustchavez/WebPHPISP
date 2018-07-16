
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Resultados PPM', 'Tipos Análisis'],

          <?php for ($i=0; $i < count($result) ; $i++) { ?>

          ['<?php echo $result[$i][0];?>', '<?php echo $result[$i][1]; ?>'],

          <?php } ?>
          // ['2015', 1170],
          // ['2016', 660],
          // ['2017', 1030]
        ]);

        var options = {
          chart: {
            title: 'Resultados de la Muestra',
            subtitle: 'Instituto de Salud Pública de Chile (ISP) ',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
