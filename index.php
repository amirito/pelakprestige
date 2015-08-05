<?php 
	if(!isset($_SESSION['MM_ID'])){
		header('login.php');
		}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="	">
        <meta name="author" content="rayweb">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>پلاک پرستیژ | شرکت مدیریت ساختمان</title>	
		<link rel="icon" href="images/favicon.ico" type="image/png">
        <!-- CSS styles -->
        <link rel="stylesheet" href="assets/css/base.css">
      	<!-- /CSS styles -->

    </head>
    <body style="font-family:IranianSans !important">
	<div id="loading" class="loading-invisible">
  	
    <img src="images/logo.png"  height="200" style="padding-top:70px">
    <p style="direction:rtl; text-align:center;padding-top:5%;font-size:30px;color:#f6c284; font-family:tahoma;">به پلاک پرستیژ خوش آمدید </p>
    </div>
			<script type="text/javascript">
                document.getElementById("loading").className = "loading-visible" ; 
                    window.onload=function(){
                        document.getElementById("loading").className = "loading-invisible" ;
					}
                        
            </script>
		<a href="index-2.html#" id="menu-toggle-wrapper">
			<div id="menu-toggle"></div>	
		</a>
		
		<!-- inner bar wrapper -->
    	<a href="index-2.html#" id="inner-bar" style="right:0 !important">
			<!-- Small logo -->
			<div class="logo-alt">
				<img src="assets/img/logo.png" alt="logo-mini">
			</div>
			<!-- /Small logo -->
		</a>
		<!-- /inner bar wrapper -->

    	

		
    	<!-- Sidebar -->	
		<div id="side-bar"  >
			<div class="inner-wrapper" >	
				<div id="side-inner">

					<!-- Logo -->	
					<div id="logo-wrapper">
						<a href="#"><img src="assets/img/logo.png" alt="logo"></a>
					</div>
					<!-- /Logo -->	

					<div id="side-contents">

						<!-- Navigation -->	
						<ul id="navigation" style="text-align:right;font-family:IranianSans !important;">
							
							<li class="menu-item-has-children"><a href="index.html">درباره ما</a>
                            	<ul class="sub-menu">
									<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>درباره ما</a></li>
									<li><a href="main.php?page=review">نگاه اجمالی</a></li>
                                    <li><a href="main.php?page=construction">ارزشهای سازمانی</a></li>
                                    <li><a href="main.php?page=board">اعضای هیات مدیره </a></li>
                                    <li><a href="main.php?page=construction"> در رسانه ها</a></li>
                                    <li><a href="main.php?page=construction">گواهینامه ها</a></li>
                                    <li><a href="main.php?page=construction">از زبان مشتریان </a></li>
								</ul>
							</li>
                            <li class="menu-item-has-children"><a href="index.html">فعالیت ها</a>
                            	<ul class="sub-menu">
                               		<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>فعالیت ها</a></li>
									<li><a href="main.php?page=activity_review">نگاه اجمالی</a></li>
                                    <li><a href="main.php?page=construction">مدیریت ساختمان</a></li>
                                    <li><a href="main.php?page=construction">مدیریت مجتمع های مسکونی</a></li>
                                    <li><a href="main.php?page=construction">آموزش مدیران ساختمان</a></li>
                                    <li><a href="main.php?page=construction">خدمات ارزش افزوده</a></li>
								</ul>
							</li>
                            
                            <li class="menu-item-has-children"><a href="index.html">چرا پلاک پرستیژ</a>
                            	<ul class="sub-menu">
                               		<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>چرا پلاک پرستیژ</a></li>
									<li><a href="main.php?page=why_review">نگاه اجمالی</a></li>
                                    <li><a href="main.php?page=why_1">رضایت مشتریان</a></li>
                                    <li><a href="main.php?page=why_1">انرژی و محیط زیست</a></li>
								</ul>
							</li>
                            
                            <li class="menu-item-has-children"><a href="index.html">خدمات اختصاصی</a>
								<ul class="sub-menu">
									<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>خدمات اختصاصی</a></li>
									<li><a href="main.php?page=exclusive_prestige">سامانه پلاک پرستیژ</a></li>
                                    <li><a href="main.php?page=exclusive_5star">خدمات هتل های 5 ستاره</a></li>
                                    <li><a href="main.php?page=exclusive_discount">تخفیفات ویژه ساکنین</a></li>
                                    <li><a href="main.php?page=exclusive_introduce">معرفی کسب و کارهای برتر محله</a></li>
								</ul>
							</li>

							<li class="menu-item-has-children"><a href="index.html">ارتباط با ما</a>
                            	<ul class="sub-menu">
									<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>ارتباط با ما</a></li>
									<li><a href="main.php?page=contact">تماس با ما </a></li>
                                    <li><a href="main.php?page=map"> پروژه های شرکت </a></li>
                                    <li><a href="main.php?page=offer"> فرم  پیشنهاد همکاری</a></li>
                                    <li><a href="main.php?page=join">به ما بپیوندید</a></li>
								</ul>
							</li>
                            <li class="menu-item-has-children"><a href="index.html">ورود ساکنین و مالکین</a>
                            	<ul class="sub-menu">
									<li class="nav-prev"><a href="index.html#"><i class="fa fa-angle-left"></i>ورود ساکنین و مالکین</a></li>								
                                    <li><a href="main.php?page=exclusive_prestige">تابلوی اعلانات( گزارشات و اخبار)</a></li>
                                    <li><a href="main.php?page=exclusive_prestige">اساسنامه مجتمع شما</a></li>
                                    <li><a href="main.php?page=exclusive_prestige">خدمات اختصاصی</a></li>
                                    <li><a href="main.php?page=exclusive_prestige">اطلاعات ضروری ساکنین</a></li>
                                    <li><a href="main.php?page=exclusive_prestige">مشاهده سابقه و وضعیت مالی واحد</a></li>
                                    <li><a href="main.php?page=exclusive_prestige">پرداخت ها (شارژ و قبوض)</a></li>
									
								</ul>
							</li>

							
						</ul>
						<!-- /Navigation -->	

					</div>	

					<!-- Sidebar footer -->	
					<div id="side-footer">
						<!-- Social icons -->	
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<!-- /Social icons -->	
						<div id="copyright">
							<p align="center">طراحی :<a href="http://rayweb.ir">رای وب</a></p>
						</div>
					</div>
					<!-- /Sidebar footer -->	

				</div>
			</div>
			
							
		</div>
		<!-- /Sidebar -->	

		<!-- Page main wrapper -->	
		<div id="main-content" class="abs dark-template">
			<div class="page-wrapper">

				<!-- Page main content -->	
				<div class="page-main set-height-mobile no-side">

					<!-- Kenburn slider -->	
					<div class="kb-slider">
					
						<!-- Kenburn slide -->		
						<div class="item">
							<img src="assets/img/home/02.jpg" alt="img">
                            				<div class="caption" data-pos="bottom-left">
						<a href="index.html" title="sample page">
							<span class="sub-title">پلاک پرستیژ </span>
							<span class="title">نخستین شرکت تخصصی مدیریت ساختمان</span>
						</a>
					</div>
						</div>
						<!-- /Kenburn slide -->
				
						<div class="item">
							<img src="assets/img/home/05.jpg" alt="img">
                                                        				<div class="caption" data-pos="bottom-left">
						<a href="index.html" title="sample page">
							<span class="sub-title">پلاک پرستیژ </span>
							<span class="title">شرکت پیشرو در صنعت مدیریت ساختمان </span>
						</a>
					</div>
						</div>
						<!-- /Kenburn slide -->

						<!-- Kenburn slide -->	
						<div class="item">
							<img src="assets/img/home/11.jpg" alt="img">
                                                        				<div class="caption" data-pos="bottom-right">
						<a href="index.html" title="sample page">
							<span class="sub-title">پلاک پرستیژ </span>
							<span class="title">ایجاد ارزش افزوده برای مجتمع های تحت مدیریت</span>
						</a>
					</div>
						</div>
						<!-- /Kenburn slide -->



						

					</div>
					<!-- /Kenburn slider -->	
					
				</div>
				<!-- /Page main content -->	

					
			</div>
						
		</div>

		<script type="text/javascript" src="assets/js/vendors/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/js/vendors/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/jquery.history.js"></script>
		<script type="text/javascript" src="assets/js/jquery.owwwlab-kenburns.js"></script>
		<script type="text/javascript" src="assets/js/jquery.owwwlab-DoubleCarousel.js"></script>
		<script type="text/javascript" src="assets/js/jquery.owwwlab-video.js"></script>
		<script type="text/javascript" src="assets/js/vendors/TweenMax.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="assets/js/vendors/mediaelement-and-player.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/jquery.inview.min.js"></script>
		<script type="text/javascript" src="assets/js/vendors/smoothscroll.js"></script>
		<script src="assets/masterslider/jquery.easing.min.js"></script>
		<script src="assets/masterslider/masterslider.min.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
		
		
    </body>
</html>