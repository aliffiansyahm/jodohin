<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pesan;
use frontend\models\PesanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Pengguna;
use backend\models\Notifikasi;
use backend\models\Tipepesan;
use backend\models\Chat;
use yii\helpers\ArrayHelper;

/**
 * PesanController implements the CRUD actions for Pesan model.
 */
class PesanController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pesan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PesanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSimulasi()
    {
        $dataPesan = Pesan::find()->all();
        $model = new Chat();

        $pengguna = Pengguna::find()->all();
        //$pengguna = ArrayHelper::map($pengguna,'IDPENGGUNA','NAMA');

        return $this->render('pilihuser', [
            'model' => $model,
            'pengguna' => $pengguna,
        ]);
    }

    public function actionGetsesi(){
        $_SESSION['pengirim'] = Yii::$app->request->get('pengirim');
        $_SESSION['penerima'] = Yii::$app->request->get('penerima');
        // echo $_SESSION['pengirim'];
        // echo $_SESSION['penerima'];
        return $this->redirect('chat');
    }

    public function actionLoadchat($id){
      $_SESSION['pengirim'] =  $_SESSION['id'];
      echo $_SESSION['pengirim'];
      $_SESSION['penerima'] = $id;
      echo $_SESSION['penerima'];
      return $this->redirect('chat');
    }

    public function actionChat()
    {
        $model = new Pesan();
        $dataPesan = Pesan::find()
        ->where(['IDPENGIRIMPESAN' => $_SESSION['pengirim'],'IDPENERIMAPESAN' => $_SESSION['penerima']])
        ->orWhere(['IDPENGIRIMPESAN' => $_SESSION['penerima'],'IDPENERIMAPESAN' => $_SESSION['pengirim']])
         // ->where(['and',
         //     ['IDPENGIRIMPESAN' => $_SESSION['pengirim']],
         //     ['IDPENERIMAPESAN'=> $_SESSION['penerima']]
         // ])
         // ->orWhere(['and',
         // ['IDPENGIRIMPESAN' => $_SESSION['penerima']],
         // ['IDPENERIMAPESAN'=> $_SESSION['pengirim']]
         // ])
         ->all();

         if ($model->load(Yii::$app->request->post()) && $model->save()) {
           $notif = new Notifikasi();
           $notif->IDPENGIRIMNOTIF = $_SESSION['id'];
           $notif->IDPENERIMANOTIF = $_SESSION['penerima'];
           $notif->IDTYPENOTIFIKASI = 1;
           $notif->ISI = "Pesan Baru Diterima";
           $notif->save();
             return $this->redirect('chat');
         }

        return $this->render('chatwindow', [
            'model' => $model,
            'dataPesan' => $dataPesan,
        ]);
    }

    /**
     * Displays a single Pesan model.
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
     * Creates a new Pesan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pesan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDPESAN]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pesan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDPESAN]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pesan model.
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
     * Finds the Pesan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pesan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pesan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
