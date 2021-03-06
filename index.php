<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon" href="img/webclip.png" />
	<link rel="stylesheet" href="/styles.css">
	<?php
		$HTTP_USER_AGENT = getenv( "HTTP_USER_AGENT" );
		if( preg_match( "/(MSIE\s|Trident.*rv:)([0-9\.]+)|Edge/", $HTTP_USER_AGENT )  ) {
			echo "<link rel='stylesheet' href='/styles_ie.css' />";
		}
		if( preg_match( "/Android|iPhone/i", $HTTP_USER_AGENT )  ) {
			echo "<meta name='viewport' content='width=device-width, initial-scale=1' />
	<link rel='stylesheet' href='/styles_phone.css' />";
		}else{
			echo "<meta name='viewport' content='width=1100, user-scalable=yes' >";
		}
		if( preg_match( "/Android/i", $HTTP_USER_AGENT )  ) {
	echo "<link rel='stylesheet' href='/styles_android.css' />";
		}
	?>
	<meta name='viewport' content='width=1100, user-scalable=yes' >
	<title>OCTV 帯広シティーケーブル</title>
	<meta name="description" content="多彩なテレビチャンネルやプロバイダ込みの安定したインターネットサービスを超高速の光ファイバー、サポート手厚いオリジナルスマホのご提供。">

	<!-- Open Graph Protocol -->
    <meta property="og:type" content="company">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="OCTV 帯広シティーケーブル">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="多彩なテレビチャンネルやプロバイダ込みの安定したインターネットサービスを超高速の光ファイバー、サポート手厚いオリジナルスマホのご提供。">
    <meta property="og:site_name" content="OCTV 帯広シティーケーブル">
    <meta property="og:image" content="/img/webclip.png">
    <meta property="fb:admins" content="100003975555887" />
    <!-- Microdata -->
    <meta itemprop="description" content="多彩なテレビチャンネルやプロバイダ込みの安定したインターネットサービスを超高速の光ファイバー、サポート手厚いオリジナルスマホのご提供。">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link itemprop="url" href="https://www.octv.jp/">
	<link itemprop="image" href="img/webclip.png">
	<link href="/price-wizard/css/main.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--top slide-->
	<link rel="stylesheet" href="js/swiper.min.css">
	<!--touch-->
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-1354128-13', 'auto');
	  ga('send', 'pageview');

	</script>
	<script src="js/init_head.js"></script>
	<?php
		$HTTP_USER_AGENT = getenv( "HTTP_USER_AGENT" );
		if( preg_match( "/Android|iPhone/i", $HTTP_USER_AGENT )  ) {
			echo "
	<script src='/js/menu/jquery.mmenu.min.js'></script>
	<link href='/js/menu/jquery.mmenu.css' type='text/css' rel='stylesheet' />
	<script src='/js/menu/smmenu_init.js'></script>
	<link href='/js/menu/extensions/effects/jquery.mmenu.effects.css' type='text/css' rel='stylesheet' />
	<link href='/js/menu/extensions/themes/jquery.mmenu.themes.css' type='text/css' rel='stylesheet' />";
		}else{
			echo "<script src='/js/init_search.js'></script>";
		}
	?>
	<script src='js/init_search.js'></script>
	<script type="text/javascript">
		(function () {
			var tagjs = document.createElement("script");
			var s = document.getElementsByTagName("script")[0];
			tagjs.async = true;
			tagjs.src = "//s.yjtag.jp/tag.js#site=1sAKz72";
			s.parentNode.insertBefore(tagjs, s);
		}());
	</script>
	<noscript>
	<iframe src="https://b.yjtag.jp/iframe?c=1sAKz72" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</noscript>

	<script type="application/ld+json">
{
	"@context" : "http://schema.org/",
	"@type" : "Organization",
	"@id" : "index.html",
	"url" : "index.html",
	"name" : "帯広シティーケーブル OBIHIRO CITY CABLE Co .,LTD.",
	"logo" : "img/header_home.svg",
   "alternateName" : "OCTV",
	"image" : "https://www.octv.jp/img/wall_space_pc.jpg",
	"description" : "多彩なテレビチャンネルやプロバイダ込みの安定したインターネットサービスを超高速の光ファイバー、サポート手厚いオリジナルスマホのご提供。",
   "address" : [{
		    "@type" : "PostalAddress",
		    "streetAddress" : "東1条南8丁目2番地",
		    "addressLocality" : "帯広市",
		    "addressRegion" : "北海道",
		    "postalCode" : "0800801"
    }],
	"ContactPoint" : [{
    	"@type" : "ContactPoint",
    	"telephone" : "+81155231511",
       "contactType": "sales",
       "areaServed": [ "JP" ]
	}],
    "sameAs": [
			"https://ja.wikipedia.org/wiki/%E5%B8%AF%E5%BA%83%E3%82%B7%E3%83%86%E3%82%A3%E3%83%BC%E3%82%B1%E3%83%BC%E3%83%96%E3%83%AB",
			"https://twitter.com/octv_tweet",
			"https://www.facebook.com/Octv-%E5%B8%AF%E5%BA%83%E3%82%B7%E3%83%86%E3%82%A3%E3%83%BC%E3%82%B1%E3%83%BC%E3%83%96%E3%83%AB-119031151570509/",
			"https://www.youtube.com/channel/UCD7VIF7QPpfdyOlt2iZr_Ww"
		]
}
	</script>


