<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KeperluanSubsidi */

$this->title = 'Create Keperluan Subsidi';
$this->params['breadcrumbs'][] = ['label' => 'Keperluan Subsidis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keperluan-subsidi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
