<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Healthconsultant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="healthconsultant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,
        'placeholder'=>'请输入标题,例如:华南地区健康顾问']) ?>

    <?= $form->field($model, 'cname')->textInput(['maxlength' => true
        ,'placeholder'=>'请输入顾问姓名']) ?>

    <?= $form->field($model, 'celphone')->textInput(['maxlength' => true
        ,'placeholder'=>'请输入座机号码']) ?>

    <?= $form->field($model, 'telphone')->textInput(['maxlength' => true
        ,'placeholder'=>'请输入手机号码']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true
        ,'placeholder'=>'请输入顾问邮箱']) ?>

    <?php if(!isset($model->status)){
        $model->status=10;
    }?>
    <?= $form->field($model, 'status')->radioList([10=>'有效',0=>'无效']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '保存') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
