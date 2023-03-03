<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Login $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="login-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoUsuario')->dropDownList([ 'Administrador' => 'Administrador', 'Usuario' => 'Usuario', ], ['prompt' => 'Seleccione un tipo de usuario']) ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
