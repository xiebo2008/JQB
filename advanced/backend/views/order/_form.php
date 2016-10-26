<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'shouhuo_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shouhuo_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shouhuo_dizhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shouhuo_menpai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yuding_shuliang')->textInput() ?>

    <?= $form->field($model, 'yuding_shangpin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zongjia')->textInput() ?>

    <?= $form->field($model, 'sendmail')->radioList([1=>'已发送',0=>'未发送']) ?>

    <?= $form->field($model, 'status')->radioList([1=>'待支付',2=>'已支付',3=>'支付失败'])?>

    <?= $form->field($model, 'paytype')->radioList([1=>'微信',2=>'支付宝',3=>'银联']) ?>

    <?= $form->field($model, 'tradeno')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
