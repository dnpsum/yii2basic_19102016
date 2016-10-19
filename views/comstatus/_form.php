<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'com_status_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'ตกลง' : 'ตกลงอัพเดท', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
