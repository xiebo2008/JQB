<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Healtharticle */

$this->title = Yii::t('app', '创建健康百科');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '健康百科'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healtharticle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
