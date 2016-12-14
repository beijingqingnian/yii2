<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
//echarts.baidu.com/demo.html#treemap-drill-down
//http://gallery.echartsjs.com/editor.html?c=xHJvImelK
//http://gallery.echartsjs.com/editor.html?c=xByk5XkEmx
//http://gallery.echartsjs.com/editor.html?c=xB1xS7yEmx
//http://gallery.echartsjs.com/editor.html?c=xSyIV5NEfg
?>

<iframe id="chart-iframe" sandbox="allow-modals allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts" src="http://gallerybox.echartsjs.com/chart.html?echarts=latest&amp;external=&amp;theme=&amp;layout=null&amp;layoutCustomized=false&amp;layoutWidth=[]&amp;layoutHeight=[]" frameborder="0"></iframe>
<div id="main" style="height:400px"></div>
<!-- ECharts单文件引入 -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
<script type="text/javascript">
    // 路径配置
    require.config({
        paths: {
            echarts: 'http://echarts.baidu.com/build/dist'
        }
    });

    // 使用
    require(
        [
            'echarts',
            'echarts/chart/treemap' // 使用柱状图就加载bar模块，按需加载
        ],
        function (ec) {
            // 基于准备好的dom，初始化echarts图表
            var myChart = ec.init(document.getElementById('main'));

            var option = {
                color:[
                    "#c23531",
                    "#2f4554",
                    "#61a0a8",
                    "#d48265",
                    "#91c7ae",
                    "#749f83",
                    "#ca8622",
                    "#bda29a",
                    "#6e7074",
                    "#546570",
                    "#c4ccd3"
                ],
                title : {
                    text: '手机占有率',
                    subtext: '数据下钻例子，虚构数据'
                },
                textStyle:{
                    "fontFamily": "Microsoft YaHei",
                    "fontSize": 12,
                    "fontStyle": "normal",
                    "fontWeight": "normal"
                },
                //tooltip:[{trigger,formatter,zlevel}],
               // markArea:[{zlevel:'',z,tooltip}],
                tooltip: {
                    trigger: 'item',
                    formatter: "{b}1"
                },
                series: [{
                    type: 'treemap',
                    width: '100%',
                    height: '100%',
                    roam: false,
                    nodeClick: false,
                    levels: [{
                        itemStyle: {
                            normal: {
                                gapWidth: 1
                            }
                        }
                    }],
                    breadcrumb: {
                        show: false
                    },
                    label: {
                        normal: {
                            show: true,
                            position: [10, 10]
                        }
                    },
                    itemStyle: {
                        normal: {
                            show: true,
                            textStyle: {
                                color: '#fff',
                                fontSize: 16,
                            },
                            borderWidth: 1,
                            borderColor: '#fff'
                        },
                        emphasis: {
                            label: {
                                show: true
                            }
                        }
                    },
                    data: [{
                        value: 8,
                        children: [{
                            name: 'T恤\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }, {
                            name: '衬衫\n\n20(品牌数量)\n\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }, {
                            name: '针织衫\n\n30(品牌数量)\n\n30%',
                            value: 5,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }, {
                            name: 'Polo衫\n\n30(品牌数量)\n\n30%',
                            value: 5,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }, {
                            name: '卫衣\n\n30(品牌数量)\n\n30%',
                            value: 4,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }, {
                            name: '马甲\n\n30(品牌数量)\n\n30%',
                            value: 4,
                            itemStyle: {
                                normal: {
                                    color: '#80cbc4'
                                }
                            }
                        }]
                    }, {
                        value: 6,
                        children: [{
                            name: '哈伦裤\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#82dae6'
                                }
                            }
                        }, {
                            name: '裤子\n\n20(品牌数量)\n30%',
                            value: 5,
                            itemStyle: {
                                normal: {
                                    color: '#82dae6'
                                }
                            }
                        }, {
                            name: '裤子\n\n30(品牌数量)\n30%',
                            value: 5,
                            itemStyle: {
                                normal: {
                                    color: '#82dae6'
                                }
                            }
                        }]
                    }, {
                        value: 6,
                        children: [{
                            name: '皮衣\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#88e186'
                                }
                            }
                        }, {
                            name: '羽绒服\n\n20(品牌数量)\n\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#88e186'
                                }
                            }
                        }]
                    }, {
                        value: 6,
                        children: [{
                            name: '吊带\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#acd680'
                                }
                            }
                        }, {
                            name: '吊带\n\n20(品牌数量)\n\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#acd680'
                                }
                            }
                        }, {
                            name: '吊带\n\n20(品牌数量)\n\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#acd680'
                                }
                            }
                        }]
                    }, {
                        value: 5,
                        children: [{
                            name: '连体A1\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#81e7cf'
                                }
                            }
                        }, {
                            name: '连体A1\n\n10(品牌数量)\n\n30%',
                            value: 10,
                            itemStyle: {
                                normal: {
                                    color: '#81e7cf'
                                }
                            }
                        }, {
                            name: '连体\n\n20(品牌数量)\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#81e7cf'
                                }
                            }
                        }, {
                            name: '连体\n\n30(品牌数量)\n30%',
                            value: 8,
                            itemStyle: {
                                normal: {
                                    color: '#81e7cf'
                                }
                            }
                        }]
                    }]
                }]
            };

            // 为echarts对象加载数据
            myChart.setOption(option);
        }
    );
</script>



<!--<div class="site-contact">
    <h1><?/*= Html::encode($this->title) */?></h1>

    <?php /*if (Yii::$app->session->hasFlash('contactFormSubmitted')): */?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php /*if (Yii::$app->mailer->useFileTransport): */?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?/*= Yii::getAlias(Yii::$app->mailer->fileTransportPath) */?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php /*endif; */?>
        </p>

    <?php /*else: */?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php /*$form = ActiveForm::begin(['id' => 'contact-form']); */?>

                    <?/*= $form->field($model, 'name')->textInput(['autofocus' => true]) */?>

                    <?/*= $form->field($model, 'email') */?>

                    <?/*= $form->field($model, 'subject') */?>

                    <?/*= $form->field($model, 'body')->textarea(['rows' => 6]) */?>

                    <?/*= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) */?>

                    <div class="form-group">
                        <?/*= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) */?>
                    </div>

                <?php /*ActiveForm::end(); */?>

            </div>
        </div>

    <?php /*endif; */?>
</div>
-->