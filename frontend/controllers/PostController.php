<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Post;
use frontend\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\models\Komentar;
/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $postingan =  Post::find()
                    ->where(['IDPENGGUNA' => $_SESSION['id']])
                    ->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'postingan' => $postingan,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $dataKomentar = KOMENTAR::find()
                      ->where(['IDPOST' => $id])
                      ->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataKomentar' => $dataKomentar,
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post())) {
            $model->GAMBARPOST = UploadedFile::getInstance($model,'GAMBARPOST');
            $model->GAMBARPOST->saveAs(Yii::$app->basePath.'\web\fotopost'.'/'.$model->GAMBARPOST->baseName.'.'.$model->GAMBARPOST->extension);
            $model->GAMBARPOST = $model->GAMBARPOST->baseName.'.'.$model->GAMBARPOST->extension;
            $model->save();
            return $this->redirect(['view', 'id' => $model->IDPOST]);
            // return $this->goBack();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          // $model->GAMBARPOST = UploadedFile::getInstance($model,'GAMBARPOST');
          // $model->GAMBARPOST->saveAs(Yii::$app->basePath.'\web\fotopost'.'/'.$model->GAMBARPOST->baseName.'.'.$model->GAMBARPOST->extension);
          // $model->GAMBARPOST = $model->GAMBARPOST->baseName.'.'.$model->GAMBARPOST->extension;
          $model->save();
            return $this->redirect(['view', 'id' => $model->IDPOST]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
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
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionBuatkomen(){
        $model = new Komentar();
        $model->IDPENGGUNA = Yii::$app->request->get('idpengguna');
        $model->IDPOST = Yii::$app->request->get('idpost');
        $model->ISIKOMENTAR = Yii::$app->request->get('isikomen');
        $model->save();
        return $this->redirect(['view', 'id' => $model->IDPOST]);
    }
}
