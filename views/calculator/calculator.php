<?php
use yii\widgets\ActiveForm;
?>

<?= ActiveForm::begin(['id'=> 'calc', 'action'=> 'calculator'])?>

<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'one')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'two')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'summ')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="form-group">
    <?= Html::submitButton('', ['class' => 'btn btn-success']) ?>
</div>

<?= ActiveForm::end() ?>
