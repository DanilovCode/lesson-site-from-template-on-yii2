<?php
/* @var $this \yii\web\View */
/* @var $model \common\models\User */

use yii\helpers\Html;
?>

<?php $form = \yii\widgets\ActiveForm::begin() ?>

<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>
<?= $form->field($model, 'status')->dropDownList(\common\models\User::statuses()) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'is_admin')->checkbox() ?>

<?= Html::submitButton('Соохранить', ['class' => 'btn btn-success']) ?>

<?php \yii\widgets\ActiveForm::end() ?>