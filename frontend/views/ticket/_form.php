<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'form-horizontal'
        ]
    ]); ?>

    <hr>

    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Ticket Id :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'tikcet_id')->textInput(['maxlength' => true,'placeholder' => 'Ticket Id','readonly' => !$model->isNewRecord])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Service Number :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'service_no')->textInput(['maxlength' => true,'placeholder' => 'Service Number'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Segment Group :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'segment_group')->textInput(['maxlength' => true,'placeholder' => 'Segment Group'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Product Name :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'product_name')->textInput(['maxlength' => true,'placeholder' => 'Product Name'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Remark :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'remark')->textarea(['rows' => 3,'placeholder' => 'Remark'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" style="padding-top: 0px;" for="email">Ticket Status :</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'ticket_status')->radioList(['Processing'=>'Processing','Completed'=>'Completed'])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="email">State :</label>
        <div class="col-sm-6">
    <?= $form->field($model, 'state')->dropdownList([
        'Sarawak' => 'Sarawak',
        'Sabah' => 'Sabah',
        'Pahang' => 'Pahang',
        'Perak' => 'Perak',
        'Johor' => 'Johor',
        'Kelantan' => 'Kelantan',
        'Terengganu' => 'Terengganu',
        'Kedah' => 'Kedah',
        'Selangor' => 'Selangor',
        'Negeri Sembilan' => 'Negeri Sembilan',
        'Melaka' => 'Melaka',
        'Pulau Pinang' => 'Pulau Pinang',
        'Perlis' => 'Perlis',

    ],['prompt'=>'Please Select State'])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-6 col-md-offset-3">
            <?= Html::submitButton(Yii::t('app', $model->isNewRecord ? 'Submit': 'Update'), ['class' => 'btn btn-block btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
