<?php

namespace app\controllers;

use Yii;
use app\models\Rest;
use app\models\searchRest;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class RestController extends Controller
{
    // Поведение . Удаление только методом post
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

  // Метод главной страница
    public function actionIndex()
    {
        $searchModel = new searchRest();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    // Метод страницы rest
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    //Метод стариницы добавления
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

    // метод страницы изменения
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

    // метод удаления
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    // вызов из БД через модель строку по id
    protected function findModel($id)
    {
        if (($model = Rest::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
