<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use backend\models\Categories;
use backend\models\Brandsmaster;
use backend\models\SaleIndicators;
use backend\models\Units;
use backend\models\PriceUnits;
use backend\models\Products;
use kartik\date\DatePicker;


?>
<tr>
                            <td><div class="" style="text-align:center;">
                                <label>
                                  <input type="checkbox" class="chkcls" name="storeIds" id="chkcls<?= $model['Saleid']?>" value="<?= $model['Saleid']?>" >
                                </label>
                              </div></td>
                              
                            <td><?= $key; ?></td>
                    <?php 
                    $productName = Products::find()->select('productName')->where(['productCode' => $model['productId']])->one();?>
                            <td><div class="actualvals acvals<?= $model['Saleid']?>" ><?= $productName['productName']?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['Brand']?></div><div class="inpval inval<?= $model['Saleid']?>"><?= Html::activeDropDownList($model, 'Brand',
      ArrayHelper::map(Brandsmaster::find()->all(), 'brandName', 'brandName'),['id' =>'brand'.$model['Saleid']]) ?></div></td>
                            <td><div class="actualvals acvals<?= $model['Saleid']?>" ><?= $model['categoryName']?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['Quantity']?></div><div class="inpval inval<?= $model['Saleid']?>"><input type="text" style="width: 30px;" id="quntity<?= $model['Saleid']?>" value="<?= $model['Quantity']?>"></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['uom']?></div><div class="inpval inval<?= $model['Saleid']?>"><?= Html::activeDropDownList($model, 'uom',
      ArrayHelper::map(Units::find()->all(), 'unitName', 'unitName'),['id' =>'uom'.$model['Saleid']]) ?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['AltQty']?></div><div class="inpval inval<?= $model['Saleid']?>"><input type="text" style="width: 30px;" id="altqty<?= $model['Saleid']?>" value="<?= $model['AltQty']?>"></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['AltUom']?></div><div class="inpval inval<?= $model['Saleid']?>"><?= Html::activeDropDownList($model, 'AltUom',
      ArrayHelper::map(Units::find()->all(), 'unitName', 'unitName'),['id' =>'altuom'.$model['Saleid']]) ?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['UnitPrice']?></div><div class="inpval inval<?= $model['Saleid']?>"><input type="text" class="product-width" id="unitprice<?= $model['Saleid']?>" value="<?= $model['UnitPrice']?>"></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['SalePrice']?></div><div class="inpval inval<?= $model['Saleid']?>"><input type="text" class="product-width" id="saleprice<?= $model['Saleid']?>" value="<?= $model['SalePrice']?>"></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['PriceUnit']?></div><div class="inpval inval<?= $model['Saleid']?>"><?= Html::activeDropDownList($model, 'PriceUnit',
      ArrayHelper::map(PriceUnits::find()->all(), 'priceUnitName', 'priceUnitName'),['id' =>'priceunit'.$model['Saleid']]) ?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['StartDate']?></div><div class="inpval inval<?= $model['Saleid']?>"><?php echo DatePicker::widget([
    'name' => 'dp_1',
    'type' => DatePicker::TYPE_INPUT,
    'value' => $model['StartDate'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-m-dd'
    ],
    'options' => [
    		'id' =>'strdate'.$model['Saleid'],
    		'style' => 'width: 75px;'
    		     ]
]);?></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['EndDate']?></div><div class="inpval inval<?= $model['Saleid']?>">
                            <?php echo DatePicker::widget([
    'name' => 'dp_2',
    'type' => DatePicker::TYPE_INPUT,
    'value' => $model['EndDate'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-m-dd'
    ],
    'options' => [
    		'id' =>'enddate'.$model['Saleid'],
    		'style' => 'width: 75px;'
    		     ]
]);?>
                            </div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['ReserveCount']?></div><div class="inpval inval<?= $model['Saleid']?>"><input type="text" class="product-width" id="rsvcount<?= $model['Saleid']?>" value="<?= $model['ReserveCount']?>"></div></td>
                            <td><div class="actualval acval<?= $model['Saleid']?>" ><?= $model['SaleInd']?></div><div class="inpval inval<?= $model['Saleid']?>"><?= Html::activeDropDownList($model, 'SaleInd',
      ArrayHelper::map(SaleIndicators::find()->all(), 'indicatorCode', 'indicatorCode'),['id' =>'saleInd'.$model['Saleid']]) ?></div></td>
                            
                            
                           
                          </tr>
                          
                          <?php 

$this->registerJs("
		
		$('.save_iconnew').on('click',  function(){
		var saleId = $(this).attr('saleid');
		var productId = $('#productId'+saleId).val();
		var brand = $('#brand'+saleId).val();
		var quntity = $('#quntity'+saleId).val();
		var uom = $('#uom'+saleId).val();
		var altqty = $('#altqty'+saleId).val();
		var altuom = $('#altuom'+saleId).val();
		var unitprice = $('#unitprice'+saleId).val();
		var saleprice = $('#saleprice'+saleId).val();
		var priceunit = $('#priceunit'+saleId).val();
		var strdate = $('#strdate'+saleId).val();
		var enddate = $('#enddate'+saleId).val();
		var rsvcount = $('#rsvcount'+saleId).val();
		var saleInd = $('#saleInd'+saleId).val();
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
		
		$('.delete_icon').on('click',  function(){
		var saleId = $(this).attr('saleid');
		var answer = confirm ('Are you sure you want to delete from the database?');
if (answer)
{
     

		$.ajax({
        url: 'deleteajax',
        type: 'get',
        data: {saleId:saleId},
        success: function (response) {
		//return false;
		window.location = 'allproducts';
        }
    });
		
}
		
		
});
		
		$('.chkcls').on('click',  function(){
		var i=0;
		 $('input[name=\"storeIds\"]:checked').each(function() {
          i++;
		});
		if(i > 1)
		{
		$('.editcls').show();
		$('.deletecls').show();
		}
		else
		{
		$('.editcls').hide();
		$('.deletecls').hide();
		}
		
		
});
		
		
		$('.edit_iconnew').on('click',  function(){
		
		$('.actualval').show();
		$('.inpval').hide();
		var saleId = $(this).attr('saleid');
		$('#saicon'+saleId).show();
		$('#edicon'+saleId).hide();
		$('.inval'+saleId).show();
		$('.acval'+saleId).hide();
		
		
		
		
		
});
		
		


		", View::POS_READY , 'my-options');
?>