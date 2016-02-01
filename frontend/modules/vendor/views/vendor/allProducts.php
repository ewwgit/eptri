<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\web\View;
use yii\widgets\ActiveForm;
use backend\models\Categories;
use backend\models\Brandsmaster;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendor products';
$this->params['breadcrumbs'][] = $this->title;
?>



	       
		 
		    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		
		    
		        <?php // Html::a('Add Products', ['upload'], ['class' => 'btn btn-success']) ?>
		           <?php // Html::a('Add Products', ['create'], ['class' => 'btn btn-success']) ?>
		   
		
                <div role="tabpanel" class="tab-pane" id="">
                  <div class="b-tabs-vertical__content-text">
                    <h3 class="f-tabs-vertical__title f-primary-b" > Update Items</h3>
          <div class="row">
                      <div class="col-md-3 ">
                        <div class="checkbox2">
                          <label>
                            <input type="checkbox" id="checkAll" >
                            Select All: </label>
                            
                             <button class="btn btn-primary editcls" type="button">Edit</button>
                             <button class="btn btn-primary savecls" type="button">Save</button>
                            <button class="btn btn-primary deletecls" type="button">Delete</button>
                        </div>
                      </div>
                      <?php $form = ActiveForm::begin(['method'=>'get']); ?>
                      <div class="col-md-3">
                        <div id="imaginary_container">
                          <div class="input-group stylish-input-group">
                            <?= $form->field($searchModel, 'productId')->textInput(array('placeholder' => 'Product code'))->label(false) ?> </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <?= $form->field($searchModel, 'Brand')->dropDownList(
			       ArrayHelper::map(Brandsmaster::find()->all(), 'brandName', 'brandName'),
			        ['prompt' => 'Select Brand' ])->label(false) ?>
                      </div>
                      <div class="col-md-3">
                         <?= $form->field($searchModel, 'categoryName')->dropDownList(
							       ArrayHelper::map(Categories::find()->all(), 'categoryName', 'categoryName'),
							        ['prompt' => 'Select Category' ])->label(false) ?>
                      </div>
                      <?php ActiveForm::end(); ?>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="student-form">
    

    

    
</div>
                    </div>
                    </div>
                    <div class="clearfix"></div>          
          <div class="col-md-12" style="overflow-x:scroll; margin-top:2em;">
                      <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr style="background:#f5f5f5;">
                            <th><b>Select Item</b></th>
                            
                            <th><b>No</b></th>
                           
                            <th><b>Product Name</b></th>
                            <th><b>Brand</b></th>
                            <th><b>Category</b></th>
                            <th><b>QTY</b></th>
                            <th><b>Unit</b></th>
                            <th><b>Alt Qty</b></th>
                            <th><b>Alt Unit</b></th>
                            <th><b>Reg. Price</b></th>
                            <th><b>Sale Price</b></th>
                            <th><b>Price Unit</b></th>
                            <th><b>Start Date</b></th>
                            <th><b>End Date</b></th>
                            <th><b>Res Count</b></th>
                            <th><b>Sale Option</b></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php 
                          
                         echo ListView::widget( [
		                               'dataProvider' => $dataProvider,
		                               'itemView' => '_saleItemslistviewnew',
                         		'pager' => [
                         				
                         				'prevPageLabel' => 'PREV',
                         				'nextPageLabel' => 'NEXT',
                         				'maxButtonCount' => 5,
                         		],
                         		'layout' => "{items}\n{pager}",
                                           ] );
                         ?>   
                          
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
                  
                </div>
                
                <?php 

$this->registerJs("
		$('.editcls').hide();
		$('.savecls').hide();
		$('.deletecls').hide();
		$('.save_iconnew').hide();
		$('.inpval').hide();
		$('#checkAll').change(function () {
    $('input:checkbox').prop('checked', $(this).prop('checked'));
		if($('#checkAll').prop('checked') == false){
         $('.inpval').hide();
	    $('.actualval').show();
		$('.edit_iconnew').show();
		$('.save_iconnew').hide();
}
		var j=0;
		 $('input[name=\"storeIds\"]:checked').each(function() {
          j++;
		});
		if(j > 1)
		{
		$('.editcls').show();
		$('.deletecls').show();
		}
		else
		{
		$('.editcls').hide();
		$('.deletecls').hide();
		$('.savecls').hide();
		}
});
		
		$('.savecls').click(function () {
    $('input[name=\"storeIds\"]:checked').each(function() {
   console.log(this.value);
		
		
			var saleId = this.value;
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
        
    });
		
		
		})
		window.location = 'allproducts';
});
		
		
	$('.editcls').click(function () {
		$('.savecls').show();
		$('.editcls').hide();
		
		if($('#checkAll').prop('checked') == true){
         $('.inpval').show();
	    $('.actualval').hide();
		$('.edit_iconnew').hide();
		$('.save_iconnew').show();
}
		});
		
		$('.deletecls').click(function () {
		var k=0;
		 $('input[name=\"storeIds\"]:checked').each(function() {
          k++;
		});
		if( k >= 1)
		{
		var answernew = confirm ('Are you sure you want to delete'+k+' records from the database?');
if (answernew)
{
    $('input[name=\"storeIds\"]:checked').each(function() {
  // console.log(this.value);
   var saleId = this.value;
		$.ajax({
        url: 'deleteajax',
        type: 'get',
        data: {saleId:saleId},
        
    });
		})
		window.location = 'allproducts';
		}
		}
});

		", View::POS_READY , 'my-options2');
?>
            
