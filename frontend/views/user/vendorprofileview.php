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
$this->title = 'Vendor Profile';
//$this->params ['breadcrumbs'] [] = $this->title;





?>

<div class="container" style="min-height:500px;">
	<div class="sign" >
	  <h2 style="color:#434a54;  ">Vendor PROFILE</h2>
	</div>
	<div class="user_profile">
			<div class="col-sm-8" style="padding-top:0px; padding-left:0px; padding-right:0px;">
				<div class="l-inner-page-container">
				<div class="b-shortcode-example b-remaining">
					<div  data-active="1" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">

						<div class="col-md-4 col-sm-4 b-tabs-vertical__nav">
						  <ul>
							<li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-user"  ></i> Vendor Profile</a></li>
							<li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-gift"  ></i>My Rewards</a></li>
							<li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-list"  ></i> My List</a></li>
							<li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-tags"  ></i> My Store Offers</a></li>
						  </ul>
						</div>
				 
					
					<div class="col-md-8 col-sm-8 b-tabs-vertical__content">
					    <!-- tab-1----->
						<div id="tabs-1">
							<div class="b-tabs-vertical__content-text">
								<div class="row">
								<!----<div class="col-md-5 toppad ">
										   <A href="#" >Edit Profile</A>

										<A href="#" >Logout</A>
									   <br>
								<p class=" text-info">May 05,2014,03:00 pm </p>
									  </div>
										<!---->
									<div class="col-md-12  " >
										<div class="panel panel-info">
											   <!--  profile view heading and edit -->
												<div class="panel-heading">
													 <h3 class="panel-title"><?php  echo Yii::$app->user->identity->username; ?> 
														 <span class="pull-right">
															<a href="<?= Url::to(['user/update'])?>"   class="reg-bwn3"><i class="fa fa-edit"></i></a>
														</span>
													</h3>
								   
												</div>
											   
												<!-- ************ -->
												<div class="panel-body">
													<div class="row">
							<div class="col-md-3 col-lg-3 " align="center"> 
							<?php if($model->storeImage != ''){?>											
							<img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/').$model->storeImage ; ?>" class="img-circle img-responsive"> 
							 <?php } else { ?>
							 
							 <img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/store-pic.png" class="img-circle img-responsive"> 
							 
							 
							  <?php } ?> 														
							  </div>
												
														<!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
														  <dl>
															<dt>DEPARTMENT:</dt>
															<dd>Administrator</dd>
															<dt>HIRE DATE</dt>
															<dd>11/12/2013</dd>
															<dt>DATE OF BIRTH</dt>
															   <dd>11/12/2013</dd>
															<dt>GENDER</dt>
															<dd>Male</dd>
														  </dl>
														</div>-->
														<div class=" col-md-9 col-lg-9 "> 
															  <table class="table table-user-information">
																<tbody>
																  <tr>
																	<td>First Name:</td>
																	<td><?php echo  $model->firstName; ?></td>
																  </tr>
																  <tr>
																	<td>Middle Name:</td>
																	<td><?php echo  $model->middleName; ?></td>
																  </tr>
																   <tr>
																	<td>Last Name:</td>
																	<td><?php echo  $model->lastName; ?></td>
																  </tr>
																  
																  <tr>
																	<td>Email</td>
																	<td><?php echo  $model->email; ?></td>
																  </tr>
																  <tr>
																	<td>Mobile No</td>
																	<td><?php echo  $model->mobile; ?></td>
																  </tr>
																   <tr>
																	<td>Alternate Mobile No</td>
																	<td><?php echo  $model->mobile2; ?></td>
																  </tr>
																  <tr>
																	<td>Date of Birth</td>
																	<td><?php echo  $model->dob; ?></td>
																  </tr>
															   
																	 <tr>
																		 <tr>
																	<td>Gender</td>
																	<td>Male</td>
																  </tr>
																	<tr>
																	<td>Address</td>
																	<td><?php echo  $model->address1; ?></td>
																  </tr>
																  
																  <tr>
																	<td>Alternate Address</td>
																	<td><?php echo  $model->address2; ?></td>
																  </tr>
																  
																  
																  <tr>
																	<td>Store Name</td>
																	<td><?php echo  $model->storeName; ?></td>
																  </tr>
																  
																  
																  <tr>
																	<td>Store Address</td>
																	<td><?php echo  $model->storeAddress; ?></td>
																  </tr>
																  <tr>
																	<td>City</td>
																	<td><?php echo  $model->city; ?></td>
																	   
																  </tr>
																  
																  
																   <tr>
																	<td>State</td>
																	<td><?php echo  $model->state; ?></td>
																	   
																  </tr>
																  
																  
																   <tr>
																	<td>Country</td>
																	<td><?php echo  $model->country; ?></td>
																	   
																  </tr>
																  
																  
																   <tr>
																	<td>Zipcode</td>
																	<td><?php echo  $model->zip; ?></td>
																	   
																  </tr>
																 
																</tbody>
															  </table>
															  
															  
														</div>
													</div>
												</div>
												 
											
										 </div>
									</div>
								 </div>
							</div>
						</div>
						
						<!-- end tab-1-->
						<div id="tabs-2">
							<div class="b-tabs-vertical__content-text">
							  <h3 class="f-tabs-vertical__title f-primary-b">My Rewards</h3>
							  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
							</div>
						</div>
						<div id="tabs-3">
							<div class="b-tabs-vertical__content-text">
							  <h3 class="f-tabs-vertical__title f-primary-b"> My List</h3>
							  <div id="products">
								<div class="item list-group-item  col-md-7">
								  <div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt="" class="img-responsive" />
									<div class="caption2">
									  <h4>GROCERY STORE NAME</h4>
									  <p> Banjara Hills Road No:10<br />
										Hyderabad </p>
									  <div class="row">
										<div class=" productinfo" style=" padding-left:10px;">
										  <p style="">Sale Items <span class="no">25</span></p>
										  <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none !important;"></i> </a> </div>
									  </div>
									</div>
								  </div>
								</div>
								<div class="item list-group-item  col-md-7">
								  <div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt=""  class="img-responsive"/>
									<div class="caption2">
									  <h4>GROCERY STORE NAME </h4>
									  <p> Banjara Hills Road No:10<br />
										Hyderabad </p>
									  <div class="row">
										<div class=" productinfo" style=" padding-left:10px;">
										  <p style="">Sale Items <span class="no">25</span></p>
										  <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none  !important;"></i> </a> </div>
									  </div>
									</div>
								  </div>
								</div>
								<div class="item list-group-item  col-md-7">
								  <div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt="" class="img-responsive" />
									<div class="caption2">
									  <h4>GROCERY STORE NAME</h4>
									  <p> Banjara Hills Road No:10<br />
										Hyderabad </p>
									  <div class="row">
										<div class=" productinfo" style=" padding-left:10px;">
										  <p style="">Sale Items <span class="no">25</span></p>
										  <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none  !important;"></i> </a> </div>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						  <div id="tabs-4">
							<div class="b-tabs-vertical__content-text">
							  <h3 class="f-tabs-vertical__title f-primary-b"> My Store Offers</h3>
							  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
							</div>
						  </div>
						</div>
					</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 pull-right">
			  <div class="convert">
				<div class="convert_img"><img src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/convert.png" class="img-responsive" /></div>
				<p>Do you own grocery store in North America <span style="color:#8cc251">(USA & Canada)</span>?</p>
				<p>Convert as Vendor and grow your business with grocer deals.</p>
				<div class="convert_button">
					<div class="reg-bwn2"></div>
				</div>
			  </div>
			</div>
	</div><!--profile-->
	
</div>





  
  


       
      
  

   
   

  
 
  
  

   

