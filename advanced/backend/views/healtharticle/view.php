<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Healtharticle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '健康百科'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healtharticle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', '编辑'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '删除'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'author',
            'summary',
            'content:html',
            'created_time:datetime',
            'updated_time:datetime',
            'status',
            //'stick',
        ],
    ]) ?>

</div>
