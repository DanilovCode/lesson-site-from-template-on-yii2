<?php
namespace backend\models;


use common\models\User;
use yii\data\ActiveDataProvider;

class UserSearch extends User
{
	public function rules()
	{
		return [
			[['id', 'username', 'email', 'status'], 'safe'],
		];
	}

	public function search($params)
	{
		$query = static::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			return $dataProvider;
		}

		$query->andFilterWhere([
			'id' => $this->id,
			'status' => $this->status,
		]);

		$query->andFilterWhere(['like', 'username', $this->username])
			->andFilterWhere(['like', 'email', $this->email]);

		return $dataProvider;
	}
}