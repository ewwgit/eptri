<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'User Activation';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header-slider">
  <div class="innerbanner">
    <div class="container">
      <h1><?= Html::encode($this->title) ?></h1> 
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div id="middle_content" style=" margin-top:10px;">
    <div class="container">
    <div style="background: #8cc251; border-radius:5px 5px; color: #fff; line-height:30px; text-align: center;">
    	<?php echo Yii::$app->getSession()->getFlash('success', 'You are successfully Activated'.$storeId); ?>
    </div>
    </div>
    </div>
    