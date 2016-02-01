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
   
   
 <!--  *** header***  --> 
<header>
	  <!--  *** header part ***  --> 
	<div id="header_part">
		<div class="top_bg"> </div>
		 <!--top header end-------->

         <!--header top start-------->
		<!--  *** sell ***  --> 
		<div class="container">
			<div class="sell"><a href="<?= Url::to(['/vendor/vendor'])?>"><img src="<?php echo $url ?>/images/shop.png" class="img-responsive"/><p>Vendor Home</p></a></div>
		</div>
		<!--  *** header_top ***  --> 
		<div class="header_top">
			<div class="container">
				<div class="row">
					<!--  *** col-sm-4 ***  --> 
					<div class="col-sm-4">
						<div class="logo"><a href="<?= $url ?>"><img src="<?php echo $url ?>/images/user-logo.png" alt="" title="grocery Deals" ></a></div>
					</div>
					<!--  *** col-sm-4 ***  --> 
					<div class="col-sm-4">
						<div class="search">
							<form>
								<input type="text" value="" placeholder="Search For Item">
								<input type="submit" value="">
							</form>
						</div>
					</div>
					<!--  *** Inner col-sm-4 ***  --> 
					<div class="col-sm-4">
						<div class="header_right">
						    <div class="header_right_menus">
								<div style="float:left;">
									<ul class="icon1 sub-icon1 profile_img">
									    <span class="location" style="" ></span>
										<li><a class="active-icon c1" href="#"  title="Browse by location"> Browse by Location</a>
										    <ul class="sub-icon1 list">
												<h3>USA States List</h3>
												<li><a href="#" title="ALABAMA">ALABAMA &nbsp;(25)</a></li>
												<li><a href="#" title="ALASKA">ALASKA</a></li>
												<li><a href="#" title="ARIZONA">ARIZONA</a></li>
												<li><a href="#" title="ARKANSAS">ARKANSAS</a></li>
												<li><a href="#" title="CALIFORNIA">CALIFORNIA</a></li>
												<li><a href="#" title="COLORADO">COLORADO</a></li>
												<li><a href="#" title="CONNECTICUT">CONNECTICUT</a></li>
												<li><a href="#" title="DELAWARE">DELAWARE</a></li>
												<li><a href="#" title="FLORIDA">FLORIDA</a></li>
												<li><a href="#" title="GEORGIA">GEORGIA</a></li>
												<li><a href="#" title="HAWAII">HAWAII</a></li>
												<li><a href="#" title="IDAHO">IDAHO</a></li>
												<li><a href="#" title="ILLINOIS">ILLINOIS</a></li>
												<li><a href="#" title="INDIANA">INDIANA</a></li>
												<li><a href="#" title="IOWA">IOWA</a></li>
												<li><a href="#" title="KANSAS">KANSAS</a></li>
												<li><a href="#" title="KENTUCKY">KENTUCKY</a></li>
												<li><a href="#" title="LOUISIANA">LOUISIANA</a></li>
												<li><a href="#" title="MAINE">MAINE</a></li>
												<li><a href="#" title="MARYLAND">MARYLAND</a></li>
												<li><a href="#" title="MASSACHUSETTS">MASSACHUSETTS</a></li>
												<li><a href="#" title="MICHIGAN">MICHIGAN</a></li>
												<li><a href="#" title="MINNESOTA">MINNESOTA</a></li>
												<li><a href="#" title="MISSISSIPPI">MISSISSIPPI</a></li>
												<li><a href="#" title="MISSOURI">MISSOURI</a></li>
												<li><a href="#" title="MONTANA">MONTANA</a></li>
												<li><a href="#" title="NEBRASKA">NEBRASKA</a></li>
												<li><a href="#" title="NEVADA">NEVADA</a></li>
												<li><a href="#" title="NEW HAMPSHIRE">NEW HAMPSHIRE</a></li>
												<li><a href="#" title="NEW JERSEY">NEW JERSEY</a></li>
												<li><a href="#" title="NEW MEXICO">NEW MEXICO</a></li>
												<li><a href="#" title="NEW YORK">NEW YORK</a></li>
												<li><a href="#" title="NORTH CAROLINA">NORTH CAROLINA</a></li>
												<li><a href="#" title="NORTH DAKOTA">NORTH DAKOTA</a></li>
												<li><a href="#" title="OHIO">OHIO</a></li>
												<li><a href="#" title="OKLAHOMA">OKLAHOMA</a></li>
												<li><a href="#" title="OREGON">OREGON</a></li>
												<li><a href="#" title="PENNSYLVANIA">PENNSYLVANIA</a></li>
												<li><a href="#" title="RHODE ISLAND">RHODE ISLAND</a></li>
												<li><a href="#" title="SOUTH CAROLINA">SOUTH CAROLINA</a></li>
												<li><a href="#" title="SOUTH DAKOTA">SOUTH DAKOTA</a></li>
												<li><a href="#" title="TENNESSEE">TENNESSEE</a></li>
												<li><a href="#" title="TEXAS">TEXAS</a></li>
												<li><a href="#" title="UTAH">UTAH</a></li>
												<li><a href="#" title="VERMONT">VERMONT</a></li>
												<li><a href="#" title="VIRGINIA">VIRGINIA</a></li>
												<li><a href="#" title="WASHINGTON">WASHINGTON</a></li>
												<li><a href="#" title="WEST VIRGINIA">WEST VIRGINIA</a></li>
												<li><a href="#" title="WISCONSIN">WISCONSIN</a></li>
												<li><a href="#" title="WYOMING">WYOMING</a></li>
												<h3 style="padding:5px 5px; color:#8cc251;">Canada Provinces List</h3>
												<li><a href="#" title="ALBERTA">ALBERTA</a></li>
												<li><a href="#" title="BRITISH COLUMBIA">BRITISH COLUMBIA</a></li>
												<li><a href="#" title="MANITOBA">MANITOBA</a></li>
												<li><a href="#" title="NEW BRUNSWICK">NEW BRUNSWICK</a></li>
												<li><a href="#" title="NEWFOUNDLAND">NEWFOUNDLAND </a></li>
												<li><a href="#" title="NORTHWEST TERR">NORTHWEST TERR</a></li>
												<li><a href="#" title="NOVA SCOTIA">NOVA SCOTIA</a></li>
												<li><a href="#" title="NUNAVUT">NUNAVUT</a></li>
												<li><a href="#" title="ONTARIO">ONTARIO</a></li>
												<li><a href="#" title="PRINCE EDWARD IS">PRINCE EDWARD IS</a></li>
												<li><a href="#" title="QUEBEC">QUEBEC</a></li>
												<li><a href="#" title="SASKATCHEWAN">SASKATCHEWAN</a></li>
												<li><a href="#" title="YUKON">YUKON</a></li>
											</ul>
										</li>
									</ul>
							    </div><!--float-left-->
								<div class="create_btn">
								 <?php if (Yii::$app->user->isGuest) {?>
									<ul>
										<li><a href="<?= Url::to(['site/login'])?>" style="color:#ff9900;" title="sign in">sign in</a></li>
										<li><a href="<?= Url::to(['register/register'])?>" style="color:#8cc251" title="sign up">sign up</a></li>
									</ul>
								<?php }else {?>
									<ul class="icon2 sub-icon2 ">
									    <li><a class="active-icon2 " href="#">
										    <i class="fa fa-user"></i> <?php echo StringHelper::truncate (Yii::$app->user->identity->username, 15); ?> <i class="fa fa-caret-down"></i> </a>
											<ul class="sub-icon2 list">
											    <li><a href="<?= Url::to(['user/profile'])?>" title="">My Profile</a></li>
											    <li><a href="#" title="">My Rewards </a></li>
                      							<li><a href="#" title="">My List </a></li>
                      							<li><a href="#" title="">My Stores Deals</a></li>
                       							<li><a href="#" title="">Settings</a></li>
                         					    <li><a href="#" title="">Support</a></li>
                        						<li><a href="#" title="">Misc</a></li>
												<!--<li><a href="<?php // Url::to(['usergrocery/viewprofile'])?>" title="">grocery</a></li>  -->
												<li><a href="<?= Url::to(['/site/logout'])?>" data-method = "post" title="">Logout</a></li>
												
											</ul>
										</li>
									</ul><?php } ?>
								</div>
							</div><!--header_right_menus -->
						</div><!-- end header_right-->
					</div><!-- end Inner col-sm-4-->
				</div><!--end row-->
			</div><!--end container-->
		</div><!--end header_top-->
		<div class="clearfix"> </div>
		<!--header top end--------> 
		
		 <!--menus bar start-------->
		<div id="menus">
			<div class="container">
				<div class="menu_sec"> 
					<!-- start header menu -->
					<ul class="megamenu skyblue">
						<li class="active grid"> <a class="color1" href="<?= Url::to(['/'])?>" title="Home">Home</a></li>
						<li class="grid" ><a class="color1" href="#" title="About gd"> About gd </a> </li>
						<li style="float:left;"><a class="color1" href="#" title="store locator">Store Locator</a>
							<div class="megapanel">
								<div class="row">
									<div class="col-sm-7">	
										<h3 style="text-transform:uppercase; margin:0px; padding:0px; color:#ff9900;">USA States List</h3>
										<!--  *** col1 ***  --> 
										<div class="col1">
											<div class="h_nav">
												<ul>
													<li><a href="#" href=""title="ALABAMA">ALABAMA &nbsp;(25)</a></li>
													<li><a href="#" title="ALASKA">ALASKA</a></li>
													<li><a href="#" title="ARIZONA">ARIZONA</a></li>
													<li><a href="#" title="ARKANSAS">ARKANSAS</a></li>
													<li><a href="#" title="CALIFORNIA">CALIFORNIA</a></li>
													<li><a href="#" title="COLORADO">COLORADO</a></li>
													<li><a href="#" title="CONNECTICUT">CONNECTICUT</a></li>
													<li><a href="#" title="DELAWARE">DELAWARE</a></li>
													<li><a href="#" title="FLORIDA">FLORIDA</a></li>
													<li><a href="#" title="GEORGIA">GEORGIA</a></li>
										        </ul>
										    </div>
										</div>
										<!--  *** col1 ***  --> 
										<div class="col1">
											<div class="h_nav">
												<ul>
													<li><a href="#" title="HAWAII">HAWAII</a></li>
													<li><a href="#" title="IDAHO">IDAHO</a></li>
													<li><a href="#" title="ILLINOIS">ILLINOIS</a></li>
													<li><a href="#" title="INDIANA">INDIANA</a></li>
													<li><a href="#" title="IOWA">IOWA</a></li>
													<li><a href="#" title="KANSAS">KANSAS</a></li>
													<li><a href="#" title="KENTUCKY">KENTUCKY</a></li>
													<li><a href="#" title="LOUISIANA">LOUISIANA</a></li>
													<li><a href="#" title="MAINE">MAINE</a></li>
													<li><a href="#" title="MARYLAND">MARYLAND</a></li>
												</ul>
											</div>
										</div>
										<!--  *** col1 ***  --> 
										 <div class="col1">
										    <div class="h_nav">
												<ul>
													<li><a href="#" title="MASSACHUSETTS">MASSACHUSETTS</a></li>
													<li><a href="#" title="MICHIGAN">MICHIGAN</a></li>
													<li><a href="#" title="MINNESOTA">MINNESOTA</a></li>
													<li><a href="#" title="MISSISSIPPI">MISSISSIPPI</a></li>
													<li><a href="#" title="MISSOURI">MISSOURI</a></li>
													<li><a href="#" title="MONTANA">MONTANA</a></li>
													<li><a href="#" title="NEBRASKA">NEBRASKA</a></li>
													<li><a href="#" title="NEVADA">NEVADA</a></li>
													<li><a href="#" title="NEW HAMPSHIRE">NEW HAMPSHIRE</a></li>
													<li><a href="#" title="NEW JERSEY">NEW JERSEY</a></li>
												</ul>
										    </div>
										</div>
										<!--  *** col1 ***  --> 
										<div class="col1">
										    <div class="h_nav">
											    <ul>
													<li><a href="#" title="NEW MEXICO">NEW MEXICO</a></li>
													<li><a href="#" title="NEW YORK">NEW YORK</a></li>
													<li><a href="#" title="NORTH CAROLINA">NORTH CAROLINA</a></li>
													<li><a href="#" title="NORTH DAKOTA">NORTH DAKOTA</a></li>
													<li><a href="#" title="OHIO">OHIO</a></li>
													<li><a href="#" title="OKLAHOMA">OKLAHOMA</a></li>
													<li><a href="#" title="OREGON">OREGON</a></li>
													<li><a href="#" title="PENNSYLVANIA">PENNSYLVANIA</a></li>
													<li><a href="#" title="RHODE ISLAND">RHODE ISLAND</a></li>
													<li><a href="#" title="SOUTH CAROLINA">SOUTH CAROLINA</a></li>
												</ul>
											</div>
										</div>
										<!--  *** col1 ***  --> 
										<div class="col1">
										    <div class="h_nav">
											    <ul>
													<li><a href="#" title="SOUTH DAKOTA">SOUTH DAKOTA</a></li>
													<li><a href="#" title="TENNESSEE">TENNESSEE</a></li>
													<li><a href="#" title="TEXAS">TEXAS</a></li>
													<li><a href="#" title="UTAH">UTAH</a></li>
													<li><a href="#" title="VERMONT">VERMONT</a></li>
													<li><a href="#" title="VIRGINIA">VIRGINIA</a></li>
													<li><a href="#" title="WASHINGTON">WASHINGTON</a></li>
													<li><a href="#" title="WEST VIRGINIA">WEST VIRGINIA</a></li>
													<li><a href="#" title="WISCONSIN">WISCONSIN</a></li>
													<li><a href="#" title="WYOMING">WYOMING</a></li>
												</ul>
											</div>
										</div>
									</div><!--col-sm-7 -->
									<!--  *** col-sm-5 pull-right ***  --> 
									<div class="col-sm-5 pull-right">
										<h3 style="text-transform:uppercase; margin:0px; padding:0px; color:#8cc251;">Canada Provinces List</h3>
										<!--  *** col2 ***  --> 
										<div class="col2">
											<div class="h_nav">
												<ul>
													<li><a href="#" title="ALBERTA">ALBERTA</a></li>
													<li><a href="#" title="BRITISH COLUMBIA">BRITISH COLUMBIA</a></li>
													<li><a href="#" title="MANITOBA">MANITOBA</a></li>
													<li><a href="#" title="NEW BRUNSWICK">NEW BRUNSWICK</a></li>
													<li><a href="#" title="NEWFOUNDLAND">NEWFOUNDLAND </a></li>
												 </ul>
											</div>
										</div>
										<!--  *** col2 ***  --> 
										<div class="col2">
											<div class="h_nav">
												<ul>
													<li><a href="#" title="NORTHWEST TERR">NORTHWEST TERR</a></li>
													<li><a href="#" title="NOVA SCOTIA">NOVA SCOTIA</a></li>
													<li><a href="#" title="NUNAVUT">NUNAVUT</a></li>
													<li><a href="#" title="ONTARIO">ONTARIO</a></li>
													<li><a href="#" title="PRINCE EDWARD IS">PRINCE EDWARD IS</a></li>
												 </ul>
											</div>
										</div>
										<!--  *** col2 ***  --> 
										<div class="col2">
											<div class="h_nav">
												<ul>
													<li><a href="#" title="QUEBEC">QUEBEC</a></li>
													<li><a href="#" title="SASKATCHEWAN">SASKATCHEWAN</a></li>
													<li><a href="#" title="YUKON">YUKON</a></li>
												 </ul>
											</div>
										</div>
									</div>

								
								  
						        </div><!--row-->
							</div><!--megapanel-->
						</li>
						<li><a class="color1" href="#" title="gd dictionary">GD Dictionary </a></li>
						<li><a class="color1" href="#" title="faqs">FAQs</a></li>
						<li><a class="color1" href="#" title="testimonials">Testimonials</a></li>
						<li><a class="color1" href="<?= Url::to(['/user/requestrewards'])?>" title="rewards">Rewards</a></li>
						<li><a class="color1" href="#" title="share app">SHARE APP</a></li>
						<li><a class="color1" href="#" title="contact us">Contact Us</a></li>
						
					</ul>
					<div class="clearfix"></div>
				</div><!--end menu_sec-->
				
			</div><!--end container-->
		</div><!--end menus-->
        <div class="clearfix"></div>
	</div>
</header>
<!--menus bar end--------> 

	
		
        <?php
//               Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )
              ?>
        <?php //Alert::widget()  ?>
        <?= $content ?>
     
<div class="clearfix"></div>
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
		    <p class="copy" style="text-align:center;">Copyright &copy; 2015 Grocery-Deals.com</p>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!--footer end-->

<!-- ******* locator ***********  -->
<div class="locator"> <a href="#" class=""></a> </div>
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

