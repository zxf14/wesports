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
    <meta name="description" content="运动社交平台">
    <meta name="keywords" content="运动,健康,社交,交友">
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
                                        <div class="pull-right pull-up" style="background-color: transparent;">
                                            <button class="btn btn-warning" id="modify">修改</button>
                                        </div>

                                    </h2>

                                </div>

                            </div>

                            <div class="tab-pane" id="info">

                                <div class="form-horizontal text">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">注册邮箱</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php echo $user['email']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">用户名</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php echo $user['userName'];?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge" class="col-sm-2 control-label">年龄</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php if (isset($user['age']))echo $user['age'];?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">性别</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php if (isset($user['female']))echo '女';else echo '男';?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputlocation" class="col-sm-2 control-label">所在地</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <?php if (isset($user['loaction'])) echo $user['location'];else echo '保密';?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">手机号</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php if (isset($user['phone']))echo $user['phone'];else echo '保密';?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">头像</label>
                                        <img style="margin-left: 20px;cursor: pointer;width: 100px" src="<?php if (isset($user['photoUri'])&&$user['photoUri']!=null) echo $user['photoUri'];else echo base_url('asset/images/user/user1.jpg');?>" class="img-circle img-thumbnail"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">个人简介</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <?php if (isset($user['profile'])&&$user['profile']!=null) echo $user['profile'];
                                            else echo '暂无';?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="settings" hidden="hidden">

                                <form class="form-horizontal" action="<?php echo site_url('user/edit');?>" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">注册邮箱</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <span><?php echo $user['email']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">用户名</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" <?php echo 'value="'.$user['userName'].'" ';?>id="inputName" name="username" placeholder="用户名" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge" class="col-sm-2 control-label">年龄</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="number" class="form-control" <?php if (isset($user['age']))echo 'value="'.$user['age'].'" ';?>id="inputAge" placeholder="年龄" name="age">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionsRadios1" class="col-sm-2 control-label">性别</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="radio radio-inline" style="padding-left: 0;">
                                                <label>
                                                    <input type="radio" name="inputGender" id="optionsRadios1" value="female" <?php if($user['gender']==='female')echo 'checked';?>>女
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="inputGender" id="optionsRadios2" value="male" <?php if($user['gender']==='male')echo 'checked';?>>男
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputlocation" class="col-sm-2 control-label">所在地</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="input_sel" node-type="cityselector" >
														<span>
														<select name="province" id="province" init_value="32">
															<option value="32">江苏</option><option value="34">安徽</option>
															<option value="11">北京</option><option value="50">重庆</option>
															<option value="35">福建</option><option value="62">甘肃</option>
															<option value="44">广东</option><option value="45">广西</option>
															<option value="52">贵州</option><option value="46">海南</option>
															<option value="13">河北</option><option value="23">黑龙江</option>
															<option value="41">河南</option><option value="42">湖北</option>
															<option value="43">湖南</option><option value="15">内蒙古</option>
															<option value="36">江西</option>
															<option value="22">吉林</option><option value="21">辽宁</option>
															<option value="64">宁夏</option><option value="63">青海</option>
															<option value="14">山西</option><option value="37">山东</option>
															<option value="31">上海</option><option value="51">四川</option>
															<option value="12">天津</option><option value="54">西藏</option>
															<option value="65">新疆</option><option value="53">云南</option>
															<option value="33">浙江</option><option value="61">陕西</option>
															<option value="71">台湾</option><option value="81">香港</option>
															<option value="82">澳门</option><option value="400">海外</option>
															<option value="100">其他</option>
													</select>&nbsp;</span>
                                                <span>
    														<select node-type="city" name="city" id="city" init_value="1">
	    														<option value="1">南京</option><option value="2">无锡</option>
	    														<option value="3">徐州</option><option value="4">常州</option>
	    														<option value="5">苏州</option><option value="6">南通</option>
	    														<option value="7">连云港</option><option value="8">淮安</option>
	    														<option value="9">盐城</option><option value="10">扬州</option><option value="11">镇江</option>
	    														<option value="12">泰州</option><option value="13">宿迁</option>
	    													</select>&nbsp;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">手机号</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="tel" class="form-control" name="inputPhone" <?php if (isset($user['phone']))echo 'value="'.$user['phone'].'"';?> id="inputPhone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserImg" class="col-sm-2 control-label">头像</label>
                                        <img id='inputUserImg' title="点击更换头像" style="margin-left: 20px;cursor: pointer;width: 100px" src="<?php if (isset($user['photoUri'])&&$user['photoUri']!=null) echo $user['photoUri'];else echo base_url('asset/images/user/user1.jpg');?>" class="img-circle img-thumbnail"/>
                                        <input type="hidden" id="inputImg" name="inputUserImg" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">个人简介</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <textarea class="form-control" id="inputExperience" name="profile" placeholder="个人简介"><?php if (isset($user['profile'])) echo $user['profile'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">确认修改</button>
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
    <script>
        $("#modify").click(function(){
            document.getElementById("info").setAttribute('hidden','hidden');
            document.getElementById("settings").removeAttribute('hidden');
            $("#modify").hide();
        });
        var avatar = document.getElementById("inputUserImg");
        var imgNum=(function(){
            var i=1;
            return (function(){
                i=i%9+1;
                return i;
            });
        }());
        avatar.addEventListener("click", changeAvatar);
        function changeAvatar() {
            var num=imgNum();
            var srcString="http://localhost:8080/asset/images/user/user"+num+".jpg";
            document.getElementById("inputUserImg").src = srcString;
            document.getElementById("inputImg").value=srcString;
        }
    </script>
</body>

</html>
