<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\models\WarehouseInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '仓库信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建仓库', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'desc:ntext',
            'address',
            'contact',
            // 'phone',
            // 'area',
            // 'price',
            // 'create_time',
            // 'update_time',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);?>
</div>
