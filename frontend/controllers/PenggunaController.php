<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pengguna;
use frontend\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use  yii\web\Session;

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

        $model->NAMA = $_POST['first_name'].$_POST['last_name'];
        $model->EMAIL = $_POST['email'];
        $model->PASSWORD = $_POST['password'];
        $model->TANGGALLAHIR = date('Y-m-d', strtotime($_POST['datetimepicker']));
        $model->JENISKELAMIN = $_POST['gender'];


        if ($model->save() && isset($_POST['optionsCheckboxes'])) {
            return $this->redirect('../site/landing');
        }
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
        // echo Yii::getAlias('@basePath');
        $model = $this->findModel($id);

        if (Yii::$app->request->post()){
            $foto = UploadedFile::getInstanceByName('FOTO');

            $model->FOTO = $foto;
            $model->FOTO->saveAs(Yii::getAlias('@filePath'). "\profile\\" . $model->FOTO->baseName . '.' .$model->FOTO->extension);
            $model->FOTO = $model->FOTO->baseName.'.'.$model->FOTO->extension;


            // if ($model->FOTO) {
            //     $model->FOTO->saveAs("Yii::getAlias('@basePath')" . $model->FOTO->baseName . '.' .$model->FOTO->extension);
            //     $model->FOTO = $model->FOTO->baseName.'.'.$model->FOTO->extension;
            // }

            if($model->save()){
                return $this->redirect('../profile/index');
            }else{
                echo "gagal";
            }




        if ($model->save(false)) {
            return $this->redirect('../profile/index');
        }else {

        }
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
        //session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $pengguna =  Pengguna::find()
        ->where(['EMAIL' => $email,
                'PASSWORD' => $password])
        ->one();

        $session  = Yii::$app->session;
        //$session->open();
        $session['login'] = true;
        $session['nama'] = $pengguna['NAMA'];
        $session['id'] = $pengguna['IDPENGGUNA'];
        $session['email'] = $email;
        $session['foto'] = $pengguna['FOTO'];
        $session['idkepribadian'] = $pengguna['IDKEPRIBADIAN'];
        $session['jeniskelamin'] = $pengguna['JENISKELAMIN'];
        //$session->close();
        if (!empty($pengguna) && isset($session)) {
            // print_r($_SESSION);
            return $this->redirect('../profile/index');
        //   return $this->redirect('../site/index');
        }else {
          echo "Gagal masuk";
        }

    }


    public function actionKeluar(){
        $session  = Yii::$app->session;
        $session->removeAll();
        //print_r($_SESSION);
        return $this->redirect('../site/landing');
    }

    public function actionProfile(){
        return $this->render('profile');
    }

    public function actionPersonality(){
        $model = $this->findModel($_SESSION['id']);

        $model->IDKEPRIBADIAN = $_SESSION['idkepribadian'];

        if ($model->save(false)) {
            // echo $model->IDKEPRIBADIAN;
            return $this->redirect('../pertanyaan/skor');
        } else
            echo "gagal";
    }

    public function actionProfilepictures($id)
    {
        $model = $this->findModel($id);
        // $model->FOTO = $_POST['profilepicture'];

        if (Yii::$app->request->isPost) {
            $model->FOTO = UploadedFile::getInstance($model, 'FOTO');


        // $model->FOTO = UploadedFile::getInstanceByName('profilepicture');
        if (empty($model->FOTO)) {
            echo "gagal";
        }else {

        // $model->FOTO->saveAs('uploads/' . $model->FOTO->baseName . '.' .$model->FOTO->extension);
        if ($model->FOTO && $model->validate()) {
            $model->FOTO->saveAs('upload/' . $model->FOTO->baseName . '.' .$model->FOTO->extension);
        }

        if ($model->save()) {
            return $this->redirect('../profile/index');
        }
    }}
    }

    public function actionFotoheader($id){
        $model = $this->findModel($id);
        
        if (Yii::$app->request->isPost) {
            $foto = UploadedFile::getInstanceByName('FOTO');

            $model->FOTOHEADER = $foto;
            $model->FOTOHEADER->saveAs(Yii::getAlias('@filePath'). "\header\\" . $model->FOTOHEADER->baseName . '.' .$model->FOTOHEADER->extension);
            $model->FOTOHEADER = $model->FOTOHEADER->baseName.'.'.$model->FOTOHEADER->extension;
            if ($model->save()) {
                return $this->redirect('../profile/index');
            }
        } 

        return $this->render('update', [
            'model' => $model,
        ]);
        

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
