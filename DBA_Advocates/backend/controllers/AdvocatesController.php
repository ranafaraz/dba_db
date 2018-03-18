<?php

namespace backend\controllers;

use Yii;
use backend\models\Advocates;
use backend\models\AdvocatesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\ForbiddenHttpException; 

/**
 * AdvocatesController implements the CRUD actions for Advocates model.
 */
class AdvocatesController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Advocates models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdvocatesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Advocates model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(Yii::$app->user->can('view-advocate')){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
        }else{
            throw new ForbiddenHttpException;
        }   
    }

    /**
     * Creates a new Advocates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Advocates();
        if(Yii::$app->user->can('create-advocate')){
            if ($model->load(Yii::$app->request->post())) {

            //get the instance of the upload file
                $imageName = $model->adv_Name.'_photo';
                $model->adv_Photo = UploadedFile::getInstance($model,'adv_Photo');
                $model->adv_Photo->saveAs('uploads/'.$imageName.'.'.$model->adv_Photo->extension);

                $imagename = $model->adv_Name.'_CNIC';
                $model->adv_Image_CNIC = UploadedFile::getInstance($model,'adv_Image_CNIC');
                $model->adv_Image_CNIC->saveAs('uploads/'.$imagename.'.'.$model->adv_Image_CNIC->extension);

                $image = $model->adv_Name.'_license';
                $model->adv_Image_License = UploadedFile::getInstance($model,'adv_Image_License');
                $model->adv_Image_License->saveAs('uploads/'.$image.'.'.$model->adv_Image_License->extension);

                //save the path in the db column
                $model->adv_Photo = 'uploads/'.$imageName.'.'.$model->adv_Photo->extension;
                $model->adv_Image_CNIC = 'uploads/'.$imagename.'.'.$model->adv_Image_CNIC->extension;
                $model->adv_Image_License = 'uploads/'.$image.'.'.$model->adv_Image_License->extension;
            
                $model->save();
                return $this->redirect(['view', 'id' => $model->adv_id]);
            }

            return $this->render('create', [
            'model' => $model,
            ]);
        }else{
            throw new ForbiddenHttpException;
        }        
    }

    /**
     * Updates an existing Advocates model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if(Yii::$app->user->can('update-advocate')){
            if ($model->load(Yii::$app->request->post())) {
            //get the instance of the upload file
                $imageName = $model->adv_Name.'_photo';
                $model->adv_Photo = UploadedFile::getInstance($model,'adv_Photo');
                $model->adv_Photo->saveAs('uploads/'.$imageName.'.'.$model->adv_Photo->extension);

                $imagename = $model->adv_Name.'_CNIC';
                $model->adv_Image_CNIC = UploadedFile::getInstance($model,'adv_Image_CNIC');
                $model->adv_Image_CNIC->saveAs('uploads/'.$imagename.'.'.$model->adv_Image_CNIC->extension);

                $image = $model->adv_Name.'_license';
                $model->adv_Image_License = UploadedFile::getInstance($model,'adv_Image_License');
                $model->adv_Image_License->saveAs('uploads/'.$image.'.'.$model->adv_Image_License->extension);

            //save the path in the db column
            $model->adv_Photo = 'uploads/'.$imageName.'.'.$model->adv_Photo->extension;
            $model->adv_Image_CNIC = 'uploads/'.$imagename.'.'.$model->adv_Image_CNIC->extension;
            $model->adv_Image_License = 'uploads/'.$image.'.'.$model->adv_Image_License->extension;

            $model->save();
            return $this->redirect(['view', 'id' => $model->adv_id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
        }else{
            throw new ForbiddenHttpException;
        }   
    }

    /**
     * Deletes an existing Advocates model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('delete-advocate')){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
        }else{
            throw new ForbiddenHttpException;
        }   
    }

    /**
     * Finds the Advocates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Advocates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Advocates::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
