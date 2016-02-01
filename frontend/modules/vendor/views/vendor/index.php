 <?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	use yii\authclient\widgets\AuthChoice;
	use yii\helpers\Url;
	
	/* @var $this yii\web\View */
	/* @var $form yii\bootstrap\ActiveForm */
	/* @var $model \common\models\LoginForm */
	
?>
<?php

	$this->title = 'Vendor Hub';
	// $this->params ['breadcrumbs'] [] = $this->title;
?>
<?php $url = Yii::getAlias('@web'); ?>


<!-- start slider -->
<!--start slider -->

<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
<style>
.showmore_content {
	position: relative;
	overflow: hidden;
}
.showmore_trigger {
	width: 30%;
	height: 25px;
	line-height: 25px;
	cursor: pointer;
	/* background: #8dc641; */
	border-radius: 3px;
	float: right;
	color: #000;
	font-size: 12px;
	text-align: center;
	margin-top: 1em;
	font-family: "Open Sans",sans-serif;
	text-decoration: underline;
}
.block showmore_one p {
	font-size: 12px;
	color: #76767e;
}
</style>
<!-- start slider -->

<div class="clearfix"></div>
<div class="vendor_header-slider">
  <div class="slider">
    <div class="callbacks_container">
     <ul class="vendor_rslides" id="slider">
					<li><img src="<?php echo $url ?>/images/vendor-banner1.jpg" alt=""
						class="img-responsive"></li>
					<li><img src="<?php echo $url ?>/images/vendor-banner2.jpg" alt=""
						class="img-responsive"></li>
						<li><img src="<?php echo $url ?>/images/vendor-banner3.jpg" alt=""
						class="img-responsive"></li>
					<li><img src="<?php echo $url ?>/images/vendor-banner4.jpg" alt=""
						class="img-responsive"></li>
					<li><img src="<?php echo $url ?>/images/vendor-banner5.jpg" alt=""
						class="img-responsive"></li>
				</ul>
    </div>
  </div>
</div>
<!-- end header-slider -->


<!--slider closed here-->
<div class="clearfix"></div>

<div id="middle_content">
	<!--content part one start here-->
	<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 start-left text-center">
        <h1>one stop solutions to grow your business</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and 
          typesetting industry. Lorem Ipsum has been the industry's standard dummy
          text ever since the 1500s, when an unknown printer took a galley of 
          type and scrambled it to make a type specimen book. </p>
      </div>
		<div class="col-lg-6 col-md-6 col-sm-6 start-right">
        <div class="boost">
          <h2> Why we are here</h2>
          <div id="page">
            <div class="block showmore_one">
              <p>Consider this. On an average an Indian or Asian grocery store in North America spends $800 a month on marketing with low return on investment. As a store owner you offer discounts and deals to increase sales and attract more customers. However, the chances of a good number of customers knowing about your store, your deals and queuing up are not guaranteed with traditional ways of advertising. At Grocer Deals, we are here to change the game for you - from pushing promotional material to pulling customers to the store. </p>
            </div>
          </div>
        </div>
      </div>

		<div class="col-lg-6 col-md-6 col-sm-6 start-right">
        <div class="filtering">
          <h2> What we do</h2>
          <div id="page">
            <div class="block showmore_one">
              <p>Our mobile and web app gives you the power to pull customers to your store. How? By 'directly' taking your store to the customers through the modern medium they use to stay in touch. Through our app, you will be able to instantly and constantly reach a large number of customers beyond your neighborhood and the right customers; keep them informed of all your deals and discounts; and serve them better. That's 'smarter, better, faster business at minimal cost'	 with Grocer Deals. </p>
            </div>
          </div>
        </div>
      </div>

		<div class="col-lg-6 col-md-6 col-sm-6 start-right">
        <div class="solution">
          <h2> What will customers get</h2>
          <div id="page">
            <div class="block showmore_one">
              <p>Grocer Deals is a free, innovative app - available on different devices and platforms - that makes shopping for Asian/Indian groceries fun, fast, exciting and cost saving as well as rewarding. How? By providing ready info about all the deals and discounts on offer in Asian/Indian grocery stores across North America. Features include: (a) an easy and powerful search (b) ability to create wish lists, receive alerts when deals are available on favorite items, reserve items for a later pick up, and get nutrition info, (c) look out for deals and stores based on current location, and most importantly (d) get rewards and gifts. </p>
            </div>
          </div>
        </div>
      </div>

		<div class="col-lg-6 col-md-6 col-sm-6 start-right">
        <div class="boost">
          <h2>What does it mean for you?</h2>
          <div id="page">
            <div class="block showmore_one">
              <p>By registering your store with Grocer Deals you will: (a) publish all your deals and discounts online for easy reach of a wide customer base (b) establish a 'direct' connect with customers in a medium that's today's customers' choice (c) promote your store and attract more customers at a fraction of the cost of traditional marketing (d) know your customers better and serve them better. Quite simply... better reach, more footfalls, higher visibility, more revenues, and lower cost - more bang for your buck! </p>
            </div>
          </div>
        </div>
      </div>
	</div>
	<!--content part one closed here-->

	<div class="clearfix"></div>

	<!--content part two start here-->

	<div id="let">
  <div class="container">
    <div class="let_get">
      <h2>Let's get to the details</h2>
      <p>What will you get when you register with Grocer Deals?</p>
    </div>
    <div class="clearfix"></div>
   
  </div>
