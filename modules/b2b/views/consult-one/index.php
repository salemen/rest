<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\b2b\models\Consult_oneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consult Ones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consult-one-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consult One', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'employee_id',
            'patient_id',
            'comment',
            'dep_id',
            //'e_hide',
            //'p_hide',
            //'is_canceled',
            //'is_end',
            //'is_payd',
            //'is_special',
            //'created_at',
            //'ended_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
