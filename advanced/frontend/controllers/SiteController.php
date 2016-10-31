<?php
namespace frontend\controllers;

use common\models\Feedback;
use common\models\Healtharticle;
use common\models\News;
use common\models\Order;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
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
    public $layout='jqb';

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
    public function actionIndex()
    {
        return $this->render('index');
    }
    /*
             * 企业介绍
             */
    public function actionAboutus(){
        return $this->render('qiyejieshao');
    }
    /*
     * 企业文化
     */
    public function actionCulture(){
        return $this->render('qiyewenhua');
    }
    /*
     * 产品详情
     */
    public function actionProducts(){
        return $this->render("chanpinxiangqing");
    }
    /*
     * 企业动态
     */
    public function actionNews(){
        $this->layout='jqb';
        $parms = Yii::$app->request->queryParams;
        $connection = \Yii::$app->db;
        $sql_c = " SELECT  count(*) as count  from news a where status=10";
        $records_count = $connection->createCommand($sql_c)->queryScalar();
        $pages = new Pagination([
            'totalCount' => $records_count,
            'defaultPageSize'=>8,
        ]);
        $sql_l= "select id,title,author,summary,content,updated_time,stick,status from news where status=10 order by id desc "
            ." limit ".$pages->offset.",".$pages->limit;

        $records_list = $connection->createCommand($sql_l)->queryAll();

        return $this->render('qiyedongtai_list', [
            'models' => $records_list,
            'pages' => $pages,
        ]);
        //return $this->render("qiyedongtai");
    }
    /*
     * 企业动态详情
     */
    public function actionNewsdetail($id=1){
        $model=News::findOne($id);
        return $this->render("qiyedongtai_detail",[
            'model'=>$model
        ]);
    }
    /*
     * 联系我们
     */
    public function actionContactus(){
        return $this->render("lianxiwomen");
    }
    /*
     * 使用说明
     */
    public function actionStep(){
        return $this->render("shiyongshuoming");
    }
    /*
     * 视频欣赏
     */
    public function actionVideo(){
        return $this->render("video");
    }
    /*
     * App下载
     */
    public function actionApp(){
        return $this->render("app");
    }
    /*
     * 常见问题
     */
    public function actionQuestion(){
        return $this->render("changjianwenti");
    }
    /*
     * 加入我们
     */
    public function actionJoinus(){
        return $this->render("joinus");
    }
    /*
     * 荣誉资质
     */
    public function actionCertification(){
        return $this->render("qiyezizhi");
    }
    /*
     * 健康百科
     */
    public function actionHealth(){
        $this->layout='jqb';
        $parms = Yii::$app->request->queryParams;
        $connection = \Yii::$app->db;
        $sql_c = " SELECT  count(*) as count  from health_article a where status=10";
        $records_count = $connection->createCommand($sql_c)->queryScalar();
        $pages = new Pagination([
            'totalCount' => $records_count,
            'defaultPageSize'=>8,
        ]);
        $sql_l= "select id,title,author,summary,content,updated_time,stick,status from health_article where status=10 order by id desc "
            ." limit ".$pages->offset.",".$pages->limit;

        $records_list = $connection->createCommand($sql_l)->queryAll();

        return $this->render('jiankangbaike_list', [
            'models' => $records_list,
            'pages' => $pages,
        ]);

        //return $this->render("jiankangbaike");
    }
    /*
     * 健康百科详情
     */
    public function actionHealthdetail($id=1){
        $model=Healtharticle::findOne($id);
        return $this->render("jiankangbaike_detail",['model'=>$model]);
    }
    /*
     * 意见建议
     */
    public function actionFeedback(){
        return $this->render("feedback");
    }
    /*
     * 提交意见建议
     */
    public function actionSubmitfeedback(){
        $feedback=new Feedback();
        $feedback->content=Yii::$app->request->get("content");
        $feedback->phone=Yii::$app->request->get("phone");
        if($feedback->save()){
            echo json_encode(array('status'=>200));
        }else{
            echo json_encode(array('status'=>500));
        }
    }

    /**
     * 心脏康复专题页
     */
    public function actionCardiac(){
        return $this->render("xinzangkangfu");
    }
    /*
     * 订购页
     */
    public function actionOrder(){
        return $this->render("order");
    }

    public function actionShoppingcar(){
        return $this->render("shoppingcar");
    }
    public function actionPay(){
        return $this->render("pay");
    }
    /*
     * 提交订购
     */
    public function actionSubmitorder(){
        $this->layout=false;
        echo json_encode(array('status'=>200));
       /* if(Yii::$app->request->isPost||Yii::$app->request->isAjax) {
            $order = new Order();
            $order->shouhuo_name = Yii::$app->request->get("shouhuo_name");
            $order->shouhuo_phone = Yii::$app->request->get("shouhuo_phone");
            $order->shouhuo_dizhi = Yii::$app->request->get("shouhuo_dizhi");
            $order->shouhuo_menpai = Yii::$app->request->get("shouhuo_menpai", "");
            $order->yuding_shangpin = Yii::$app->request->get("yuding_shangpin");
            $order->yuding_shuliang = Yii::$app->request->get("yuding_shuliang");
            $order->zongjia = floatval(Yii::$app->request->get("zongjia", 0));
            date_default_timezone_set("Asia/Chongqing");
            $order->yuding_time = time();
            $order->sendmail = 0;
            $order->status = 1;
            if ($order->save()) {
                //return $this->render("pay", ['order' => $order]);
                echo json_encode(array('status'=>200));
            }else{
                echo json_encode(array('status'=>500));
                //return $this->render("order");
            }
     /*   }else{
            echo json_encode(array('status'=>500));
            //return $this->render("order");
        }
        */
    }
    public function actionSendmail(){
        date_default_timezone_set("Asia/Chongqing");
        $id=Yii::$app->request->getBodyParam("id");
        $paytype=Yii::$app->request->getBodyParam("paytype");
        $paystatus=Yii::$app->request->getBodyParam("paystatus");
        $tradeno=Yii::$app->request->getBodyParam("tradeno");
        $order=Order::find()->where(['sendmail'=>0,'id'=>$id])->One();
        //foreach($orders as $order) {
            $body = "
                <p>Dear all,</p>
                <p>客户：" . $order->shouqian_name . "(" . $order->shouqian_phone . ") 于" . date('Y-m-d H:i') . " 订购 " . $order->yuding_shuliang . " 套
                " . $order->yuding_shangpin . "，具体信息如下：
                </p>
                <p>
                售前联系人：" . $order->shouqian_name . "
                </p>
                <p>
                售前联系电话：" . $order->shouqian_phone . "
                </p>
                <p>
                收货人：" . $order->shouhuo_name . "
                </p>
                <p>
                收货人联系电话：" . $order->shouhuo_phone . "
                </p>
                <p>
                收货地址：" . $order->shouhuo_dizhi . $order->shouhuo_menpai . "
                </p>
                <p>
                商品名称：" . $order->yuding_shangpin . "
                </p>
                <p>
                订购数量：" . $order->yuding_shuliang . "
                </p>
                <p>
                总价：￥" . $order->zongjia . "元
                </p>
            ";
            $mail = Yii::$app->mailer->compose();
            $mail->setFrom(Yii::$app->params['adminEmail']);
            $mail->setTo(Yii::$app->params['jqb_email1']);
            $mail->setCharset('UTF-8');
            $mail->setSubject('订购提醒');
            $mail->setHtmlBody($body);
            $mail->send();
            $mail = Yii::$app->mailer->compose();
            $mail->setFrom(Yii::$app->params['adminEmail']);
            $mail->setTo(Yii::$app->params['jqb_email2']);
            $mail->setCharset('UTF-8');
            $mail->setSubject('订购提醒');
            $mail->setHtmlBody($body);
            $mail->send();
            $order->sendmail=1;
            $order->tradeno=$tradeno;
            $order->paytype=$paytype;
            $order->status=$paystatus;
            $order->save();
        //}
        echo json_encode(array('status'=>200));
    }

    public function actionTest(){
        for ($i=0;$i<5;$i++) {
            $mail = Yii::$app->mailer->compose()
                // ...
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo('541122803@qq.com')
                ->setCharset('UTF-8')
                ->setSubject('Test')
                ->setHtmlBody('<p>test</p>');
            $mail->send();
            //Smtpclose();
        }
        //Yii::$app->mailer->sendMultiple($messages);
        //Smtpclose();
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
