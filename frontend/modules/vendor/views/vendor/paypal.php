<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Categories;
use backend\models\Brandsmaster;
use backend\models\Products;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="vendorproducts-form">



    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YRA94Z4TTMF7E">
<table>
<tr><td><input type="hidden" name="on0" value="Package Options">Package Options</td></tr><tr><td><select name="os0">
	<option value="Silver">Silver : $59.99 USD - monthly</option>
	<option value="Silver - $53.99/m">Silver - $53.99/m : $648.00 USD - yearly</option>
	<option value="Gold">Gold : $99.99 USD - monthly</option>
	<option value="Gold - $84.99/m">Gold - $84.99/m : $1,020.00 USD - yearly</option>
	<option value="Gold Plus">Gold Plus : $149.99 USD - monthly</option>
	<option value="Gold Plus - $119.99/m">Gold Plus - $119.99/m : $1,440.00 USD - yearly</option>
	<option value="Diamond">Diamond : $199.99 USD - monthly</option>
	<option value="Diamond - $149.99/m">Diamond - $149.99/m : $1,780.00 USD - yearly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
