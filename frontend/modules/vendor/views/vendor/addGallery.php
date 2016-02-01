 <?php
use yii\helpers\Html;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
	
	/* @var $this yii\web\View */
	/* @var $form yii\bootstrap\ActiveForm */
	/* @var $model \common\models\LoginForm */
	
?>
<?php

	$this->title = 'Add Gallery';
	// $this->params ['breadcrumbs'] [] = $this->title;
?>
<?php $url = Yii::getAlias('@web'); ?>

<div class="clearfix"></div>

<h3><?= Html::encode($this->title) ?></h3> 
	<!--content part one start here-->
		<?php $form = ActiveForm::begin(['id' => 'form','options' => ['enctype' => 'multipart/form-data'],]); ?>
		

        
   <div class="form-group col-lg-8"> 
    
    <?= $form->field($model, 'file[]')->widget(FileInput::classname(), 
						 		     ['options' => ['accept' => 'image/*', 'multiple' => true],]); ?>
    <div>
     
     <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <b>Note:</b> You can upload only gif, jpg, png  Files.
    </div>

    <?php ActiveForm::end(); ?>
		</div>

		

		
	</div>
	<!--content part one closed here-->

	<div class="clearfix"></div>

	<!--content part two start here-->

	
	<!--content part two closed here-->


<div class="clearfix"></div>
<div class="locator">
	<a href="#" class=""></a>
</div>
<div class="top">
	<a href="#" class="scrollToTop"></a>
</div>
<style>
.gallery
{
 margin:150px 0px 0px 0px;
}
</style>