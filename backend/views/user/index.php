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
		[
			'attribute' => 'status',
			'value' => function(\common\models\User $user) {
				$statuses = \common\models\User::statuses();
				return $statuses[$user->status];
			},
			'filter' => \common\models\User::statuses(),
		],
		'is_admin:boolean',

		[
			'class' => 'andrewdanilov\gridtools\FontawesomeActionColumn',
			'template' => '{update}{delete}',
		]
	]
]) ?>
