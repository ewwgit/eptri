<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
?>


<tr>
<td><?= $model['uId']?></td>
<td><?= $model['receiptNumber']?></td>
<td><?= $model['purchaseDate']?></td>
<td>$<?= $model['receiptAmount']?></td>
<td><?= $model['comment']?></td>

<?php if($model['rewardsFlag'] == 'ADD')
{
	$model['rewardsFlag'] = 'PENDING';
}?>

<td><?= $model['rewardsFlag']?></td>
<td><div class="submit_button"><a href="rewards/statusupdate?rdId=<?= $model['rdId']?>">Confirm</a></div></td>
 </tr>

