<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\b2b\models\Consult_one */

$this->title = 'Create Consult One';
$this->params['breadcrumbs'][] = ['label' => 'Consult Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consult-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
