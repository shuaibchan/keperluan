<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KeperluanSubsidi */

$this->title = $model->id_keperluan;
$this->params['breadcrumbs'][] = ['label' => 'Keperluan Subsidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keperluan-subsidi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keperluan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keperluan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_keperluan',
            'tahun_keperluan',
            'id_sub_wilayah',
            'fasa_tanaman',
            'bil_peladang',
            'keluasan_daftar',
            'keluasan_crf',
            'npk',
            'urea',
            'grow_enhancer',
            'baja_foliar',
            'npk2',
            'bajak',
            'racun',
            'kapasiti_stor',
        ],
    ]) ?>

</div>
