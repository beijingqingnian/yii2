<?php

use yii\helpers\Url;

use yii\helpers\Html;

?>

<!DOCTYPE HTML>

<html>

<head>

    <meta charset="<?= Yii::$app->charset ?>">

    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <link href="web/css/bs_style.css" rel='stylesheet' type='text/css' />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    </script>



    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>





        <link rel="stylesheet" href="web/css/bs_main.css">





        <script src="web/js/jquery.min.js"></script>



    <script type="text/javascript">

        var $ = jQuery.noConflict();

        $(function() {

            $('#activator').click(function(){

                $('#box').animate({'top':'0px'},500);

            });

            $('#boxclose').click(function(){

                $('#box').animate({'top':'-700px'},500);

            });

        });

        $(document).ready(function(){

            //Hide (Collapse) the toggle containers on load

            $(".toggle_container").hide();

            //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)

            $(".trigger").click(function(){

                $(this).toggleClass("active").next().slideToggle("slow");

                return false; //Prevent the browser jump to the link anchor

            });

        });

    </script>



</head>

<body>

<!---start-wrap---->

<!---start-header---->

<div class="header">

    <div class="wrap">

        <div class="logo">

            <a href="<?php echo Url::toRoute('site/index');?>"><img src="web/images/logo.png" title="pinbal" /></a>

        </div>

        <div class="nav-icon">

            <a href="#" class="right_bt" id="activator"><span> </span> </a>

        </div>

        <div class="box" id="box">

            <div class="box_content">

                <div class="box_content_center">

                    <div class="form_content">

                        <div class="menu_box_list">

                            <ul>

                                <li><a href="<?php echo Url::toRoute('site/index');?>"><span>首页</span></a></li>

                                <li><a href="#"><span>关于我们</span></a></li>

                                <li><a href="#"><span>工作</span></a></li>

                                <li><a href="#"><span>合作伙伴</span></a></li>

                                <li><a href="#"><span>博客</span></a></li>

                                <li><a href="<?php echo Url::toRoute('site/contact')?>"><span>联系</span></a></li>

                                <div class="clear"> </div>

                            </ul>

                        </div>

                        <a class="boxclose" id="boxclose"> <span> </span></a>

                    </div>

                </div>

            </div>

        </div>

        <div class="top-searchbar">

            <form>

                <input type="text" /><input type="submit" value="" />

            </form>

        </div>

        <div class="userinfo">

            <div class="user">

                <ul>

                    <li><a href="#"><img src="web/images/user-pic.png" title="user-name" /><span>Ipsum</span></a></li>

                </ul>

            </div>

        </div>

        <div class="clear"> </div>

    </div>

</div>

<?= $content ?>





<div class="toolbar">

    <a href="###" class="toolbar-item toolbar-item-weixin">

        <span class="toolbar-layer"></span>

    </a>

    <a href="###" class="toolbar-item toolbar-item-feedback"></a>

    <a href="###" class="toolbar-item toolbar-item-app">

        <span class="toolbar-layer"></span>

    </a>

    <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>

</div>



<!----start-footer--->

<div class="footer">

    <p>Copyright &copy; 2015.Company name All rights <a href="http://www.beijingqingnian.com/" target="_blank" title="北京青年">北京青年</a></p>

</div>

<!----//End-footer--->

</body>

</html>

