<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\ListView;
use app\components\customerRewardsWidget;

$this->title = 'Rewards';
$this->params ['breadcrumbs'] [] = [ 
		'label' => 'Vendorproducts',
		'url' => ['index']
		];
$this->params ['breadcrumbs'] [] = $this->title;

?>

<!-- Yii::$app->getSession()->setFlash('info', 'hello'); -->
<!-- return $this->redirect(array('site/index')); -->

	<div class="b-tabs-vertical ui-tabs ui-tabs-panel">
		<div class="col-md-10">
			<div role="tabpanel" class="tab-pane" id="">
				 <?= customerRewardsWidget::widget()?>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="display_rewards_table"></div>
					<table class="table table-bordered">
						<thead>
							<tr style="background: #f5f5f5;">
								<th><b>Customer Id</b></th>
								<th><b>Receipt No</b></th>
								<th><b>Receipt Date</b></th>
								<th><b>Receipt Amount</b></th>
								<th><b>Comment</b></th>
								<th><b>Status</b></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
                    <?= ListView::widget (['dataProvider' => $dataProvider,
                    		'itemView' => '_rewardsRequesListview'
                    		] );
                    ?>  
                    </tbody>
					</table>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>

