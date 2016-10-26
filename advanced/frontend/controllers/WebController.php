<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class WebController extends Controller
{
    public $layout=false;

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'app/down_userapp.html'=>'app',
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'errorAction' => 'app',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionApp()
    {
        $this->layout=false;
        return $this->render('down_userapp');
    }
}
