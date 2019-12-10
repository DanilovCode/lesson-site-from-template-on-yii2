<?php
/* @var $this \yii\web\View */
/* @var $model \common\models\User */

$this->title = 'Редактирование пользователя ' . $model->username;
?>

<?= $this->render('_form', ['model' => $model]) ?>
