<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Role;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-main-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'middleName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'gender')->radioList(array('Male'=>'Male','Female'=>'Female')); ?>
    <?= $form->field($model, 'dob')->widget(DatePicker::classname(),[
														'options' => ['placeholder' => 'Enter birth date ...'],
														'name'  => 'from_date',
														'value' => $model->dob,
														'pluginOptions' => [
																'autoclose'=>true,
																'format' => 'yyyy-m-d',
																'todayHighlight' => true
														]
												]);?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'mobile2')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'address1')->textarea(array('value' => $model->address1));  ?>
    <?= $form->field($model, 'address2')->textarea(array('value' => $model->address2));  ?>
    

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
    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>
    

   
     <?=$form->field($model, 'status')->dropDownList(['10' => 'Active','0' => 'In-Active'],['prompt' => 'status'],
											['itemOptions' => ['class' =>'radio-inline']])?>
   
    <?php /* $form->field($model, 'roleId')->dropDownList(
       ArrayHelper::map(Role::find()->where('RoleId IN(2,3)')->all(), 'RoleId', 'RoleName'),
        ['prompt' => 'Role Name' ]) */ ?>

    

    <div class="form-group">
        <?= Html::submitButton( 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
