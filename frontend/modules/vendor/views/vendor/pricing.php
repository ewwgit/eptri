<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */



?>
<!--slider start here-->
<div class="header-slider">
  <div class="innerbanner">
    <div class="container">
      <h3>Pricing</h3>
    </div>
  </div>
</div>
<!--slider closed here-->
<div class="clearfix"></div>
<div id="middle_content" style=" margin-top:0px;">
  <div id="let" style="background:none; margin-top:0px;">
    <div class="container">
        <p style="font-size:22px;"> Grocer Deals offers an exceptional opportunity to grow and take your business to next level. 
          We have different plans to best serve your business needs. </p>
        <div class="row">
          <div class="col-md-6">
            <div class="pricing_image"> <img src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/pricing-img.jpg"> </div>
          </div>
          <div class="col-md-6">
            <div class="pricing_matter">
              <div class="pricing_pera">
                <p>For as low as $1.99 per day you can
                  double your sales and also save an 
                  average of $9000 per year on your 
                  operational expenses.</p>
                <span>Register with us on or before xx/xx/xxxx and get <span style="color:#fff;">3 months</span> subscription free. </span> </div>
            </div>
          </div>
		</div>
		<div class="clear"> </div>
		<?php 
		$silver = explode(".", $pricingInfo[0]['Cost']);
		$gold = explode(".", $pricingInfo[1]['Cost']);
		$goldPlus = explode(".", $pricingInfo[2]['Cost']);
		$diamond = explode(".", $pricingInfo[3]['Cost']);
		
		?>
		<div class="row">
              <div class="pricing-grids">
                <div class="pricing-grid1 col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="price-value">
                    <h4>Silver</h4>
                    <div  class="webfont-price-container variant-12 months tariff-unlimited webfont-price webfont-price-context-dark webfont-price-context-size-l price-dot-separated text-center" style="padding-left:50px;"> <span class="price-container price-should-be-supped price-is-supped webfont-price-highlight"> <span class="price-currency-before">$</span><span class="price-before-separator"><?= $silver[0]?></span> <span class="price-separator">.</span><span class="price-behind-separator price-sup"><?= $silver[1]?></span> <span class="price-text-behind-inline price-behind-separator-supped">/month<span class="price-text-asterisk">*</span></span></span> </div>
                  </div>
                  <!---->
                  <div class="price-bg">
                    <ul>
                      <li>Good start up for your store getting online presence</li>
                    </ul>
                  </div>
                  <!---->
                  <div class="cart1"> <a class="" href="#">Sign up</a> </div>
                </div>
                <div class="pricing-grid2 col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="sale-box"> <span class="on_sale title_shop">Popular *</span> </div>
                  <div class="price-value two">
                    <h4>Gold</h4>
                    <div  class="webfont-price-container variant-12 months tariff-unlimited webfont-price webfont-price-context-dark webfont-price-context-size-l price-dot-separated text-center" style="padding-left:50px;"> <span class="price-container price-should-be-supped price-is-supped webfont-price-highlight"> <span class="price-currency-before">$</span><span class="price-before-separator"><?= $gold[0]?></span> <span class="price-separator">.</span><span class="price-behind-separator price-sup"><?= $gold[0]?></span> <span class="price-text-behind-inline price-behind-separator-supped">/month<span class="price-text-asterisk">*</span></span></span> </div>
                  </div>
                  <div class="price-bg">
                    <ul>
                      <li>Great Value for Small & Mid level stores with High measurable Results</li>
                    </ul>
                    <div class="cart2"> <a class="" href="#">Sign up</a> </div>
                  </div>
                </div>
                <div class="pricing-grid3 col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="price-value three">
                    <div class="popular-box"> <span class="on_sale_popular title_shop">Most <br>Popular *</span> </div>
                    <h4>Gold Plus</h4>
                    <div  class="webfont-price-container variant-12 months tariff-unlimited webfont-price webfont-price-context-dark webfont-price-context-size-l price-dot-separated text-center" style="padding-left:40px;"> <span class="price-container price-should-be-supped price-is-supped webfont-price-highlight"> <span class="price-currency-before">$</span><span class="price-before-separator"><?= $goldPlus[0]?></span> <span class="price-separator" style="right: 104px;">.</span><span class="price-behind-separator price-sup"><?= $goldPlus[1]?></span> <span class="price-text-behind-inline price-behind-separator-supped">/month<span class="price-text-asterisk">*</span></span></span> </div>
                  </div>
                  <div class="price-bg">
                    <ul>
                      <li>Most Popular and The Best Value for High Yield with fully packed Business Intelligence features. Suits for all level stores,</li>
                    </ul>
                    <div class="cart3"> <a class="" href="#">Sign up</a> </div>
                  </div>
                </div>
                <div class="pricing-grid4 col-md-6 col-lg-3 col-sm-6 col-xs-12">
                  <div class="price-value four">
                    <h4>Diamond</h4>
                    <div  class="webfont-price-container variant-12 months tariff-unlimited webfont-price webfont-price-context-dark webfont-price-context-size-l price-dot-separated text-center" style="padding-left:40px;"> <span class="price-container price-should-be-supped price-is-supped webfont-price-highlight"> <span class="price-currency-before">$</span><span class="price-before-separator"><?= $diamond[0]?></span> <span class="price-separator" style="right: 104px;">.</span><span class="price-behind-separator price-sup"><?= $diamond[1]?></span> <span class="price-text-behind-inline price-behind-separator-supped">/month<span class="price-text-asterisk">*</span></span></span> </div>
                  </div>
                  <div class="price-bg">
                    <ul>
                      <li>Recommended for Mid - Large level stores with Unlimited deals upload and also who does maintain their own brands to benefits the Add features.</li>
                    </ul>
                    <div class="cart4"> <a class="" href="#">Sign up</a> </div>
                  </div>
                </div>
             
              </div>
              <div class="clear"> </div>
        </div>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <table class="table table-bordered table-hover ">
              <thead>
                <tr >
                  <th colspan="2" style="background:#999; color: #fff; text-align: center;" >FEATURES</th>
                  <th colspan="4" style="background:#999; color: #fff; text-align: center;">PLAN</th>
                </tr>
                <tr>
                  <th  style="background:none; border:none !important;"></th>
                  <th  style="background:none; border:none !important;"></th>
                  <th style="background:none; border:none !important;"></th>
                  <th style="background: #f7941e; text-align: center;"><span style="color:#fff;">Popular *</span></th>
                  <th style="background: #f7941e; text-align: center;"><span style="color:#fff;">Most Popular **</span></th>
                  <th  style="background:none; border:none !important;"></th>
                </tr>
                <tr>
                  <th  style="background:none; border:none !important;"></th>
                  <th  style="background:none; border:none !important;"></th>
                  <th style="background:#e2536b; color: #fff; text-align: center;">SILVER</th>
                  <th  style="background:#e2536b; color: #fff; text-align: center;">GOLD</th>
                  <th  style="background:#e2536b; color: #fff; text-align: center;">GOLD PLUS</th>
                  <th style="background:#e2536b; color: #fff; text-align: center;">DIAMOND</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Subscription</td>
                  <td>Free Trial Period</td>
                  <td><?= $pricingInfo[0]['freeTrailPeriod']?> days</td>
                  <td><?= $pricingInfo[1]['freeTrailPeriod']?> days</td>
                  <td><?= $pricingInfo[2]['freeTrailPeriod']?> days</td>
                  <td><?= $pricingInfo[3]['freeTrailPeriod']?> days</td>
                </tr>
                <tr>
                  <td>Data Management</td>
                  <td>Upload Sale Items per Month <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[0]['SaleItemsPerMonth']?></td>
                  <td><?= $pricingInfo[1]['SaleItemsPerMonth']?></td>
                  <td><?= $pricingInfo[2]['SaleItemsPerMonth']?></td>
                  <td><?= $pricingInfo[3]['SaleItemsPerMonth']?></td>
                </tr>
                <tr>
                  <td rowspan="3">Customer Management</td>
                  <td>Manage Rewards</td>
                  <td><?= $pricingInfo[0]['ManageRewards']?></td>
                  <td><?= $pricingInfo[1]['ManageRewards']?></td>
                  <td><?= $pricingInfo[2]['ManageRewards']?></td>
                  <td><?= $pricingInfo[3]['ManageRewards']?></td>
                </tr>
                <tr>
                  <td>Manage Customer Reserved Items</td>
                  <td><?= $pricingInfo[0]['ManagedCustomerReservedItems']?></td>
                  <td><?= $pricingInfo[1]['ManagedCustomerReservedItems']?></td>
                  <td><?= $pricingInfo[2]['ManagedCustomerReservedItems']?></td>
                  <td><?= $pricingInfo[3]['ManagedCustomerReservedItems']?></td>
                </tr>
                <tr>
                  <td>Manage Customer Reviews</td>
                  <td><?= $pricingInfo[0]['ManageCustomerReviews']?></td>
                  <td><?= $pricingInfo[1]['ManageCustomerReviews']?></td>
                  <td><?= $pricingInfo[2]['ManageCustomerReviews']?></td>
                  <td><?= $pricingInfo[3]['ManageCustomerReviews']?></td>
                </tr>
                <tr>
                  <td rowspan="4">Advertising & Marketing</td>
                  <td>Sign Up Bundle Pkg. Credit</td>
                  <td>$ <?= $pricingInfo[0]['SignUpBundlePkgCredit']?></td>
                  <td>$ <?= $pricingInfo[1]['SignUpBundlePkgCredit']?></td>
                  <td>$ <?= $pricingInfo[2]['SignUpBundlePkgCredit']?></td>
                  <td>$ <?= $pricingInfo[3]['SignUpBundlePkgCredit']?></td>
                </tr>
                <tr>
                  <td>Online flyer and Banner Copies for Printing</td>
                  <td><?= $pricingInfo[0]['OnlineFlierandBannerCopiesforPrinting']?></td>
                  <td><?= $pricingInfo[1]['OnlineFlierandBannerCopiesforPrinting']?></td>
                  <td><?= $pricingInfo[2]['OnlineFlierandBannerCopiesforPrinting']?></td>
                  <td><?= $pricingInfo[3]['OnlineFlierandBannerCopiesforPrinting']?></td>
                </tr>
                <tr>
                  <td>Online Pre-formated flyers for printing</td>
                  <td><?= $pricingInfo[0]['OnlinePreformatedfliersforprinting']?></td>
                  <td><?= $pricingInfo[1]['OnlinePreformatedfliersforprinting']?></td>
                  <td><?= $pricingInfo[2]['OnlinePreformatedfliersforprinting']?></td>
                  <td><?= $pricingInfo[3]['OnlinePreformatedfliersforprinting']?></td>
                </tr>
                <tr>
                  <td>Store Exclusive Adds <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[0]['StoreExclusiveAdds']?></td>
                  <td><?= $pricingInfo[1]['StoreExclusiveAdds']?></td>
                  <td><?= $pricingInfo[2]['StoreExclusiveAdds']?></td>
                  <td><?= $pricingInfo[3]['StoreExclusiveAdds']?></td>
                </tr>
                <tr>
                  <td rowspan="4">Support Management</td>
                  <td>Online FAQ's</td>
                  <td><?= $pricingInfo[0]['OnlineFAQs']?></td>
                  <td><?= $pricingInfo[1]['OnlineFAQs']?></td>
                  <td><?= $pricingInfo[2]['OnlineFAQs']?></td>
                  <td><?= $pricingInfo[3]['OnlineFAQs']?></td>
                </tr>
                <tr>
                  <td>Step by Step Tutorial Videos</td>
                  <td><?= $pricingInfo[0]['StepbyStepTutorialVideos']?></td>
                  <td><?= $pricingInfo[1]['StepbyStepTutorialVideos']?></td>
                  <td><?= $pricingInfo[2]['StepbyStepTutorialVideos']?></td>
                  <td><?= $pricingInfo[3]['StepbyStepTutorialVideos']?></td>
                </tr>
                <tr>
                  <td>E-Mail Support</td>
                  <td><?= $pricingInfo[0]['EMailSupport']?>  <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[1]['EMailSupport']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[2]['EMailSupport']?></td>
                  <td><?= $pricingInfo[3]['EMailSupport']?></td>
                  
                </tr>
                <tr>
                  <td>Phone Support</td>
                  <td><?= $pricingInfo[0]['PhoneSupport']?></td>
                  <td><?= $pricingInfo[1]['PhoneSupport']?></td>
                  
                  <td><?= $pricingInfo[2]['PhoneSupport']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[3]['PhoneSupport']?></td>
                  
                </tr>
                <tr>
                  <td rowspan="5">Business Intelligence</td>
                  <td>Business Assessment  Survey</td>
                  <td><?= $pricingInfo[0]['BusinessAssesmentSurvey']?></td>
                  <td><?= $pricingInfo[1]['BusinessAssesmentSurvey']?></td>
                  <td><?= $pricingInfo[2]['BusinessAssesmentSurvey']?></td>
                  <td><?= $pricingInfo[3]['BusinessAssesmentSurvey']?></td>
                </tr>
                <tr>
                  <td>Customer Dynamics</td>
                  <td><?= $pricingInfo[0]['CustomerDynamics']?></td>
                 
                  <td><?= $pricingInfo[1]['CustomerDynamics']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[2]['CustomerDynamics']?></td>
                  <td><?= $pricingInfo[3]['CustomerDynamics']?></td>
                  
                </tr>
                <tr>
                  <td>Inventory Reports</td>
                  <td><?= $pricingInfo[0]['InventoryReports']?></td>
                  <td><?= $pricingInfo[1]['InventoryReports']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[2]['InventoryReports']?></td>
                  <td><?= $pricingInfo[3]['InventoryReports']?></td>
                  
                </tr>
                <tr>
                  <td>Customer Behaviour of Purchase</td>
                  <td><?= $pricingInfo[0]['CustomerBehaviourofPurchase']?></td>
                  <td><?= $pricingInfo[1]['CustomerBehaviourofPurchase']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                 <td><?= $pricingInfo[2]['CustomerBehaviourofPurchase']?></td>
                  <td><?= $pricingInfo[3]['CustomerBehaviourofPurchase']?></td>
                </tr>
                <tr>
                  <td>Business Improvement Tips</td>
                  <td><?= $pricingInfo[0]['BusinessImprovementTips']?></td>
                  <td><?= $pricingInfo[1]['BusinessImprovementTips']?></td>
                  <td><?= $pricingInfo[2]['BusinessImprovementTips']?></td>
                  <td><?= $pricingInfo[3]['BusinessImprovementTips']?></td>
                </tr>
                <tr>
                  <td>Technology Add Ons</td>
                  <td>Client Specific Plug Ins <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[0]['ClientSpecificPlugIns']?></td>
                  <td><?= $pricingInfo[1]['ClientSpecificPlugIns']?></td>
                  
                  <td><?= $pricingInfo[2]['ClientSpecificPlugIns']?> <i class="fa fa-question-circle btnWithTooltip" data-placement="right" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" style="cursor:pointer;" ></i></td>
                  <td><?= $pricingInfo[3]['ClientSpecificPlugIns']?></td>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
  
  <!--content part two closed here--> 
  
</div>
<!--middle content closed here-->

<style>
#content {
	position: relative;
}
#content img {
	position: absolute;
	top: 3px;
	right: -4px;
	z-index: 9999;
}
#content2 {
	position: relative;
}
#content2 img {
	position: absolute;
	top: -7px;
	right: -7px;
	z-index: 9999;
}
.tooltip-inner {
	width: 200px;
	background: #808080;
	font-family: 'Open Sans', sans-serif;
	font-size: 1em;
	color: #fff;
}
</style>
<script>$(function() {
    $(".btnWithTooltip").tooltip();
});
</script>