</head>
<body id="tv" class="product">

	<div class="wrap">
    
	<header>
		<nav>
			<ul>
				<li><a href="/"><img src="/img/header_home.svg" alt="ホーム" /></a></li>
				<li><a href="/plan/"><img src="/img/header_plan.svg" alt="プラン" /></a></li>
				<li><a href="/tv/"><img src="/img/header_tv.svg" alt="テレビ" /></a></li>
				<li><a href="/net/"><img src="/img/header_net.svg" alt="ネット" /></a></li>
            	<li><a href="/ocsm/"><img src="/img/header_sp.svg" alt="スマホ" /></a></li>
				<li><a href="/phone/"><img src="/img/header_tel.svg" alt="電話" /></a></li>
				<li><a href="/support/"><img src="/img/header_support.svg" alt="サポート" /></a></li>
            	<li><a href="https://my-page.octv.ne.jp/"><img src="/img/header_mypage.svg" alt="マイページ" /></a></li>
				<li><a id="headersearch"><img src="/img/header_search.svg" alt="検索" /></a></li>
			</ul>
		</nav>
	</header>
	<?php
		$HTTP_USER_AGENT = getenv( "HTTP_USER_AGENT" );
		if( preg_match( "/Android|iPhone/i", $HTTP_USER_AGENT )  ) {
			include("/home/octvhp/public_html/smmenu.php");
		}else{
			echo "
		<div id='headsearcharea'>
			<iframe src='/searchresult.php' scrolling='no' frameborder='no'></iframe>
		</div>";
		}
	?>

	<script src="/js/jquery.scrollend.js"></script>
	<div class="opennav">
		<nav>
			<a href="/" id="opennavhome"></a>
			<a href="tel:0120-16-6511" id="opennavphone"><img src="/img/freedial.svg" alt="フリーダイヤル" />0120-16-6511<span class="caption">平日 9:00-18:00／土日祝 9:00-17:00</span></a>
			<a href="#footform" id="opennavform"><span>メールで</span>お問合わせ</a>
		</nav>
	</div>

		<main>
			<div id="pw">
				<div class="service-choose">

					<!-- Service Start -->
					<section class="service-start">
						<div>
							<div style="font-size: 30px; font-weight: bold;">ご希望のサービスを押してください</div>
						</div>
						<div style="display: flex; justify-content: center;margin-top: 20px;">
							<div class="service-item">
								<div>
									<div>テレビ</div>
									<div class="checkbox-service">
										<input type="checkbox" id="service-start-cb1"/>
										<label for="service-start-cb1"></label>
									</div>
								</div>
							</div>
							<div class="service-item">
								<div>
									<div>インターネット</div>
									<div class="checkbox-service">
										<input type="checkbox" id="service-start-cb2"/>
										<label for="service-start-cb2"></label>
									</div>
								</div>
							</div>
							<div class="service-item">
								<div>
									<div>固定電話</div>
									<div class="checkbox-service">
										<input type="checkbox" id="service-start-cb3"/>
										<label for="service-start-cb3"></label>
									</div>
								</div>
							</div>
						</div>
						<div style="display: flex; justify-content: center; margin-top: 10px;margin-bottom: 30px;">
							<div class="service-item">
								<div>
									<div>スマホ</div>
									<div class="checkbox-service">
										<input type="checkbox" id="service-start-cb4"/>
										<label for="service-start-cb4"></label>
									</div>
								</div>
							</div>
							<div class="service-item">
								<div>
									<div>OTT</div>
									<div class="checkbox-service">
										<input type="checkbox" id="service-start-cb5"/>
										<label for="service-start-cb5"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="service-next-btn">
							<button onclick="chooseService()">続ける</button>
						</div>
					</section>

					<!-- TV Sevice Section -->
					<section class="tv-service">
						<div class="tv-service-title">
							<div>ご希望のテレビプランをお選びください</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="tv-service-body">
							<div class="tv-service-item">
								<div class="title">ひかりテレビ<br/>ベーシック</div>
								<div class="detail">地デジ・BS・CS の海外人気ドラマ、日本の名作ドラマ、懐かしの歌謡曲、見逃せない野球。様々なジャンルを網羅する大満足のチャンネル数。</div>
								<div class="price">￥4,000/ 月</div>
								<div class="service-radio">
									<input type="radio" id="tv-service-rd1" name="tv-service-radio" checked/>
									<label for="tv-service-rd1"></label>
								</div>
							</div>
							<div class="tv-service-item" style="margin-left: 20px;margin-right: 20px;">
								<div class="title">ひかりテレビ<br/>バリュー</div>
								<div class="detail">アニメ、スポーツ、ドキュメンタリー、映画。幅広く厳選したチャンネルをお得に楽しむなら、ひかりテレビバリュー。<div style="color:white">REPEATCARACTERSREPEAT</div></div>
								<div class="price">￥3,600/ 月</div>
								<div class="service-radio">
									<input type="radio" id="tv-service-rd2" name="tv-service-radio"/>
									<label for="tv-service-rd2"></label>
								</div>
							</div>
							<div class="tv-service-item">
								<div class="title">地デジ＆BS<br/><div style="color:white">REPEATCARACTERS</div></div>
								<div class="detail">地域の情報をお届けするOCTV オリジナルの番組と地上波にはない魅力の BS チャンネルをプラス。<div style="color:white">REPEATCARACTERSREPEAT</div></div>
								<div class="price">￥2,000/ 月</div>
								<div class="service-radio">
									<input type="radio" id="tv-service-rd3" name="tv-service-radio"/>
									<label for="tv-service-rd3"></label>
								</div>
							</div>
						</div>
						<div class="tv-service-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- TV Option Section -->
					<section class="tv-option">
						<div class="tv-option-title">
							<div>テレビオプション</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="tv-option-body">
							<div class="option-item">
								<div class="title">受信チューナー標準タイプ
									<div class="price">
										<div>月額￥0</div>
										<div class="service-radio">
											<input type="radio" id="tv-option-rd1"  name="tv-option-radio" checked>
											<label for="tv-option-rd1"></label>
										</div>
									</div>
								</div>
								<div class="detail">OCTV を視聴するために必要な STB。</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">受信チューナー Panasonic TZ-LT1000BW
									<div class="price">
										<div>月額￥1,000</div>
										<div class="service-radio">
											<input type="radio" id="tv-option-rd2"  name="tv-option-radio">
											<label for="tv-option-rd2"></label>
										</div>
									</div>
								</div>
								<div class="detail">市販の HDD を接続して 2 番組を同時に録画可能。</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">受信チューナー KDDI ケーブルプラス STB-2
									<div class="price">
										<div>月額￥1,500</div>
										<div class="service-radio">
											<input type="radio" id="tv-option-rd3"  name="tv-option-radio">
											<label for="tv-option-rd3"></label>
										</div>
									</div>
								</div>
								<div class="detail">市販の HDD を接続して 2 番組を同時に録画。Netflix や Amazon Prime Video も。</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">受信チューナー Panasonic TZ-HT3000BW
									<div class="price">
										<div>月額￥2,000</div>
										<div class="service-radio">
											<input type="radio" id="tv-option-rd4"  name="tv-option-radio">
											<label for="tv-option-rd4"></label>
										</div>
									</div>
								</div>
								<div class="detail">受信チューナー Panasonic TZ-HT3000BW</div>
							</div>
						</div>
						<div class="tv-option-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Internet Sevice Section -->
					<section class="internet-service">
						<div class="internet-service-title">
							<div>ご希望のインターネットプランをお選びください</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="internet-service-body">
							<div class="internet-service-item">
								<div class="title">ひかりネット<br/>ライト</div>
								<div class="detail">メールや動画サイト、ネット閲覧をするには十分はスピード。下り10Mbps・上り10Mbps</div>
								<div class="price">￥3,500/ 月</div>
								<div class="service-radio">
									<input type="radio" id="internet-service-rd1"  name="internet-service-radio" checked/>
									<label for="internet-service-rd1"></label>
								</div>
							</div>
							<div class="internet-service-item" style="margin-left: 20px;margin-right: 20px;">
								<div class="title">ひかりテレビ<br/>バリュー</div>
								<div class="detail">もっと快適にネット生活を楽しみたい方。下り50Mbps・上り25Mbps</div>
								<div class="price">￥4,500/ 月</div>
								<div class="service-radio">
									<input type="radio" id="internet-service-rd2"  name="internet-service-radio"/>
									<label for="internet-service-rd2"></label>
								</div>
								
							</div>
							<div class="internet-service-item">
								<div class="title">ひかりネット<br/>ハイパー</div>
								<div class="detail">ネットゲームで楽しんだり、全員がネットをよく使うご家庭。下り250Mbps・上り25Mbps</div>
								<div class="price">￥5,500/ 月</div>
								<div class="service-radio">
									<input type="radio" id="internet-service-rd3"  name="internet-service-radio"/>
									<label for="internet-service-rd3"></label>
								</div>
							</div>
						</div>
						<div class="internet-service-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Internet Option Section -->
					<section class="internet-option">
						<div class="internet-option-title">
							<div>インターネットオプション</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="internet-option-body">
							<div class="option-item">
								<div class="title">不要
									<div class="price">
										<div>月額￥0</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd1" name="internet-option-radio-first" checked>
											<label for="internet-option-rd1"></label>
										</div>
										
									</div>
								</div>
								<div class="detail">Wi-Fi が不要な方や、ご自身でお手持ちの Wi-Fi 機器を使用される方</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">Wi-Fiレンタル
									<div class="price">
										<div>月額￥300</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd2" name="internet-option-radio-first">
											<label for="internet-option-rd2"></label>
										</div>
									</div>
									<div class="price" style="display: none;">
										<div>月額￥100</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd5" name="internet-option-radio-first">
											<label for="internet-option-rd5"></label>
										</div>
									</div>
								</div>
								<div class="detail">ONU 内蔵でこれ 1 台でお部屋スッキリ。</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">メッシュWi-Fiレンタル
									<div class="price">
										<div>月額￥500</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd3" name="internet-option-radio-first">
											<label for="internet-option-rd3"></label>
										</div>
									</div>
									<div class="price" style="display: none;">
										<div>月額￥200</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd6" name="internet-option-radio-first">
											<label for="internet-option-rd6"></label>
										</div>
									</div>
								</div>
								<div class="detail">壁やドア等の障害物が多い場所でも高速に繋がる親機と子機のセット</div>
							</div>
						</div>
						<div class="internet-option-body">
							<div class="option-item">
								<div class="title">コミサポ
									<div class="price">
										<div>月額￥350</div>
										<div class="service-radio">
											<input type="radio" id="internet-option-rd4" name="internet-option-radio-second" checked>
											<label for="internet-option-rd4"></label>
										</div>
									</div>
								</div>
								<div class="detail">機器の接続や不具合、操作方法等、困ったときに月 3 回まですぐに駆けつけます。（必須）※最低利用期間 6ヶ月</div>
							</div>
						</div>
						<div class="internet-option-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Home Phone -->
					<section class="hPhone-service">
						<div class="hPhone-service-title">
							<div>ご希望の固定電話プランをお選びください</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="hPhone-service-body">
							<div class="hPhone-service-item" style="margin-right: 20px;">
								<div class="title">ケーブルプラス<br/>電話</div>
								<div class="detail">au をお使いの方に。固定電話と au 電話の通話が 24 時間すべて無料になります。NTT 基本料より270 円お得。</div>
								<div class="price">￥1,330/ 月</div>
								<div class="service-radio">
									<input type="radio" id="hPhone-service-rd1" name="hPhone-service-radio" checked/>
									<label for="hPhone-service-rd1"></label>
								</div>
							</div>
							<div class="hPhone-service-item" style="margin-left: 20px;">
								<div class="title">ケーブル<br/>ライン</div>
								<div class="detail">softbank をお使いの方に。固定電話と softbank 電話の通話が 24 時間すべて無料。NTT 基本料より310 円お得。</div>
								<div class="price">￥1,290/ 月</div>
								<div class="service-radio">
									<input type="radio" id="hPhone-service-rd2" name="hPhone-service-radio"/>
									<label for="hPhone-service-rd2"></label>
								</div>
							</div>
						</div>
						<div style="font-size: 15px;margin-bottom: 20px;">※別途ユニバーサルサービス料、通話料がかかります。</div>
						<div class="hPhone-service-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Cell Phone Service -->
					<section class="cPhone-service">
						<div class="cPhone-service-title">
							<div>ご希望のスマホプランをお選びください</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div style="font-size: 15px;">※テレビまたはインターネットを併用される場合のシミュレーションです</div>
						<div class="cPhone-service-body">
							<div class="cPhone-service-item" style="margin-right: 20px;">
								<div class="title">音声<br/>プラン</div>
								<div class="detail">通話機能とデータ通信がセットになった、お得なプラン。現在お使いの電話番号をそのままご利用可能。</div>
								<div class="service-radio">
									<input type="radio" id="cPhone-service-rd1" name="cPhone-service-radio" checked/>
									<label for="cPhone-service-rd1"></label>
								</div>
							</div>
							<div class="cPhone-service-item" style="margin-left: 20px;">
								<div class="title">データ<br/>プラン</div>
								<div class="detail">データ通信のみのプラン。ポケット Wi-Fi や iPad 等のタブレット、2 台目のスマホ、お子様向けのスマホに。</div>
								<div class="service-radio">
									<input type="radio" id="cPhone-service-rd2" name="cPhone-service-radio"/>
									<label for="cPhone-service-rd2"></label>
								</div>
							</div>
						</div>
						<div class="cPhone-service-next-btn">
							<button>続ける</button>
						</div>
					</section>


				<!-- Cell Phone Option Section -->
					<!-- Voice Plan -->
					<section class="cPhone-option">
						<div class="cPhone-option-title">
							<div>スマホオプション</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="cPhone-option-body">
							<div class="option-item">
								<div class="title">3GB 音声プラン
									<div class="price">
										<div>月額￥1,980</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-option-rd1" name="cPhone-option-radio-first" checked/>
											<label for="cPhone-option-rd1"></label>
										</div>
									</div>
								</div>
								<div class="detail">あまりデータ通信を行わない方向け</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">5GB 音声プラン
									<div class="price">
										<div>月額￥2,580</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-option-rd2" name="cPhone-option-radio-first"/>
											<label for="cPhone-option-rd2"></label>
										</div>
									</div>
								</div>
								<div class="detail">平均的な利用量で費用を節約したい方</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">7GB 音声プラン
									<div class="price">
										<div>月額￥2,980</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-option-rd3" name="cPhone-option-radio-first"/>
											<label for="cPhone-option-rd3"></label>
										</div>
									</div>
								</div>
								<div class="detail">動画やゲーム、モバイルデバイスで仕事を行う方</div>
							</div>
						</div>
						<div class="cPhone-option-body">
							<div class="option-item">
								<div class="title">1０分かけ放題
									<div class="price">
										<div>月額￥850</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-option-rd4" name="cPhone-option-radio-second"/>
											<label for="cPhone-option-rd4"></label>
										</div>
									</div>
								</div>
								<div class="detail">1 回 10 分までの通話が何度でもかけ放題</div>
							</div>
						</div>
						<div class="cPhone-option-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Data Plan -->
					<section class="cPhone-second-option">
						<div class="cPhone-option-title">
							<div>スマホオプション</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="cPhone-option-body">
							<div class="option-item">
								<div class="title">3GB データプラン
									<div class="price">
										<div>月額￥1,280</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-second-option-rd1" name="cPhone-second-option-radio-first" checked/>
											<label for="cPhone-second-option-rd1"></label>
										</div>
									</div>
								</div>
								<div class="detail">あまりデータ通信を行わない方向け</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">5GB データプラン
									<div class="price">
										<div>月額￥1,880</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-second-option-rd2" name="cPhone-second-option-radio-first"/>
											<label for="cPhone-second-option-rd2"></label>
										</div>
									</div>
								</div>
								<div class="detail">平均的な利用量で費用を節約したい方</div>
								<hr style="height: 1px;" />
							</div>
							<div class="option-item">
								<div class="title">7GB データプラン
									<div class="price">
										<div>月額￥2,480</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-second-option-rd3" name="cPhone-second-option-radio-first"/>
											<label for="cPhone-second-option-rd3"></label>
										</div>
									</div>
								</div>
								<div class="detail">動画やゲーム、モバイルデバイスで仕事を行う方</div>
							</div>
						</div>
						<div class="cPhone-option-body">
							<div class="option-item">
								<div class="title">1０分かけ放題
									<div class="price">
										<div>月額￥850</div>
										<div class="service-radio">
											<input type="radio" id="cPhone-second-option-rd4" name="cPhone-second-option-radio-second"/>
											<label for="cPhone-second-option-rd4"></label>
										</div>
									</div>
								</div>
								<div class="detail">1 回 10 分までの通話が何度でもかけ放題</div>
							</div>
						</div>
						<div class="cPhone-second-option-next-btn">
							<button>続ける</button>
						</div>
					</section>

					

					<!-- OTT Sevice Section -->
					<section class="ott-service">
						<div class="ott-service-title">
							<div>ご希望の OTT プランをお選びください</div>
							<div class="back-btn">
								<button>&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="ott-service-body">
							<div class="ott-service-item">
								<div class="title">Netflixベーシック</div>
								<div class="detail">同時接続1台のみ。</div>
								<div class="price">￥880/ 月</div>
								<div class="service-radio">
									<input type="radio" id="ott-service-cb1" name="ott-service" checked/>
									<label for="ott-service-cb1"></label>
								</div>
							</div>
							<div class="ott-service-item" style="margin-left: 20px;margin-right: 20px;">
								<div class="title">Netflixスタンダード</div>
								<div class="detail">同時接続2台まで。高画質のおすすめプラン！</div>
								<div class="price">￥1320/ 月</div>
								<div class="service-radio">
									<input type="radio" id="ott-service-cb2" name="ott-service"/>
									<label for="ott-service-cb2"></label>
								</div>
							</div>
							<div class="ott-service-item">
								<div class="title">Netflixプレミアム</div>
								<div class="detail">同時接続4台まで。4K+HDRで最高画質のプレミアムプラン！</div>
								<div class="price">￥1980/ 月</div>
								<div class="service-radio">
									<input type="radio" id="ott-service-cb3" name="ott-service"/>
									<label for="ott-service-cb3"></label>
								</div>
							</div>
						</div>
						<div class="ott-service-next-btn">
							<button>続ける</button>
						</div>
					</section>

					<!-- Special Discount -->
					<section class="special-discount">
						<div class="special-discount-title">
							<div>セット割プラン「得割」</div>
						</div>
						<div class="special-discount-detail">
							当社取扱いクレジットカード（NC おびひろ、日専連ジェミス、VISA、JCB、Master、アメックス、ダイナース）<br/>でお支払いいただき、2 年間のご利用の場合、特別価格が適用されます。<br />※同一名義、同一回線でのご利用が条件となります。
						</div>
						<div style="display: flex;align-items: center;justify-content: center;margin-top: 40px;">
							<div>
								<img src="./img/creditcard.png" width="150" height="100">
								<div style="font-size: 20px;">クレジットカード</div>
							</div> 
							<div style="margin-left: 20px;margin-right: 20px;font-size: 40px;">+</div>
							<div>最低<br>ご利用期間2年</div>
							<div style="margin-left: 20px;margin-right: 20px;font-size: 40px;">=</div>
							<div>
								<div>月々最大</div>
								<div><span style="font-size: 45px;font-weight: bolder;">2,087</span>円お得</div>
							</div>
						</div>
						<div class="service-radio" style="margin-top: 30px;">
							<input type="radio" id="special-discount-yes" name="special-discount" checked/>
							<label for="special-discount-yes" style="display: flex;align-items: center;margin-left: 30%;"><span style="margin-left: 10px;">はい、利用します</span></label>
						</div>
						<div class="service-radio" style="margin-top: 10px;margin-bottom: 30px;">
							<input type="radio" id="special-discount-no" name="special-discount"/>
							<label for="special-discount-no" style="display: flex;align-items: center;margin-left: 30%;"><span style="margin-left: 10px;">いいえ、利用しません</span></label>
						</div>
						<div class="special-discount-next-btn">
							<button onclick="goToTotalPrice()">続ける</button>
						</div>
					</section>

					<!-- Total Price -->
					<section class="total-price">
						<div class="total-price-title">
							<div>お選びになったプランの料金シミュレーション</div>
							<div class="back-btn">
								<button onclick="backToSpecialDiscount()">&#x25c0; 戻る</button>
							</div>
						</div>
						<div class="total-price-body">
							<div class="option-item tv-item">
								<div class="plan-item">
									<div></div>
									<button onclick="changeTVService()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<div class="plan-item">
									<div></div>
									<button onclick="changeTVOption()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<hr>
							</div>
							
							<div class="option-item internet-item">
								<div class="plan-item">
									<div></div>
									<button onclick="changeInternetService()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<div class="plan-item">
									<div></div>
									<button onclick="changeInternetOption()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<div class="plan-item">
									<div></div>
									<button style="visibility: hidden;">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<hr>
							</div>
							<div class="option-item hphone-item">
								<div class="plan-item">
									<div></div>
									<button onclick="changeHPhoneService()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price">￥1,330</div>
								</div>
								<hr>
							</div>
							<div class="option-item cphone-item">
								<div class="plan-item" style="display: flex;align-items: center;">
									<div></div>
									<button onclick="changeCPhoneService()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<div class="plan-item" style="display: flex;align-items: center;">
									<div></div>
									<button onclick="changeCPhoneOption()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<div class="plan-item" style="display: flex;align-items: center;">
									<div></div>
									<button style="visibility: hidden;">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<hr>
							</div>
							<div class="option-item ott-item">
								<div class="plan-item">
									<div></div>
									<button onclick="changeOttService()">この項目を変更 &#x25b6;</button>	
									<div class="name"><span>&#x25cf;</span><span></span></div>
									<div class="price"></div>
								</div>
								<hr>
							</div>
							
							<div class="off-value">
								<div>セット割引 ￥690 OFF</div>
								<div>さらに得割 ￥1,387 OFF</div>
							</div>
							<div class="price-value"></div>
							<div class="total-price-next-btn">
								<button class="call-btn" onclick="showCallUs()">詳細について電話で聞きたい</button>
								<button class="online-app-btn" onclick="showOnlineApp()">上記のプランの申し込みを検討したい</button>
							</div>

						</div>
					</section>
					
					<!-- Call US -->
					<section class="call-us">
						<div class="call-us-title">
							<div>営業担当へお電話ください <img src="./img/telephone.png" width="70" height="70"><span>0120-16-6511</span></div>
							<div>平日 9:00-18:00 ／土日祝 9:00-17:00</div>
						</div>
						
						<div class="call-us-body">
							<div class="print-btn">
								<div>あなたのシミュレーション</div>
								<button onclick="printInvoice()"><i class="fa fa-print"></i>プリント</button>
							</div>
							<hr>
							<div class="print-preview">
								<div class="option-item tv-item">
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<hr>
								</div>
								
								<div class="option-item internet-item">
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<div class="plan-item">
										<div></div>
										<button style="visibility: hidden;">この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<hr>
								</div>
								<div class="option-item hphone-item">
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price">￥1,330</div>
									</div>
									<hr>
								</div>
								<div class="option-item cphone-item">
									<div class="plan-item" style="display: flex;align-items: center;">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<div class="plan-item" style="display: flex;align-items: center;">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<div class="plan-item" style="display: flex;align-items: center;">
										<div></div>
										<button style="visibility: hidden;">この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<hr>
								</div>
								<div class="option-item ott-item">
									<div class="plan-item">
										<div></div>
										<button>この項目を変更 &#x25b6;</button>	
										<div class="name"><span>&#x25cf;</span><span></span></div>
										<div class="price"></div>
									</div>
									<hr>
								</div>
								
								<div class="off-value">
									<div>セット割引 ￥690 OFF</div>
									<div>さらに得割 ￥1,387 OFF</div>
								</div>
								<div class="price-value"></div>
							</div>
						</div>
					</section>

					<!-- Online Application -->
					<section class="online-app">
						<div class="online-app-title">
							<div>お客様の情報を入力ください</div>
							<div>※個人情報取扱についてはこちらのページをご覧ください。</div>
						</div>
						<div class="online-app-body">
							<span class="alert-span">*この項目は必須です</span>
							<div>
								<input class="nameinput" type="text" placeholder="お名前" name="name"/>
							</div>
							<span class="alert-span">*この項目は必須です</span>
							<div>
								<input class="phoneinput" type="text" placeholder="電話番号" name="phonenumber" />
							</div>
							<div>
								<span>連絡可能な時間帯</span>
								<select>
									<option>午前中</option>
									<option>午後中</option>
								</select>
							</div>
							<span class="alert-span">*この項目は必須です</span>
							<div>
								<input class="emailinput" type="email" placeholder="E-mail" name="email"/>
							</div>
							<div>
								<div style="flex-direction: column;width: 100%;">
									<span class="alert-span">*この項目は必須です</span>
									<input class="addressinput" type="text" placeholder="ご住所" name="address"/>
								</div>
								<div style="flex-direction: column;width: 100%;">
									<span class="alert-span">*この項目は必須です</span>
									<select style="width: 100%;">
										<option>一戸建て</option>
										<option>集合住宅</option>
										<option>その他</option>
									</select>
								</div>
							</div>
							<div>
								<textarea placeholder="ご不明な点等"></textarea>
							</div>
							<div class="online-app-send-btn">
								<button onclick="showThanksPage()">送信</button>	
							</div>
						</div>
					</section>


					
					<!-- Thanks Page -->
					<section class="thanks-page">
						<div class="thanks-page-title">
							<div>どうもありがとうございました。</div>
							<div>ご契約はまだ完了していません。担当者よりご連絡させていただきます。</div>
						</div>
						<div class="thanks-page-next-btn">
							<button onclick="goToWebSite()">トップページへ戻る</button>
						</div>
					</section>

				</div>
			</div>
		</main>
		<section class="form" role="form" id="footform">
	
			<div id="footform-inner">
				<h2>サービスのお申込み、また ご興味のある方は<br />お気軽にお問合せください</h2>
				<script src="/form/postman.js"></script>
				
				<form enctype="multipart/form-data" action="/form/postman.cgi" method="post" accept-charset="UTF-8">
					<input type="hidden" name="_" value="＿">
					<div>
						<input type="text" placeholder="お名前 ※必須" name="01_お名前 _" class="form-frame" />
						<input type="text" placeholder="お名前ふりがな" name="02_ふりがな" class="form-frame" />
						<input type="email" placeholder="メールアドレス ※必須" name="03__From_メールアドレス_e!_" class="form-frame" />
						<input type="email" placeholder="メールアドレス確認用" name="03__From_メールアドレス_e!_" class="form-frame">
						<input type="text" placeholder="住所 ※必須" name="04_ご住所_" class="form-frame" />
					</div>
					<div>
						<input type="tel" placeholder="電話番号 ※必須" name="05_電話番号_A_" class="form-frame" />
						<select name="06_対応方法_" class="form-frame" id="select">
						<option disabled="disabled">− お問合せ項目をお選びください −</option>
						<option value="資料希望">資料希望</option>
						<option value="入会希望">入会希望</option>
						<option value="説明希望">説明希望</option>
						<option value="プラン変更">プラン変更</option>
						</select>
						<textarea name="07_お問合せ内容_" class="form-frame" placeholder="お問合せ内容 ※必須"></textarea>
					</div>
					<input type="hidden" name="_THANKS" value="https://www.octv.jp/contact/thanks.php" />
					<input type="hidden" name="_MSG_【OCTV】お問合せありがとうございます" value="thanks1.txt" />
					<input type="hidden" name="_Subject" value="【ひかりテレビ】サービスに関するお問合せ" />
					<input type="hidden" name="08_送信元ページ" value="https://www.octv.jp/tv/" />
					<input type="submit" value="内容を送信する" class="gray-sq" name="個人情報保護方針に同意" />
				</form>
				<p class="caption">※個人情報取扱については<a href="/about/privacy-policy.php">こちらのページ</a>をご覧ください。送信された場合は当サイト情報保護方針に同意したものと致します。</p>
			</div>
			
		</section>
		
		<aside role="navigation" class="footarea-banner">
			<ul>
				<li><a href="/plan/"><img src="/img/footbanner_02.png" alt="おすすめプラン" /></a></li><li><a href="/ocsm/"><img src="/img/footbanner_01.png" alt="ocスマホ" /></a></li><li><a href="/octvsc/"><img src="/img/footbanner_03.png" alt="OCTVサービスセンター" /></a></li>
			</ul>
		</aside>
		
		<footer>
			<div class="inner">

					<div id="banners">
						<ul>
							
							<li><a href="http://kachimai.jp/" target="_blank"><img src="/img/foot_banner_kachimai.svg" alt="十勝毎日新聞社" /></a></li>
							<li><a href="http://www.shopch.jp/" target="_blank"><img src="/img/foot_banner_shop.svg" alt="SHOPチャンネル" /></a></li>
							<li><a href="/img/regulation.pdf" target="_blank"><img src="/img/foot_banner_regulation.svg" alt="当社の放送基準" /></a></li>
							<li><a href="/about/safetymark.php"><img src="/img/foot_banner_safe.svg" alt="OCTVは安全安心マークを取得しています" /></a></li>
						</ul>
					</div>
			
				<div class="foot-left">
					<div class="row">
						<h3>サービス</h3>
						<ul>
						<li><a href="/tv/">テレビ</a></li>
							<li><a href="/net/">ネット</a></li>
							<li><a href="/phone/">電話</a></li>
							<li><a href="/ocsm">スマホ</a></li>
							<li><a href="/plan/">おトクなプラン</a></li>
						</ul>
					</div>
					<div class="row">
						<h3>サポート</h3>
						<ul>
							<li><a href="/support/">サポートトップ</a></li>
							<li><a href="https://my-page.octv.ne.jp/">マイページ</a></li>
							<li><a href="/about/areamap.php">対応エリア</a></li>
							<li><a href="/commch/programs.php">コミチャン番組表</a></li>
							<li><a href="/support/application/post-180.php">約款</a></li>
							<li><a href="/contact/">お問合せ</a></li>
						</ul>
					</div>
					<div class="row">
						<h3>OCTVについて</h3>
						<ul>
							<li><a href="/about/">会社概要</a></li>
							<li><a href="/about/advertisement.php">広告募集</a></li>
							<li><a href="/about/recruit.php">採用情報</a></li>
							<li><a href="/about/privacy-policy.php">個人情報保護</a></li>
						</ul>
					</div>
				</div>
				
				<div class="foot-right">
					<div id="footinfo">
						<p><img src="/img/foot_logo.svg" alt="帯広シティーケーブル" /><a href="tel:0120-16-6511"><img src="/img/foot_tel.svg" alt="0120-16-6511" /></a><br />ご不明な点はお電話でお問合せください<br />平日 9:00-18:00／土日祝 9:00-17:00</p>
					</div>
				</div>
			</div>
		</footer>
	
		<!--top slide-->
		<script src="js/swiper.jquery.min.js"></script>
		<script src="js/init_foot.js"></script>

		<script type="text/javascript">
			//hiddenmenu
			var ua = window.navigator.userAgent.toLowerCase();
			var inq = $('#footform').offset().top + 0;
			$(window).scroll(function () {
							
					if ( $(window).scrollTop() > 200 && $(window).scrollTop() < inq) {
						$('.opennav').addClass('on');
					}
					else{
						$('.opennav').removeClass('on');
					}
				
			});
			//smooth
			$(document).ready(function(){
				$('a[href^="#footform"]').click(function(){
					var speed = 500;
					var href= $(this).attr("href");
					var target = $(href == "#" || href == "" ? 'html' : href);
					var position = target.offset().top;
					$("html, body").animate({scrollTop:position}, speed, "swing");
					return false;
				});
			});
		</script>

		<!-- jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			var allPlans = [
				{ id: "tv-service-rd1", service_name: "テレビ", plan_name: "ひかりテレビベーシック", price: 4000, enable: true, plan_type: "", detail: "地デジ・BS・CS の海外人気ドラマ、日本の名作ドラマ、懐かしの歌謡曲、見逃せない野球。様々なジャンルを網羅する大満足のチャンネル数" },
				{ id: "tv-service-rd2", service_name: "テレビ", plan_name: "ひかりテレビベーシック", price: 3600, enable: false, plan_type: "", detail: "アニメ、スポーツ、ドキュメンタリー、映画。幅広く厳選したチャンネルをお得に楽しむなら、ひかりテレビバリュー。" },
				{ id: "tv-service-rd3", service_name: "テレビ", plan_name: "地デジ＆BS", price: 2000, enable: false, plan_type: "", detail: "地域の情報をお届けするOCTV オリジナルの番組と地上波にはない魅力の BS チャンネルをプラス。" },

				{ id: "tv-option-rd1", service_name: "テレビ", plan_name: "受信チューナー標準タイプ", price: 0, enable: true, plan_type: "", detail: "OCTV を視聴するために必要な STB。" },
				{ id: "tv-option-rd2", service_name: "テレビ", plan_name: "受信チューナー Panasonic TZ-LT1000BW", price: 1000, enable: false, plan_type: "", detail: "市販の HDD を接続して 2 番組を同時に録画可能。" },
				{ id: "tv-option-rd3", service_name: "テレビ", plan_name: "受信チューナー KDDI ケーブルプラス STB-2", price: 1500, enable: false, plan_type: "", detail: "市販の HDD を接続して 2 番組を同時に録画。Netflix や Amazon Prime Video も。" },
				{ id: "tv-option-rd4", service_name: "テレビ", plan_name: "受信チューナー Panasonic TZ-HT3000BW", price: 2000, enable: false, plan_type: "", detail: "2 番組を同時に大容量内蔵 HDD に長時間で録画可能。" },

				{ id: "internet-service-rd1", service_name: "インターネット", plan_name: "ひかりネットライト", price: 3500, enable: true, plan_type: "", detail: "メールや動画サイト、ネット閲覧をするには十分はスピード。下り10Mbps・上り10Mbps" },
				{ id: "internet-service-rd2", service_name: "インターネット", plan_name: "ひかりネットミディアム", price: 4500, enable: false, plan_type: "", detail: "もっと快適にネット生活を楽しみたい方。下り50Mbps・上り25Mbps" },
				{ id: "internet-service-rd3", service_name: "インターネット", plan_name: "ひかりネットハイパー", price: 5500, enable: false, plan_type: "", detail: "ネットゲームで楽しんだり、全員がネットをよく使うご家庭。下り250Mbps・上り25Mbps" },

				{ id: "internet-option-rd1", service_name: "インターネット", plan_name: "不要", price: 0, enable: true, plan_type: "first", detail: "Wi-Fi が不要な方や、ご自身でお手持ちの Wi-Fi 機器を使用される方" },
				{ id: "internet-option-rd2", service_name: "インターネット", plan_name: "Wi-Fiレンタル", price: 300, enable: false, plan_type: "first", detail: "ONU 内蔵でこれ 1 台でお部屋スッキリ。" },
				{ id: "internet-option-rd3", service_name: "インターネット", plan_name: "メッシュWi-Fiレンタル", price: 500, enable: false, plan_type: "first", detail: "壁やドア等の障害物が多い場所でも高速に繋がる親機と子機のセット" },
				{ id: "internet-option-rd4", service_name: "インターネット", plan_name: "コミサポ", price: 350, enable: false, plan_type: "second", detail: "機器の接続や不具合、操作方法等、困ったときに月 3 回まですぐに駆けつけます。（必須）※最低利用期間 6ヶ月" },
				{ id: "internet-option-rd5", service_name: "インターネット", plan_name: "Wi-Fiレンタル", price: 100, enable: false, plan_type: "first", detail: "ONU 内蔵でこれ 1 台でお部屋スッキリ。" },
				{ id: "internet-option-rd6", service_name: "インターネット", plan_name: "メッシュWi-Fiレンタル", price: 200, enable: false, plan_type: "first", detail: "壁やドア等の障害物が多い場所でも高速に繋がる親機と子機のセット" },

				{ id: "hPhone-service-rd1", service_name: "固定電話", plan_name: "ケーブルプラス電話", price: 1330, enable: true, plan_type: "", detail: "au をお使いの方に。固定電話と au 電話の通話が24 時間すべて無料になります。NTT 基本料より270 円お得。" },
				{ id: "hPhone-service-rd2", service_name: "固定電話", plan_name: "ケーブルライン", price: 1290, enable: false, plan_type: "", detail: "softbank をお使いの方に。固定電話と softbank 電話の通話が 24 時間すべて無料。NTT 基本料より310 円お得。" },

				{ id: "cPhone-service-rd1", service_name: "スマホ", plan_name: "", price: "", plan_type: "音声プラン", enable: true, detail: "通話機能とデータ通信がセットになった、お得なプラン。現在お使いの電話番号をそのままご利用可能。"},
				{ id: "cPhone-service-rd2", service_name: "スマホ", plan_name: "", price: "", plan_type: "データプラン", enable: true, detail: "データ通信のみのプラン。ポケット Wi-Fi や iPad 等のタブレット、2 台目のスマホ、お子様向けのスマホに。"},
				{ id: "cPhone-option-rd1", service_name: "スマホ", plan_name: "3GB音声プラン", price: 1980, plan_type: "音声プラン", enable: true, detail: "あまりデータ通信を行わない方向け" },
				{ id: "cPhone-option-rd2", service_name: "スマホ", plan_name: "5GB音声プラン", price: 2580, plan_type: "音声プラン", enable: false, detail: "平均的な利用量で費用を節約したい方" },
				{ id: "cPhone-option-rd3", service_name: "スマホ", plan_name: "7GB音声プラン", price: 2980, plan_type: "音声プラン", enable: false, detail: "動画やゲーム、モバイルデバイスで仕事を行う方" },
				{ id: "cPhone-option-rd4", service_name: "スマホ", plan_name: "1０分かけ放題", price: 850, plan_type: "音声プラン", enable: false, detail: "1 回 10 分までの通話が何度でもかけ放題"},
				{ id: "cPhone-second-option-rd1", service_name: "スマホ", plan_name: "3GBデータプラン", price: 1280, plan_type: "データプラン", enable: true, detail: "あまりデータ通信を行わない方向け" },
				{ id: "cPhone-second-option-rd2", service_name: "スマホ", plan_name: "5GBデータプラン", price: 1880, plan_type: "データプラン", enable: false, detail: "あまりデータ通信を行わない方向け" },
				{ id: "cPhone-second-option-rd3", service_name: "スマホ", plan_name: "7GBデータプラン", price: 2480, plan_type: "データプラン", enable: false, detail: "あまりデータ通信を行わない方向け" },
				{ id: "cPhone-second-option-rd4", service_name: "スマホ", plan_name: "1０分かけ放題", price: 550, plan_type: "データプラン", enable: false, detail: "あまりデータ通信を行わない方向け" },

				{ id: "ott-service-cb1", service_name: "OTT", plan_name: "A", price: 880, enable: true, plan_type: "", detail: "explanation about A" },
				{ id: "ott-service-cb2", service_name: "OTT", plan_name: "B", price: 1320, enable: false, plan_type: "", detail: "explanation about B" },
				{ id: "ott-service-cb3", service_name: "OTT", plan_name: "C", price: 1980, enable: false, plan_type: "", detail: "explanation about C" },
			]
			
			var selectedPlan = []
			var serviceStartItem = [
				{ classname: ".tv-service", isEnable: false },
				{ classname: ".tv-option", isEnable: false },
				{ classname: ".internet-service", isEnable: false },
				{ classname: ".internet-option", isEnable: false },
				{ classname: ".hPhone-service", isEnable: false },
				{ classname: ".cPhone-service", isEnable: false },
				{ classname: ".cPhone-option", isEnable: false },
				{ classname: ".cPhone-second-option", isEnable: false },
				{ classname: ".ott-service", isEnable: false },
			]
			var enableValueOff = true
			var enableChangePlan = {
				classname: "",
				is_enable: false
			}
			var internetSecondOptionEnable = false;
			var discountPrice;
			var specialDiscountPrice;

			function chooseService() {

				// Register checked page to list variable for showing, pages unregisted will be skipped 
				if (document.querySelector("#service-start-cb1").checked) {
					serviceStartItem[0].isEnable = true
					serviceStartItem[1].isEnable = true
				}
				if (document.querySelector("#service-start-cb2").checked) {
					serviceStartItem[2].isEnable = true
					serviceStartItem[3].isEnable = true
				}
				if (document.querySelector("#service-start-cb3").checked) {
					serviceStartItem[4].isEnable = true
				}
				if (document.querySelector("#service-start-cb4").checked) {
					serviceStartItem[5].isEnable = true
					serviceStartItem[6].isEnable = true
					serviceStartItem[7].isEnable = true
				}
				if (document.querySelector("#service-start-cb5").checked) {
					serviceStartItem[8].isEnable = true
				}
				
				var enabledService = serviceStartItem.filter(item => item.isEnable === true)
				if (enabledService.length === 0) {
					alert("Please select service.")
					return
				}
				document.querySelector("#pw .service-choose .service-start").style.display = "none"
				document.querySelector("#pw .service-choose " + enabledService[0].classname).style.display = "block"
				for (let index = 0; index < enabledService.length; index++) {
					
					// eventListener for next button
					document.querySelector(`#pw ${enabledService[index].classname} ${enabledService[index].classname}-next-btn button`).onclick = function() {
						if (!enableChangePlan.is_enable) {
							var radios = document.querySelectorAll(`#pw ${enabledService[index].classname} input`)

							// Convert NodeList to array of objects
							radios = Array.prototype.slice.call(radios)
							var checkedRadio = radios.filter(radio => radio.checked === true)

							// Add current plan to selected variable
							for (let index = 0; index < checkedRadio.length; index++) {
								var checkedPlan = allPlans.filter(plan => plan.id === checkedRadio[index].id )
								if (checkedPlan[0] !== undefined) checkedPlan[0].enable = true
								selectedPlan.push(checkedPlan[0])
							}

							
							// Show or hide plan pages
							document.querySelector(`#pw .service-choose ${enabledService[index].classname}`).style.display = "none"
							if (enabledService[index].classname === ".internet-service") {
								if (document.getElementById("internet-service-rd1").checked) {
									document.querySelector("#pw .service-choose .internet-option").style.display = "block"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(2) > div.title > div").style.display = "flex"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(3) > div.title > div").style.display = "flex"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(2) > div.title > div.price:nth-child(2)").style.display = "none"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(3) > div.title > div.price:nth-child(2)").style.display = "none"
									return
								}
								if (document.getElementById("internet-service-rd2").checked || document.getElementById("internet-service-rd3")) {
									document.querySelector("#pw .service-choose .internet-option").style.display = "block"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(2) > div.title > div").style.display = "none"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(3) > div.title > div").style.display = "none"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(2) > div.title > div.price:nth-child(2)").style.display = "flex"
									document.querySelector("#pw > div > section.internet-option > div:nth-child(2) > div:nth-child(3) > div.title > div.price:nth-child(2)").style.display = "flex"
									return
								}
							}
							if (index === enabledService.length - 1) {
								if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 && 
									(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
									(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
									) {
										document.querySelector("#pw .service-choose .special-discount").style.display = "block"
										return
								}
								if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 &&
									(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0
									) {
										document.querySelector("#pw .service-choose .special-discount").style.display = "block"
										return
								}
								if ((selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
									(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
									) {
										document.querySelector("#pw .service-choose .special-discount").style.display = "block"
										return
								}
								goToTotalPrice()
								return
							}
							else {

								if (enabledService[index].classname === ".cPhone-service" && allPlans.filter(item => item.id === checkedRadio[0].id)[0].plan_type === "音声プラン") {
									document.querySelector(`#pw .service-choose ${enabledService[index + 1].classname}`).style.display = "block"
									return
								}
								if (enabledService[index].classname === ".cPhone-service" && allPlans.filter(item => item.id === checkedRadio[0].id)[0].plan_type === "データプラン") {
									document.querySelector(`#pw .service-choose ${enabledService[index + 2].classname}`).style.display = "block"
									return
								}
								if (enabledService[index].classname === ".cPhone-option") {
									if (enabledService[index+2] === undefined) {
										// document.querySelector("#pw .service-choose .special-discount").style.display = "block"
										if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 && 
											(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
											(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
											) {

												document.querySelector("#pw .service-choose .special-discount").style.display = "block"
												return
										}
										if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 &&
											(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0
											) {

												document.querySelector("#pw .service-choose .special-discount").style.display = "block"
												return
										}
										if ((selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
											(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
											) {

												document.querySelector("#pw .service-choose .special-discount").style.display = "block"
												return
										}
										goToTotalPrice();
										return
									}else {
										document.querySelector(`#pw .service-choose ${enabledService[index + 2].classname}`).style.display = "block"
										return
									}
								}
								if (enabledService[index].classname === ".cPhone-second-option") {
									document.querySelector(`#pw .service-choose ${enabledService[index + 1].classname}`).style.display = "block"
									return
								}
								document.querySelector(`#pw .service-choose ${enabledService[index + 1].classname}`).style.display = "block"

								
							}


						}else {

							// Change plan items in total price page
							// Delete previous plans
							selectedPlan = selectedPlan.filter(item => item.id.search(enableChangePlan.classname) === -1)

							var radios = document.querySelectorAll(`#pw .service-choose .${enableChangePlan.classname} input`)
							radios = Array.prototype.slice.call(radios)
							var checkedRadio = radios.filter(radio => radio.checked === true)
							for (let index = 0; index < checkedRadio.length; index++) {
								var editedPlan = allPlans.filter(item => item.id === checkedRadio[index].id)
								selectedPlan.push(editedPlan[0])
							}
							document.querySelector(`#pw .service-choose .${enableChangePlan.classname}`).style.display = "none"
							// if change Cell Phone plan type
							if (enableChangePlan.classname === "cPhone-service") {
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-option") === -1)
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-second-option") === -1)
								selectedPlan = selectedPlan.filter(item => item.id.search("ott-service") === -1)
								enableChangePlan.is_enable = false
								enableChangePlan.classname = ""
								radios = document.querySelectorAll(`#pw .service-choose .cPhone-service input`)
								radios = Array.prototype.slice.call(radios)
								checkedRadio = radios.filter(radio => radio.checked === true)
								editedPlan = allPlans.filter(item => item.id === checkedRadio[0].id)
								if (editedPlan[0].plan_type == "音声プラン") {
									document.querySelector("#pw .service-choose .cPhone-option").style.display = "block"
									return
								}
								if (editedPlan[0].plan_type == "データプラン") {
									document.querySelector("#pw .service-choose .cPhone-second-option").style.display = "block"
									return
								}
								
							}
							goToTotalPrice()
							enableChangePlan.classname = ""
							enableChangePlan.is_enable = false
						}
					}
					
					// eventListener for back button
					document.querySelector(`#pw ${enabledService[index].classname} .back-btn button`).onclick = function() {
						enableChangePlan.is_enable = false
						enableChangePlan.classname = ""
						document.querySelector(`#pw ${enabledService[index].classname}`).style.display = "none"
						if (index === 0) {
							serviceStartItem = [
								{ classname: ".tv-service", isEnable: false },
								{ classname: ".tv-option", isEnable: false },
								{ classname: ".internet-service", isEnable: false },
								{ classname: ".internet-option", isEnable: false },
								{ classname: ".hPhone-service", isEnable: false },
								{ classname: ".cPhone-service", isEnable: false },
								{ classname: ".cPhone-option", isEnable: false },
								{ classname: ".cPhone-second-option", isEnable: false },
								{ classname: ".ott-service", isEnable: false },
							]
							selectedPlan = []
							document.querySelector(`#pw .service-choose .service-start`).style.display = "block"

						}else {
							if (enabledService[index].classname === ".ott-service" && selectedPlan.filter(item => item.id.search("cPhone-option") !== -1).length !== 0) {
								document.querySelector(`#pw .service-choose ${enabledService[index-2].classname}`).style.display = "block"
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-option") === -1)
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-second-option") === -1)
								return		
							}
							if (enabledService[index].classname === ".ott-service" && selectedPlan.filter(item => item.id.search("cPhone-second-option") !== -1).length !== 0) {
								document.querySelector(`#pw .service-choose ${enabledService[index-1].classname}`).style.display = "block"
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-option") === -1)
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-second-option") === -1)
								return
							}
							if (enabledService[index].classname === ".cPhone-option") {
								document.querySelector(`#pw .service-choose ${enabledService[index-1].classname}`).style.display = "block"
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-service") === -1)
								return
							}
							if (enabledService[index].classname === ".cPhone-second-option") {
								document.querySelector(`#pw .service-choose ${enabledService[index-2].classname}`).style.display = "block"
								selectedPlan = selectedPlan.filter(item => item.id.search("cPhone-service") === -1)
								return
							}

						}
						document.querySelector(`#pw .service-choose ${enabledService[index-1].classname}`).style.display = "block"
						// Delete plan when go previous page
						selectedPlan = selectedPlan.filter(item => item.id.search(enabledService[index-1].classname.replace(".", "")) === -1)
					}
				}
			}

			// Total Price
			function goToTotalPrice() {
				
				selectedPlan = selectedPlan.filter(item => item !== undefined)

				enableValueOff = document.querySelector("#special-discount-yes").checked
				
				//Discount price setting
				//TV & Internet & Phone set
				if (selectedPlan.filter(item => item.id.search("tv-service-rd") !== -1).length !== 0 && 
					selectedPlan.filter(item => item.id.search("internet-service") !== -1).length !== 0 &&
					selectedPlan.filter(item => item.id.search("hPhone-service-rd") !== -1).length !== 0) {


					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 690
						specialDiscountPrice = 1387
						
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1050
						specialDiscountPrice = 1387
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1440
						specialDiscountPrice = 0
					}



					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 690
						specialDiscountPrice = 1387
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1050
						specialDiscountPrice = 1387
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1440
						specialDiscountPrice = 0
					}



					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 690
						specialDiscountPrice = 2087
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1050
						specialDiscountPrice = 2087
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 1440
						specialDiscountPrice = 0
					}




					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 650
						specialDiscountPrice = 1347
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1010
						specialDiscountPrice = 1347
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1400
						specialDiscountPrice = 0
					}




					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 650
						specialDiscountPrice = 1347
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1010
						specialDiscountPrice = 1347
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1400
						specialDiscountPrice = 0
					}




					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 650
						specialDiscountPrice = 2047
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1010
						specialDiscountPrice = 2047
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 1400
						specialDiscountPrice = 0
					}
				}

				//TV & Internet set
				if (selectedPlan.filter(item => item.id.search("tv-service-rd") !== -1).length !== 0 &&
					selectedPlan.filter(item => item.id.search("internet-service") !== -1).length !== 0 &&
					selectedPlan.filter(item => item.id.search("hPhone-service-rd") !== -1).length === 0) {


					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 350
						specialDiscountPrice = 0
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 5500) {
						discountPrice = 675
						specialDiscountPrice = 0
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 4000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 1100
						specialDiscountPrice = 0
					}


					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 350
						specialDiscountPrice = 0
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 5500) {
						discountPrice = 675
						specialDiscountPrice = 0
						
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 3600 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 1100
						specialDiscountPrice = 0
					}


					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 350
						specialDiscountPrice = 0
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 5500) {
						discountPrice = 675
						specialDiscountPrice = 0
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1)[0].price === 2000 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1).length === 0) {
						discountPrice = 1100
						specialDiscountPrice = 0
					}
				}

				//Internet & Phone set
				if (selectedPlan.filter(item => item.id.search("tv-service-rd") !== -1).length === 0 &&
					selectedPlan.filter(item => item.id.search("internet-service") !== -1).length !== 0 &&
					selectedPlan.filter(item => item.id.search("hPhone-service-rd") !== -1).length !== 0) {


					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 215
						specialDiscountPrice = 1039
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 355
						specialDiscountPrice = 1039
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1330) {
						discountPrice = 590
						specialDiscountPrice = 1039
					}

					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 3500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 175
						specialDiscountPrice = 999
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 4500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 315
						specialDiscountPrice = 999
					}
					if (selectedPlan.filter(item=>item.id.search("tv-service-rd") !== -1).length === 0 &&
						selectedPlan.filter(item=>item.id.search("internet-service") !== -1)[0].price === 5500 &&
						selectedPlan.filter(item=>item.id.search("hPhone-service-rd") !== -1)[0].price === 1290) {
						discountPrice = 550
						specialDiscountPrice = 999
					}
				}

					
					
				
				document.querySelector("#pw .service-choose .special-discount").style.display = "none"
				


				if (specialDiscountPrice === undefined) {
					document.querySelector("#pw section.total-price div.total-price-body div.off-value").style.display = "none"
				}
				if (!enableValueOff) {
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(1)").innerHTML = "セット割引 ￥"+ discountPrice +"&nbsp;&nbsp;OFF"
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(1)").style.display = "block"
					specialDiscountPrice = 0
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(2)").style.display = "none"
				}else {
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(1)").innerHTML = "セット割引 ￥"+ discountPrice + "&nbsp;&nbsp;&nbsp;OFF"
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(1)").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(2)").innerHTML = "さらに得割 ￥" + specialDiscountPrice + "&nbsp;&nbsp;OFF"
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(2)").style.display = "block"
				}

				if (specialDiscountPrice === 0) {
					document.querySelector("#pw section.total-price div.total-price-body div.off-value div:nth-child(2)").style.display = "none"
				}
				document.querySelector("#pw .service-choose .total-price").style.display = "block"

				
				// Insert all plan details to page
				document.querySelector("#pw section.total-price div.total-price-body div.tv-item").style.display = "none"
				document.querySelector("#pw section.total-price div.total-price-body div.internet-item").style.display = "none"
				document.querySelector("#pw section.total-price div.total-price-body div.hphone-item").style.display = "none"
				document.querySelector("#pw section.total-price div.total-price-body div.cphone-item").style.display = "none"
				document.querySelector("#pw section.total-price div.total-price-body div.ott-item").style.display = "none"
				
				var checkedService = selectedPlan.filter(item => item.id.search("tv-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("tv-option") !== -1)
				if (checkedService.length !==0) {
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.tv-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}


				checkedService = selectedPlan.filter(item => item.id.search("internet-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("internet-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.internet-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}


				checkedService = selectedPlan.filter(item => item.id.search("hPhone-service") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw section.total-price div.total-price-body div.hphone-item").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.hphone-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw section.total-price div.total-price-body div.hphone-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.hphone-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				
				}

				checkedService = selectedPlan.filter(item => item.id.search("cPhone-service") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_type
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(1) div.price").innerHTML = ""
				}
				checkedService = selectedPlan.filter(item => item.id.search("cPhone-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("cPhone-second-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw section.total-price div.total-price-body div.cphone-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}



				checkedService = selectedPlan.filter(item => item.id.search("ott-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw section.total-price div.total-price-body div.ott-item").style.display = "block"
					document.querySelector("#pw section.total-price div.total-price-body div.ott-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw section.total-price div.total-price-body div.ott-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw section.total-price div.total-price-body div.ott-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				
				}
				
				// total price calculation
				var totalPriceValue = 0
				for (let index = 0; index < selectedPlan.length; index++) {
					if (selectedPlan[index].price === "") continue
					totalPriceValue  = totalPriceValue + selectedPlan[index].price
				}
				if (specialDiscountPrice !== undefined && discountPrice !== undefined) {
					totalPriceValue = totalPriceValue - discountPrice - specialDiscountPrice;
				}
				
				document.querySelector("#pw section.total-price div.total-price-body .price-value").innerHTML = `合計月額 ￥${totalPriceValue.toLocaleString('en')}（税別）`

				
			}
			
			function backToSpecialDiscount() {
				if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 && 
					(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
					(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
					) {
						document.querySelector("#pw .service-choose .special-discount").style.display = "block"
						document.querySelector("#pw .service-choose .total-price").style.display = "none"
						return
				}
				if ((selectedPlan.filter(plan => plan.id.search("tv-service") !== -1)).length !== 0 &&
					(selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0
					) {
						document.querySelector("#pw .service-choose .special-discount").style.display = "block"
						document.querySelector("#pw .service-choose .total-price").style.display = "none"
						return
				}
				if ((selectedPlan.filter(plan => plan.id.search("internet-service") !== -1)).length !== 0 &&
					(selectedPlan.filter(plan => plan.id.search("hPhone-service") !== -1)).length !== 0
					) {
						document.querySelector("#pw .service-choose .special-discount").style.display = "block"
						document.querySelector("#pw .service-choose .total-price").style.display = "none"
						return
				}else {
					document.querySelector("#pw .service-choose .total-price").style.display = "none"
					var lastSP = selectedPlan[selectedPlan.length-1].id
					if (lastSP.indexOf("-rd") !== -1) {
						lastSP = lastSP.slice(0, lastSP.indexOf("-rd"))
					}
					else if (lastSP.indexOf("-cb") !== -1) {
						lastSP = lastSP.slice(0, lastSP.indexOf("-cb"))
					}					
					selectedPlan = selectedPlan.filter(item => item.id.search(lastSP) === -1)
					lastSP = "." + lastSP
					document.querySelector(`#pw .service-choose ${lastSP}`).style.display = "block"
				}
				
			}

			// Change plan items
			function changeTVService() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "tv-service"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.tv-service").style.display = "block"
			}
			function changeTVOption() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "tv-option"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.tv-option").style.display = "block"
			}
			function changeInternetService() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "internet-service"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.internet-service").style.display = "block"
			}
			function changeInternetOption() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "internet-option"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.internet-option").style.display = "block"
			}
			function changeHPhoneService() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "hPhone-service"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.hPhone-service").style.display = "block"
			}
			function changeCPhoneService() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "cPhone-service"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.cPhone-service").style.display = "block"
			}
			function changeCPhoneOption() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "cPhone-option"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.cPhone-option").style.display = "block"
			}
			function changeOttService() {
				enableChangePlan.is_enable = true
				enableChangePlan.classname = "ott-service"
				document.querySelector("#pw section.total-price").style.display = "none"
				document.querySelector("#pw .service-choose section.ott-service").style.display = "block"
			}

			// Call Us
			function showCallUs() {
				document.querySelector("#pw .service-choose .total-price").style.display = "none"

				if (specialDiscountPrice === undefined) {
					specialDiscountPrice = 0
					discountPrice = 0

					document.querySelector("#pw .call-us .print-preview div.off-value").style.display = "none"
				}else {
					if (!enableValueOff) {
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(1)").innerHTML = "セット割引 ￥"+ discountPrice +"&nbsp;&nbsp;OFF"
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(1)").style.display = "block"
						specialDiscountPrice = 0
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(2)").style.display = "none"
					}else {
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(1)").innerHTML = "セット割引 ￥"+ discountPrice + "&nbsp;&nbsp;&nbsp;OFF"
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(1)").style.display = "block"
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(2)").innerHTML = "さらに得割 ￥" + specialDiscountPrice + "&nbsp;&nbsp;OFF"
						document.querySelector("#pw .call-us .print-preview div.off-value div:nth-child(2)").style.display = "block"
					}
				}
				document.querySelector("#pw .service-choose .call-us").style.display = "block"

				// Insert all plan details to page
				document.querySelector("#pw .call-us .print-preview div.tv-item").style.display = "none"
				document.querySelector("#pw .call-us .print-preview div.internet-item").style.display = "none"
				document.querySelector("#pw .call-us .print-preview div.hphone-item").style.display = "none"
				document.querySelector("#pw .call-us .print-preview div.cphone-item").style.display = "none"
				document.querySelector("#pw .call-us .print-preview div.ott-item").style.display = "none"
				
				var checkedService = selectedPlan.filter(item => item.id.search("tv-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw .call-us .print-preview div.tv-item").style.display = "block"
					document.querySelector("#pw .call-us .print-preview div.tv-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw .call-us .print-preview div.tv-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.tv-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("tv-option") !== -1)
				if (checkedService.length !==0) {
					document.querySelector("#pw .call-us .print-preview div.tv-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.tv-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}


				checkedService = selectedPlan.filter(item => item.id.search("internet-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw .call-us .print-preview div.internet-item").style.display = "block"
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("internet-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.internet-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}


				checkedService = selectedPlan.filter(item => item.id.search("hPhone-service") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw .call-us .print-preview div.hphone-item").style.display = "block"
					document.querySelector("#pw .call-us .print-preview div.hphone-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw .call-us .print-preview div.hphone-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.hphone-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				
				}

				checkedService = selectedPlan.filter(item => item.id.search("cPhone-service") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw .call-us .print-preview div.cphone-item").style.display = "block"
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_type
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(1) div.price").innerHTML = ""
				}
				checkedService = selectedPlan.filter(item => item.id.search("cPhone-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}
				checkedService = selectedPlan.filter(item => item.id.search("cPhone-second-option") !== -1)
				if (checkedService.length == 1) {
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3)").style.display = "none"
				}
				if (checkedService.length == 2) {
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3)").style.display = "flex"
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3) div.name span:nth-child(2)").innerHTML = checkedService[1].plan_name
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(2) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
					document.querySelector("#pw .call-us .print-preview div.cphone-item div.plan-item:nth-child(3) div.price").innerHTML = "￥" + checkedService[1].price.toLocaleString('en')
				}



				checkedService = selectedPlan.filter(item => item.id.search("ott-service") !== -1)
				if (checkedService.length !== 0) {
					document.querySelector("#pw .call-us .print-preview div.ott-item").style.display = "block"
					document.querySelector("#pw .call-us .print-preview div.ott-item div.plan-item:nth-child(1) div:nth-child(1)").innerHTML = checkedService[0].service_name
					document.querySelector("#pw .call-us .print-preview div.ott-item div.plan-item:nth-child(1) div.name span:nth-child(2)").innerHTML = checkedService[0].plan_name
					document.querySelector("#pw .call-us .print-preview div.ott-item div.plan-item:nth-child(1) div.price").innerHTML = "￥" + checkedService[0].price.toLocaleString('en')
				
				}
				
				// total price calculation
				var totalPriceValue = 0
				for (let index = 0; index < selectedPlan.length; index++) {
					if (selectedPlan[index].price === "") continue
					totalPriceValue  = totalPriceValue + selectedPlan[index].price
				}
				
				totalPriceValue = totalPriceValue - discountPrice - specialDiscountPrice;
				document.querySelector("#pw .call-us .print-preview .price-value").innerHTML = `合計月額 ￥${totalPriceValue.toLocaleString('en')}（税別）`
				
			}
			function printInvoice() {

				window.print()
			}

			// Online Application
			function showOnlineApp() {
				document.querySelector("#pw .service-choose .total-price").style.display = "none"
				document.querySelector("#pw .service-choose .online-app").style.display = "block"
			}

			// Thanks Page
			function showThanksPage() {
				if (document.querySelector("#pw section.online-app div.online-app-body .nameinput").value === "") {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[0].style.visibility = "unset"
				}else {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[0].style.visibility = "hidden"
				}
				if (document.querySelector("#pw section.online-app div.online-app-body .phoneinput").value === "") {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[1].style.visibility = "unset"
				}else {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[1].style.visibility = "hidden"
				}
				
				if (document.querySelector("#pw section.online-app div.online-app-body .emailinput").value === "") {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[2].style.visibility = "unset"
				}else {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[2].style.visibility = "hidden"
				}
				
				if (document.querySelector("#pw section.online-app div.online-app-body .addressinput").value === "") {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[3].style.visibility = "unset"
				}else {
					document.querySelectorAll("#pw section.online-app div.online-app-body .alert-span")[3].style.visibility = "hidden"
				}

				if (document.querySelector("#pw section.online-app div.online-app-body .nameinput").value !== "" &&
					document.querySelector("#pw section.online-app div.online-app-body .phoneinput").value !== "" &&
					document.querySelector("#pw section.online-app div.online-app-body .emailinput").value !== "" &&
					document.querySelector("#pw section.online-app div.online-app-body .addressinput").value !== "") {


						var plan_name = ""
						for (let indexi = 0; indexi < selectedPlan.length; indexi++) {
							if (indexi === selectedPlan.length - 1) {
								plan_name = plan_name + selectedPlan[indexi].plan_name	
							}else {
								plan_name = plan_name + selectedPlan[indexi].plan_name + ","
							}
						}

						var user_name = document.querySelector("#pw section.online-app div.online-app-body .nameinput").value
						var user_phone = document.querySelector("#pw section.online-app div.online-app-body .phoneinput").value
						var user_email = document.querySelector("#pw section.online-app div.online-app-body .emailinput").value
						var user_address = document.querySelector("#pw section.online-app div.online-app-body .addressinput").value
						var user_contact_time = document.querySelector("#pw div section.online-app div.online-app-body div:nth-child(5) select").value
						var user_house = document.querySelector("#pw div section.online-app div.online-app-body div:nth-child(8) div:nth-child(2) select").value
						var user_detail = document.querySelector("#pw div section.online-app div.online-app-body div:nth-child(9) textarea").value

						var formData = new FormData();
						formData.append("PlanName", plan_name)
						formData.append("UserName", user_name);
						formData.append("UserPhone", user_phone);
						formData.append("UserEmail", user_email);
						formData.append("UserAddress", user_address);
						formData.append("UserContactTime", user_contact_time);
						formData.append("UserHouse", user_house);
						formData.append("UserDetail", user_detail);
						
						
						$.ajax('/price-wizard/sendmail.php', {
							type: 'POST',
							processData: false,
							contentType: false,
							cache: false,
							data: formData,
							success: function () {

							},
							error: function () {

							}
						})

						// // $.ajax('/sendmail.php', {
						// // 	type: 'POST',
						// // 	processData: false,
						// // 	contentType: false,
						// // 	cache: false,
						// // 	data: formData,
						// // 	success: function () {
                        // //
						// // 	},
						// // 	error: function () {
                        // //
						// // 	}
						// // })
						
						// return



						document.querySelector("#pw .service-choose .online-app").style.display = "none"
						document.querySelector("#pw .service-choose .thanks-page").style.display = "block"
					}else {
						window.alert("いくつかの必須項目が入力されていません。")
					}
				
			}

			function goToWebSite() {
				window.location.href = "https://www.octv.jp/"
			}

			// Set all services and options display none
			function setDisplayNoneAll() {
				document.querySelector("#pw .service-choose .service-start").style.display = "none"
				document.querySelector("#pw .service-choose .tv-service").style.display = "none"
				document.querySelector("#pw .service-choose .tv-option").style.display = "none"
				document.querySelector("#pw .service-choose .internet-service").style.display = "none"
				document.querySelector("#pw .service-choose .internet-option").style.display = "none"
				document.querySelector("#pw .service-choose .hPhone-service").style.display = "none"
				document.querySelector("#pw .service-choose .cPhone-service").style.display = "none"
				document.querySelector("#pw .service-choose .cPhone-option").style.display = "none"
				document.querySelector("#pw .service-choose .ott-service").style.display = "none"
			}
		
			
		</script>
	
	</div>
</body>
</html>