<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EstadosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php //= $form->field($model, 'pais') ?>
<br>
    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?php //= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
