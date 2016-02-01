<?php
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
?>
<div class="<?= $model['MembershipName']?> chnagecls<?= $model['MemId']?> box col-md-12">
	<div class="benefits">
		<div>
			<button type="submit" class="btn btn-primary"
				style="margin-top: -3em; float: right;">Checkout</button>
		</div>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<table class="table table-bordered table-hover ">
					<thead>
						<tr>
							<th colspan="2"
								style="background: #999; color: #fff; text-align: center;">FEATURES</th>
							<th colspan="3"
								style="background: #999; color: #fff; text-align: center;">PLAN</th>
						</tr>
						<tr>
							<th style="background: none; border: none !important;"></th>
							<th style="background: none; border: none !important;"></th>
							<th colspan="3"
								style="background: #e2536b; color: #fff; text-align: center;"><?= $model['MembershipName']?>
								($<?= $model['Cost']?>)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Subscription</td>
							<td>Free Trial Period</td>
							<td><?= $model['freeTrailPeriod']?> days</td>
						</tr>
						<tr>
							<td>Data Management</td>
							<td>No of sales/discounts data <br>uploads per month <i
								class="fa fa-question-circle btnWithTooltip"
								data-placement="right"
								data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts"
								data-html="true" style="cursor: pointer;"></i></td>
							<td><?= $model['SaleItemsPerMonth']?></td>
						</tr>
						<tr>
							<td rowspan="3">Customer Management</td>
							<td>Manage Rewards</td>
							<td><?= $model['ManageRewards']?></td>
						</tr>
						<tr>
							<td>Manage Customer Reserved Items</td>
							<td><?= $model['ManagedCustomerReservedItems']?></td>
						</tr>
						<tr>
							<td>Manage Customer Reviews</td>
							<td><?= $model['ManageCustomerReviews']?></td>
						</tr>
						<tr>
							<td rowspan="4">Advertizing & Marketing</td>
							<td>Sign Up Bundle Pkg. Credit</td>
							<td>$ <?= $model['SignUpBundlePkgCredit']?></td>
						</tr>
						<tr>
							<td>Online Flier and Banner Copies for Printing</td>
							<td><?= $model['OnlineFlierandBannerCopiesforPrinting']?></td>
						</tr>


						<tr>
							<td>Online Pre-formated fliers for printing</td>
							<td><?= $model['OnlinePreformatedfliersforprinting']?></td>
						</tr>

						<tr>
							<td>Store Exclusive Adds <i
								class="fa fa-question-circle btnWithTooltip"
								data-placement="right"
								data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts"
								data-html="true" style="cursor: pointer;"></i>
							</td>
							<td><?= $model['StoreExclusiveAdds']?></td>
						</tr>
						<tr>
							<td rowspan="4">Support Management</td>
							<td>Online FAQ's</td>
							<td><?= $model['OnlineFAQs']?></td>
						</tr>
						<tr>
							<td>Step by Step Tutorial Videos</td>
							<td><?= $model['StepbyStepTutorialVideos']?></td>
						</tr>
						<tr>
							<td>E-Mail Support</td>
							<td><?= $model['EMailSupport']?> <i class="fa fa-question-circle btnWithTooltip"
								data-placement="right"
								data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts"
								data-html="true" style="cursor: pointer;"></i></td>
						</tr>

						<tr>
							<td>Phone Support</td>
							<td><?= $model['PhoneSupport']?></td>
						</tr>

						<tr>
							<td rowspan="5">Business Intelligence</td>
							<td>Business Assesment Survey</td>
							<td><?= $model['BusinessAssesmentSurvey']?></td>
						</tr>
						<tr>
							<td>Customer Dynamics</td>
							<td><?= $model['CustomerDynamics']?></td>
						</tr>
						<tr>
							<td>Inventory Reports</td>
							<td><?= $model['InventoryReports']?></td>
						</tr>

						<tr>
							<td>Customer Behaviour of Purchase</td>
							<td><?= $model['CustomerBehaviourofPurchase']?></td>
						</tr>
						<tr>
							<td>Business Improvement Tips</td>
							<td><?= $model['BusinessImprovementTips']?></td>
						</tr>

						<tr>
							<td>Technology Add Ons</td>
							<td>Client Specific Plug Ins <i
								class="fa fa-question-circle btnWithTooltip"
								data-placement="right"
								data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts"
								data-html="true" style="cursor: pointer;"></i></td>
							<td><?= $model['ClientSpecificPlugIns']?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>