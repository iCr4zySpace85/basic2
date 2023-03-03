<?php

namespace app\controllers;

use app\models\Login;
use app\models\LoginSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LoginController implements the CRUD actions for Login model.
 */
class LoginController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Login models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LoginSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Login model.
     * @param string $email Email
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($email)
    {
        return $this->render('view', [
            'model' => $this->findModel($email),
        ]);
    }

    /**
     * Creates a new Login model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Login();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'email' => $model->email]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Login model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $email Email
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($email)
    {
        $model = $this->findModel($email);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'email' => $model->email]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Login model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $email Email
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($email)
    {
        $this->findModel($email)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Login model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $email Email
     * @return Login the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($email)
    {
        if (($model = Login::findOne(['email' => $email])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
