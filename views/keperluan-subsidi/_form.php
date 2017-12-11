<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeperluanSubsidi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keperluan-subsidi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun_keperluan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sub_wilayah')->textInput() ?>

    <?= $form->field($model, 'fasa_tanaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bil_peladang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluasan_daftar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluasan_crf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grow_enhancer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baja_foliar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npk2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bajak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'racun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasiti_stor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
