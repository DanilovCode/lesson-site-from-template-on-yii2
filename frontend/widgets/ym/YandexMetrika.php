<?php
namespace frontend\widgets\ym;

use yii\base\Widget;

class YandexMetrika extends Widget
{
	public $id;
	public $clickmap = true;
	public $trackLinks = true;
	public $accurateTrackBounce = true;
	public $webvisor = true;

	public function run()
	{
		if (!isset($this->id)) {
			return false;
		}
		return $this->render('template', [
			'id' => $this->id,
			'clickmap' => $this->clickmap,
			'trackLinks' => $this->trackLinks,
			'accurateTrackBounce' => $this->accurateTrackBounce,
			'webvisor' => $this->webvisor,
		]);
	}
}