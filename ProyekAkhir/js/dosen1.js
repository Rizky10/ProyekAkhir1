      

      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Tahun');
      data.addColumn('number', 'Jurnal');
      data.addColumn('number', 'Prosiding');
      data.addColumn('number', 'Total');

      data.addRows([
        
        [2001,  7, 2, 9],
        [2002,  1, 2, 3],
        [2003,  6,   7, 13],
        [2004,  7, 2, 9],
        [2005,  1, 2, 3],
        [2006,  6,   7, 13],
        [2007,  7, 2, 9],
        [2008,  1, 2, 3],
        [2009,  6,   7, 13],
        [2010,  7, 2, 9],
        [2011,  1, 2, 3],
        [2012,  6,   7, 13],
         ]);

      var options = {

      
      };

      var chart = new google.charts.Line(document.getElementById('curve_chart'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }





      // 'Year', 'Jurnal', 'Prosiding','Total'],
      //     ['2004',  10,      4,14],
      //     ['2005',  11,      4,15],
      //     ['2006',  6,       1,7],
      //     ['2007',  9,      6,15]


