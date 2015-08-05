<?php

	$error = '';
	
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == 'pelakprestige' && $password == 'milico6464'){
			$_SESSION['MM_ID'] = '1';
			
			header("Location: index.php");
			}
		else{
			$error = '<p style="text-align:center;font-size:20px;">اطلاعات وارد شده صحیح نمی باشد</p>';
			}
		}
	
	#############################################
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>خانه</title>

  </head>

  <body style="background: linear-gradient(#21526D, #386984, #21526D) repeat scroll 0% 0% transparent;">

 
  
  

        <div dir="rtl" style="text-align:center">
    
          <form class="form-signin" role="form" method="post">
            <h2 class="form-signin-heading" style="color:#091141">ورود</h2>
            <input type="text" class="form-control" placeholder="نام کاربری" required autofocus name="username">
            <input type="password" placeholder="رمز عبور" required name="password">
            <input type="submit" name="submit" value="ورود">
          </form>
          
    
        </div> 
        <?php echo $error; ?>
        

    
  </body>
</html>