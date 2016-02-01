<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Categories;
use backend\models\Brandsmaster;
use backend\models\SaleIndicators;
use backend\models\Units;
use backend\models\PriceUnits;
use backend\models\Products;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="b-tabs-vertical__content-text">
	<h3 class="f-tabs-vertical__title f-primary-b">Add Sale Item</h3>
	<div id="content_block">
		<div class="col-md-12">
                      <?php $form = ActiveForm::begin(['id' => '-form']); ?>
                      <div class="dyim">
                       <div class="dyim-inner">
                        <div class="add_sale_item_fields">
				<div class="row">
					<!--row 1-->

					<div class="col-md-4">
						<div class="form-group">
                                <?=$form->field ( $model, 'productId' )->dropDownList ( ArrayHelper::map ( Products::find ()->all (), 'productCode', 'productName' ), [ 'prompt' => 'Select Product' ] )?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                             <?=$form->field ( $model, 'Brand' )->dropDownList ( ArrayHelper::map ( Brandsmaster::find ()->all (), 'brandName', 'brandName' ), [ 'prompt' => 'Select Brand' ] )?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                          <?=$form->field ( $model, 'categoryName' )->dropDownList ( ArrayHelper::map ( Categories::find ()->all (), 'categoryName', 'categoryName' ), [ 'prompt' => 'categoryName' ] )?>
                              </div>
					</div>
				</div>
				<!--row 1 end-->

				<div class="row">
					<!--row 2-->
					<div class="col-md-4">
						<div class="form-group">
                                <?= $form->field($model, 'Quantity')->textInput(['maxlength' => true])?>
                                
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <?= $form->field($model, 'AltQty')->textInput(['maxlength' => true])?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							
							<?=$form->field ( $model, 'uom' )->dropDownList ( ArrayHelper::map ( Units::find ()->all (), 'unitName', 'unitName' ), [ 'prompt' => 'Unit' ] )?>
						</div>
					</div>
				</div>
				<!--row 2end-->

				<div class="row">
					<!--row 3-->
					<div class="col-md-4">
						<div class="form-group">
                               <?=$form->field ( $model, 'AltUom' )->dropDownList ( ArrayHelper::map ( Units::find ()->all (), 'unitName', 'unitName' ), [ 'prompt' => 'Alternate Unit' ] )?> 
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <?= $form->field($model, 'SalePrice')->textInput(['maxlength' => true])?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
                                <?= $form->field($model, 'UnitPrice')->textInput(['maxlength' => true])?>
                              </div>
					</div>
					</div>
				</div>
				<!--row 3end-->

				<div class="row">
					<!--row 4-->

					<div class="col-md-4">
						<div class="form-group">
							
							<?=$form->field ( $model, 'PriceUnit' )->dropDownList ( ArrayHelper::map ( PriceUnits::find ()->all (), 'priceUnitName', 'priceUnitName' ), [ 'prompt' => 'Price Unit' ] )?>
						</div>
						</div>
					<div class="col-md-4">
						<div class="form-group">
                                <?= $form->field($model, 'ReserveCount')->textInput(['maxlength' => true])?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                
                                <?=$form->field ( $model, 'SaleInd' )->dropDownList ( ArrayHelper::map ( SaleIndicators::find ()->all (), 'indicatorCode', 'indicatorCode' ), [ 'prompt' => 'Sale Indicators' ] )?>
                              </div>
					</div>
				<!--row 4end-->

				<div class="row">
					<!--row 5-->

					
				</div>
				<!--row 5end-->

				<div class="row">
					<!--row 6-->
					<div class="col-md-4">
						<div class="form-group">
                                <?=$form->field ( $model, 'StartDate' )->widget ( DatePicker::classname (), [ 'options' => [ 'placeholder' => 'Start Date ...' ],'name' => 'from_date','value' => $model->StartDate,'pluginOptions' => [ 'autoclose' => true,'format' => 'yyyy-m-d','todayHighlight' => true ] ] );?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <?=$form->field ( $model, 'EndDate' )->widget ( DatePicker::classname (), [ 'options' => [ 'placeholder' => 'End Date ...' ],'name' => 'from_date','value' => $model->EndDate,'pluginOptions' => [ 'autoclose' => true,'format' => 'yyyy-m-d','todayHighlight' => true ] ] );?>
                              </div>
					</div>
				</div>
				</div>
				
				
				</div>
				
				<div class="dynamic">
				
				</div>
				
				</div>
				<!--row 6end-->

				<div class="col-md-12 text-center">
					<div class="customer_buttons">
						<ul>
							<li>
							<?= Html::submitButton('Save', ['class' => 'btn btn-primary'])?></li>
							<li class="add_icon" style="display: none;" onClick="addItem(this);"><a>Add <i
									class="fa fa-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
                        <?php ActiveForm::end(); ?>
                      </div>
	</div>
</div>


<?php 

$this->registerJs("
		
		$('.add_icon').on('click',  function(){
		var clscnt =$('.dyim-inner').length;
		var elcnt = clscnt+1;
		$.ajax({
        url: 'addfields',
		dataType : 'html',
        type: 'get',
        data: {elcnt:elcnt},
        success: function (response) {
		console.log(response);
		$('.dynamic').append(response);
		
        }
    });
});
		
		$('body').on('click', '.str-lve', function () {
		$(this).datepicker();
		
});

		", View::POS_READY , 'my-options');
?>