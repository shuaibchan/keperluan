<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeperluanSubsidiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keperluan-subsidi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_keperluan') ?>

    <?= $form->field($model, 'tahun_keperluan') ?>

    <?= $form->field($model, 'id_sub_wilayah') ?>

    <?= $form->field($model, 'fasa_tanaman') ?>

    <?= $form->field($model, 'bil_peladang') ?>

    <?php // echo $form->field($model, 'keluasan_daftar') ?>

    <?php // echo $form->field($model, 'keluasan_crf') ?>

    <?php // echo $form->field($model, 'npk') ?>

    <?php // echo $form->field($model, 'urea') ?>

    <?php // echo $form->field($model, 'grow_enhancer') ?>

    <?php // echo $form->field($model, 'baja_foliar') ?>

    <?php // echo $form->field($model, 'npk2') ?>

    <?php // echo $form->field($model, 'bajak') ?>

    <?php // echo $form->field($model, 'racun') ?>

    <?php // echo $form->field($model, 'kapasiti_stor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
