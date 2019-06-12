<?php

namespace backend\controllers;

use Yii;
use backend\models\Hubungan;
use backend\models\HubunganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Pengguna;
use backend\models\Tipestatus;
use yii\helpers\ArrayHelper;

/**
 * HubunganController implements the CRUD actions for Hubungan model.
 */
class HubunganController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['get'],
                ],
            ],
        ];
    }

    /**
     * Lists all Hubungan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HubunganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataHubungan = Hubungan::find()->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataHubungan' => $dataHubungan,
        ]);
    }

    /**
     * Displays a single Hubungan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Hubungan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hubungan();

        $pengguna = Pengguna::find()->all();
        $pengguna = ArrayHelper::map($pengguna,'IDPENGGUNA','NAMA');

        $tipeHubungan = Tipestatus::find()->all();
        $tipeHubungan = ArrayHelper::map($tipeHubungan,'IDSTATUS','NAMASTATUS');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDHUBUNGAN]);
        }

        return $this->render('create', [
            'model' => $model,
            'pengguna' => $pengguna,
            'tipeHubungan' => $tipeHubungan,
        ]);
    }

    /**
     * Updates an existing Hubungan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $pengguna = Pengguna::find()->all();
        $pengguna = ArrayHelper::map($pengguna,'IDPENGGUNA','NAMA');

        $tipeHubungan = Tipestatus::find()->all();
        $tipeHubungan = ArrayHelper::map($tipeHubungan,'IDSTATUS','NAMASTATUS');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDHUBUNGAN]);
        }

        return $this->render('update', [
            'model' => $model,
            'pengguna' => $pengguna,
            'tipeHubungan' => $tipeHubungan,
        ]);
    }

    /**
     * Deletes an existing Hubungan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Hubungan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hubungan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hubungan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
