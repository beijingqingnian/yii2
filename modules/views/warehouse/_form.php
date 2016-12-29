<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\models\WarehouseInfo;

/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehouse-info-form">

    <?php $form = ActiveForm::begin(["options"=>["multipart/form-data"]]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'url')->fileInput() ?>

    <?= Html::img(Yii::$app->params['img_path'].$model->url,['width'=>'60'])?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(WarehouseInfo::$status_list) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
