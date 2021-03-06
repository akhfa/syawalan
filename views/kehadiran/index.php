<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KehadiranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kehadirans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kehadiran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->user->isGuest){?>
        <h3>Access Forbidden</h3>
    <?php } else {?>
        <p>
            <?= Html::a('Create Kehadiran', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'no',
                'nama',
                'alamat:ntext',
                'hp',
                'bbm',
                'line',
                'whatsapp',
                'angkatan',
                'created',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php } ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

</div>
