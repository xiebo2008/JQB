<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu')->textInput(['maxlength' => true,'placehoder'=>'菜单名称,例如:首页']) ?>

    <?= $form->field($model, 'parent')->dropDownList(\common\models\Menu::getAllMenu()) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true,'placehoder'=>'链接地址,例如:/site/home']) ?>
    <?php if(!isset($model->status)){$model->status=10;}?>
    <?= $form->field($model, 'status')->radioList([10=>'有效',0=>'无效']) ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>
    <?php if(!isset($model->position)){
        $model->position=2;
    }?>
    <?= $form->field($model, 'position')->radioList([1=>'Top',2=>'Bottom']) ?>
    <?= $form->field($model, 'sequence')->input('number',['min'=>0,'step'=>1]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '保存') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
