<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\consult\ConsultDepartment */

$this->title = 'Update Consult Department: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Consult Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="consult-department-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
