<!DOCTYPE HTML lang="zh-CN">
<html>

<head>
    <title>注册 - wesports</title>
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

    <!-- Header -->
    <header id="header">
        <div class="logo container">
            <div>
                <h1><a href="index.html" id="logo">注册</a></h1>
                <p>新用户</p>
            </div>
        </div>
    </header>

    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 center-block">
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-8 col-sm-8 col-xs-12 center-block">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">

                            <div class="profile_pinfo" id="pl_content_account">

                                <div class="infoblock">
                                    <h2 class="major text-left"><span>基本信息</span>
                                    </h2>
                                </div>

                            </div>

                            <div class="tab-pane" id="settings">

                                <form class="form-horizontal" action="<?php echo site_url('user/register');?>" method="post" onsubmit="return check(this)">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">注册邮箱</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="邮箱" required>
                                        </div>
                                        <span style="display:none" id="vefifyInfo">邮箱重复</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">密码</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="密码" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword" class="col-sm-2 control-label">确认密码</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="确认密码" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">用户名</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputName" name="username" placeholder="用户名" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge" class="col-sm-2 control-label">年龄</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="number" class="form-control" id="inputAge" placeholder="年龄" name="age">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionsRadios1" class="col-sm-2 control-label">性别</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="radio radio-inline" style="padding-left: 0;">
                                                <label>
                                                    <input type="radio" name="inputGender" id="optionsRadios1" value="female" checked>女
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="inputGender" id="optionsRadios2" value="male">男
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
                                            <input type="tel" class="form-control" name="inputPhone" id="inputPhone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserImg" class="col-sm-2 control-label">头像</label>
                                        <img id='inputUserImg' title="点击更换头像" style="margin-left: 20px;cursor: pointer;width: 100px" src="<?php echo base_url('asset/images/user/user1-128x128.jpg');?>" class="img-circle img-thumbnail"/>
                                    <input type="hidden" id="inputImg" name="inputUserImg" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">个人简介</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <textarea class="form-control" id="inputExperience" name="profile" placeholder="个人简介"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">个人兴趣</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputSkills" id="inputSkills" placeholder="标签">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">注册</button>
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

    <?php
    require 'common/common_js.php'
    ?>
    <script>
        var avatar = document.getElementById("inputUserImg");
        avatar.addEventListener("click", changeAvatar);
        function changeAvatar() {
            var num=Math.round(Math.random()*7+1);
            var srcString="http://localhost:8080/asset/images/user/user"+num+"-128x128.jpg";
            while (srcString===document.getElementById("inputUserImg").src){
                num=Math.round(Math.random()*7+1);
            }
            var srcString="http://localhost:8080/asset/images/user/user"+num+"-128x128.jpg";
            document.getElementById("inputUserImg").src = srcString;
            document.getElementById("inputImg").value=srcString;
        }
        $(document).ready(function(){
            $("#inputEmail").blur(function(){
                $.ajax({
                    type:'POST',
                    url: '<?php echo site_url('user/test_email');?>',
                    data: { "email": document.getElementById("inputEmail").value},
                    success: function(result) {
                        $("#vefifyInfo").css("display","inline");
                        $("#vefifyInfo").html(result);
                    }});
            });
        });
        function check(obj) {
            if(document.getElementById("inputPassword").value!==document.getElementById("confirmPassword").value){
                alert("密码与确认密码不同");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>