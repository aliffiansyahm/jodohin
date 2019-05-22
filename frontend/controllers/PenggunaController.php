<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pengguna;
use frontend\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenggunaController implements the CRUD actions for Pengguna model.
 */
class PenggunaController extends Controller
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
     * Lists all Pengguna models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenggunaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengguna model.
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
     * Creates a new Pengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pengguna();

        $model->NAMA = $_POST['name'];
        $model->EMAIL = $_POST['email'];
        $model->PASSWORD = $_POST['password'];

        if ($model->save()) {
            return $this->goBack();
        }

        // jangan diapa"in ya yg ini ... picturenya belum 
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // $model->NAMA = $_POST['name'];
            // $model->EMAIL = $_POST['email'];
            // $model->PASSWORD = $_POST['password'];

            // $model->FOTO = UploadedFile::getInstance($model, 'FOTO');
            
            // $model->FOTO->saveAs('uploads/' . $model->FOTO->baseName . '.' .$model->FOTO->extension);
            //   if ($model->FOTO && $model->validate()) {
            //     $model->FOTO->saveAs('upload/' . $model->FOTO->baseName . '.' .$model->FOTO->extension);
            //   }
            
            // $model->save();

            // return $this->redirect(['view', 'id' => $model->IDPENGGUNA]);
        // }
    }

    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
    /**
     * Updates an existing Pengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDPENGGUNA]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengguna model.
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

    public function actionLogin()
    {
        $model = new Pengguna();
        
        $nama = $_POST['name'];
        $password = $_POST['password'];

        $pengguna = Pengguna::find()
        ->where('NAMA', $nama);

        $_SESSION['login'] = true;
        $_SESSION['nama'] = $nama;
        
        if (!empty($pengguna)) {
            return $this->goBack();
        }

        // if ($model->load(Yii::$app->request->post())) {
        //     $pengguna = Pengguna::find()
        //     ->where('NAMA', $model->NAMA);
            
        //     $_SESSION['login'] = true;
        //     $_SESSION['nama'] = $model->NAMA;

        //     if (!empty($pengguna)) {
        //         return $this->goBack();
        //     }

        //     else {
        //         // belum dikasi validasi error, kalo semisal user ndak ada 
        //     } 
        // }

        // return $this->render('login', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Finds the Pengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengguna::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
