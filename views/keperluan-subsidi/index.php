<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KeperluanSubsidiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keperluan Subsidis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keperluan-subsidi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keperluan Subsidi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_keperluan',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
