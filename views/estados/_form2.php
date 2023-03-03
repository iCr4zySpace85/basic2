<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Estados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estados-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput() ?>

    <div class="form-group">
        <br><?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
