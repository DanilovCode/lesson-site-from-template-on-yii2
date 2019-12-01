<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
	public function actionError() {
		$this->layout = 'error';
		$error = Yii::$app->response->statusCode;
		if ($error === 404) {
			return $this->render('404');
		}
	}

	public function actionCreateAdmin()
	{
		$user = new \common\models\User();
		$user->username = 'admin';
		$user->email = 'admin@example.com';
		$user->status = \common\models\User::STATUS_ACTIVE;
		$user->setPassword('admin');
		$user->generateAuthKey();
		$user->save();
		echo 'ok';
	}

	/**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionServices()
    {
    	return $this->render('services');
    }

    public function actionAbout()
    {
    	$this->layout = 'about';
    	return $this->render('about');
    }

    public function actionAvtowestway()
    {
    	return $this->render('avtowestway');
    }

    public function actionBehappy()
    {
    	return $this->render('behappy');
    }

    public function actionBuroTetiMoti()
    {
    	return $this->render('buro-teti-moti');
    }

    public function actionCases()
    {
    	return $this->render('cases');
    }

    public function actionContacts()
    {
	    $this->layout = 'about';
	    return $this->render('contacts');
    }

    public function actionFillerLab()
    {
	    return $this->render('filler-lab');
    }

    public function actionFsk()
    {
	    return $this->render('fsk');
    }

    public function actionIccentr()
    {
	    return $this->render('iccentr');
    }

    public function actionLogos()
    {
	    return $this->render('logos');
    }

    public function actionOkonika()
    {
	    return $this->render('okonika');
    }

    public function actionPolicy()
    {
	    return $this->render('policy');
    }

    public function actionPolimer()
    {
	    return $this->render('polimer');
    }

    public function actionSvMebel()
    {
	    return $this->render('sv-mebel');
    }

    public function actionTrcVolgodonsk()
    {
	    return $this->render('trc-volgodonsk');
    }

	public function actionSeostimul()
	{
		return $this->render('seostimul');
	}
}
