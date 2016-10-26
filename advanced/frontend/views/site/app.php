<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 10:17
 */?>
<style>
    #app_download_banner_qrc ul{
        padding: 0;
    }
    #app_download_banner_qrc ul li{
        float: left;
    }
    #app_download_banner_qrc h1{
        font-size: 26px;
        margin-top: 120px;
        margin-bottom: 20px;
        text-align: left;
        padding: 0;
        color: #666;
    }
    #app_download_banner_qrc p{
        text-align: left;
        color: #777;
    }
    #app_download_banner_qrc .carousel-caption{
        margin-bottom: 15%;
    }
    #app_download_doctor_banner .carousel-caption{
        left:12%;
        top:2%;
    }
    #app_download_doctor_banner .carousel-caption h1{
        color: #ffffff;
    }
    .hb-app-btn:hover{background-color:#1d8cc0;color:#ffffff}
</style>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:50px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0"  class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" id="app_download_banner_qrc">
       <div class="item active" style="background: #f2f2f2">
            <img src="/images/appxz2.jpg" height="700px" style="margin:0 auto" alt="...">
            <div class="carousel-caption">
                <div class="col-md-12 col-sm-12">
                    <h1>健亲宝云健康智能检测系统用户端  APP下载</h1>

                    <p>随时随地关爱亲人健康</p>
                    <ul>
                        <li>
                            <a href="/app/健亲宝用户端7.1.apk" class="android hb-app-btn">
                                <img class="d-icon" src="/images/ico-android.png">Android版
                                <img src="/images/userapp_qrcode.png" alt="二维码"  width="160" style="margin-top:10px;" class="android-qrcode">
                            </a></li>
                        <li>
                            <a href="https://itunes.apple.com/cn/app/jian-qin-bao/id1091258146?l=en&mt=8" target="_blank" class="ios hb-app-btn">
                                <img class="d-icon" src="/images/ico-ios.png">IOS版
                                <img src="/images/ios_app_ewm.png" alt="二维码" width="160" style="margin-top:10px;" class="android-qrcode">
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item" style="background: #f2f2f2" id="app_download_doctor_banner">
            <img src="/images/app_doctor_bg.png" height="700px" style="margin:0 auto" alt="...">
            <div class="carousel-caption">
                <div class="col-md-12 col-sm-12">
                    <h1>健亲宝云健康智能检测系统医生端  APP下载</h1>
                    <ul>
                        <li style="width: 15%;text-align: left">
                            <img src="/images/doctorapp_qrcode.png" alt="二维码"  width="160" style="margin-top:10px;margin-bottom: 10px" class="android-qrcode">
                            <br>
                            <a href="/app/健亲宝医生端7.1.apk" class="android hb-app-btn" style="text-align: center">
                                <img class="d-icon" src="/images/ico-android.png">Android版
                            </a>

                        </li>
                        <li style="width: 30%;text-align: left">
                            <img src="/images/doctor_app_ios.png" alt="二维码" width="160" style="margin-top:10px;margin-bottom: 10px"  class="android-qrcode">
                            <br>
                            <a href="https://itunes.apple.com/cn/app/id1138710592" target="_blank" class="ios hb-app-btn" style="text-align: center">
                                <img class="d-icon" src="/images/ico-ios.png">IOS版
                            </a></li>
                        <li style="text-align: right">
                            <p style="text-align: right;line-height: 35px;color:#fff">清晰的患者管理功能，<br>
                                全面掌握患者的基本信息、病历病史、检测数据、体检信息，<br>
                                帮助医生更见方便和病人沟通，了解病人的病情，<br>
                                随时随地的接受病人的反馈，便捷的实现院外随访<br>
                                让医患之间的沟通更专业，更准确，更有用
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container" id="qpp_tedian" style="margin-bottom: 40px">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p><ul>
                    <li>界面简洁  一键操作  云端存储  数据共享</li>
                    <li>反馈每次体检结果 ，自动生成健康趋势图，全面掌握身体健康情况；从此让健康看得见</li>
                    <li>数据分享给医生，随时随地与医生沟通交流，让医生对您的关心不再局限于医院</li>
                    <li>数据分享给亲人，随时随地掌握亲人身体健康情况，让关爱不再间断</li>
                </ul></p>
                <h1><a href="javascript:void(0)">下载APP</a>发现更多精彩</h1>
            </div>
        </div>
        <style>
            #app_download_icon{
                display: block;
                margin:0 auto;
                text-align: center;
                max-width: 50%;
                min-width: 480px;
            }
            #app_download_icon ul li{
                float: left;
                text-align: center;
            }
            #app_download_icon li p{
                margin:5px 20px;
                width: 120px;
                text-align: center;
            }
            #app_download_icon li .xiazai {
                margin:0;
            }
        </style>
        <div class="row">
            <div class="col-md-12 col-sm-12" >
                <div id="app_download_icon">
                <ul>
                    <li>
                        <a href="https://itunes.apple.com/cn/app/jian-qin-bao/id1091258146?l=en&mt=8" class="xiazai" target="_blank">
                            <img src="/images/iphone.png" width="110px"></a>
                        <p>IOS版用户端</p>
                    </li>
                    <li>
                        <a href="/app/健亲宝用户端7.1.apk" class="xiazai"><img src="/images/android.png" width="110px"></a>
                        <p style="margin: 5px 6px">Android版用户端</p>
                    </li>
                    <li>
                        <a href="/app/健亲宝医生端7.1.apk" class="xiazai">
                            <img src="/images/F438F3F0-8713-40FC-B036-598FF66A483C.png" style="height: 110px;"></a>
                        <p style="margin: 5px 24px">Android版医生端</p>
                    </li>
                    <li>
                        <a href="https://itunes.apple.com/cn/app/id1138710592" class="xiazai" target="_blank">
                            <img src="/images/F438F3F0-8713-40FC-B036-598FF66A483C.png" style="height: 110px;"></a>
                        <p style="margin: 5px 24px">IOS版医生端</p>
                    </li>
                </ul>
                <!--<a href="/app/jqb.apk" class="xiazai"><img src="/images/android_app_ewm.png" width="110px"></a>-->
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    selected_top_menu(3);
</script>