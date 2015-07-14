<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */

$this->title = $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kehadiran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no',
            'nama',
            'alamat:ntext',
            'hp',
            'angkatan',
            'created',
        ],
    ]) ?>

    <?= Html::a('Back', ['/'], ['class' => 'btn btn-primary']) ?>

</div>
