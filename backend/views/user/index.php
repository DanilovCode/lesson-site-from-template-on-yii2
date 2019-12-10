<?php
/* @var $this \yii\web\View */
/* @var $searchModel \backend\models\UserSearch */
/* @var $dataProvider \yii\data\ActiveDataProvider */

use yii\helpers\Html;

$this->title = 'Список пользователей';
?>

<?= Html::a('Новый пользователь', ['create'], ['class' => 'btn btn-success']) ?>

<?= \yii\grid\GridView::widget([
	'filterModel' => $searchModel,
	'dataProvider' => $dataProvider,
	'columns' => [
		'id',
		'username',
		'email',
		'status',

		[
			'class' => 'andrewdanilov\gridtools\FontawesomeActionColumn',
			'template' => '{update}{delete}',
		]
	]
]) ?>
