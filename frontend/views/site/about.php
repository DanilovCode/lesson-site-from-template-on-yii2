<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'О проекте';

?>
<div class="section-content">
	<div class="top-blk"></div>
	<div class="content">
		<h1 class="title-h1">студия</h1>
		<div class="about-content">
			<div>Мы помогаем клиентам запускать новые продукты и услуги, которым требуется название, логотип, сайт или упаковка.<br><br>Мы любопытны, пытливы и любим чистый современный дизайн. Наши решения не берутся с потолка, а являются следствием четко выверенных шагов. Применяем различные методы генерации идей, ищем простые и изящные решения, которые отразят ценности, характер, индивидуальность бренда и наилучшим образом донесут их до аудитории.<br><br>Каждый день мы стремимся стать еще лучше, чтобы предоставлять стабильно высокое качество нашей работы для широкого круга клиентов, независимо от их местоположения или сферы бизнеса. Мы с удовольствием работаем как с небольшими начинающими компаниями, так и с крупным бизнесом. <span class="hr-email"></span></div>
			<div id="order-form" class="order-blk">
				<h3 class="contacts-us-title">Отправьте запрос</h3>
				<div>мы свяжемся с вами в течение рабочего дня</div>
				<div class="order-form w-form">
					<form id="wf-form-Contact-Us-form" name="wf-form-Contact-Us-form" data-name="Contact Us-form"><input type="text" class="order-text-field w-input" maxlength="256" name="company" data-name="company" placeholder="название / бренд" id="company"><textarea placeholder="о компании" maxlength="5000" id="about" name="about" data-name="about" class="order-texrarea w-input"></textarea>
						<div class="wrapper-fields"><input type="text" class="order-text-field _300px w-input" maxlength="256" name="name" data-name="name" placeholder="имя" id="name"><input type="email" class="order-text-field _300px w-input" maxlength="256" name="email" data-name="email" placeholder="электронная почта" id="email" required=""></div>
						<div data-w-id="de7756a1-593a-b036-bb45-0f9927312ebe" class="form-btn"><input type="submit" value="отправить" data-wait="пожалуйста подождите..." class="send-button w-button">
							<div class="btn-line"></div>
						</div>
						<div class="form-policy-text">Нажимая на кнопку <a href="https://searchengines.guru/showthread.php?t=680142">«отправить»</a>, вы даёте согласие на обработку персональных данных и соглашаетесь с <a href="<?= Url::to(['site/policy']); ?>" target="_blank"><span class="text-links">политикой конфеденциальности.</span></a></div>
					</form>
					<div class="success-message w-form-done">
						<div>Спасибо! Ваша заявка отправлена.</div>
					</div>
					<div class="w-form-fail">
						<div>Упс! Что-то пошло не так, пожалуйста заполните форму еще раз</div>
					</div>
				</div>
			</div>
			<div>Если вы заинтересованы в стажировке у нас, пожалуйста, направьте свое резюме на электронную почту <a href="mailto:hr@leadcode.ru?subject=Resume"><span class="hr-email">hr@leadcode.ru</span></a></div>
		</div>
	</div>
</div>
