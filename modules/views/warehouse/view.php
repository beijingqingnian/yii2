<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\models\WarehouseInfo;

/* @var $this yii\web\View */
/* @var $model app\modules\models\WarehouseInfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-info-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除该记录吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'desc:ntext',
            'address',
            'contact',
            'phone',
            'area',
            'price',
            ['label'=>'图片','format'=>'html','value'=>Html::img(Yii::$app->params['img_path'].$model->url,["width"=>"60"])],
            'create_time',
            'update_time',
            ['label'=>'状态','value'=>WarehouseInfo::$status_list[$model->status]],
        ],
    ]) ?>

</div>
