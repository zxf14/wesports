<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:50
 */
?>
<section class="box text-center daySteps">


    <div class="center-block round">
        <p class="smallFont">今日步数</p>
        <p class="todaySteps"><?php echo $steps[0]['steps']?></p>
        <p class="smallFont">目标 10000</p>
    </div>

    <div class="center-block">
    <?php
    foreach($steps as $s){?>
        <div class="progress vertical progress-striped">
            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: <?php echo ceil($s['steps']/100);?>%;">
                <span class="sr-only"><?php echo $s['steps']?>步</span>
            </div>
        </div>
        <?php  }?>
    </div>
    <div class="center-block">
        <p class="data">
            <?php 
            foreach ($steps as $s) {
                if(date("d",$s['createdAt'])==date("d",now()))
                    echo '<span>今天 </span>';
                else
                    echo '<span>'.date("d",$s['createdAt']).'日</span>';
            }
            ?>
        </p>
    </div>
    <header>
        <h2>消耗量相当于</h2>
        <p>三片薯片</p>
    </header>
    <p>
        要加强锻炼哦～饭后走一走，活到九十九～
    </p>
</section>

