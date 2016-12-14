<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于优越仓';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <code><?= __FILE__ ?></code>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/treemap.js"></script>
<div id="container"></div>
<style>
    #container {
        min-width: 300px;
        max-width: 600px;
        margin: 0 auto;
    }
</style>

<script>
    //$(function () {
        Highcharts.chart('container', {
            series: [{
                type: "treemap",
                layoutAlgorithm: 'stripes',
                alternateStartingDirection: true,
                levels: [{
                    level: 1,
                    layoutAlgorithm: 'sliceAndDice',
                    dataLabels: {
                        enabled: true,
                        align: 'left',
                        verticalAlign: 'top',
                        style: {
                            fontSize: '15px',
                            fontWeight: 'bold'
                        }
                    }
                }],
                data: [{
                    id: 'A',
                    name: '京东',
                    color: "#EC2500"
                }, {
                    id: 'B',
                    name: '苏宁',
                    color: "#ECE100"
                }, {
                    id: 'O',
                    name: '阿里',
                    color: '#EC9800'
                }, {
                    name: '淘宝',
                    parent: 'A',
                    value: 10
                }, {
                    name: '支付宝',
                    parent: 'A',
                    value: 3
                }, {
                    name: '淘宝',
                    parent: 'A',
                    value: 4
                }, {
                    name: '淘宝',
                    parent: 'B',
                    value: 4
                }, {
                    name: '淘宝',
                    parent: 'B',
                    value: 10
                }, {
                    name: '淘宝',
                    parent: 'B',
                    value: 1
                }, {
                    name: '苏宁500平',
                    parent: 'O',
                    value: 1
                }, {
                    name: '苏宁',
                    parent: 'O',
                    value: 3
                }, {
                    name: '苏宁',
                    parent: 'O',
                    value: 3
                }, {
                    name: '苏宁1000平',
                    parent: 'Kiwi',
                    value: 2,
                    color: '#9EDE00'
                }]
            }],
            title: {
                text: '易代儲全国库位图'
            }
        });
    //});

</script>