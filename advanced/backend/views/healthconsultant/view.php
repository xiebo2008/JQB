<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Healthconsultant */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '健康顾问'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healthconsultant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', '更新'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '确认删除此项吗?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'cname',
            'celphone',
            'telphone',
            'email:email',
            'status',
        ],
    ]) ?>

</div>
