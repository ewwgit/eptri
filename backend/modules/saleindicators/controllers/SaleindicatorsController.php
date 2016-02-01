<?php

namespace app\modules\saleindicators\controllers;

use Yii;
use backend\models\SaleIndicators;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AdminMaster;

/**
 * SaleindicatorsController implements the CRUD actions for SaleIndicators model.
 */
class SaleindicatorsController extends Controller
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
     * Lists all SaleIndicators models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SaleIndicators::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SaleIndicators model.
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
     * Creates a new SaleIndicators model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SaleIndicators();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Sale Indicator successfully Created");
            return $this->redirect(['view', 'id' => $model->saleindicatorId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SaleIndicators model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Sale Indicator successfully Updated");
            return $this->redirect(['view', 'id' => $model->saleindicatorId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SaleIndicators model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', "Sale Indicator successfully Deleted");
        return $this->redirect(['index']);
    }

    /**
     * Finds the SaleIndicators model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SaleIndicators the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
    	
        if (($model = SaleIndicators::findOne($id)) !== null) {
        	
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
