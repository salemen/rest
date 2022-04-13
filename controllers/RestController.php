<?php

namespace app\controllers;

use Yii;
use app\models\Rest;
use app\models\searchRest;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RestController implements the CRUD actions for Rest model.
 */
class RestController extends Controller
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
     * Lists all Rest models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new searchRest();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    
    public function actionCreate()
    {
        
        $rest = Yii::$app->request->post('Rest');
        $model = new Rest();
        if (!empty($rest)){       
            $model->name = $rest['name'];
            $model->address = $rest['address'];       
            $date = date("Y-m-d H:i:s");
            $model->created_at = $date;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $rest = Yii::$app->request->post('Rest');
    var_dump($model);
        if ($rest){
            $model->name = $rest['name'];
            $model->address = $rest['address'];       
            $date = date("Y-m-d H:i:s");
            $model->updatet_at = $date;
            $model->created_at = $model->created_at;
            $model->update();
         
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Rest::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
