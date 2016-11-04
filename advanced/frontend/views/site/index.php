<?php
/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" style="margin-top:50px">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0"  class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<style>
				.box_img{width:100%;}
				.icon_play img{display: block;}
			</style>
			<img src="/images/xinzangkangfu_banner.jpg" alt="" class="box_img" />
			<div class="carousel-caption" style="left:30%;top:70%;">
				<div class="details-link" style="text-align: left">
					<a href="/site/cardiac" >了解更多</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/njdt_0.jpg" alt="...">
			<div class="carousel-caption">
				<div class="details-link-buy">
					<a href="/site/order" class="">立即购买</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/njdt_2.jpg" alt="...">
			<div class="carousel-caption">
				<p class="big_title">健康云端&nbsp;&nbsp;智慧医疗</p>
				<p>云端传输，让家人的健康触手可及</p>
				<div class="details-link">
					<a href="/site/app" class="">下载APP</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/njdt_1.jpg" alt="...">
			<div class="carousel-caption">
				<p class="big_title">健康分析&nbsp;&nbsp;健康社交</p>
				<p>信息共享，紧密您与家人间的联系</p>
				<div class="details-link">
					<a href="/site/products" class="">了解更多</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/images/njdt_3.jpg" alt="...">
			<div class="carousel-caption">
				<p class="big_title">精准测量&nbsp;&nbsp;健康干预</p>
				<p>足不出户，享受专业健康服务</p>
				<div class="details-link">
					<a href="/site/products" class="">了解更多</a>
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
<div class="container" id="xtjs">
	<section>
		<div class="row">
			<div class="col-md-7 col-sm-6 text-center">
				<img src="/images/about_08.png">
			</div>
			<div class="col-md-5 col-sm-6">
				<h1>健亲宝云健康智能监测系统</h1>
				<p>集健康监测、健康管理、健康干预、健康社交为一体的新型智能移动健康系统，足不出户，即可享受专业健康服务。</p>
				<p>支持市场上常用的手机、平板、智能手表、电视等智能终端，把具有专业性能的医疗器械变成家庭必备的设备。</p>
				<div class="details-link" style="margin-top:40px">
					<a href="/site/products" class="">了解更多</a>
				</div>
			</div>
		</div>
	</section>
</div>
<!--<div class="container">
    <section>
        <div class="row">
            <div class="col-md-5 col-sm-5" style="text-align:right;">
                <img src="/images/jqb_1.JPG" alt="" width="340" style="border-radius:20px;text-align:right;">
            </div>
            <div class="col-md-6 col-sm-6">
                <h2 class="title">健亲宝云健康智能监测系统</h2>
                <div class="desc">
                    <p>是集健康监测、健康管理、健康干预、健康社交为一体的新型智能移动健康系统，可以满足足不出户，也能享受到
                    专业健康服务的需求。</p>
                    <p>健亲宝支持市场上常用的手机、平板、智能手表、电视等智能终端，把具有专业性能的医疗器械变成家庭必备的设备，
                    让健康的春风吹到千家万户。</p>
                </div>
                <div class="details-link">
                    <a href="#" class="">了解更多</a>
                </div>
            </div>
        </div>
    </section>
</div>-->
<div class="container" id="jkjc">
	<section>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>健康监测</h1>

				<p>一机多用,实时获取具有临床校准的六项生命特征信息</p>
				<div id="lxsmtz">
					<ul>
						<li class="tz1">心电</li>
						<li class="tz2">血压</li>
						<li class="tz3">血氧饱和度</li>
						<li class="tz4">呼吸率</li>
						<li class="tz5">心率</li>
						<li class="tz6">体温</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="container" id="jkgl">
	<section>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>健康管理</h1>

				<p>支持多个用户健康数据独立管理</p>
				<p>自动生成健康趋势图</p>
				<p>手机、电脑等智能终端随时查看</p>
			</div>
		</div>
	</section>
</div>
<div class="container" id="jkgy">
	<section>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h1>健康干预</h1>

				<p>智能、专业健康分析，自动生成健康趋势图</p>
				<p>自动生成用户健康报告，智能提出健康改进建议</p>
				<p>专属医疗服务团队实时提供专业健康改进方案</p>

			</div>
		</div>
	</section>
</div>
<div class="container" id="jksj">
	<section>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h1>健康社交</h1>

				<p>共享体检信息</p>
				<p>分享健康咨询</p>
				<p>加强家人、朋友、医患之间的交流</p>

			</div>
		</div>
	</section>
</div>
<div class="container" id="appxz">
	<section>
		<div class="row">
			<div class="col-md-4 col-sm-4" style="margin-left: 50%;text-align: center">
				<h1 style="margin-bottom: 10px;">健亲宝APP</h1>

				<p style="font-size:20px;margin-top:0">关注亲人健康<br>做您健康守护神</p>
				<!--<ul style="text-align: center">
					<li style="text-align: center">
				<a href="/app/jqb.apk" class="android hb-app-btn">
					<img class="d-icon" src="/images/ico-android.png">Android版
					<img src="/images/userapp_qrcode.png" alt="二维码"  width="160" style="margin-top:10px;" class="android-qrcode">
				</a>
						</li>
					<li>
				<a href="https://itunes.apple.com/cn/app/jian-qin-bao/id1091258146?l=en&mt=8" class="ios hb-app-btn">
					<img class="d-icon" src="/images/ico-ios.png">IOS版
					<img src="/images/ios_app_ewm.png" alt="二维码" width="160" style="margin-top:10px;" class="android-qrcode">
				</a>

					</li>
				</ul>-->
				<a href="site/app" target="_blank" class="a_btn_app">
					APP 下载
				</a>
			</div>
		</div>
	</section>
</div>
<script>
	selected_top_menu(0);
</script>