<?php

namespace backend\modules\membershipdetails\controllers;

use Yii;
use backend\models\Membershipdetails;
use backend\models\MembershipdetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MembershipdetailsController implements the CRUD actions for Membershipdetails model.
 */
class MembershipdetailsController extends Controller
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
     * Lists all Membershipdetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MembershipdetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Membershipdetails model.
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
     * Creates a new Membershipdetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Membershipdetails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	
        	//$id = $model->MemId;
        
        	Yii::$app->session->setFlash('success', "Membership successfully Created");
		 return $this->redirect(['view', 'id' => $model->MemId]);
		 
        } else {
            return $this->render('create', ['model' => $model,]);
        }
    }

    /**
     * Updates an existing Membershipdetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Membership successfully Updated");
            return $this->redirect(['view', 'id' => $model->MemId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Membershipdetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', "Membership successfully Deleted");
        return $this->redirect(['index']);
    }

    /**
     * Finds the Membershipdetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Membershipdetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Membershipdetails::findOne($id)) !== null) {
		return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
