<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Role;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-main-form">

    <?php $form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); ?>
    <?= $form->field($model, 'storeName')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'businessName2')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'middleName')->textInput(['maxlength' => true]) ?>
    
   
    
    <?= $form->field($model, 'mobile')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
]); ?>
   
    <?= $form->field($model, 'mobile2')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
]); ?>
    
	
	
	
	<?= $form->field($model, 'country')->dropDownList($model->countriesList, ['id'=>'countries']) ?>
	<?= $form->field($model, 'state')->widget(DepDrop::classname(), [
     'options' => ['id'=>'states'],
		'data'=>$model->statesData,
     'pluginOptions'=>[
         'depends'=>['countries'],
         'placeholder' => 'Select State',
         'url' => Url::to(['/vendor/vendor/states'])
     ]
 ]);?>
 <?=$form->field($model, 'city')->textInput(['placeholder' => 'City'],
											['itemOptions' => ['class' =>'radio-inline']])?>
    <?= $form->field($model, 'zip')->textInput(array('placeholder' => 'zip','value' => $model->zip));?>
     
    <?= $form->field($model, 'storeAddress')->textarea(array('value' => $model->address2));  ?>
    <?= $form->field($model, 'address2')->textarea(array('placeholder' => 'Address2','value' => $model->address2));  ?>
    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'storeImage')->widget(FileInput::classname(), 
						 		['options' => ['accept' => 'image/*'],]); ?>
						 		<?php if($model->storeImage != ''){?>
						 		<?php $imgeurl = str_replace("backend","frontend",Yii::getAlias('@web'));?>
						 		<div><?php echo Html::img($imgeurl.'/'.$model->storeImage,['width' =>'250px','height' => "250px"]) ?></div>
						 		<?php } ?>
	<?= $form->field($model, 'storeimgesdup')->hiddenInput(['value' => $model->storeImage])->label(false) ?>
   
     <?=$form->field($model, 'status')->dropDownList(['10' => 'Active','0' => 'In-Active'],['prompt' => 'status'],
											['itemOptions' => ['class' =>'radio-inline']])?>
   
    <?php /* $form->field($model, 'roleId')->dropDownList(
       ArrayHelper::map(Role::find()->where('RoleId IN(2,3)')->all(), 'RoleId', 'RoleName'),
        ['prompt' => 'Role Name' ]) */ ?>

    

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
