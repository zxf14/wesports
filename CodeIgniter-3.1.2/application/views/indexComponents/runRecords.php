<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:55
 */
?>
<section class="box runRecords">
    <h2 class="major"><span>跑步统计</span></h2>
    <div>
        <div class="row">
            <div class="9u 12u(mobile)">
                <div class="content content-left">

                    <!-- Featured Post -->
                    <article class="box">
                        <div id="barcharts" style="min-width:700px;height:400px">
                            
                        </div>
                    </article>

                </div>
            </div>
            <div class="3u 12u(mobile)">
                <div class="sidebar">

                    <!-- Archives -->
                    <ul class="divided">
                        <li>
                            <article class="box post-summary">
                                <h3><li class="icon fa-clock-o">时长</li></h3>

                        <li class="icon fa-clock-o"><?php echo $time?>小时</li>

                        </article>
                        </li>
                        <li>
                            <article class="box post-summary">
                                <h3><li class="icon fa-fire">卡路里</li></h3>
                        <li class="icon fa-fire"><?php echo $calories?> 大卡</li>
                        </article>
                        </li>
                        <li>
                            <article class="box post-summary">
                                <h3><li class="icon fa-clock-o">平均配速</li></h3>
                        <li class="icon"><?php echo $minute?>／公里</li>
                        </article>
                        </li>
                        <li>
                            <article class="box post-summary">
                                <h3><li class="icon fa-clock-o">平均速度</li></h3>
                        <li class="icon"><?php echo $speed?> 公里/时</li>

                        </article>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
