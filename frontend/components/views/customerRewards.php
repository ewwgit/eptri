<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\web\View;

?>

<div class="b-tabs-vertical__content-text">
					<h3 class="f-tabs-vertical__title f-primary-b">Confirm rewards</h3>
					
					<div class="col-md-4">
						
					</div>
					<div class="clearfix"></div>
					<div class="col-md-7" style="margin-top: 1em;">
						
							<div class="form-group">
								<label for="usr">Customer Id</label><input type="text" name = "customerId" class="form-control" id="custId" >
								
								<?= Html::submitButton('Submit', ['class' => 'btn btn-primary','id'=>'getcustId'])?>
							</div>
						
					</div>
					
				</div>

<?php 

$this->registerJs("
		
		$('#getcustId').on('click',  function(){
		var uId = $('#custId').val();
		var pathname = window.location.href;
	    var finalUrl = '';
		if(document.location.search.length) {
		if (document.location.search.indexOf('uId') > -1) {
		var reExp = /uId=\\d+/;
var url = window.location.toString();
var finalUrl = url.replace(reExp, 'uId=' + uId);
}
		else
		{
   finalUrl = pathname+'&uId='+uId;
		}
} else {
  finalUrl = pathname+'?uId='+uId;
}
	
		 window.location.replace(finalUrl); 
		
});

		", View::POS_READY , 'my-options');
?>

 

