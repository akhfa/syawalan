<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */

$this->title = 'Create Kehadiran';
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kehadiran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->user->isGuest){?>
        <h3>Kesalahan pada pengisian form. Silahkan coba lagi</h3>
        <?= Html::a('Back', ['/'], ['class' => 'btn btn-primary']) ?>
    <?php } else {?>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    <?php } ?>

</div>
