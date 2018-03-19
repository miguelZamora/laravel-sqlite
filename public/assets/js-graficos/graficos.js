

  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['php Laravel', 4],
      ['jquery angular js javascript', 4],
      ['html5', 2],
      ['Investigacion', 1],
      ['Servidores web wamp o lamp', 1],
      ['test', 1]
    ]);

    // Set chart options
    var options = {'title':'Grafico tiempos de desarrollo en un proyecto web',
                   'width':600,
                   'height':400};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
