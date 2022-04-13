<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="rest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'updatet_at')->textInput(['readonly'=>true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'created_at')->textInput() ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
