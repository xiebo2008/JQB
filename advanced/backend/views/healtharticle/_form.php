<?php

use yii\redactor\widgets\Redactor;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Healtharticle */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="healtharticle-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content')->widget(Redactor::className(),[]) ?>
    <?php if(!isset($model->status)){
        $model->status=10;
    }?> 
    <?= $form->field($model, 'status')->radioList([10=>'有效',0=>'无效']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '保存') : Yii::t('app', '更新'),
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>