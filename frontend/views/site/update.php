 <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Update profile: ' . ' ' . $model->id;
$this->title = 'Update profile';
$this->params['breadcrumbs'][] = ['label' => 'userprofile', 'url' => ['userprofile']];
$this->params['breadcrumbs'][] = ['label' => $model->id,'url' => ['userprofile', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>


 <?php 
 
 //  echo "<pre>"; print_r($model);   echo "</pre>";
 
//                   $uid =  $model->id;
// 	 			  $username =  $model->username;
//     	   		  $email =  $model->email;
    	   		  
//     	 		  $mobile =  $model->mobile;
//     	 		  $address =  $model->address;
//     			  $city =  $model->city;
    			
//     	  		  $state =  $model->state;
//            		  $country =  $model->country;
//            		  $zip =  $model->zip;
           		

  ?>
  
  
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title></title>
    <!-- BOOTSTRAP STYLE SHEET -->
     <script type="text/javascript">

</script>

    <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
   
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
               .btn-social {
            color: white;
            opacity: 0.8;
        }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

        .btn-facebook {
            background-color: #3b5998;
        }

        .btn-twitter {
            background-color: #00aced;
        }

        .btn-linkedin {
            background-color: #0e76a8;
        }

        .btn-google {
            background-color: #c32f10;
        }
    </style>


</head>
<body>
   
    <!-- NAVBAR CODE END -->


    <div class="container" style='    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    /* color: #333; */'>
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="http://designbootstrap.com/livedemos/2015/01/11/user-profile/assets/img/250x250.png"
                     class="img-rounded img-responsive" />
                  
                 
                  
                </div>
                <div class="col-md-8">
                    <div class="">
                     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
                     
                         <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                         </div>
                         
                           <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                         </div>
                         
                           <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
                         </div>
                         
                           <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                         </div>
                         
                           <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
                         </div>
                         
                          <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
                         </div>
                                <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
                         </div>
                                <div class="form-group col-lg-6 col-sm-12">
                         <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>
                         </div>
                         
					 <div class="form-group">
                      <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                   </div>
    

    
    

    <?php ActiveForm::end(); ?>
                     
                     
                   
                    </div>
            </div><!-- end of col-md-8  -->
					
					
					
                     <div class="form-group col-md-8">
                        <?php $form = ActiveForm::begin(); ?>
		                        <h3>Change YOur Password</h3>
		                        <br />
		                        <label>Enter Old Password</label>
		                        <input type="password" class="form-control">
		                        <label>Enter New Password</label>
		                        <input type="password" class="form-control">
		                        <label>Confirm New Password</label>
		                        <input type="password" class="form-control" />
		                        <br>
		                        <a href="#" class="btn btn-warning">Change Password</a>
					 				<?php ActiveForm::end(); ?>
                       </div>
                    
                    
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>
    <!-- CONATINER END -->



<!-- GOOGLE ADD SECTION START -->
  
</body>

</html>
  
  


       
      
  

   
   

  
 
  
  

   

