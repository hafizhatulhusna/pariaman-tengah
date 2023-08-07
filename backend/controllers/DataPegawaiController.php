<?php

namespace backend\controllers;

use Yii;
use backend\models\DataPegawai;
use backend\models\DataPegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * DataPegawaiController implements the CRUD actions for DataPegawai model.
 */
class DataPegawaiController extends Controller
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
     * Lists all DataPegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataPegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataPegawai model.
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
     * Creates a new DataPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataPegawai();

        $model->skpd = '025 -- KECAMATAN PARIAMAN TENGAH (OPD)';
        $model->satker = '022 -- KECAMATAN PARIAMAN TENGAH (OPD)';

        if ($model->load(Yii::$app->request->post())) {

            $model->create_by = Yii::$app->User->id;
            $model->create_at = date('Y-m-d H:i:s');

            if (!empty(UploadedFile::getInstance($model, 'upload_foto'))) {

                $model->upload_foto = UploadedFile::getInstance($model, 'upload_foto');

                $fileName = md5(date('Ymdhis')) . '.' . $model->upload_foto->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/fotopegawai');
                // print_r($locationPath);

                FileHelper::createDirectory($locationPath);

                if ($model->upload_foto->saveAs($locationPath . '/' . $fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/fotopegawai'); //jangan lupa untuk menambahkan tempat lokasi file nya sama dengan locationpath nya

                    $model->lokasi_foto = $locationUrl . '/' . $fileName;
                }
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id_pegawai]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->skpd = '025 -- KECAMATAN PARIAMAN TENGAH (OPD)';
        $model->satker = '022 -- KECAMATAN PARIAMAN TENGAH (OPD)';

        if ($model->load(Yii::$app->request->post())) { //ketika ditekan tombol simpan

            $model->update_by = Yii::$app->User->id;
            $model->update_at = date('Y-m-d H:i:s');

            if (!empty(UploadedFile::getInstance($model, 'upload_foto'))) {

                $model->upload_foto = UploadedFile::getInstance($model, 'upload_foto');

                $fileName = md5(date('Ymdhis')) . '.' . $model->upload_foto->extension;
                //nama file bisa d tambahkan md5 untuk dienkripsi

                $locationPath = Yii::getAlias('@uploads/fotopegawai');

                FileHelper::createDirectory($locationPath);

                if ($model->upload_foto->saveAs($locationPath . '/' . $fileName)) {

                    $locationUrl = Yii::getAlias('@browseimage/fotopegawai');

                    $model->lokasi_foto = $locationUrl . '/' . $fileName;
                }
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id_pegawai]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataPegawai model.
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
     * Finds the DataPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DataPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataPegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
