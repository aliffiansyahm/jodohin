<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pertanyaan;
use frontend\models\PertanyaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PertanyaanController implements the CRUD actions for Pertanyaan model.
 */
class PertanyaanController extends Controller
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
     * Lists all Pertanyaan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PertanyaanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataPertanyaan = Pertanyaan::find()->all();

        return $this->render('welcome', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataPertanyaan' => $dataPertanyaan,
        ]);
    }

    public function actionKerjakan()
    {
        $searchModel = new PertanyaanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataPertanyaan = Pertanyaan::find()->all();


        return $this->render('halamanPertanyaan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataPertanyaan' => $dataPertanyaan,
        ]);
    }

    public function actionHitung()
    {
        for ($i = 0; $i < 4 ; $i++){
            $hasil[$i] = 0;
        }
        for ($i = 0; $i < 19 ; $i++){
            $jawab[$i] = 0;
        }

        $jawab[0] = Yii::$app->request->get('jawaban0');
        $jawab[1] = Yii::$app->request->get('jawaban1');
        $jawab[2] = Yii::$app->request->get('jawaban2');
        $jawab[3] = Yii::$app->request->get('jawaban3');
        $jawab[4] = Yii::$app->request->get('jawaban4');
        $jawab[5] = Yii::$app->request->get('jawaban5');
        $jawab[6] = Yii::$app->request->get('jawaban6');
        $jawab[7] = Yii::$app->request->get('jawaban7');
        $jawab[8] = Yii::$app->request->get('jawaban8');
        $jawab[9] = Yii::$app->request->get('jawaban9');
        $jawab[10] = Yii::$app->request->get('jawaban10');
        $jawab[11] = Yii::$app->request->get('jawaban11');
        $jawab[12] = Yii::$app->request->get('jawaban12');
        $jawab[13] = Yii::$app->request->get('jawaban13');
        $jawab[14] = Yii::$app->request->get('jawaban14');
        $jawab[15] = Yii::$app->request->get('jawaban15');
        $jawab[16] = Yii::$app->request->get('jawaban16');
        $jawab[17] = Yii::$app->request->get('jawaban17');
        $jawab[18] = Yii::$app->request->get('jawaban18');
        $jawab[19] = Yii::$app->request->get('jawaban19');

        for ($i=0; $i < 4; $i++) {
            for ($j=0; $j < 19; $j++) {
                if($jawab[$j] == ($i+1)){
                    $hasil[$i] = $hasil[$i] + 1;
                }
            }
        }
        $tipe=0;
        $n=0;
        for ($i=0; $i < 4; $i++) {
            if($n < $hasil[$i])
                $n = $i;
        }

        $_SESSION['idkepribadian']=$n;

        return $this->redirect('../pengguna/personality');


        // return $this->render('skor', [
        //     'dataSkor' => $hasil,
        //     'tipe' => $n,
        // ]);

    }
    /**
     * Displays a single Pertanyaan model.
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
     * Creates a new Pertanyaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pertanyaan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDPERTANYAAN]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pertanyaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDPERTANYAAN]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pertanyaan model.
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

    public function actionSkor(){

        return $this->render('skor');
    }

    /**
     * Finds the Pertanyaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pertanyaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pertanyaan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
