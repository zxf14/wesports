<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/27
 * Time: 下午11:59
 */
?>
<div class="followItem user-block">
    <img class="img-circle img-bordered-sm" src="<?php if (isset($f['photoUri'])&&$f['photoUri']!=null)echo $f['photoUri']; else echo base_url('asset/images/user/user1-128x128.jpg');?>" alt="user image">
    <span class="username">
        <a href="#"><?php echo $f['userName']?></a>
        <button class="btn-primary pull-right" id="follow" value=<?php echo $f['followUserId']?>>取消关注</button>
    </span>
    <span class="description"><?php if (isset($f['age'])&&$f['age']!=null)echo "年龄: ".$f['age'];?>
        <?php echo "等级: ".$f['level'];?></span>
</div>
