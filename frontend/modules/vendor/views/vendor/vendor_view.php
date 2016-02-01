<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;




$this->title = 'Upload Products';
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- Yii::$app->getSession()->setFlash('info', 'hello'); -->
<!-- return $this->redirect(array('site/index')); -->

        <h3><?= Html::encode($this->title) ?></h3>  
        <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		  ?>  
		  
		  <div class="col-sm-8" style="padding:0px;">
				    <div class="col-sm-4">
				    	<?php /* echo $form->field($model, 'offerType')->checkbox(array('placeholder' => 'isStoreOffer','id' => 'isStoreOffer'))->label(false);  */ ?>
				    	<?= $form->field($model, 'offerType')->dropDownList([ '0' => 'Select Offer','Store Offer' => 'Store Offer', 'Cash Back' => 'Cash Back']); ?>
				    </div>
				    <div class="col-sm-4">
				 		<?= $form->field($model, 'offer')->textInput(array('placeholder' => 'offer','style'=>'display:block'));  ?>
				   </div>
			    </div>
		
		    
    
    		<div class="clearfix"></div>
    
    
   			 <div class="col-sm-8" style="padding:0px;">
				  <div class="col-sm-4">
				  			<label class="control-label">Start Date</label>
					     <?php echo $form->field($model, 'offerStartDate')->widget(DatePicker::classname(), [
					    		'options' => ['placeholder' => 'Offer Start Date','style'=>'width:144px'],
					    		'pluginOptions' => [
					    				'autoclose'=>true,
					    				'format' => 'yyyy-m-d',
					    				'todayHighlight' => true
					    		]
					    ])->label(false);;
						?>
					 </div>
					 <div class="col-sm-4" >
					 <label class="control-label">End Date</label>
					     <?php 
					     echo $form->field($model, 'offerEndDate')->widget(DatePicker::classname(), [
			          		'options' => ['placeholder' => 'Offer End Date','style'=>'width:135px'],
			          		'pluginOptions' => [
			          				'autoclose'=>true,
			          				'format' => 'yyyy-m-d',
			          				'todayHighlight' => true
			          		]
			          ])->label(false);;
						?>
					</div>
    			</div>
    			<div class="col-sm-7" style="margin-top: 10px;">
		  
		     <?php echo $form->field($model, 'FileUpload')->widget(FileInput::classname(),
		     		['options' => ['accept' => 'csv/*',],
		     	   		 'pluginOptions' => [
		     			 'browseClass' => 'btn btn-success',
       					 'uploadClass' => 'btn btn-info',
        				 'removeClass' => 'btn btn-danger',
       					 'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> ',
		     		    //change here: below line is added just to hide upload button. Its up to you to add this code or not.
		     			'showUpload' => false,] 
		     				
		     ])->label(false); ?>
								
		     </div>
				
  				<div id="status"></div>
    			<div class="col-sm-8" style="padding:0px;">
				<div class="col-sm-4" id="Importbtn" >
					<?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		   			
				</div>
    
   		</div>
		<?php ActiveForm::end(); ?>
 
   <div class="clearfix"></div>


<script>
   $(document).ready(function(){
    $("#offer").hide();
    $("#isStoreOffer").change(function(){
    	 $("#offer").toggle();
    });
});
</script>


<style>
.col-sm-4 {
    width: 38.333%;
}
</style>




   
     
       
 
    

                    