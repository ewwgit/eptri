<?php

namespace backend\modules\products\controllers;

use Yii;
use backend\models\Products;
use backend\models\ProductsSearch;
use backend\models\ProductNutrition;
use backend\models\Categories;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
    	$model = $this->findModel($id);
    	$model->nutritionInfo = ProductNutrition::find()->where(['productCode' => $model->productCode])->one();
    	
        return $this->render('view', ['model' => $model,]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		        $model = new Products();
		
		        if ($model->load(Yii::$app->request->post())) 
		        {
		        	 
					  date_default_timezone_set('Asia/Calcutta');
					  $model->createdDate =  date("Y-m-d H:i:s");
		        	  $model->updatedDate =  date("Y-m-d H:i:s");
		        	  $model->save();
		        	  
		        	 
		        	  Yii::$app->session->setFlash('success', "Product successfully Created");
		        	  return $this->redirect(['index']);
		        }else{
		            return $this->render('create', ['model' => $model,]);
		        }
    }
    
    
    public function actionCreatenew()
    {
    $model = new Products();
    $model->scenario = 'productsupload';
        if ($model->load(Yii::$app->request->post()) ) {
        	
       
        	$model->FileUpload = UploadedFile::getInstance($model, 'FileUpload');
        	$k=0;
        
        	if ( $model->FileUpload )
        	{
        		
        		$time = time();
        		$model->FileUpload->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension);
        		$model->FileUpload = realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension;
        
        		$handle = fopen($model->FileUpload, "r");
        		$i=0;
        		$m=0;
        		while (($fileop = fgetcsv($handle, 1000, ",")) !== false)
        		{
        			
        			if($i >= 1)
        			{
        				
        				/* products external images
        			    $model->externalFiles = file_get_contents($fileop[5]);
        				$find = ".'\'.";
        				$ent = str_replace ("/\\/","/",$fileop[5]);
        				$a = "\\";
        				$a = preg_replace('/\\\\/','/',$fileop[5]);
        				
        				$getstrpos = strripos($a,"/");
        				$imageName = substr($fileop[5],$getstrpos+1);
        				$time2 = time();
        				$img = realpath(Yii::$app->basePath).'/web/uploads/products/'.$time2.$imageName;
        				$fileimageUrl = 'uploads/products/'.$time2.$imageName;
        				file_put_contents($img, file_get_contents($fileop[5])); */
        				
        				
        				
        				/* $model->externalFiles = UploadedFile::getInstance(file_get_contents($fileop[5]));
        				$time2 = time();
        				$model->externalFiles->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time2. '.' . $model->FileUpload->extension);
        				$model->externalFiles = realpath(Yii::$app->basePath).'/csv/' .$time2. '.' . $model->FileUpload->extension; */
        				date_default_timezone_set('Asia/Calcutta');
        				$model->createdDate =  date("Y-m-d H:i:s");
        				$model->updatedDate =  date("Y-m-d H:i:s");
        				
        				try {
        					$userInfo = Yii::$app->db->createCommand()->insert('products', [
    			
        		'productCode' =>$fileop[0],
        		'productName' =>$fileop[1],
        		'categoryId' =>Categories::getCategoryId($fileop[2]),
        		'description' =>$fileop[3],
        		'status' => 'Active',
        		'createdDate' => $model->createdDate,
        		'updatedDate' => $model->updatedDate,
    	        ])->execute();
        					if($userInfo)
        					{
        						$m++;
        					}
        				} catch (\Exception $e) {
        					
        					
        					$duplicaterrors = $e->errorInfo[0];
        					if($duplicaterrors == 23000)
        					{
        						$k++;
        					}
        				}
        				
        		
    	        }
    	        
        			
        			
        		$i++;
        		
        		}
        		if($m > 0)
        		{
        		Yii::$app->getSession()->setFlash('success', 'Your are successfully Uploaded '.$m.' Products');
        	    }
        		if($k > 0)
        		{
        		Yii::$app->getSession()->setFlash('error', 'Your Trying to add '.$k.' duplicate records');
        		}
        		return $this->redirect ( ['createnew'] );
        		
        	}
        } else {
            
        	
        	return $this->render ('createfile', [
        			'model' => $model
        	] );
        }
    }
    
    public function actionNutritions()
    {
    $model = new ProductNutrition();
        
        if ($model->load(Yii::$app->request->post()) ) {
        	
       
        	$model->FileUpload = UploadedFile::getInstance($model, 'FileUpload');
        	$k=0;
        
        	if ( $model->FileUpload )
        	{
        		
        		$time = time();
        		$model->FileUpload->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension);
        		$model->FileUpload = realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension;
        
        		$handle = fopen($model->FileUpload, "r");
        		$i=0;
        		$m=0;
        		while (($fileop = fgetcsv($handle, 1000, ",")) !== false)
        		{
        			if($i >= 1)
        			{
        				try {
        		$userInfo = Yii::$app->db->createCommand()->insert('product_nutrition', [
    			
        		'productCode' =>$fileop[0],
        		'brandName' =>$fileop[1],
        		'Calories' =>$fileop[2],
        		'Saturated_Fat' =>$fileop[3],
        		'Trans_Fat' =>$fileop[4],
        		'Cholesterol' =>$fileop[5],
        		'Sodium' =>$fileop[6],
        		'Potassium' =>$fileop[7],
        		'Dietary_Fiber' =>$fileop[8],
        		'Sugars' =>$fileop[9],
        		'vitamin_A' =>$fileop[10],
        		'vitamin_C' =>$fileop[11],
        		'Calcium' =>$fileop[12],
        		'Iron' =>$fileop[13],
        		'Copper' =>$fileop[14],
        		'Folic_Acid' =>$fileop[15],
        		'Iodine' =>$fileop[16],
        		'Magnesium' =>$fileop[17],
        		'Niacin' =>$fileop[18],
        		'Phosphorus' =>$fileop[19],
        		'Riboflavin' =>$fileop[20],
        		'Thiamin' =>$fileop[21],
        		'vitamin_B12' =>$fileop[22],
        		'vitamin_B6' =>$fileop[23],
        		'vitamin_D' =>$fileop[24],
        		'vitamin_E' =>$fileop[25],
        		'Zinc' =>$fileop[26],
    	        ])->execute();
        		
    	        if($userInfo)
    	        {
    	        	$m++;
    	        }
        		
    	        } catch (\Exception $e) {
    	        	 
    	        	 
    	        	$duplicaterrors = $e->errorInfo[0];
    	        	if($duplicaterrors == 23000)
    	        	{
    	        		$k++;
    	        	}
    	        }
        			}
        		$i++;
        		
        		}
        		
        		
        		if($m > 0)
        		{
        			Yii::$app->getSession()->setFlash('success', 'Your  are successfully Updated  '.$m.' Products Nutrtions');
        		}
        		if($k > 0)
        		{
        			Yii::$app->getSession()->setFlash('error', 'Your Trying to add '.$k.' duplicate records');
        		}
        		return $this->redirect ( ['nutritions'] );
        		
        	}
        } else {
            
        	
        	return $this->render ('nutrition', [
        			'model' => $model
        	] );
        }
    	
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
    	
    	  			 $model = $this->findModel($id);
			     	if ($model->load(Yii::$app->request->post()))
			        {
			        	
			           date_default_timezone_set('Asia/Calcutta');
			   		   $model->updatedDate =  date("Y-m-d H:i:s"); 
			           if($model->save())
			             {
			             	Yii::$app->session->setFlash('success', "Product successfully Updated");
			             	 return $this->redirect(['view', 'id' => $model->id]);
			            }
			        }else{
			            return $this->render('update', [
			                'model' => $model,
			            ]);
			        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        
        Yii::$app->session->setFlash('success', 'Product successfully Deleted');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
}
