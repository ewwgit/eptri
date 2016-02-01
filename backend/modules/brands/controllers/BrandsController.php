<?php

namespace app\modules\brands\controllers;

use Yii;
use backend\models\Brandsmaster;
use app\models\BrandsmasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AdminMaster;

/**
 * BrandsController implements the CRUD actions for Brandsmaster model.
 */
class BrandsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Brandsmaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BrandsmasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Brandsmaster model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Brandsmaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Brandsmaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Brand successfully Created");
            return $this->redirect(['view', 'id' => $model->brandId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Brandsmaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Brand successfully Updated");
            return $this->redirect(['view', 'id' => $model->brandId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Brandsmaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', 'Brand successfully Deleted');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Brandsmaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Brandsmaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Brandsmaster::findOne($id)) !== null) {
        	
        	$admincreatedModel= AdminMaster::findOne($model->createdBy);
        	
        	$adminupdatedModel= AdminMaster::findOne($model->updatedBy);
        	$model->createdBy = $admincreatedModel->username;
        	$model->updatedBy = $adminupdatedModel->username;
        	
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
