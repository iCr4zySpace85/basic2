<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Login $model */

$this->title = $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="login-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'email' => $model->email], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'email' => $model->email], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            'clave',
            'tipoUsuario',
        ],
    ]) ?>

</div>
