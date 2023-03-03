<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Paises $model */

$this->title = 'Crear Paises';
$this->params['breadcrumbs'][] = ['label' => 'Paises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paises-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
