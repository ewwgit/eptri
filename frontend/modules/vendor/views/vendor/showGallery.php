 <?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
	
	/* @var $this yii\web\View */
	/* @var $form yii\bootstrap\ActiveForm */
	/* @var $model \common\models\LoginForm */
	
?>
<?php

	$this->title = 'Show Gallery';
	// $this->params ['breadcrumbs'] [] = $this->title;
?>
<?php $url = Yii::getAlias('@web'); ?>

<div class="clearfix"></div>

	<!--content part one start here-->
	<h3><?= Html::encode($this->title) ?></h3> 
		<?php 
echo ListView::widget( [
		'dataProvider' => $dataProvider,
		'itemView' => '_gallerylistview',
] );
?>    
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