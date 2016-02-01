<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaticpagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staticpages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staticpages-index">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Create Staticpages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'staticId',
            'pageTitle:ntext',
          //  'pageContent:ntext',
            'seoKeys',
            'metaKeys',
            // 'status',
            // 'createdBy',
            // 'updatedBy',
            // 'createdDate',
            // 'updatedDate',
            // 'ipAddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
