<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ticket */

$this->title = $model->tikcet_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tickets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ticket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="float: right">
        <?= Html::a(Yii::t('app', 'All Summary'), ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'tikcet_id',
            'service_no',
            'segment_group',
            'product_name',
            'remark:ntext',
            'ticket_status',
            'state',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
