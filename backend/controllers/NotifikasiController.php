<?php

namespace backend\controllers;

use Yii;
use backend\models\Notifikasi;
use backend\models\NotifikasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Tipenotifiikasi;
use backend\models\Pengguna;
use yii\helpers\ArrayHelper;
/**
 * NotifikasiController implements the CRUD actions for Notifikasi model.
 */
class NotifikasiController extends Controller
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
     * Lists all Notifikasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NotifikasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataNotifikasi = Notifikasi::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataNotifikasi' => $dataNotifikasi,
        ]);
    }

    /**
     * Displays a single Notifikasi model.
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
     * Creates a new Notifikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Notifikasi();
        $tipeNotifikasi = Tipenotifiikasi::find()->all();
        $tipeNotifikasi = ArrayHelper::map($tipeNotifikasi,'IDTYPENOTIFIKASI','TIPENOTIFIKASI');

        $pengguna = Pengguna::find()->all();
        $pengguna = ArrayHelper::map($pengguna,'IDPENGGUNA','NAMA');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDNOTIFIKASI]);
        }

        return $this->render('create', [
            'model' => $model,
            'tipeNotifikasi' => $tipeNotifikasi,
            'pengguna' => $pengguna,
        ]);
    }

    /**
     * Updates an existing Notifikasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tipeNotifikasi = Tipenotifiikasi::find()->all();
        $tipeNotifikasi = ArrayHelper::map($tipeNotifikasi,'IDTYPENOTIFIKASI','TIPENOTIFIKASI');
        $pengguna = Pengguna::find()->all();
        $pengguna = ArrayHelper::map($pengguna,'IDPENGGUNA','NAMA');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDNOTIFIKASI]);
        }

        return $this->render('update', [
            'model' => $model,
            'tipeNotifikasi' => $tipeNotifikasi,
            'pengguna' => $pengguna,
        ]);
    }

    /**
     * Deletes an existing Notifikasi model.
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
     * Finds the Notifikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notifikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Notifikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
