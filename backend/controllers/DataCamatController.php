<?php

namespace backend\controllers;

use Yii;
use backend\models\DataCamat;
use backend\models\DataCamatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * DataCamatController implements the CRUD actions for DataCamat model.
 */
class DataCamatController extends Controller
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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

            'browse-images' => [
                'class' => 'bajadev\ckeditor\actions\BrowseAction',
                //'url' => '@browseimage/contents/',
                'url' => Yii::$app->urlManagerFrontEnd->baseUrl . '/uploads/camat/',
                'path' => '@uploads/camat/',
            ],
            'upload-images' => [
                'class' => 'bajadev\ckeditor\actions\UploadAction',
                //'url' => '@browseimage/contents/',
                'url' => Yii::$app->urlManagerFrontEnd->baseUrl . '/uploads/camat/',
                'path' => '@uploads/camat/',
            ],
        ];
    }

    /**
     * Lists all DataCamat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataCamatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataCamat model.
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
     * Creates a new DataCamat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new DataCamat();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_camat]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionCreate()
    {
        $model = new DataCamat();

        if ($model->load(Yii::$app->request->post())) { //ketika ditekan tombol simpan


            // $model->trans_ip = Yii::$app->getRequest()->getUserIP();

            if (!empty(UploadedFile::getInstance($model, 'foto_camat'))) {

                $model->foto_camat = UploadedFile::getInstance($model, 'foto_camat');

                $fileName = md5(date('Ymdhis')) . '.' . $model->foto_camat->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/camat');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->foto_camat->saveAs($locationPath . '/' . $fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/camat'); //jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->lokasi_foto = $locationUrl . '/' . $fileName;
                }
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id_camat]);
            }
        }
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id_camat]);
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataCamat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id_camat]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) { //ketika ditekan tombol simpan

            // $model->trans_ip = Yii::$app->getRequest()->getUserIP();

            if (!empty(UploadedFile::getInstance($model, 'foto_camat'))) {

                $model->foto_camat = UploadedFile::getInstance($model, 'foto_camat');

                $fileName = md5(date('Ymdhis')) . '.' . $model->foto_camat->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/camat');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->foto_camat->saveAs($locationPath . '/' . $fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/camat'); //jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->lokasi_foto = $locationUrl . '/' . $fileName;
                }
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id_camat]);
            }
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id_camat]);
        // }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataCamat model.
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
     * Finds the DataCamat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DataCamat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataCamat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
