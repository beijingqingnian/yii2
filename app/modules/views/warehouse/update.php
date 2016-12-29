<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */

$this->title = 'Update Warehouse Info: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warehouse-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
