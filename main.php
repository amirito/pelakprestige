<?php
	$active_1 = ''; 
	$active_2 = ''; 
	$active_3 = ''; 
	$active_4 = ''; 
	$active_5 = '';
	if(isset($_GET['page'])){
		$page = $_GET['page'];
			if($page == 'review' || $page == 'value' || $page == 'board' || $page == 'join' || $page == 'customer'){
				$active_1 = 'active';
			}elseif($page == 'activity_review' || $page == 'statute' || $page == 'task'){
				$active_2 = 'active';
			}elseif($page == 'why_review' || $page == 'why_1'){
				$active_3 = 'active';
			}elseif($page == 'exclusive_prestige' || $page == 'exclusive_5star' || $page == 'exclusive_discount' || $page == 'exclusive_introduce'){
				$active_4 = 'active';
			}elseif($page == 'contact' || $page == 'map' || $page == 'offer'){
				$active_5 = 'active';
			}
		}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پلاک پرستیژ | شرکت مدیریت ساختمان</title>	
	<link rel="icon" href="images/favicon.ico" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>

<div class="col-md-6 right-side">
	<nav class="navbar navbar-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          
          <ul class="nav navbar-nav navbar-right">
            <li class="pull-right"><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="dropdown pull-right <?php echo $active_1; ?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> درباره ما </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?page=review">نگاه اجمالی</a></li>
                <li><a href="main.php?page=value">ارزشهای سازمانی</a></li>
                <li><a href="main.php?page=board">اعضای هیات مدیره </a></li>
                <li><a href="main.php?page=join">به ما بپیوندید</a></li>
                <li><a href="main.php?page=customer">از زبان مشتریان </a></li>
              </ul>
            </li>
            <li class="dropdown pull-right <?php echo $active_2; ?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> فعالیت ها </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?page=activity_review">نگاه اجمالی</a></li>
                <li><a href="main.php?page=statute">مدیریت ساختمان</a></li>
                <li><a href="main.php?page=tasks">خدمات منحصر به فرد</a></li>
              </ul>
            </li>
            <li class="dropdown pull-right <?php echo $active_3; ?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> چرا پلاک پرستیژ</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?page=why_review">نگاه اجمالی</a></li>
                <li><a href="main.php?page=why_1">رضایت مشتریان</a></li>
                <li><a href="main.php?page=why_1">آموزش مدیران ساختمان </a></li>
                <li><a href="main.php?page=why_1">مرکز آموزش </a></li>
                <li><a href="main.php?page=why_1">انرژی و محیط زیست</a></li>
              </ul>
            </li>
            
            <li class="dropdown pull-right <?php echo $active_4; ?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> خدمات اختصاصی </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?page=exclusive_prestige">سامانه پلاک پرستیژ</a></li>
                <li><a href="main.php?page=exclusive_5star">خدمات هتل های 5 ستاره</a></li>
                <li><a href="main.php?page=exclusive_discount">تخفیفات هیجان انگیز ویژه ساکنین</a></li>
                <li><a href="main.php?page=exclusive_introduce">معرفی بهترین کسب و کارهای محله</a></li>
              </ul>
            </li>
            
            
            <li class="dropdown pull-right <?php echo $active_5; ?>" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> ارتباط با ما </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="main.php?page=contact">تماس با ما </a></li>
                <li><a href="main.php?page=map">دفاتر و پروژه های شرکت </a></li>
                <li><a href="main.php?page=offer">درخواست فرم  پیشنهاد همکاری</a></li>
              </ul>
            </li>
            
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="navbar-bottom">
      <!--<div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> ورود ساکنین / مالکین </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?page=review">نگاه اجمالی</a></li>
                <li><a href="?page=value">ارزشهای سازمانی</a></li>
                <li><a href="?page=board">اعضای هیات مدیره </a></li>
                <li><a href="?page=join">به ما بپیوندید</a></li>
                <li><a href="?page=customer">از زبان مشتریان </a></li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>-->
      <div class="component">
          <h2>پلاک پرستیژ</h2>
          <!-- Start Nav Structure -->
          <button class="cn-button" id="cn-button">ورود ساکنین / مالکین</button>
          <div class="cn-wrapper" id="cn-wrapper">
              <ul>
                  <li><a href="#" class="sign1"><span>مشاهده سابقه و وضعیت مالی واحد</span></a></li>
                  <li><a href="#" class="sign2"><span>پرداخت (شارژ و قبوض)</span></a></li>
                  <li><a href="#" class="sign3"><span>گزارشات مالی و اسناد و مدارک </span></a></li>
                  <li><a href="#" class="sign4"><span>اطلاعات ضروری برای ساکنین</span></a></li>
                  <li><a href="#" class="sign5"><span>اساسنامه اختصاصی مجتمع شما</span></a></li>
               </ul>
          </div>
          <!-- End of Nav Structure -->
      </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-6 left-side">
	<section>
		<?php
            if(isset($_GET['page'])){
                        if(is_file('include/'.$_GET['page'].'.php')){
                            include 'include/'.$_GET['page'].'.php';
                            }else{
                            die('صفحه مورد نظر وجود ندارد');
                            }
                        }else{
                            header('Location: index.html');
                            }
        
        
        ?>
    </section>
    <div class="text-center">
    	<p>طراحی : شرکت <a href="http://rayweb.ir">رای وب</a></p>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
</body>
</html>