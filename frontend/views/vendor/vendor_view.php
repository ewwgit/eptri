<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;




$this->title = 'Sale Items';
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- Yii::$app->getSession()->setFlash('info', 'hello'); -->
<!-- return $this->redirect(array('site/index')); -->


 <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px;">
    <div class="sign">
     <h2><?= Html::encode($this->title) ?></h2>  
    </div>
    
    <div class="clearfix"></div>
    
        <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		  ?>  
		
		    <div class="col-sm-4">
		    <?=$form->field($model, 'FileUpload')->fileInput() ?>
		     </div>
    
    		<div class="clearfix"></div>
    
    
   			 <div class="col-sm-8" style="padding:0px;">
				  <div class="col-sm-4">
					     <?php echo $form->field($model, 'offerStartDate')->widget(DatePicker::classname(), [
					    		'options' => ['placeholder' => 'Enter offerStartDate ...','style'=>'width:100px'],
					    		'pluginOptions' => [
					    				'autoclose'=>true,
					    				'format' => 'yyyy-m-d',
					    				'todayHighlight' => true
					    		]
					    ]);
						?>
					 </div>
					 <div class="col-sm-4">
					     <?php 
					     echo $form->field($model, 'offerEndDate')->widget(DatePicker::classname(), [
			          		'options' => ['placeholder' => 'Enter offerEndDate ...','style'=>'width:100px'],
			          		'pluginOptions' => [
			          				'autoclose'=>true,
			          				'format' => 'yyyy-m-d',
			          				'todayHighlight' => true
			          		]
			          ]);
						?>
					</div>
    			</div>
				<div class="col-sm-8" style="padding:0px;">
				    <div class="col-sm-4">
				    	<?= $form->field($model, 'isStoreOffer')->checkbox(array('placeholder' => 'isStoreOffer','id' => 'isStoreOffer'))->label(false);  ?>
				    </div>
				    <div class="col-sm-4">
				 		<?= $form->field($model, 'offer')->textInput(array('placeholder' => 'offer','style'=>'width:150px','id' => 'offer'))->label(false);  ?>
				   </div>
			    </div>
  				<div id="status"></div>
    			<div class="col-sm-8" style="padding:0px;">
				<div class="col-sm-4" id="Importbtn">
					 <?= Html::submitButton($model->isNewRecord ? 'Import' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		   			 <p><?= Html::a('vendorproduct',['/vendor/index']); ?></p>
				</div>
    
   		</div>
		<?php ActiveForm::end(); ?>
  </div>
 
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
#Importbtn
{
   float:left;
   margin-right:10px;
}
	
p a
{
   color: hotpink;
  float:left;
  margin-top:8px;
  font-size:14px;
  
}	
p a:hover
{
   background-color: yellow;
}	

</style>



   
     
       
 
    

                    