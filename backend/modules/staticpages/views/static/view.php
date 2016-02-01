<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Staticpages */

$this->title = $model->pageTitle;
$this->params['breadcrumbs'][] = ['label' => 'Staticpages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staticpages-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'staticId',
            'pageTitle:ntext',
            'pageContent:ntext',
            'seoKeys',
            'metaKeys',
            'status',
            'createdBy',
            'updatedBy',
            [
        		'attribute' => 'createdDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		[
        		'attribute' => 'updatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
            'ipAddress',
        ],
    ]) ?>

</div>
