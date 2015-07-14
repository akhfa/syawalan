<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */

$this->title = 'Update Kehadiran: ' . ' ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kehadiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->user->isGuest){?>
        <h3>Access Forbidden</h3>
    <?php } else {?>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    <?php } ?>

</div>
