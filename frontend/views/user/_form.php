<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\view;
use kartik\file\FileInput;


use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */


        
  
      

?>
<div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px; min-height:500px;">
  <div class="sign" >
    <h2 style="color:#434a54; border-bottom:3px #8cc251 solid; ">USER PROFILE</h2>
  </div>
  <div class="user_profile">
    <div class="col-sm-8" style="padding-top:0px; padding-left:0px; padding-right:0px;">
      <div class="l-inner-page-container">
        <div class="b-shortcode-example b-remaining">
          <div  data-active="1" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
            <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
              <ul>
                <li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-user"  ></i> My Profile</a></li>
                <li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-gift"  ></i>My Rewards</a></li>
                <li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-list"  ></i> My List</a></li>
                <li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-tags"  ></i> My Store Offers</a></li>
              </ul>
            </div>
            
         
              <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		?>      
            
            <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
              <div id="tabs-1">
              
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b" style="padding-left:13px;">Update Your Profile</h3>
                  
                  
   
            
            
            
            
                  <div class=" form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder="First Name">
               
                    <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'First Name','value' => $model->firstName])->label(false);  ?>
           
			 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" ></i> <span style="float: right;font-size: 10px; font-family:Arial; color:#CCC;">charcters length 25</span> 
            </div>
            
            
            
            
            
             
            
            
            
            
             <div class="form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder=" Middle Name">
             <?= $form->field($model, 'middlename')->textInput(array('placeholder' => 'middlename'))->label(false);;  ?>
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" ></i>
                    <span style="float: right;font-size: 10px; font-family:font-family: Arial; color:#CCC;">charcters length 25</span> 
                    </div>
                    
                    
                    
                  <div class=" form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"   placeholder="Last Name">
                   
            
            <?= $form->field($model, 'lastname')->textInput(array('placeholder' => 'lastname'))->label(false);  ?>
                    <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i> <span style="float: right;font-size: 10px; font-family:font-family: Arial; color:#CCC;">charcters length 25</span> 
            </div>
            
            
            
                 
                  <div class="gender">
                    <p>Gender</p>
                    <div class=" form-group col-sm-8" id = "optionsRadios3" checked>
                        <span style="color:#999; font-family:Calibri, Arial">
                  
                   
                   <?=$form->field($model, 'gender')->radioList(['Male' => 'Male', 'Female' => 'Female'],
                   		['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
    
                    
                    <!--   <label class = "checkbox-inline" >
                        <input type = "radio" name = "optionsRadiosinline" id = "optionsRadios3" value = "Male" checked>
                        <span style="color:#999; font-family:Calibri, Arial">Male</span></label>
                      <label class = "checkbox-inline">
                        <input type = "radio" name = "optionsRadiosinline" id = "optionsRadios4" value = "Female">
                        <span style="color:#999; font-family:Calibri, Arial">Female</span> </label> -->
                    
                    </div>
                  </div>
                  
                  
                  
                  
                  
                  <div class="form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder="DOB">
                    <div class='input-group date' id='datetimepicker1'>
			 <?= $form->field($model, 'dob')->textInput(array('placeholder' => 'dob'))->label(false);?>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="This will help us to send special offers on your birthday" 
            data-html="true"  style="bottom:-2px; top:9px; right:-20px;"></i>
            
                      <span class="input-group-addon"> <span class="fa fa-calendar"></span> </span></div>
                    <span style="float: right;font-size: 10px; font-family:font-family: Arial; color:#CCC;">charcters length 8</span> 
                    </div>
                  <div class=" form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder="Email id">
                    
             <?= $form->field($model, 'email')->textInput(array('placeholder' => 'email'))->label(false);?>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" ></i>
                    <span style="float: right;font-size: 10px; font-family:font-family:Arial; color:#CCC;">charcters length 50</span>
                     </div>
                     
                  <div class=" form-group col-sm-5 btnWithTooltip"   data-placement="bottom" 
            data-original-title="This will help you to see grocery dictionary in your preferred language and can get rewards on ur updates on missing grocery names"  >
                  
                  
                  <?=$form->field($model, 'secondLanguage')->dropDownList(['Telugu' => 'Telugu', 'Hindi' => 'Hindi'],
                   		['prompt' => 'Second Language'],['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
                    
                  </div>
                  <div class=" form-group col-sm-5 btnWithTooltip"   data-placement="bottom" 
            data-original-title="This will help you to see grocery dictionary in your preferred language and can get rewards on ur updates on missing grocery names"  >
                      <?=$form->field($model, 'thirdLanguage')->dropDownList([ 'English' => 'English', 'Marati' => 'Marati',],
                   		['prompt' => 'Third Language'],['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
                    
                    
                  </div>
                  
                  <div class=" form-group col-sm-5">
                   <?= $form->field($model, 'address')->textarea(array('placeholder' => 'address'))->label(false);  ?>
                    <span style="float: right;font-size: 10px; font-family:font-family: Calibri, Arial; color:#CCC;">charcters length 40</span> 
                    </div>
                    
                    
                    
                  <div class=" form-group col-sm-5 ">
               
                     <?= $form->field($model, 'address2')->textarea(array('placeholder' => 'address2'))->label(false);  ?>
                   
                    <span style="float: right;font-size: 10px; font-family:font-family: Calibri, Arial; color:#CCC;">charcters length 40</span>
                     </div>
                     
                 
                 
                  <!--<div class=" form-group col-sm-5 " >
                      <select id="exampleInputName2" class="form-control btnWithTooltip" name="RegisterForm[city]" data-placement="bottom" 
            data-original-title=" default to 50 miles" >
           
                        <option value="">Radius search</option>
                        <option value="">Radius search </option>
                        <option value="">Radius search </option>
                      </select>
                    </div>  -->
                    
               
               
                  
                  <div class=" form-group col-sm-5" id="exampleInputName2">
                   
                    
            <?=$form->field($model, 'city')->dropDownList(['Hyd' => 'Hyderabad','Warangal' => 'Warangal'],['prompt' => 'city'],
                   		['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
                  </div>
                  
           
           
                    <div class=" form-group col-sm-5 " id="exampleInputName2">
                    
                     <?=$form->field($model, 'state')->dropDownList(['Ap' => 'AndhraPradesh','Tel' => 'Telangana'],
                   		['prompt' => 'State'],['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
                    
                    </div>
               
               
                
                    <div class="form-group col-sm-5" id="exampleInputName2">
                     <?=$form->field($model, 'country')->dropDownList(['IND' => 'INDIA','USA' => 'USA'],
                   		['prompt' => 'country'],['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
                   		
                     
                    </div>
                 
                 
                    <div class="form-group col-sm-5 " >
                       <?= $form->field($model, 'zip')->textInput(array('placeholder' => 'zip'))->label(false);?>
                     
                    </div>
                
                
                </div>
              </div>
              <div id="tabs-2">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Content heading 2</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div id="tabs-3">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
                </div>
              </div>
              <div id="tabs-4">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">What our client say?</h3>
                  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
                </div>
              </div>
              <div class="update_button">
                <div class="reg-bwn1">
                
               
                
                <?= Html::submitButton('UPDATE', ['class' => 'btn btn-primary'])?>
                </div>
              </div>
            </div>
            		<?php ActiveForm ::end();?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 pull-right">
      <div class="convert">
        <div class="convert_img"><img src="../images/convert.png" class="img-responsive" /></div>
        <p>Do you own grocery store in North America <span style="color:#8cc251">(USA & Canada)</span>?</p>
        <p>Convert as Vendor and grow your business with grocer deals.</p>
        <div class="convert_button">
          <div class="reg-bwn2">  <?= Html::a('convert', ['vendor', 'id' => $model->id], ['class' => 'btn btn-primary']) ?></div>
         
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<div class="locator"> <a href="#" class=""></a> </div>


<script>$(document).ready(function(){
$(function ()
{
//  $('#datetimepicker1').datetimepicker();
});
</script>
</body>
</html>
<!--end slider -->
<script>$(function() {
    $(".btnWithTooltip").tooltip();
});
</script>
<style>
.tooltip-inner {
	width: 200px;
	background: #000;
	font-family:Calibri, Arial;
	font-size:1em;}
div.form-group {
	position: relative;
}
div.form-group input  i.fa {
	position: absolute;
	right: -5px;
	bottom: 25px;
	font-size: 1em;
	left:0px !important;
	
	
}
.Qty-symbol-tooltip
{ 
   position: absolute;
	bottom: 41px;
	font-size: 1em;
	left:220px;

}
</style>
</head>

