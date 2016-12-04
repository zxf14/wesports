<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:59
 */
?>
<section class="box rank">
    <h2 class="major"><span>排行榜</span></h2>

    <div>
        <section class="box highlight">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <header class="center-block">
                    <h3 class="rankTitle">您今日步数在好友榜第<span>1</span>位</h3>
                    <br />
                </header>
                <div class="rankList">
                    <h2 class="major"><span>步数排行榜</span></h2>

                    <ul class="rankItem num1 list-inline">
                        <li>
                            <p><strong>1</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo $rank[0]['photoUri'];?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left"><?php echo $rank[0]['userName'];?></span>
                                <small class="pull-right">
                                    <span id=""><?php echo $rank[0]['steps'];?></span>步
                                </small>
                            </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-red" style="width: 100%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem num2 list-inline">
                        <li>
                            <p><strong>2</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo $rank[1]['photoUri'];?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left"><?php echo $rank[1]['userName'];?></span>
                                <small class="pull-right">
                                    <span id=""><?php echo $rank[1]['steps'];?>7236</span>步
                                </small>
                            </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-yellow" style="width: <?php echo ceil($rank[1]['steps']/$rank[0]['steps']*100);?>78%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem num3 list-inline">
                        <li>
                            <p><strong>3</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo $rank[2]['photoUri'];?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left"><?php echo $rank[2]['userName'];?></span>
                                <small class="pull-right">
                                    <span id="">6313</span>步
                                </small> </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-light-blue" style="width: <?php echo ceil($rank[2]['steps']/$rank[0]['steps']*100);?>65%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem list-inline">
                        <li>
                            <p><strong>4</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo $rank[3]['photoUri'];?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left"><?php echo $rank[3]['userName'];?></span>
                                <small class="pull-right">
                                    <span id="">5434</span>步
                                </small>
                            </div>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: <?php echo ceil($rank[3]['steps']/$rank[0]['steps']*100);?>54%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem list-inline">
                        <li>
                            <p><strong>5</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user7.jpg');?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">李斯</span>
                                <small class="pull-right">
                                    <span id="">4453</span>步
                                </small>
                            </div>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 38%;"></div>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <header class="center-block">
                    <h3 class="rankTitle">本月累计跑步在好友榜第<span>3</span>位</h3>
                    <br />
                </header>
                <div class="rankList">

                    <h2 class="major"><span>跑步排行榜</span></h2>

                    <ul class="rankItem num1 list-inline">
                        <li>
                            <p><strong>1</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user7.jpg');?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">李斯</span>
                                <small class="pull-right">
                                    <span id="">23.03</span>km
                                </small>
                            </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-red" style="width: 100%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem num2 list-inline">
                        <li>
                            <p><strong>2</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user6.jpg');?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">3</span>
                                <small class="pull-right">
                                    <span id="">18.2</span>km
                                </small>
                            </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-yellow" style="width: 90%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem num3 list-inline">
                        <li>
                            <p><strong>3</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/images/user/user1.jpg');?>" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">王而小</span>
                                <small class="pull-right">
                                    <span id="">11.21</span>km
                                </small> </div>
                            <div class="progress sm progress-striped">
                                <div class="progress-bar progress-bar-light-blue" style="width: 50%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem list-inline">
                        <li>
                            <p><strong>4</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="http://localhost:8080/asset/images/user/user4.jpg" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">2</span>
                                <small class="pull-right">
                                    <span id="">8.1</span>km
                                </small>
                            </div>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                            </div>
                        </li>
                    </ul>

                    <ul class="rankItem list-inline">
                        <li>
                            <p><strong>5</strong></p>
                        </li>
                        <li>
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="http://localhost:8080/asset/images/user/user2.jpg" alt="user image">
                            </div>
                        </li>
                        <li>
                            <div class="clearfix">
                                <span class="pull-left">1</span>
                                <small class="pull-right">
                                    <span id="">5.4</span>km
                                </small>
                            </div>
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 30%;"></div>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </section>
    </div>
</section>

