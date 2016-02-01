<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Misc';

?>
<!--main content  here-->
<style>
.main-popup {
	margin: 0px auto;
	padding: 0px;
	width: 100%;
	z-index: 9999;
}
</style>

<div role="tabpanel" class="tab-pane" id="">
	<div class="b-tabs-vertical__content-text">
		<h3 class="f-tabs-vertical__title f-primary-b">Sign up bundle request</h3>
		<p align="justify" style="font-size: 14px;">Depends on your package
			type you can select up to $150 worth of items into your bundle
			package. We will do free shipping to your location.</p>
		<div class="col-md-3">
			<div class="form-group">
				<label for="textinput" class="">
					<h3 class="f-tabs-vertical__title f-primary-b">Your Package</h3>
				</label> <select class="form-control" id="exampleInputName2">
					<option value="">None</option>
					<option value="">Silver ($75)</option>
					<option value="">Gold($100)</option>
					<option value="">Diamond($150)</option>
				</select>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-12 products-single" style="">
			<div class="col-md-5 grid-single">
				<h4 class="f-tabs-vertical__title f-primary-b"
					style="font-size: 25px; color: #f7941e;">T shirts</h4>
				<div class="flexslider">
					<ul class="slides">
						<li
							data-thumb="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg">
							<div class="thumb-image">
								<img
									src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg"
									data-imagezoom="true" class="img-responsive" alt="" />
							</div>
						</li>
						<li
							data-thumb="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg">
							<div class="thumb-image">
								<img
									src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg"
									data-imagezoom="true" class="img-responsive" alt="" />
							</div>
						</li>
						<li
							data-thumb="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg">
							<div class="thumb-image">
								<img
									src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg"
									data-imagezoom="true" class="img-responsive" alt="" />
							</div>
						</li>
						<li
							data-thumb="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg">
							<div class="thumb-image">
								<img
									src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg"
									data-imagezoom="true" class="img-responsive" alt="" />
							</div>
						</li>
						<li
							data-thumb="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg">
							<div class="thumb-image">
								<img
									src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/z1.jpg"
									data-imagezoom="true" class="img-responsive" alt="" />
							</div>
						</li>
					</ul>
				</div>
				<!-- FlexSlider -->
				<script src="js/imagezoom.js"></script>
				<script defer src="js/jquery.flexslider.js"></script>
				<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
			</div>
			<div class="col-md-7 single-text">
				<div class="details-left-info simpleCart_shelfItem"
					style="margin-top: 4em;">
					<div class="price_single">
						<span class="">Price:</span> <span class="actual item_price">$600.00</span>
					</div>
					<h4>Available Colors</h4>
					<ul class="product-colors">
						<li><a class="color1" href="#"><span> </span></a></li>
						<li><a class="color2" href="#"><span> </span></a></li>
						<li><a class="color3" href="#"><span> </span></a></li>
						<li><a class="color4" href="#"><span> </span></a></li>
						<li><a class="color5" href="#"><span> </span></a></li>

					</ul>

					<div class="row">

						<div class="quantity_box col-md-6">
							<span>Gender</span>
							<div class="product-qty">
								<select>
									<option value="">Male</option>
									<option value="">Female</option>
								</select>
							</div>
						</div>

						<div class="quantity_box col-md-6">
							<span>Select Colors</span>
							<div class="product-qty">
								<select>
									<option value="">--Select Colors--</option>
									<option value="">White</option>
									<option value="">Green</option>
									<option value="">Orange</option>
									<option value="">Yellow</option>
									<option value="">Red</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="quantity_box col-md-6">
							<span>Size</span>
							<div class="product-qty">
								<select>
									<option value="">S</option>
									<option value="">XS</option>
									<option value="">M</option>
									<option value="">L</option>
									<option value="">XL</option>
									<option value="">XXL</option>
								</select>
							</div>
						</div>
						<div class="quantity_box col-md-6">
							<span>Quantity:</span>
							<div class="product-qty">
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="single-but2 item_add">
						<input type="submit" value="add to cart" />
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div
			style="border-top: 1px #f4f4f4 solid; border-bottom: 1px #f4f4f4 solid;">
			<div class="col-md-3">
				<h3 class="f-tabs-vertical__title f-primary-b"
					style="color: #f7941e">Customer Brochures</h3>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3">
				<div class="quantity_box">
					<h3 class="f-tabs-vertical__title f-primary-b">Quantity:</h3>
					<div class="product-qty">
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>100</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3" style="margin-top: 1em;">
				<div class="price_single">
					<span class="">Price:</span> <span class="actual item_price">$600.00</span>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6" style="padding: 0px;">
				<div>
					<p style="font-size: 16px;">
						click here for sample brochure<a
							style="padding: 5px; color: #fff; border-radius: 3px; background: #8cc251; margin-left: 10px;"
							class="popup-with-zoom-anim" href="#small-dialog2"> Brochure</a>
					</p>
				</div>
				<div class="single-but2"
					style="float: right; margin-bottom: 1em;">
					<input type="submit" value="add to cart" />
				</div>
			</div>
			<div id="small-dialog2" class="mfp-hide">
				<div class="pop_up" style="">
					<div class="container main-popup">
						<div class="row">
							<div class="col-md-12">
								<div class="b-categories-filter">
									<img style="max-width: 100%;"
										src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/brochure.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>

		<div class="col-md-12" style="padding: 0px;">
			<div class="Store_banners">
				<h3 class="f-tabs-vertical__title f-primary-b"
					style="color: #f7941e">Store-banners:</h3>
				<div class="col-md-7" style="padding: 0px;">
					<div class="product-qty col-md-4">
						<h3 class="f-tabs-vertical__title f-primary-b">Select banners:</h3>
						<select id="picDD" style="float: left; margin-right: 10px;">
							<option value="1" selected>A1</option>
							<option value="2">A2</option>
							<option value="3">A3</option>
							<option value="4">A4</option>

						</select>
					</div>

					<div class="col-md-4" style="margin-top: 3em;">
						<div class="price_single">
							<span class="">Price:</span> <span class="actual item_price">$600.00</span>
						</div>
					</div>
					<div class="product-qty  col-md-4">
						<h3 class="f-tabs-vertical__title f-primary-b">Quantity:</h3>
						<select id="picDD" style="margin-right: 10px;">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
				</div>
				<div class="clearfix"></div>
				<div id="suresh">
					<img
						src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/product1.jpg"
						style="margin-top: 1em; margin-bottom: 1em;" />
				</div>
			</div>

			<div class="single-but2" style="margin-bottom: 1em;">
				<input type="submit" value="add to cart" />
			</div>
		</div>
<script>
     var pictureList = [
    "<?php echo Yii::getAlias('@userUploadPics/') ?>images/product1.jpg",
    "<?php echo Yii::getAlias('@userUploadPics/') ?>images/product2.jpg",
    "<?php echo Yii::getAlias('@userUploadPics/') ?>images/product3.jpg",
    "<?php echo Yii::getAlias('@userUploadPics/') ?>images/product4.jpg",
   ];

$('#picDD').change(function () {
    var val = parseInt($('#picDD').val());
   $('#suresh').find('img').attr("src",pictureList[val]);
});
</script>
	</div>
</div>
<script>
$(document).ready(function() {
$('.popup-with-zoom-anim').magnificPopup({
type: 'inline',
fixedContentPos: false,
fixedBgPos: true,
overflowY: 'auto',
closeBtnInside: true,
preloader: false,
midClick: true,
removalDelay: 300,
mainClass: 'my-mfp-zoom-in'
});
});
</script>

<!--main content closed here-->
