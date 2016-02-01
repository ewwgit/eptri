<?php
use yii\helpers\Html;

use yii\bootstrap\Nav;

use yii\bootstrap\NavBar;

use yii\widgets\Breadcrumbs;

use frontend\assets\AppAsset;

use frontend\widgets\Alert;

use kartik\icons\Icon;

use yii\helpers\Url;

use app\components\loginWidget;

/* @var $this \yii\web\View */

/* @var $content string */

AppAsset::register ( $this );

?><?php $this->beginPage()?><?php $url = Yii::getAlias('@web'); ?>



<html lang="<?= Yii::$app->language ?>">

<head>

<meta charset="<?= Yii::$app->charset ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">		<?= Html::csrfMetaTags()?>		<title><?= Html::encode($this->title) ?></title>		<?php $this->head()?><script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>    <?php $this->beginBody()?><!-- header-->
<header>
		<div id="header_part">
			<div class="vendor_top_bg"> </div>
			<div class="container">
			     <div class="customer_home"><img src="<?php echo $url ?>/images/vendor-shop.png" class="img-responsive"/>
				    <a class="" href="<?= Url::to(['/'])?>" title="Customer Home">Customer
									Home </a>
			     </div>
		    </div>
			<div class="header_top">

				<div class="container">

					<div class="row">

							 <div class="col-md-3 col-sm-3">

								<div class="logo">
									<a href="<?= Url::to(['/vendor/vendor'])?>"><img
										src="<?php echo $url ?>/images/vendor-logo.png" 
										alt="" title="grocery Deals"  class="img-responsive"></a>
								</div>

							</div>

							<div class="col-md-5  pull-right right_side" >

								<div class="buttons">

<!-- 									<div class="vendor"> -->
<!-- 										<h3>Vendor Login</h3> -->
<!-- 									</div> -->
									
									<!-- login page-->
									    <?= loginWidget::widget()?>
								</div>

							</div>

					</div><!--row -->

				</div><!--container -->

			</div><!--end header-top-->

			<div class="clearfix"></div>
				<!--menus bar start-------->

			<div id="menus">
				 <div class="container ">

					<div class="menu_sec">

						<!-- start header menu -->

						<ul class="megamenu skyblue">

							<li class="active grid"><a class="color1"
								href="<?= Url::to(['/vendor/vendor'])?>" title="Home">Home</a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/benefits'])?>" title="Benefits">Benefits </a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/faq'])?>" title="FAQ’s">FAQ's </a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/pricing'])?>" title="Pricing ">Pricing </a></li>

							<li><a class="color1" href="#" title="Testimonials">Testimonials </a></li>

							

						</ul>

						<div class="clearfix"></div>

					</div>

				</div>

			</div><!--end mentu-->

			<div class="clearfix"></div>

		</div><!--header-part-->

	</header>

	<div class="clearfix"></div>
		<!--End Header---->

	<!--main content-------->    <?= $content?> <!--footer-->

	<div class="clearfix"></div>

	</div>

	</div>

	<div class="clearfix"></div>

	<div id="footer">

		<div class="container">

			<div class="row">

				<div class="col-sm-9">

					<div class="footer_menus">

						<ul>

							<li><a href="<?= Url::to(['/vendor/vendor'])?>" title="Home">Home</a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/benefits'])?>" title="Benefits">Benefits </a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/faq'])?>" title="FAQ’s">FAQ's </a></li>

							<li><a class="" href="<?= Url::to(['/vendor/vendor/pricing'])?>" title="Pricing ">Pricing </a></li>

							<li><a href="#" title="Testimonials">Testimonials</a></li>

							

						</ul>

					</div>

					<div class="footer_menus">

						<ul>

						

							<li><a href="#" title="Terms of use"> Terms of use</a></li>

							<li><a href="#" title="Privacy ">Privacy </a></li>

							

						</ul>

					</div>

					<div class="follow">

						<p>Follow Us:</p>

						<ul class="social">

							<li><a href="#" title="Facebook"><i class="fa fa-facebook "></i></a></li>

							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>

							<li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>

<!-- 							<li><a href="#" title="Linked in"><i class="fa fa-linkedin"></i></a></li> -->

							<li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>

						</ul>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="col-sm-3">

					<div class="vendor_adress">
						<span class="mobile"><i class="fa fa-mobile"
							style="color: #7dab4e;"></i></span>

						<p>
							Get Grocer Deals Mobile App It's Free <i
								class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i>
						</p>

					</div>

				</div>

			</div>

		</div>

		<div class="clearfix"></div>

		<div class="clearfix"></div>

		<div class="bottom_footer">

			<div class="container">

				<p class="vendor_copy">Copyright &copy; <?= date("Y") ?> <a href="#">Grocer Deals</a>. All rights
    reserved.</p>
    <p class="vendor_powered"><a href="#">Expertwebworx.com</a></p>

			</div>

		</div>

	</div>

	<div class="clearfix"></div>

	<!--footer end-->
	<!-- scrollToTop  -->

	<div class="top">
		<a href="#" class="scrollToTop"></a>
	</div>
	<script>$(document).ready(function(){ // alert(1);	    //******** megamenu ***********	  $(".megamenu").megamenu();		//*****Check to see if the window is top if not then display button****		$(window).scroll(function(){			if ($(this).scrollTop() > 100) {				$('.scrollToTop').fadeIn();			} else {				$('.scrollToTop').fadeOut();			}		});		//Click event to scroll to top		$('.scrollToTop').click(function(){			$('html, body').animate({scrollTop : 0},800);			return false;		});		//Click event to scroll to top		$('.scrollToTop').click(function(){			$('html, body').animate({scrollTop : 0},800);			return false;		});});</script>	<?php $this->endBody()?></body>



</html>

<?php $this->endPage()?>