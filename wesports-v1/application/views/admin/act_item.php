<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/27
 * Time: 下午11:59
 */
?>
<div class="followItem user-block">
    <img class="img-circle img-bordered-sm" src="<?php if (isset($a['photoUri'])&&$a['photoUri']!=null)echo $a['photoUri']; else echo base_url('asset/images/run1.jpg');?>" alt="user image">
    <span class="username">
        <a href="<?php echo base_url('activity/info/').$a['activityId']?>"><?php echo $a['title']?></a>
 		<button class="btn-danger pull-right delete"  style="font-size: 10px" value=<?php echo $a['activityId']?>>删除活动</button>
    	<button class="btn-warning pull-right edit"  style="font-size: 10px" value=<?php echo $a['activityId']?>>编辑活动</button>
    </span>
    <span>
    	
    </span>
    <span class="description"><?php 
    if (isset($a['startTime'])&&$a['startTime']!=null)echo '  活动开始时间：'.human_time($a['startTime']);
    else echo "";
    ?>
        </span>
</div>
