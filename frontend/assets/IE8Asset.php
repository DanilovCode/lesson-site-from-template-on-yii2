<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class IE8Asset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';

	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js',
	];

	public $jsOptions = [
		'condition' => 'lte IE 9',
	];
}