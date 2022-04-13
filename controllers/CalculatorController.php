<?php


namespace app\controllers;


class CalculatorController
{
    public function actionCalculator()
    {
        $meaning = Yii::$app->request->post('calc'); // принимаем значения из формы калькулятора
        if($meaning){
            if($meaning['one'] === 0 || $meaning['two'] === 0){ // проверяем есть ли ноль
                $summ = 0;
                $model = new DynamicModel(['one', 'two','summ']);
                $model->summ = $summ;
                return $this->render(compact('model'), 'calculator');
            }else {
                $summ = $meaning['one']/(1/$meaning['two']); // считаем
                $model = new DynamicModel(['one', 'two','summ']);
                $model->summ = $summ;
                return $this->render(compact('model'), 'calculator'); // возвращаем в форму
            }
        }else{
            $model = new DynamicModel(['one', 'two', 'summ']);
            return $this->render(compact( 'model'), 'calculator');
        }

    }

}