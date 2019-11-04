<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- Last Published: Tue Oct 01 2019 14:09:51 GMT+0000 (UTC) --><html data-wf-page="5d874c138de89c4b649b90be" data-wf-site="5cf02e78a4a8373ef396411d">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<title><?= $this->title ?></title>
	<?php $this->head() ?>
	<link rel="stylesheet" type="text/css" href="css/style.css?ver=1569939221">
	<meta content="" property="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
	<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
	<link href="images/5d935e1b3518d251ae17d83f_fav_32x32_gif_round.gif" rel="shortcut icon" type="image/x-icon">
	<link href="images/5d935e246b517d296350b09a_fav_256x256_gif_round.gif" rel="apple-touch-icon">
	<meta name="author" content="wtw">
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1190497224476144');
		fbq('track', 'PageView');

	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1190497224476144&ev=PageView&noscript=1"></noscript>
	<!-- End Facebook Pixel Code -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script src="/js/cookie-policy.js" type="text/javascript"></script>
</head>
<body class="body _404">
<?php $this->beginBody() ?>

<?= $content ?>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/script.js?ver=1569939221" type="text/javascript"></script>
<script src="./mail.js" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<script type="text/javascript">$(document).ready(function(){$('[href*="brandjs"]').attr('style', 'display:none !important');$('a[href="'+window.location.href+'"]').addClass('w--current');});</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(35875685, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true,
		trackHash:true
	});

</script>
<noscript>
	<div><img src="https://mc.yandex.ru/watch/35875685" style="position:absolute; left:-9999px;" alt=""></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>