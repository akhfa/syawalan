<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kehadiran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kehadiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama*'])->label(false) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6, 'placeholder' => 'Alamat'])->label(false) ?>

    <?= $form->field($model, 'hp')->textInput(['maxlength' => true, 'placeholder' => 'Nomor HP*'])->label(false) ?>

    <?= $form->field($model, 'bbm')->textInput(['maxlength' => true, 'placeholder' => 'Pin BBM'])->label(false) ?>

    <?= $form->field($model, 'line')->textInput(['maxlength' => true, 'placeholder' => 'ID Line'])->label(false) ?>

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Whatsapp'])->label(false) ?>

    <?php
    $array = array();
    for($i = 1991; $i < 2016 ; $i++)
    {
        array_push($array, array($i => $i));
    }
    ?>

    <?= $form->field($model, 'angkatan')->dropDownList($array, ['prompt'=>'Angkatan Pensiun Dewan*'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
