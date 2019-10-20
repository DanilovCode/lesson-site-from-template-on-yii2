<?php
namespace frontend\widgets;

use yii\base\Widget;

class SiteYears extends Widget
{
	public $start_year;

	public function run()
	{
		$years_str = $this->start_year;
		if ((string)$this->start_year !== date('Y')) {
			$years_str .= '-' . date('Y');
		}
		return $years_str;
	}
}