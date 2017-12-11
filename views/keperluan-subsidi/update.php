<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KeperluanSubsidi */

$this->title = 'Update Keperluan Subsidi: ' . $model->id_keperluan;
$this->params['breadcrumbs'][] = ['label' => 'Keperluan Subsidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keperluan, 'url' => ['view', 'id' => $model->id_keperluan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keperluan-subsidi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
