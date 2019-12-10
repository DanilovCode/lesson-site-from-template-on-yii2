<?php
/* @var $this \yii\web\View */
/* @var $model \common\models\User */

use yii\helpers\Html;
?>

<?php $form = \yii\widgets\ActiveForm::begin() ?>

<?= $form->field($model, 'username')->textInput() ?>
<?= $form->field($model, 'email')->textInput(['type' => 'email']) ?>
<?= $form->field($model, 'status')->dropDownList([
	\common\models\User::STATUS_INACTIVE => 'Неактивный',
	\common\models\User::STATUS_ACTIVE => 'Активный',
	\common\models\User::STATUS_DELETED => 'Удаленный',
]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= Html::submitButton('Соохранить', ['class' => 'btn btn-success']) ?>

<?php \yii\widgets\ActiveForm::end() ?>