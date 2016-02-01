<?php

namespace app\modules\staticpages\controllers;

use Yii;
use app\models\StaticPages;
use app\models\StaticpagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AdminMaster;

/**
 * StaticController implements the CRUD actions for Staticpages model.
 */
class StaticController extends Controller
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
     * Lists all Staticpages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaticpagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Staticpages model.
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
     * Creates a new Staticpages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaticPages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Statice Page successfully Created");
            return $this->redirect(['index', 'id' => $model->staticId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Staticpages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "Static Page successfully Updated");
            return $this->redirect(['index', 'id' => $model->staticId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Staticpages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
		
        Yii::$app->session->setFlash('success', "Static Page successfully Deleted");
        return $this->redirect(['index']);
    }

    /**
     * Finds the Staticpages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Staticpages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StaticPages::findOne($id)) !== null) {
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
