<?php

namespace app\modules\productsbrands\controllers;

use Yii;
use backend\models\ProductsBrands;
use backend\models\Products;
use backend\models\Brandsmaster;
use backend\models\ProductsBrandsSearch;
use backend\models\ProductNutrition;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsbrandsController implements the CRUD actions for ProductsBrands model.
 */
class ProductsbrandsController extends Controller
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
     * Lists all ProductsBrands models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsBrandsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductsBrands model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
    	$model = $this->findModel($id);
    	$productsInfo = Products::getProductCode($model->productId);
    	
    	$brandName = Brandsmaster::getBrandName($model->brandId);
    	$productCode = $productsInfo['productCode'];
    	$model->productId = $productsInfo['productName'];
    	$model->brandId = $brandName;
    	$model->nutritionInfo = ProductNutrition::find()->where(['productCode' => $productCode,'brandName'=> $brandName])->one();
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new ProductsBrands model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductsBrands();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model,'file');
           
            if($model->file)
            {
        	$imageName = time().$model->file->baseName;
        	$model->file->saveAs('uploads/products/'.$imageName.'.'.$model->file->extension );
        	$model->productImage = 'uploads/products/'.$imageName.'.'.$model->file->extension; 
            }
            else {
            	$model->file = '';
            }
        	$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    
    public function actionCreatenew()
    {
    	$model = new ProductsBrands();
    	$model->scenario = 'productsbrandsupload';
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
    
    					 /* products external images */
    					 $model->externalFiles = file_get_contents($fileop[2]);
    					 $find = ".'\'.";
    					 $ent = str_replace ("/\\/","/",$fileop[2]);
    					 $a = "\\";
    					 $a = preg_replace('/\\\\/','/',$fileop[2]);
    
    					 $getstrpos = strripos($a,"/");
    					 $imageName = substr($fileop[2],$getstrpos+1);
    					 $time2 = time();
    					 $img = realpath(Yii::$app->basePath).'/web/uploads/products/'.$time2.$imageName;
    					 $fileimageUrl = 'uploads/products/'.$time2.$imageName;
    					 file_put_contents($img, file_get_contents($fileop[2])); 
    
    
    
    					/* $model->externalFiles = UploadedFile::getInstance(file_get_contents($fileop[5]));
    					 $time2 = time();
    					 $model->externalFiles->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time2. '.' . $model->FileUpload->extension);
    					 $model->externalFiles = realpath(Yii::$app->basePath).'/csv/' .$time2. '.' . $model->FileUpload->extension; */
    					date_default_timezone_set('Asia/Calcutta');
    					$model->createdDate =  date("Y-m-d H:i:s");
    					$model->updatedDate =  date("Y-m-d H:i:s");
    
    					try {
    						$productId = Products::getProductId($fileop[0]);
    						$brandId = Brandsmaster::getBrandId($fileop[1]);
    						$userInfo = Yii::$app->db->createCommand()->insert('products_brands', [
    								 
    								'productId' =>$productId['id'],
    								'brandId' =>$brandId['brandId'],
    								'productImage' => $fileimageUrl,
    								'status' => 'Active',
    								'createdBy' => Yii::$app->user->identity->id,
    								'updatedBy' => Yii::$app->user->identity->id,
    								'createdDate' => $model->createdDate,
    								'updatedDate' => $model->updatedDate,
    								'Ipaddress' => $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']),
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

    /**
     * Updates an existing ProductsBrands model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
        	$model->file = UploadedFile::getInstance($model,'file');
        	if($model->file)
        	{
        	$imageName = time().$model->file->baseName;
        	$model->file->saveAs('uploads/products/'.$imageName.'.'.$model->file->extension );
        	$model->productImage = 'uploads/products/'.$imageName.'.'.$model->file->extension;
        	}
        	else 
        	{
        		$model->file = $model->productupdateImage;
        	}
        	$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProductsBrands model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductsBrands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductsBrands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductsBrands::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
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
}
