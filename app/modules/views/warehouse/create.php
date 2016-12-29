<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */

$this->title = 'Create Warehouse Info';
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
