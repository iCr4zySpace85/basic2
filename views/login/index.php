<?php

use app\models\Login;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LoginSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Logins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Login', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'clave',
            'tipoUsuario',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Login $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'email' => $model->email]);
                 }
            ],
        ],
    ]); ?>


</div>
