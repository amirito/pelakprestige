<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rayweb</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
            <li class="pull-right"><a href="index.html">صفحه اصلی</a></li>
            <li class="pull-right"><a href="#">درباره ما</a></li>
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> ارتباط با ما </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?page=contact">تماس با ما </a></li>
                <li><a href="?page=map">دفاتر و پروژه های شرکت </a></li>
                <li><a href="main.php?page=offer">درخواست فرم  پیشنهاد همکاری</a></li>
              </ul>
            </li>
            <li class="pull-right"><a href="main.php?page=job">فرصت های شغلی</a></li>
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> اطلاعات ضروری ساکنین </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?page=ownership">قانون تملک آپارتمان ها</a></li>
                <li><a href="?page=statute">اساس نامه مجتمع</a></li>
                <li><a href="?page=tasks">شرح وظایف</a></li>
                <li><a href="?page=recommendation">توصیه های مهم برای ساکنین</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
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
</body>
</html>