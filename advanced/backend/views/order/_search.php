<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'shouqian_name') ?>

    <?= $form->field($model, 'shouqian_phone') ?>

    <?= $form->field($model, 'shouhuo_name') ?>

    <?= $form->field($model, 'shouhuo_phone') ?>

    <?php // echo $form->field($model, 'shouhuo_dizhi') ?>

    <?php // echo $form->field($model, 'shouhuo_menpai') ?>

    <?php // echo $form->field($model, 'yuding_time') ?>

    <?php // echo $form->field($model, 'yuding_shuliang') ?>

    <?php // echo $form->field($model, 'yuding_shangpin') ?>

    <?php // echo $form->field($model, 'zongjia') ?>

    <?php // echo $form->field($model, 'sendmail') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'paytype') ?>

    <?php // echo $form->field($model, 'tradeno') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
