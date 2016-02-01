<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaticPages */

$this->title = $model->pageTitle;
//$this->params['breadcrumbs'][] = ['label' => 'Static Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-pages-view">

    <h1><?= Html::encode($this->title) ?></h1>

  <div>
				 	 <?=Html::encode($model->pageContent)?>
				  
				  </div>

    

</div>
