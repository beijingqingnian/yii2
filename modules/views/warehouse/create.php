<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */

$this->title = '新建仓库';
$this->params['breadcrumbs'][] = ['label' => '仓库信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
