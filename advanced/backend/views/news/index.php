<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '企业动态');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '添加文章'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'title',
                'value'=>function($model){
                    return strlen($model->title)>20?mb_substr($model->title, 0, 19, 'utf-8').'......':$model->title;
                }
            ],
            [
                'attribute'=>'author',
                'value'=>function($model){
                    return strlen($model->author)>12?mb_substr($model->author, 0, 11, 'utf-8').'......':$model->author;
                }
            ],
            [
                'attribute'=>'summary',
                'value'=>function($model){
                    return strlen($model->summary)>30?mb_substr($model->summary, 0, 29, 'utf-8').'......':$model->summary;
                }
            ],
            //'content:ntext',
            //'created_time:datetime',
            'updated_time:datetime',
            // 'stick',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
