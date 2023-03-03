<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrarHelper;
use app\models\Paises;

/** @var yii\web\View $this */
/** @var app\models\Estados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="estados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput() ?>
    <?php /*
    $paises = ArrarHelper::map(Paises::find()->all(), 'id', 'nombre');

    echo $form->field($model, 'pais')->dropDownList(
    	$paises,
    	[
    		'prompt'=>'Seleccione un pais',
    	]
    );
	*/
    ?>
    <div class="form-group">
        <br><?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
