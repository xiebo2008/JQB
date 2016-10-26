<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Healthconsultant */

$this->title = Yii::t('app', '编辑 健康顾问: ', [
    'modelClass' => 'Healthconsultant',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '健康顾问'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', '编辑');
?>
<div class="healthconsultant-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
