<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午9:28
 */
$countdown=timespan(now(),$item['startTime']);
$id=$item['activityId'];
?>
<div class="detail_sports_date_list">
    <div class="detail_sports_date">

        <div class="detail_sports_date_month"><?php echo $month?>月</div>
        <div class="detail_sports_date_day"><?php echo date("d",$item['startTime'])?></div>

    </div>
    <div class="col-md-10 col-sm-10 col-xs-12 detail_sports_content">
        <h3 class="act_title"><a href="<?php echo base_url("activity/info/$id")?>"><?php echo $item['title']?></a>
        </h3>
        <div class="act_join">
        倒计时：<b><?php echo $countdown?></b>
        报名人数: <b class=""><?php if (!$item['amount']) echo 0;else echo $item['amount']?></b>
        <?php if($item['isOnline']===1) echo '<small class="label label-danger"><i class="fa fa-clock-o"></i>线上</small>'?>
        <?php if($item['isOffline']===1) echo '<small class="label label-success"><i class="fa fa-clock-o"></i>线下</small>'?>
        </div>  
        
       <div >
                <img class="imgBlock" src="<?php echo $item['photoUri'];?>">
        </div>
    </div>
</div>


<div class="clearfix"></div>
