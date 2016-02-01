<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$user->username;
 $status = $user->status;
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(["vendor/vendor/activate",
		['email' => $user->email,'auth_key' => $user->auth_key]]);


?>

<div class="password-reset">

      <p>Hello <?= Html::encode($user->username) ?>,</p><br/> <br/>
      Please verify your email and get started using your Website account. <br/>
        <br/>
            <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
   </div>
