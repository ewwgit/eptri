<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
?>
<style>
.remove {
	color: red;
	cursor: pointer;
	width: 5px;
	float: right;
	margin-top: -7px;
}
</style>

<div style="float: left; padding: 10px;">
<div class="remove" galleryid="<?= $model['galleryId']?>"><span class="fa fa-times-circle"></span></div>
<div><?= Html::img(Yii::getAlias('@web').'/frontend/'.$model['imageUrl'],['width' => '200px','height' => '200px','style' => 'margin-top:-7px; border:2px solid #ccc;'])?></div>

</div>

<?php 

$this->registerJs("
		
		$('.remove').on('click',  function(){
		var galleryid = $(this).attr('galleryid');
		$.ajax({
        url: 'removegallery',
        type: 'get',
        data: {galleryid:galleryid},
        success: function (response) {
		window.location = 'showgallery';
        }
    });
});

		", View::POS_READY , 'my-options');
?>