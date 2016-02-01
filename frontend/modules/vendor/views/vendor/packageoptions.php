<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Package Options';

?>
<!--main content  here-->
<div class="b-tabs-vertical__content-text">
	<h3 class="f-tabs-vertical__title f-primary-b">Package Options</h3>
	<p align="justify"
		style="font-size: 18px; margin: 10px 0px 15px 10px; padding: 0px;">
		You current Package : <span style="color: #ff3333">None</span>
	</p>
	<p
		style="font-size: 20px; margin-left:10px; font-style: italic; color: #669933; padding: 0px;">Don't
		wait. Take the opportunity to grow your business.</p>
	<p style="font-size: 14px; margin-left:10px; padding: 0px;">choose your package based on
		your business needs ands start growing.</p>
	<div class="col-md-3" style="padding: 0px;">
		<div class="form-group">
			<h3 class="f-tabs-vertical__title f-primary-b">Your Package</h3>
			<select class="form-control" id="exampleInputName2" style="margin-left:10px;">
				<option>-select-</option>
						<?php
						
foreach ( $model->packages as $packages ) {
							?>
                        <option opid = <?= $packages['id']?> value="<?= $packages['name']?>"><?= $packages['name']?> ($<?= $packages['cost']?>)</option>
                        <?php }?>
					</select>
		</div>
	</div>
			
			<?php
			echo ListView::widget ( [ 
					'dataProvider' => $dataProvider,
					'itemView' => '_showPackages' 
			] );
			?>    
	
		</div>


<script type="text/javascript">
 $(document).ready(function(){
	 $(".box").hide();
    $("select").on("change",function(){
        $(this).find("option:selected").each(function(){
var chnagedatr = $(this).attr("value");
var chnageid = $(this).attr("opid");
//console.log(chnageid);
$(".box").hide();
$(".chnagecls"+chnageid).show();
            
        });
    }).change();
}); 
</script>
<style>
.tooltip-inner {
	width: 200px;
	background: #808080;
	font-family: 'Open Sans', sans-serif;
	font-size: 1em;
	color: #fff;
}
</style>
<script>$(function() {
    $(".btnWithTooltip").tooltip();
});
</script>
<!--main content closed here-->
