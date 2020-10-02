<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/bootstrap.css">
     <link rel="stylesheet" href="../Css/bootnavbar.css" />
    
    <link rel="stylesheet" href="../Css/style3.css"> 
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" type="text/css" href="../Css/style3.css" />		
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body id="body">
  
	<div class="Main row" style="">
		<div class="containerDiv col-lg-4 col-md-6 col-12" >
			<div class="wrap-login100 ">
				<form class="login100-form " action="#" method="post">

					<span class="loginTitle p-t-20 p-b-45">
						تسجيل الدخول
					</span>

					<div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="text" name="email" style="text-align:right" placeholder="البريد الإلكتروني" required>		
					</div>

                    <div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="password" name="password" style="text-align:right" placeholder="الرقم السري" required>		
					</div>
					
					<div class="container-login100-form-btn " style="padding : 10px">
                                            <input type="submit" class="btn btn-primary " style="width:100%;border-radius: 25px;" value="تسجيل الدخول" name="send">
							
					</div>

					<div class="text-center w-full " style="padding : 10px">
						<a href="#" style="color:white">
							هل نسيت الرقم السري؟
						</a>
					</div>

					<div class="text-center w-full" style="padding : 10px">
						<a style="color:white" href="registerArabic.php">
							أنشئ حساب جديد					
						</a>
					</div>
                     <div  class="text-left w-full  col-12" style="padding : 10px">
                        <a style="color:white" href="loginArabic.php" >عربي</a>
                        <label style="color:white">|</label>
                        <a style="color:white" href="login.php" >English</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
	
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/bootnavbar.js"></script>
<script src="../js/db.js"></script>
</body>
</html>
<?php
require 'rege.php';
if(isset($_POST["send"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $login=new rege();
    $login->login2($email, $password);
}
?>