<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */

$this->title = '更新仓库: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warehouse-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
