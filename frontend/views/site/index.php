<?php
use bupy7\flexslider\FlexSlider;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
$this->title = 'Grocer deals';

?>
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
  
<!-- start slider -->
<div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px;">
    <!-- *** col-sm-9 ****-->
    <div class="col-sm-9">
        <div class="header-slider">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li> 
							 <img src="images/banner1.jpg" alt="" class="img-responsive"> 
							<!---->
							<div class="caption">
								<h3>BEST DEALS ON</h3>
								<p>GROCER DEALS</p>
							</div>
							<!----> 
					    </li>
					    <li> 
					        <img src="images/banner.jpg" alt="" class="img-responsive"> 
							<!---->
							<div class="caption">
								<h3>BEST DEALS ON</h3>
								<p>GROCER DEALS</p>
							</div>
							<!----> 
						</li>
					</ul>
				</div>
			</div>
        </div><!-- end header-slider -->
     </div><!--end col-sm-9 -->
	 <!-- *** col-sm-3 ****-->
	<div class="col-sm-3">
		<div class="left-sidebar">
			<div class="shipping text-center">
			     <!--shipping--> 
			    <img src="images/add3.jpg" alt=""  class="img-responsive" width="100%"/>
			</div>
			<div class="shipping text-center" style="padding-top:16px;">
			      <!--shipping--> 
				<img src="images/add4.jpg" alt=""  class="img-responsive" width="100%" /> 
			</div>
			<div class="shipping text-center" style="padding-top:16px;">
			     <!--shipping--> 
			    <img src="images/add5.jpg" alt=""  class="img-responsive"  width="100%"/>
			</div>
		</div>
	</div>
   
 </div>
  <!-------SIDE BAR-->
 <div class="clearfix"></div>
	<!-- start stores -->
<div class="container" style="margin-top:10px;">
    <div class="row"> 
		<div class="col-sm-9 padding-left"  style="padding-left:0px; padding-right:0px;">
		    <!--features_items-->
			<div class="features_items">
			     <!--product 1-->
			    <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product1.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							<p class="cash" >Cash BackRewards</p>
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 2-->
			    <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product2.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 3-->
			   <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product3.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 4-->
			   <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product4.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 5-->
			    <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product5.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 6-->
			    <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product1.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 7-->
			   <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product2.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 8-->
			    <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product3.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<!--product 9-->
			   <div class="col-md-4 col-sm-6 col-xs-12">
				    <div class="product-image-wrapper">
						<div class="single-products">
						   <div class="productinfo text-center"> 
								<img src="images/product4.jpg" alt="" class="img-responsive" width="100%"/>
							     <div class="store_name text-center">
				  						 <h2>GROCERY STORE NAME </h2>
				  						 <p>H.No: 8-2-608/27, Mastan Mansion,<br />
											Gaffer Khan Colony,Road No. 10,<br />
											Banjarahills,Hyderabad, TS
										 </p>
                                   </div>
                                   <div class="clearfix"></div>
                                    <div class="sale_items">
								       <ul>
								          <li><a href="#">Sale Items <span class="badge">25</span></a></li>
								           <li><a href="#" class="wishlist2"><i class="fa fa-heart-o"></i></a></li>
								           <li> <a href="#" class="wishlist2"><i class="fa fa-map-marker"></i> </a> </li>
								               
								        </ul>
								     </div>
                            </div>
							<p class="new" >10%Off</p>
							
							<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
		  <div class="bs-example" style="float:right; ">
            <ul class="pagination">
              <li class="active"><a href="#">PREV</a></li>
              <li ><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active" ><a href="#">NEXT</a></li>
            </ul>
          </div>
				 
				 
				 
				 
			</div>
		</div><!--col-sm-9 end--> 
		<!-------SIDE BAR------->
		<div class="col-sm-3">
			<div class="left-sidebar2">
				<div class="shipping text-center">
					<!--shipping--> 
					<img src="images/add1.jpg" alt=""  class="img-responsive"  width="100%"/>
				</div>
				<div class="shipping text-center" style="padding-top:25px;">
					<!--shipping--> 
					<img src="images/add2.jpg" alt=""  class="img-responsive" width="100%"/>
				</div>
			  <!--/shipping--> 
			</div>
		</div>
      <!-------SIDE BAR-->
      <div class="clearfix"></div>
    </div>
    <!--row end--> 
  </div>

<style>
 .login-modal-header {
 	background: #8CC251;
  	color: #2c2b2c;
  }
  
 .login-modal-header .modal-title {
 	color: #2c2b2c;
 }
 .login-modal-header .close {
 	color: #000;
  }


</style>

<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
<style>

/* .navbar { */
/* margin-bottom:0px !important; */
/* } */
</style>
