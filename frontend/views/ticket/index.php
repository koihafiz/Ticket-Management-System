<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'TICKET MANAGEMENT SYSTEM');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'tikcet_id',
            [
                'attribute'=>'tikcet_id',
                'format'=>'raw',
                'value' => function($data)
                {
                    return
                        Html::a($data->tikcet_id, ['ticket/view','id'=>$data->id], ['title' => 'View','class'=>'no-pjax']);
                }
            ],
            'service_no',
            'segment_group',
            'product_name',
            //'remark:ntext',
            'ticket_status',
            //'state',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

    <p style="float: right;">
        <?= Html::a(Yii::t('app', 'Add New Ticket'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
