<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\Categories;
use backend\models\Brandsmaster;


?>
<tr>
                           
                            <td><?= $key; ?></td>
                    
                            <td id="productId<?= $model['Saleid']?>" contentEditable="true"><?= $model['productId']?></td>
                            <td  contentEditable="true"><?= Html::activeDropDownList($model, 'Brand',
      ArrayHelper::map(Brandsmaster::find()->all(), 'brandName', 'brandName'),['id' =>'brand'.$model['Saleid']]) ?></td>
                            <td  contentEditable="true"><?= Html::activeDropDownList($model, 'categoryName',
      ArrayHelper::map(Categories::find()->all(), 'categoryName', 'categoryName'),['id' =>'categoryId'.$model['Saleid']]) ?></td>
                            <td id="quntity<?= $model['Saleid']?>" contentEditable="true"><?= $model['Quantity']?></td>
                            <td id="uom<?= $model['Saleid']?>" contentEditable="true"><?= $model['uom']?></td>
                            <td id="altqty<?= $model['Saleid']?>" contentEditable="true"><?= $model['AltQty']?></td>
                            <td id="altuom<?= $model['Saleid']?>" contentEditable="true"><?= $model['AltUom']?></td>
                            <td id="unitprice<?= $model['Saleid']?>" contentEditable="true"><?= $model['UnitPrice']?></td>
                            <td id="saleprice<?= $model['Saleid']?>" contentEditable="true"><?= $model['SalePrice']?></td>
                            <td id="priceunit<?= $model['Saleid']?>" contentEditable="true"><?= $model['PriceUnit']?></td>
                            <td id="strdate<?= $model['Saleid']?>" contentEditable="true"><?= $model['StartDate']?></td>
                            <td id="enddate<?= $model['Saleid']?>" contentEditable="true"><?= $model['EndDate']?></td>
                            <td id="rsvcount<?= $model['Saleid']?>" contentEditable="true"><?= $model['ReserveCount']?></td>
                            <td id="saleInd<?= $model['Saleid']?>" contentEditable="true"><?= $model['SaleInd']?></td>
                            
                            <td class="edit_icon" saleid="<?= $model['Saleid']?>"><i class="fa fa-pencil-square"></i></td>
                          </tr>
                          
                          <?php 

$this->registerJs("
		
		$('.edit_icon').on('click',  function(){
		var saleId = $(this).attr('saleid');
		var productId = $('#productId'+saleId).html();
		var brand = $('#brand'+saleId).val();
		var quntity = $('#quntity'+saleId).html();
		var uom = $('#uom'+saleId).html();
		var altqty = $('#altqty'+saleId).html();
		var altuom = $('#altuom'+saleId).html();
		var unitprice = $('#unitprice'+saleId).html();
		var saleprice = $('#saleprice'+saleId).html();
		var priceunit = $('#priceunit'+saleId).html();
		var strdate = $('#strdate'+saleId).html();
		var enddate = $('#enddate'+saleId).html();
		var rsvcount = $('#rsvcount'+saleId).html();
		var saleInd = $('#saleInd'+saleId).html();
		var categoryId = $('#categoryId'+saleId).val();
		//console.log(saleId);
		//console.log(categoryId);
		//return false;
		$.ajax({
        url: 'updateajax',
        type: 'get',
        data: {productId:productId,brand:brand,quntity:quntity,uom:uom,altqty:altqty,altuom:altuom,unitprice:unitprice,saleprice:saleprice,priceunit:priceunit,strdate:strdate,enddate:enddate,rsvcount:rsvcount,saleInd:saleInd,categoryId:categoryId,saleId:saleId},
        success: function (response) {
		//return false;
		window.location = 'allproducts';
        }
    });
});

		", View::POS_READY , 'my-options');
?>