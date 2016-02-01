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

//print_r($model);
//exit;
?>

<?php 
$this->title = 'Vendor Profile';
//$this->params ['breadcrumbs'] [] = $this->title;

//echo "<pre>";print_r($model);
//exit;
?>

                        <div class="panel vendor-panel-info">
                          <div class="vendor-panel-heading">
                            <h3 class="panel-title"> <?php  echo Yii::$app->user->identity->username; ?> <span class="pull-right"> 
							<a href="<?= Url::to(['vendor/vendorupdate'])?>"   class="reg-bwn4"><i class="fa fa-edit"></i></a> </span> </h3>
							
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-3 col-lg-3 " align="center" style="padding: 10px;"> 
								
										<?php if($model->storeImage != ''){?>											
										<img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/').$model->storeImage ; ?>" class="img-circle img-responsive"> 
										 <?php } else { ?>
										 
										 <img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/store-pic.png" class="img-circle img-responsive"> 
										 
										 
										  <?php } ?> 														
										
							  
							
							  </div>
                              <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                  <tbody>
                                    
                                   <tr>
                                      	<td>Business Contact  First Name:</td>
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
                                    <tr>
	                                     <td>Store Id</td>
										 <td><?php echo  $model->vendor_unique_id; ?></td>
                                   </tr>
                                    <tr>
	                                      <td>Store Name</td>
	                                      <td><?php echo  $model->storeName; ?></td>
                                    </tr>
                                     <tr>
	                                      <td>Store Name2</td>
	           							  <td><?php echo  $model->businessName2; ?></td>
                       				</tr>
                       				 <tr>
	                                      <td>Store Address Line1</td>
	           							  <td><?php echo  $model->storeAddress; ?></td>
                       				 </tr>
                                      <tr>
	                                      <td>Store Address Line2</td>
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
	                                      <td>Zip Code</td>
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
	                                    <td>Fax</td>
										<td><?php echo  $model->fax; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                 
