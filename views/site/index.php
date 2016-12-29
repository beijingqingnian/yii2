<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '首页 | 优越仓-最优质的互联网仓储服务平台';
?>
<!---//End-header---->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<!---start-content---->
<div class="content">
    <div class="wrap">
        <div id="main" role="main">
            <ul id="tiles">
                <!-- These are our grid blocks -->
                <?php foreach($warehouse as $k => $info):?>
                    <?php //print_r($info);?>
                    <li onClick="location.href='<?php echo Url::toRoute("site/info")?>';">
                        <img src="web/images/img1.jpg" width="200" height="200">
                        <div class="post-info">
                            <div class="post-basic-info">
                                <h3><a href="#"><?= $info['name']?></a></h3>
                                <span><a href="#"><label> </label><?= $info['address']?></a></span>
                                <p><?= $info['desc']?></p>
                            </div>
                            <div class="post-info-rate-share">
                                <div class="rateit">
                                    <span> </span>
                                </div>
                                <div class="post-share">
                                    <span> </span>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>

                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img2.jpg" width="200" height="299">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">上海优越仓</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>L北京2号院，仓储服务中心，阿斯顿发科技老师的发了啥地方就考虑是否方式打开了房间的律师费</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img3.jpg" width="200" height="214">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">南京优越仓</a></h3>
                            <span><a href="#"><label> </label>深圳</a></span>
                            <p>北京一水电费水电费水电费号院，仓储服务中心，阿斯顿发科技老师的发了啥地方就考虑是否方式打开了房间的律师费</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img4.jpg" width="200" height="333">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">北京优越仓</a></h3>
                            <span><a href="#"><label> </label>上海</a></span>
                            <p>北京一号院，仓储服务中心，阿斯顿发科技老师的发了啥地方就考虑是否方式打开了房间的律师费try.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <!----//--->
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img4.jpg" width="200" height="333">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img3.jpg" width="200" height="214">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img2.jpg" width="200" height="299">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img1.jpg" width="200" height="200">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <!----//--->
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img1.jpg" width="200" height="200">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img2.jpg" width="200" height="299">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img3.jpg" width="200" height="214">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <li onClick="location.href='single-page.html';">
                    <img src="web/images/img4.jpg" width="200" height="333">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </li>
                <!-- End of grid blocks -->
            </ul>
        </div>
    </div>
</div>
<!---//End-content---->
<!----wookmark-scripts---->
<script src="web/js/jquery.imagesloaded.js"></script>
<script src="web/js/jquery.wookmark.js"></script>

<script type="text/javascript">
    (function ($){
        var $tiles = $('#tiles'),
            $handler = $('li', $tiles),
            $main = $('#main'),
            $window = $(window),
            $document = $(document),
            options = {
                autoResize: true, // This will auto-update the layout when the browser window is resized.
                container: $main, // Optional, used for some extra CSS styling
                offset: 20, // Optional, the distance between grid items
                itemWidth:280 // Optional, the width of a grid item
            };
        /**
         * Reinitializes the wookmark handler after all images have loaded
         */
        function applyLayout() {
            $tiles.imagesLoaded(function() {
                // Destroy the old handler
                if ($handler.wookmarkInstance) {
                    $handler.wookmarkInstance.clear();
                }

                // Create a new layout handler.
                $handler = $('li', $tiles);
                $handler.wookmark(options);
            });
        }
        /**
         * When scrolled all the way to the bottom, add more tiles
         */
        function onScroll() {
            // Check if we're within 100 pixels of the bottom edge of the broser window.
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);

            if (closeToBottom) {
                // Get the first then items from the grid, clone them, and add them to the bottom of the grid
                var $items = $('li', $tiles),
                    $firstTen = $items.slice(0, 10);
                $tiles.append($firstTen.clone());

                applyLayout();
            }
        };

        // Call the layout function for the first time
        applyLayout();

        // Capture scroll event.
        $window.bind('scroll.wookmark', onScroll);
    })(jQuery);
</script>
<!----//wookmark-scripts---->














<!--<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/heatmap.js"></script>
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
    //$(function() {
    Highcharts.chart('container', {
        colorAxis: {
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },
        series: [{
            type: 'treemap',
            layoutAlgorithm: 'squarified',
            data: [{
                name: '京东',
                value: 921,
                colorValue: 1
            }, {
                name: '苏宁',
                value: 6124,
                colorValue: 2
            }, {
                name: '淘宝',
                value: 4123,
                colorValue: 3
            }, {
                name: '阿里',
                value: 350,
                colorValue: 4
            }, {
                name: '腾讯',
                value: 220,
                colorValue: 5
            }, {
                name: '唯品会',
                value: 2000,
                colorValue: 6
            }, {
                name: '链家',
                value: 1200,
                colorValue: 7
            }]
        }],
        title: {
            text: '易代儲北京1号库'
        }
    });
    //});
</script>-->