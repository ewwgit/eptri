<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use frontend\models\Stores;
?>
<?php $url = Yii::getAlias('@web'); ?>

<div class="item  col-sm-6 col-xs-6 col-md-3">
      <div class="thumbnail"> <img class="group list-group-image" src="<?= $url ?>/<?= $model['storeImage'] ? $model['storeImage'] : 'images/1.jpg'  ?>" alt=""  class="img-responsive" style="width:249px; height: 187px; " />
        <div class="caption2" >
          <h4><?= $model['storeName'].$model['id']?></h4>
          <p class=""> <?= $model['storeAddress']?> </p>
          <div class="row">
            <div class=" productinfo" style="padding-left:10px;">
              <p style="">Sale Items <span class="no"><?php echo Stores::getTotalsalleitems($model['id']);?></span></p>
              <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none !important;"></i> </a> </div>
          </div>
        </div>
      </div>
    </div>