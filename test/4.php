  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function text(){
      }
      function drawChart() {
      var temp1 = document.getElementById('temp1').value;
      var humi1 = document.getElementById('humi1').value;
      var temp2 = document.getElementById('temp2').value;
      var humi2 = document.getElementById('humi2').value;
      var temp3 = document.getElementById('temp3').value;
      var humi3 = document.getElementById('humi3').value;
      var temp4 = document.getElementById('temp4').value;
      var humi4 = document.getElementById('humi4').value;
      var temp5 = document.getElementById('temp5').value;
      var humi5 = document.getElementById('humi5').value;
      var temp6 = document.getElementById('temp6').value;
      var humi6 = document.getElementById('humi6').value;
      var temp7 = document.getElementById('temp7').value;
      var humi7 = document.getElementById('humi7').value;
      var temp8 = document.getElementById('temp8').value;
      var humi8 = document.getElementById('humi8').value;
      var temp9 = document.getElementById('temp9').value;
      var humi9 = document.getElementById('humi9').value;
      var temp10 = document.getElementById('temp10').value; 
      var humi10 = document.getElementById('humi10').value;
      var temp11 = document.getElementById('temp11').value; 
      var humi11 = document.getElementById('humi11').value;
      var temp12 = document.getElementById('temp12').value; 
      var humi12 = document.getElementById('humi12').value;

      temp1 *=1;
      humi1 *=1;
        text();
        var data = google.visualization.arrayToDataTable([
          ['', '평균기온', '평균습도'],
          ['1월',  temp1,      humi1],
          ['2월',  temp2,      humi2],
          ['3월',  temp3,      humi3],
          ['4월',  temp4,      humi4],
          ['5월',  temp5,      humi5],
          ['6월',  temp6,      humi6],
          ['7월',  temp7,      humi7],
          ['8월',  temp8,      humi8],
          ['9월',  temp9,      humi9],
          ['10월', temp10,     humi10],
          ['11월', temp11,     humi11],
          ['12월', temp12,     humi12],
          
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'top'},
          vAxes:{
            0:{title:'평균기온(*c)',
              viewwindow:{min:0,max:40},
              ticks:{stepSize:10}
            },
            1:{title:'평균습도(%)',
              viewwindow:{min:20,max:100},
              ticks:{stepSize:20}
            }},
          series:{0:{targetAxisIndex: 0},
                  1: {targetAxisIndex: 1}
                        }};

        var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

        chart.draw(data, options);
      }
    </script>
    <style>
      tr{text-align:right;}
      .mon{text-align:center;}
      table{ width:300px; height: 500px;}
      input{width:60px}
      td{border:1px solid grey;}
      .te{display:flex;}

    </style>
  </head>
  <body>
    <div class="te">
    <table>
      <tr><td></td><td class="mon">평균기온</td><td class="mon">평균습도</td></tr>
      <tr><td class="mon">1월</td><td><input onchange="drawChart()" type="text" name="temp1" id="temp1" value="1"></td><td><input onchange="drawChart()" type="text" name="temp1" id="humi1" value="1"></td></tr>
      <tr><td class="mon">2월</td><td><input onchange="drawChart()" type="text" name="temp2" id="temp2" value="1"></td><td><input onchange="drawChart()" type="text" name="temp2" id="humi2" value="1"></td></tr>
      <tr><td class="mon">3월</td><td><input onchange="drawChart()" type="text" name="temp3" id="temp3" value="1"></td><td><input onchange="drawChart()" type="text" name="temp3" id="humi3" value="1"></td></tr>
      <tr><td class="mon">4월</td><td><input onchange="drawChart()" type="text" name="temp4" id="temp4" value="1"></td><td><input onchange="drawChart()" type="text" name="temp4" id="humi4" value="1"></td></tr>
      <tr><td class="mon">5월</td><td><input onchange="drawChart()" type="text" name="temp5" id="temp5" value="1"></td><td><input onchange="drawChart()" type="text" name="temp5" id="humi5" value="1"></td></tr>
      <tr><td class="mon">6월</td><td><input onchange="drawChart()" type="text" name="temp6" id="temp6" value="1"></td><td><input onchange="drawChart()" type="text" name="temp6" id="humi6" value="1"></td></tr>
      <tr><td class="mon">7월</td><td><input onchange="drawChart()" type="text" name="temp7" id="temp7" value="1"></td><td><input onchange="drawChart()" type="text" name="temp7" id="humi7" value="1"></td></tr>
      <tr><td class="mon">8월</td><td><input onchange="drawChart()" type="text" name="temp8" id="temp8" value="1"></td><td><input onchange="drawChart()" type="text" name="temp8" id="humi8" value="1"></td></tr>
      <tr><td class="mon">9월</td><td><input onchange="drawChart()" type="text" name="temp9" id="temp9" value="1"></td><td><input onchange="drawChart()" type="text" name="temp9" id="humi9" value="1"></td></tr>
      <tr><td class="mon">10월</td><td><input onchange="drawChart()" type="text" name="temp10" id="temp10" value="1"></td><td><input onchange="drawChart()" type="text" name="humi10" id="humi10" value="1"></td></tr>
      <tr><td class="mon">11월</td><td><input onchange="drawChart()" type="text" name="temp11" id="temp11" value="1"></td><td><input onchange="drawChart()" type="text" name="humi11" id="humi11" value="1"></td></tr>
      <tr><td class="mon">12월</td><td><input onchange="drawChart()" type="text" name="temp12" id="temp12" value="1"></td><td><input onchange="drawChart()" type="text" name="humi12" id="humi12" value="1"></td></tr>
    </table>
    <div id="line_chart" style="width: 900px; height: 500px"></div>
    </div>
  </body>
</html>