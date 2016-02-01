 <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Url;
use frontend\models\Countries;
use frontend\models\States;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

?>

<?php 
$this->title = 'Userprofile';
//$this->params ['breadcrumbs'] [] = $this->title;
?>


<!-- start slider -->
<div class="container">
  <div class="sign" style="margin-top: 8.5em;">
    <h2 style="color:#434a54;  ">USER PROFILE</h2>
  </div>
  
  <div class="user_profile">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3" style="padding:0px;">
          <div class="panel-group" id="accordion">
            <div role="tabpanel">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-user icon" > </span>User Profile</a> </h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="fa fa-gift icon"> </span>My Rewards <span class="fa fa-caret-down icon2"></span></a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <td><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">App Rewards</a></td>
                      </tr>
                      <tr>
                        <td><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Store Cashback Rewards</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="fa fa-list-ul icon"> </span>My List <span class="fa fa-caret-down icon2"></span></a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <td><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Wish List</a></td>
                      </tr>
                      <tr>
                        <td><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Default List</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"><span class="fa fa-thumbs-o-up icon"> </span>My Stores Deals</a> </h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab"><span class="fa fa-cog icon"> </span>Settings</a> </h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab"><span class="fa fa-comment icon"> </span>Support</a> </h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour"><span class="fa fa-folder icon"> </span>Misc <span class="fa fa-caret-down icon2"></span></a> </h4>
                </div>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <td><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">Tutorial</a></td>
                      </tr>
                      <tr>
                        <td><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab">Add Store</a></td>
                      </tr>
                      <tr>
                        <td><a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab">Grocer Dictionary Updates</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="b-tabs-vertical ui-tabs ui-tabs-panel">
          <div class="col-md-9 col-sm-9 b-tabs-vertical ui-tabs ui-tabs-panel">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="tab1">
                <div class="b-tabs-vertical__content-text">
                  <div class="row">
                    <div class="col-md-7  " >
                      <div class="panel panel-info">
                        <div class="panel-heading">
             					 <h2 class="panel-title"><?php  echo Yii::$app->user->identity->username; ?> 
	           						 <span class="pull-right">
	                            		<a href="<?= Url::to(['user/update'])?>"   class="reg-bwn3"><i class="fa fa-edit"></i></a>
	                            	</span>
            					</h2>
               
           					 </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-3 col-lg-3 "> <img alt="User Pic" src="../images/user-icon.jpg" class="img-circle img-responsive"> </div>
                            <div class=" col-md-9 col-lg-9 ">
                              <table class="table table-user-information">
								<tbody>
								  <tr>
									<td>First Name:</td>
									<td><?php echo  $model->firstName; ?></td>
								  </tr>
								  
								   <tr>
									<td>Last Name:</td>
									<td><?php echo  $model->lastName; ?></td>
								  </tr>
								  
								  <tr>
									<td>Middle Name:</td>
									<td><?php echo  $model->middleName; ?></td>
								  </tr>
								  
								  
								  <tr>
									<td>Email Id</td>
									<td><?php echo  $model->email; ?></td>
								  </tr>
								  
								  <!-- <tr>
	                                     <td>Store Id</td>
										 <td><?php //echo  $model->vendor_unique_id; ?></td>
                                   </tr> --> 
								  
								 
								  
								  <tr>
									<td>Address Line1</td>
									<td><?php echo  $model->address1; ?></td>
								  </tr>
								  
								  <tr>
									<td>Address Line2</td>
									<td><?php echo  $model->address2; ?></td>
								  </tr>
								  
								   <tr>
									<td>City</td>
									<td><?php echo  $model->city; ?></td>
									   
								  </tr>
								  
								 <tr>
									<td>State</td>
									<td><?php echo  States::getStateName($model->state); ?></td>
									   
								  </tr>
								   <tr>
									<td>Country</td>
									<td><?php echo  Countries::getCountryName($model->country); ?></td>
									   
								  </tr>
								   <tr>
									<td>Zipcode</td>
									<td><?php echo  $model->zip; ?></td>
									   
								  </tr>
								  
								  
								  <tr>
									<td>Primary Phone</td>
									<td><?php echo  $model->mobile; ?></td>
								  </tr>
								   <tr>
									<td>Alt. Phone (cell)</td>
									<td><?php echo  $model->mobile2; ?></td>
								  </tr>
								  <tr>
									<td>Date of Birth</td>
									<td><?php echo  $model->dob; ?></td>
								  </tr>
							     <tr>
								 <tr>
									<td>Gender</td>
									<td><?php echo  $model->gender; ?></td>
								  </tr>
									
                                </tbody>
							  </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 pull-right">
                      <div class="convert">
				<div class="convert_img"><img src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/convert.png" class="img-responsive" /></div>
				<p>Do you own grocery store in North America <span style="color:#8cc251">(USA & Canada)</span>?</p>
				<p>Convert as Vendor and grow your business with grocer deals.</p>
				<div class="convert_button">
			
				
				  <div class="vendor-reg-bwn2" hidden><?= Html::a('convert', ['vendor','id' => Yii::$app->user->id]) ?></div>
				</div>
			  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab2">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">App Rewards</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab3">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Store Cashback Rewards</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab4">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Wish List</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab5">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Default List</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab6">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">My Stores Deals</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab7">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Settings</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab8">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Support</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab9">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Tutorial</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab10">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Add Store</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="tab11">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Grocer Dictionary Updates</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="locator"> <a href="#" class=""></a> </div>
<div class="top"> <a href="#" class="scrollToTop"></a> </div>
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
