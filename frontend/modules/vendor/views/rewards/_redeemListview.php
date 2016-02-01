<?php 
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
?>


<tr>
<td><?= $model['uId']?></td>
<td><?= $model['rewards']?></td>
<td><div class="submit_button"><a href="rewards/redeemupdate?uId=<?= $model['uId'] ?>">Redeem Update</a></div></td>
</tr>
