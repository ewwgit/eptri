<?php

namespace app\modules\units\controllers;

use Yii;
use backend\models\Units;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AdminMaster;


/**
 * UnitsController implements the CRUD actions for Units model.
 */
class UnitsController extends Controller
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
     * Lists all Units models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Units::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Units model.
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
     * Creates a new Units model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Units();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Unit successfully Created");
            return $this->redirect(['view', 'id' => $model->unitId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Units model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	
        	Yii::$app->getSession()->setFlash('success', [
        			'type' => 'success',
        			'duration' => 5000,
        			'icon' => 'fa fa-users',
        			'message' => 'Successfully Updated',
        	]);
        	Yii::$app->session->setFlash('success', "Unit successfully Updated");
            return $this->redirect(['view', 'id' => $model->unitId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Units model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', "Unit successfully Deleted");
        return $this->redirect(['index']);
    }

    /**
     * Finds the Units model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Units the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Units::findOne($id)) !== null) {
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