</div>
<div class="clearfix"></div>
<div class="container store">
  <div class="col-md-6 col-sm-6">
    <div class="store_img"><img src="<?php echo $url ?>/images/customers.png" class="img-responsive"></div>
  </div>
  <div class="col-md-6 col-sm-6">
    <div class="vpoints">
    <h2>Increase Customer Reach </h2>
      <ul>
      <li><span>Your store gets listed and becomes searchable and identifiable for all users of Grocer Deals. At one stroke you are reaching more customers. Your discounts/deals will now be viewed by not only customers in your area, but also any customer searching for stores in that area or any customer who is within 50-miles radius of that area.</span></li>
      <li><span>When your discounts/deals match the wish lists of customers or if your store is among their 'favorite stores', they automatically receive notifications enabling highly focused marketing.</span></li>
      </ul>
    </div>
  </div>
</div>
<div class="container store">
  <div class="col-md-6 col-sm-6">
    <div class="vpoints">
    <h2>It's Your Dashboard</h2>
     <ul>
     <li><span>Upload all your store deals at one click; edit and remove - it's your page.</span></li>
     <li><span>You can offer Cashback rewards on purchases to retain customers</span></li>
     <li><span>View ratings and manage reviews given by the customers. Get visibility into what your customers are saying about your store and will also get to address negative reviews before they get published, giving you time to resolve customer concerns and manage perceptions.</span></li>
     </ul>
    </div>
  </div>
  <div class="col-md-6 col-sm-6">
    <div class="store_img"><img src="<?php echo $url ?>/images/dashbord.png" class="img-responsive"></div>
  </div>
</div>
<div class="container store">
  <div class="col-md-6 col-sm-6">
    <div class="store_img"><img src="<?php echo $url ?>/images/inventry.jpg" class="img-responsive"></div>
  </div>
  <div class="col-md-6 col-sm-6">
    <div class="vpoints">
    <h2>Adopt Technology - Improve operations</h2>
      <ul>
      <li><span>You can intelligently manage your inventory, campaigns, and sales strategies with reports, customer analytics that we provide on your sales through Grocer Deals.</span></li>
      <li><span>Save an average of $9000 per year on your operational expenses</span></li>
      <li><span>Get Business Assessment Survey Analytics.</span></li>
      </ul>
    </div>
  </div>
</div>
<div class="container store">
  <div class="col-md-6 col-sm-6">
    <div class="vpoints">
    <h2>Dedicated Support</h2>
     <ul>
     <li><span>You get email, online and phone support.</span></li>
     <li><span>You can access FAQ's and step by step Tutorial of all the features to handle common related issues.</span></li>
     </ul>
    </div>
  </div>
  <div class="col-md-6 col-sm-6">
    <div class="store_img"><img src="<?php echo $url ?>/images/Dedicated-Support.jpg" class="img-responsive"></div>
  </div>
</div>
 <p  style="color:#000; font-style:italic; font-family: 'Segoe UI';font-size: 17px;padding: 15px; text-align:center;">In other words... focus more on serving your customers better than on reaching them. Grow your business with Grocer Deals.</p>
	<!--content part two closed here-->

	<div id="how">
		<div class="container">
			<div class="how">
				<h2>How to get started?</h2>
				<p>
					It's simple. <a href="<?= Url::to(['vendor/signup'])?>">Register</a>
					today and start growing your business
				</p>
			</div>
		</div>

	</div>

</div>
<div class="clearfix"></div>
<div class="top">
	<a href="#" class="scrollToTop"></a>
</div>
<script>$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
$(function () {
	
                $('#datetimepicker1').datetimepicker();
            });
</script>
<?php 
$this->registerJs("
$(document).ready(function() {
     	
	$('.showmore_one').showMore({
		speedDown: 300,
	        speedUp: 300,
	        height: '100px',
	        showText: 'Show more',
	        hideText: 'Show less'
	});

	$('.showmore_two').showMore({
		speedDown: 300,
	        speedUp: 300,
	        height: '195px',
	        showText: 'Show more',
	        hideText: 'Show less'
	});
	      
});
"); ?>