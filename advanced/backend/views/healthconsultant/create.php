<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Healthconsultant */

$this->title = Yii::t('app', '创建健康顾问');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Healthconsultants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healthconsultant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
