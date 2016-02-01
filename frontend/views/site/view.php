 <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Userprofile';
$this->params ['breadcrumbs'] [] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>


 <?php 
 
 //  echo "<pre>"; print_r($model);   echo "</pre>";
 
                  $uid =  $model->id;
	 			  $username =  $model->username;
    	   		  $email =  $model->email;
    	 		  $mobile =  $model->mobile;
    	 		  $address =  $model->address;
    			  $city =  $model->city;
    			  $zip =  $model->zip;
    	  		  $state =  $model->state;
           		  $country =  $model->country;
           		

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
    <link href="http://designbootstrap.com/livedemos/2015/01/11/user-profile/assets/css/font-awesome.css" rel="stylesheet" />
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
   <div class="container" style='font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14px;line-height: 1.42857143;
    '>
    		<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>
    
       <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
              
               <!--  image uploading -->
                <div class="col-md-4">
                    <img src="http://designbootstrap.com/livedemos/2015/01/11/user-profile/assets/img/250x250.png" class="img-rounded img-responsive" />
               </div>
               <!-- update user profile  -->
                <div class="col-md-8">
                
							<div class="row">
							  <div class="col-md-3">
							    <strong>username</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $username; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>Email</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $email; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>Mobile</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $mobile; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>Address</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $address; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>City</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $city; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>State</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $state; ?></p>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3">
							    <strong>Country</strong>
							  </div>
							  <div class="col-md-3"> 
							    <p><?php echo  $country; ?></p>
							  </div>
							</div>
							
				
					
					
                    
                </div><!--end of col-md-8 -->
            </div> <!-- ROW END -->


        </section><!-- SECTION END -->
    </div><!-- CONATINER END -->

  
</body>

</html>
  
  


       
      
  

   
   

  
 
  
  

   

