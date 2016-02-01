<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use kartik\icons\Icon;
use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register ( $this );

?>
<?php $this->beginPage()?>
<?php $url = Yii::getAlias('@web'); ?>

<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags()?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head()?>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



<body>
    <?php $this->beginBody()?>
    
<header style="width: 100%;
	position: fixed;
	z-index: 10000;
	background: #fff;">
	
 <div id="header_part" style="box-shadow:0px 0px 3px #ccc; ">
   <div class="top_bg"> </div>
   
   <div class="container hidden">
        <div class="sell"><img class="img-responsive" src="<?php echo $url ?>/images/shop.png">
        <p>Vendor Home</p>
      </div>
      </div>
   

   <!--header top start-------->
    
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo"><a href="<?= $url ?>"><img src="<?php echo $url ?>/images/user-logo.png" alt="" title="grocery Deals" ></a></div>
          </div>
          <div class="col-sm-8">
            <div class="header_right">
            
              <div class="create_btn">
                <ul>
                  <li><a href="<?= Url::to(['site/aboutgd'])?>" style="" title="About gd "> About Gd </a></li>
                  <li><a href="<?= Url::to(['site/store-locator'])?>" style="" title="Store Locator">Store Locator </a></li>
                  <li><a href="<?= Url::to(['site/gddictionary'])?>" style="" title="GD Dictionary">GD Dictionary</a></li>
                  <li><a href="<?= Url::to(['site/faq'])?>" style="" title="FAQs">FAQs</a></li>
                  <li><a href="#" style="" title="Testimonials">Testimonials</a></li>
                  <li><a href="#"  title="Feedback">Feedback</a></li>
                  <li><a href="#"  title="Contact Us">Contact Us</a></li>
                                     <ul class="icon2 sub-icon2">
									    <li><a class="active-icon2 " href="#" style="margin-top: -5px;">
										    <i class="fa fa-user"></i> <?php echo StringHelper::truncate (Yii::$app->user->identity->username, 15); ?> <i class="fa fa-caret-down"></i> </a>
											<ul class="sub-icon2 list">
											    <li><a href="<?= Url::to(['user/profile'])?>" title="">My Profile</a></li>
											    <li><a href="<?= Url::to(['/site/logout'])?>" data-method = "post" title="">Logout</a></li>
												
											</ul>
										</li>
									</ul>
                </ul>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
    <!--header top end--------> 
    
 
  </div>
</header>
   
    <div class="clearfix"></div>
  <!--main content-------->

      <?php 
//             Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )
            
            ?>
        <?php 
        //Alert::widget()  
        
        ?>
        <?= $content ?>
     


 <!--footer-->
<div id="footer">
	<div class="container">
	    <div class="row">
			 <!-- *** col-sm-9 ***-->
			<div class="col-sm-9">
				<!-- *** footer_menus ***-->
			    <div class="footer_menus">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="About gd">About gd</a></li>
						<li><a  href="#" title="Store Locator">Store Locator</a></li>
						<li><a href="#" title="GB Dictionary ">GD Dictionary </a></li>
						<li><a href="#" title="Faq's">FAQ's </a></li>
						<li><a href="#" title="Share App">Share App </a></li>
					</ul>
				</div>
				<!-- *** footer_menus ***-->
			    <div class="footer_menus">
			    
			    
			    
			    
			    
			    
					<ul>
						<li><a href="#" title="Terms of use"> Terms of use</a></li>
						<li><a href="#" title="Legal Info">Privacy </a></li>
					</ul>
				</div>
				<div class="follow">
				     <p>Follow Us:</p>
					<ul class="social">
						<li><a href="#" title="Facebook" ><i class="fa fa-facebook " ></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				
				</div>
				<div class="clearfix"></div>
		    </div><!-- end col-sm-9 -->
			 <!-- *** col-sm-3 ***-->
			<div class="col-sm-3">
				<div class="adress">
				    <h2> Do you own <span class="own">Store?</span></h2>
					<p>Work with grocer deals to Grow your business <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> </p>
				</div>
			</div>
			 <!-- *** col-sm-3 ***-->
			 
			     <div class="col-sm-3">
       		 <div class="adress"> <span  class="mobile"><i class="fa fa-mobile" style="color:#7dab4e;"></i></span>
            <p style="line-height:30px;">Get grocer deals Mobile App
            It's Free <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> </p>
          </div>
      </div>
			
			 
	    </div><!-- end row -->
	</div><!--end container -->
	<div class="clearfix"></div>
    <div class="clearfix"></div>
	<div class="bottom_footer">
		<div class="container">
		    <p class="copy" style="text-align:center;">Copyright ©2015 Grocery-Deals.com</p>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!--footer end-->

<!-- ******* locator ***********  -->

<!-- ******* scrollToTop ***********  -->
 <div class="top"> <a href="#" class="scrollToTop"></a> </div>
<script>
$(document).ready(function(){

	
	    
	    $(".megamenu").megamenu();
	    
		//*****Check to see if the window is top if not then display button****
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

</script>
	<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage()?>

