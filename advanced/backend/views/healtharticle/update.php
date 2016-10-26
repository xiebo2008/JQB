<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Healtharticle */

$this->title = Yii::t('app', '编辑 健康百科: ', [
    'modelClass' => 'Healtharticle',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '健康百科'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', '编辑');
?>
<div class="healtharticle-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
