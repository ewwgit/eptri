<?php
use yii\helpers\Html;
use backend\models\Categories;
use backend\models\Brandsmaster;
use backend\models\Products;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="dyim-inner">
                     
                        <div class="add_sale_item_fields">
				<div class="row">
					<!--row 1-->

					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-productid<?= $cnt?>">Product Name</label>
                                <?= Html::activeDropDownList($model, 'productId', ArrayHelper::map ( Products::find ()->all (), 'productCode', 'productName' ),[ 'prompt' => 'Select Product','class' => 'form-control','id' => 'vendorproducts-productid'.$cnt  ]) ?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-brand<?= $cnt?>">Brand</label>
                                <?= Html::activeDropDownList($model, 'Brand', ArrayHelper::map ( Brandsmaster::find ()->all (), 'brandName', 'brandName' ),[ 'prompt' => 'Select Brand','class' => 'form-control','id' => 'vendorproducts-brand'.$cnt  ]) ?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
                          <label class="control-label" for="vendorproducts-categoryname<?= $cnt?>">Category Name</label>
                           <?= Html::activeDropDownList($model, 'categoryName', ArrayHelper::map ( Categories::find ()->all (), 'categoryName', 'categoryName' ),[ 'prompt' => 'Select categoryName','class' => 'form-control' ,'id' => 'vendorproducts-categoryname'.$cnt ]) ?>
                              </div>
					</div>
				</div>
				<!--row 1 end-->

				<div class="row">
					<!--row 2-->
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-quantity">Qty</label>
                                <?= Html::activeInput('text', $model, 'Quantity[]', ['class' => 'form-control','id' => 'vendorproducts-quantity' ]) ?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-altqty<?= $cnt?>">Alt Qty</label>
                                <?= Html::activeInput('text', $model, 'AltQty', ['class' => 'form-control','id' => 'vendorproducts-altqty'.$cnt ]) ?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label" for="vendorproducts-uom<?= $cnt?>">Uom</label>
							<?= Html::activeInput('text', $model, 'uom', ['class' => 'form-control','id' => 'vendorproducts-uom'.$cnt ]) ?>
						</div>
					</div>
				</div>
				<!--row 2end-->

				<div class="row">
					<!--row 3-->
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-altuom<?= $cnt?>">Alt Uom</label>
                                <?= Html::activeInput('text', $model, 'AltUom', ['class' => 'form-control','id' => 'vendorproducts-altuom'.$cnt ]) ?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                               <label class="control-label" for="vendorproducts-saleprice<?= $cnt?>">Sale Price</label>
                                <?= Html::activeInput('text', $model, 'SalePrice', ['class' => 'form-control','id' => 'vendorproducts-saleprice'.$cnt ]) ?>
                              </div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-unitprice<?= $cnt?>">Unit Price</label>
                                <?= Html::activeInput('text', $model, 'UnitPrice', ['class' => 'form-control','id' => 'vendorproducts-unitprice'.$cnt ]) ?>
                              </div>
					</div>
					</div>
				</div>
				<!--row 3end-->

				<div class="row">
					<!--row 4-->

					<div class="col-md-4">
						<div class="form-group">
							 <label class="control-label" for="vendorproducts-priceunit<?= $cnt?>">Price Unit</label>
								<?= Html::activeInput('text', $model, 'PriceUnit', ['class' => 'form-control','id' => 'vendorproducts-priceunit'.$cnt ]) ?>
						</div>
						</div>
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-reservecount<?= $cnt?>">Reserve Count</label>
                                <?= Html::activeInput('text', $model, 'ReserveCount', ['class' => 'form-control','id' => 'vendorproducts-reservecount'.$cnt ]) ?>
                              </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-saleind<?= $cnt?>">Sale Ind</label>
                                <?= Html::activeInput('text', $model, 'SaleInd', ['class' => 'form-control','id' => 'vendorproducts-saleind'.$cnt ]) ?>
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
						<label class="control-label" for="vendorproducts-startdate<?= $cnt?>">Start Date</label>
                <div class='input-group date' id='datetimepicker1'>
                <span class="input-group-addon kv-date-calendar" title="Select date"><i class="glyphicon glyphicon-calendar"></i></span><span class="input-group-addon kv-date-remove" title="Clear field"><i class="glyphicon glyphicon-remove"></i></span>
                   
                    <?= Html::activeInput('text', $model, 'StartDate', ['class' => 'form-control str-lve','id' => 'vendorproducts-startdate'.$cnt ]) ?>
                </div>
            </div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                                <label class="control-label" for="vendorproducts-enddate<?= $cnt?>">End Date</label>
                <div class='input-group date' id='datetimepicker1'>
                <span class="input-group-addon kv-date-calendar" title="Select date"><i class="glyphicon glyphicon-calendar"></i></span><span class="input-group-addon kv-date-remove" title="Clear field"><i class="glyphicon glyphicon-remove"></i></span>
                    <?= Html::activeInput('text', $model, 'EndDate', ['class' => 'form-control str-lve','id' => 'vendorproducts-enddate'.$cnt ]) ?>
                    
                </div>
                              </div>
					</div>
				</div>
				</div>
				<!--row 6end-->

				
			</div>
	</div>



