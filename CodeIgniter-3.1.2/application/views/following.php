<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <title><?php echo $head?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
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
                            <img class="profile-user-img img-responsive img-circle" src="images/user4-128x128.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center">凤姐</h3>
                            <p class="text-muted text-center">初阶跑者
                                <i class="fa fa-star"></i><i class="fa fa-star"></i></p>

                            <div class="text-center">
                                <strong><i class="fa fa-map-marker margin-r-5"></i></strong>
                                <span class="text-muted">南京, 江苏</span>
                            </div>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>关注</b>
                                    <a class="pull-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>粉丝</b>
                                    <a class="pull-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>动态数量</b>
                                    <a class="pull-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b style="color: white;">关注ta</b></a>
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

                            <p class="text-left">先定一个小目标：跑一次全马 ～</p>
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
                            <div class="profile_pinfo" id="pl_content_account">

                                <div class="infoblock">
                                    <h2 class="major text-left"><span><?php echo $info?></span>
                                    </h2>
                                </div>

                            </div>
                            <?php if (isset($following)){
                                foreach ($following as $f){
                                    require 'friend/friendItem.php';
                                }
                            }
                            ?>

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
        $("#follow").click(function(){
            var fbutton=document.getElementById("follow");
            if(fbutton.childNodes[0].nodeValue==='取消关注'){
                $.post({
                    url:'<?php echo site_url('friends/cancel_follow');?>',
                    data: {"f_id":fbutton.value},
                    success: function (data,status) {
                        if(data==='1'){
                            fbutton.className='btn-warning pull-right';
                            fbutton.childNodes[0].nodeValue='关注Ta';
                            $("#join").blur();
                            alert("您已经取消对Ta的关注");
                        }
                        else{
                            alert(data);
                        }

                    }
                });
            }
            else {
                $.post({
                    url:'<?php echo site_url('friends/follow');?>',
                    data: {"f_id":fbutton.value},
                    success: function (data,status) {
                        if(data==='1'){
                            fbutton.className='btn-primary pull-right';
                            fbutton.childNodes[0].nodeValue='取消关注';
                            $("#join").blur();
                            alert("成功关注!");
                        }
                        else{
                            alert(data);
                        }

                    }
                });
            }

        });
    </script>
</body>

</html>