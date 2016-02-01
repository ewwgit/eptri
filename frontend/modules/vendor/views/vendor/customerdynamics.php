<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Customer Dynamics';

?>
     <!--main content  here-->
        
         
              <div role="tabpanel" class="tab-pane" id="">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Customer Dynamics</h3>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="range range-success">
                        <label> Select Radius</label>
                        <input type="range" name="range" min="1" max="100" value="50 " onchange="rangeSuccess.value=value">
                        <output id="rangeSuccess">100 miles</output>
                      </div>
                    </div>
                    <div class="col-md-6 pull-right">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> From Date </label>
                          <div class='input-group date' id='datetimepicker8'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> To Date </label>
                          <div class='input-group date' id='datetimepicker9'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pull-right">
                      <div class="time_buttons">
                        <ul>
                          <li><a href="#">Daily</a></li>
                          <li><a href="#">Monthly</a></li>
                          <li><a href="#">Quarterly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-top:1.5em;">
                    <div class="col-md-12 text-center">
                      <div id="piechart" style="width:800px; height: 500px;"></div>
                      
                      
                      
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Total customers visited',     12],
          [' Total unique customers',    11],
          ['Total unique customers visited',  10],
          ['Customers not visited yet', 9],
          ['Customers visited only once',    8],
		   ['Customers visited more than once',  7],
          ['Customers visited more than 5 times', 6],
          ['Customers visited more than 10 times',    5],
		  
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> 
                    </div>
                  </div>
                  <div class="row" style="margin-top:1em;">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="range range-success">
                          <label> Select Radius</label>
                          <input type="range" name="range" min="1" max="100" value="50 " onchange="rangeSuccess.value=value">
                          <output id="rangeSuccess">100 miles</output>
                        </div>
                      </div>
                      <div class="col-md-6 pull-right">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label> From Date </label>
                            <div class='input-group date' id='datetimepicker8'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label> To Date </label>
                            <div class='input-group date' id='datetimepicker9'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 pull-right">
                        <div class="time_buttons">
                          <ul>
                            <li><a href="#">Daily</a></li>
                            <li><a href="#">Monthly</a></li>
                            <li><a href="#">Quarterly</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <h2>Customer Dynamics of product interest around your store area:</h2>
                      <div class="display_rewards_table ">
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td></td>
                              <td style="font-size:15px;">Count</td>
                            </tr>
                            <tr>
                              <td style="font-size:15px;">Category</td>
                              <td style="font-size:15px;"> 123</td>
                            </tr>
                            <tr>
                              <td style="font-size:15px;">Brand</td>
                              <td style="font-size:15px;">123</td>
                            </tr>
                            <tr>
                              <td style="font-size:15px;">Product</td>
                              <td style="font-size:15px;">123</td>
                            </tr>
                            <tr>
                              <td style="font-size:15px;">Customer count</td>
                              <td style="font-size:15px;">1234</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            
         <div class="clearfix"></div>
          <!--main content closed here--> 
<script>
function switchRewards(e){	
	var html = '';
	if(e.checked){
		html += '<select id="exampleInputName2" class="form-control">';
		for(var i=1;i<=20;i++){
			html += '<option value='+i+'>'+i+'</option>';
		}
		html += '</select><span class="percentage">%</span>';	
	}	
	document.getElementById("cb_rewards").innerHTML = html;	
}
function stSale(e){	
	var html = '';
	if(e.checked){
		html += '<select id="exampleInputName1" class="form-control">';
		for(var i=1;i<=20;i++){
			html += '<option value='+i+'>'+i+'</option>';
		}
		html += '</select><span class="percentage">%</span>';	
	}	
	document.getElementById("st_sale").innerHTML = html;	
}
</script> 
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6,#datetimepicker8').datetimepicker({
			 useCurrent: false
			});
        $('#datetimepicker7,#datetimepicker9').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
		
        /*$("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });*/
		$('.cross_icon').click(function(){
			alert('asdfasdf')
			$(this).parent().remove()
			});
    });
	
	function addItem(e){
		var html = $('.addOne').html();
		$('#content_block').append(html);
		//$(e).append(html);				
	}
</script>
<style>
.addOne
{
	display:none;
}
</style>        
          
  