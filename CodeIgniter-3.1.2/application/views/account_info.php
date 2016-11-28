<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:37
 */
$title=array("Account","个人信息修改");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>帐号设置 - wesports</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    require 'common/common_css.php';
    ?>
</head>

<body>
<div id="page-wrapper">

    <!-- Header -->
    <?php
    require 'common/header.inc.php';
    ?>

    <!-- Nav -->
    <?php
    require "common/navigator.php";
    ?>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <!--<div class="3u 12u(mobile)">-->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="sidebar">

                        <!-- Sidebar -->

                        <!-- Recent Posts -->
                        <section>
                            <h2 class="major"><span>个人界面</span></h2>
                            <ul class="divided">
                                <li class="chosen">
                                    <a href="<?php echo base_url('account_info');?>">帐号设置</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('account_psw');?>">帐号安全</a>
                                </li>

                            </ul>
                        </section>
                    </div>
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">

                            <div class="profile_pinfo" id="pl_content_account">

                                <div class="infoblock">
                                    <h2 class="major text-left"><span>基本信息</span>
                                        <div class="pull-right pull-up">
                                            <button type="submit" class="btn btn-warning">保存修改</button>
                                        </div>

                                    </h2>

                                </div>

                            </div>

                            <div class="tab-pane" id="settings">

                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">登录名</label>
                                        <div class="col-sm-10 ">
                                            <span>1048043333@qq.com</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">用户名</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="小番">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSex" class="col-sm-2 control-label">性别</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="radio radio-inline" style="padding-left: 0;">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>女
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">男
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputlocation" class="col-sm-2 control-label">所在地</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <?php
                                            require 'common/locationSelector.php';
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserImg" class="col-sm-2 control-label">头像</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="file" class="input-file" id="inputUserImg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">个人简介</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="个人简介"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">个人标签</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="标签">
                                        </div>
                                    </div>

                                </form>
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

    <!-- Scripts -->
    <?php
    require 'common/common_js.php';
    ?>
</body>

</html>
