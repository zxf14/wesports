<!DOCTYPE HTML lang="zh-CN">
<html>

<head>
    <title><?php echo $head?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="description" content="运动社交平台">
    <meta name="keywords" content="运动,健康,社交,交友">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    $this->load->view('common/common_css');
    ?>

</head>

<body>
<div id="page-wrapper">
    <?php
    require 'common/header.inc.php';
    ?>
    <!-- Nav -->
    <?php
    require 'common/navigator.php';
    ?>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <!--<div class="3u 12u(mobile)">-->
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('asset/images/user/user1.jpg');?>" alt="User profile picture">

                            <h3 class="profile-username text-center">王而小</h3>
                            <p class="text-muted text-center">初阶跑者
                                <i class="fa fa-star"></i><i class="fa fa-star"></i></p>

                            <div class="text-center">
                                <strong><i class="fa fa-map-marker margin-r-5"></i></strong>
                                <span class="text-muted">南京, 江苏</span>
                            </div>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>关注</b>
                                    <a class="pull-right">3</a>
                                </li>
                                <li class="list-group-item">
                                    <b>粉丝</b>
                                    <a class="pull-right">4</a>
                                </li>
                                <li class="list-group-item">
                                    <b>动态数量</b>
                                    <a class="pull-right">1</a>
                                </li>
                            </ul>

                            <!-- <a href="#" class="btn btn-primary btn-block"><b style="color: white;">关注ta</b></a> -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">关于我</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body file-record text-center">
                            <table border="0">
                                <tr>
                                    <th>总时长</td>
                                    <th>总里程</td>
                                    <th>10月里程</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span id="">6.9</span>h
                                    </td>
                                    <td><span id="">23.35</span>km</td>
                                    <td><span id="">0.00</span>km</td>
                                </tr>
                            </table>
                            <hr>
                            <strong><i class="fa fa-flag margin-r-5"></i> 勋章墙</strong>
                            <br />

                            <div class="prize"></div>
                            <div class="prize"></div>
                            <div class="prize"></div>
                            <div class="prize"></div>
                            <hr>

                            <strong><i class="fa fa-pencil margin-r-5"></i> 标签</strong>

                            <p class="text-left">
                                <span class="label label-danger">跑步</span>
                                <span class="label label-success">羽毛球</span>
                                <span class="label label-info">电影</span>
                                <span class="label label-warning">睡觉</span>
                                <span class="label label-primary">吃</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-text-o margin-r-5"></i> 简介</strong>

                            <p class="text-left">先定一个小目标：跑一次全马～</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">

                            <div class="">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#activity" data-toggle="tab" aria-expanded="true">好友动态</a>
                                        </li>
                                        <li class="">
                                            <a href="#my-activity" data-toggle="tab" aria-expanded="false">我的动态</a>
                                        </li>
                                        <li class="">
                                            <a href="#timeline" data-toggle="tab" aria-expanded="false">我的通知</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user2.jpg');?>" alt="user image">
                                                    <span class="username">
																  <a href="#">张三.</a>
																  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
																</span>
                                                    <span class="description">17:30 今天</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    昨天参加了一次南京市的版马活动，很久没有跑步了，又在马拉松的过程感觉到了运动的乐趣，就是早晨起来有些抬不起腿了
                                                </p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> 转发</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" id="voteUp" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> 赞 </a>
                                                    </li>
                                                    <li class="pull-right">
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> 评论 (5)
                                                        </a>
                                                    </li>
                                                </ul>

                                                <input class="form-control input-sm" type="text" placeholder="编辑评论">
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user5.jpg');?>" alt="User Image">
                                                    <span class="username">
										                          <a href="#">李斯</a>
										                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
										                        </span>
                                                    <span class="description">5 天前</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    很久没有人发动态了，最近出去旅游了，大家看看我拍的照片怎么样
                                                </p>
                                                <div class="row margin-bottom">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="<?php echo base_url('asset/images/photo1.png');?>" alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img class="img-responsive" src="<?php echo base_url('asset/images/photo2.png');?>" alt="Photo">
                                                                <br>
                                                                <img class="img-responsive" src="<?php echo base_url('asset/images/photo3.jpg');?>" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <img class="img-responsive" src="<?php echo base_url('asset/images/photo4.jpg');?>" alt="Photo">
                                                                <br>
                                                                <img class="img-responsive" src="<?php echo base_url('asset/images/photo1.png');?>" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> 转发</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" id="voteUp2" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> 赞</a>
                                                    </li>
                                                    <li class="pull-right">
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> 评论 (1)
                                                        </a>
                                                    </li>
                                                </ul>

                                                <input class="form-control input-sm" type="text" placeholder="编辑评论">
                                            </div>
                                            <!-- /.post -->
                                            
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="my-activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="images/user6-128x128.jpg" alt="user image">
                                                    <span class="username">
																  <a href="#">Jonathan Burke Jr.</a>
																  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
																</span>
                                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans.
                                                </p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                                    </li>
                                                    <li class="pull-right">
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)
                                                        </a>
                                                    </li>
                                                </ul>

                                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="images/user6-128x128.jpg" alt="User Image">
                                                    <span class="username">
										                          <a href="#">Adam Jones</a>
										                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
										                        </span>
                                                    <span class="description">Posted 5 photos - 5 days ago</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans.
                                                </p>
                                                <div class="row margin-bottom">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="images/photo1.png" alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img class="img-responsive" src="images/photo2.png" alt="Photo">
                                                                <br>
                                                                <img class="img-responsive" src="images/photo3.jpg" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <img class="img-responsive" src="images/photo4.jpg" alt="Photo">
                                                                <br>
                                                                <img class="img-responsive" src="images/photo1.png" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                                    </li>
                                                    <li class="pull-right">
                                                        <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)
                                                        </a>
                                                    </li>
                                                </ul>

                                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->
                                            <ul class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <li class="time-label">
															<span class="bg-red">
										                          10 Feb. 2014
										                        </span>
                                                </li>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <li>
                                                    <i class="fa fa-envelope bg-blue"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                        <div class="timeline-body">
                                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo...
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-primary btn-xs">Read more</a>
                                                            <a class="btn btn-danger btn-xs">Delete</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <li>
                                                    <i class="fa fa-user bg-aqua"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                                        </h3>
                                                    </div>
                                                </li>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <li>
                                                    <i class="fa fa-comments bg-yellow"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                        <div class="timeline-body">
                                                            Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <li class="time-label">
															<span class="bg-green">
                          3 Jan. 2014
                        </span>
                                                </li>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <li>
                                                    <i class="fa fa-camera bg-purple"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                        <div class="timeline-body">
                                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- END timeline item -->
                                                <li>
                                                    <i class="fa fa-clock-o bg-gray"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.tab-pane -->

                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php
        require 'common/footer.php';
        ?>
    </div>

    <?php
    require 'common/common_js.php'
    ?>
<script>
    $('#voteUp').click(function(){
        alert('成功');
        $('#voteUp').css("color","red");
    });
    $('#voteUp2').click(function(){
        alert('成功');
        $('#voteUp2').css("color","red");
    });
</script>
</body>

</html>