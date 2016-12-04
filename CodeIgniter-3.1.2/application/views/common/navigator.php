<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:41
 */
?>
<nav id="nav">
    <ul class="indexul">
        <li<?php if($page==='index') echo ' class="current"'?>>
            <a href="<?php echo base_url('summary/index')?>">主页</a>
        </li>
        <li<?php if($page==='health') echo ' class="current"'?>>
            <a href="<?php echo base_url('health/index')?>" >健康管理</a>
        </li>
        <li<?php if($page==='act') echo ' class="current"'?>>
            <a href="<?php echo base_url('activity/index')?>" >活动中心</a>
        </li>
        <li<?php if($page==='moment') echo ' class="current"'?>>
            <a href="#">动态</a>
            <ul>
                <li>
                    <a href="<?php echo base_url('friends/moment')?>">好友动态</a>
                </li>
                <li>
                    <a href="<?php echo base_url('friends/following')?>">我的关注</a>
                </li>
                <li>
                    <a href="<?php echo base_url('friends/followers')?>">关注我的人</a>
                </li>
            </ul>
        </li>
        <li <?php if($page==='user') echo 'class="current"'?>>
            
                <?php if (!$this->session->userdata('userId'))
                    echo '<a href="'.base_url('user/login').'>登录</a>';
                else{
                    echo '<a href="#">个人中心</a>
            <ul>
            <li>
                    <a href="'.base_url('user/edit').'">修改个人信息</a>
                </li><li>
                    <a href="'.base_url('user/logout').'">退出登录</a>
                </li>';
                }
                ?>

            </ul>
        </li>
    </ul>
    </nav>
