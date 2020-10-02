<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/bootstrap.css">
     <link rel="stylesheet" href="../Css/bootnavbar.css" />
    
    <link rel="stylesheet" href="../Css/Register.css"> 
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" type="text/css" href="../Css/style3.css" />		
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body id="body">
  
	<div class="Main row" style="">
		<div class="containerDiv col-lg-4 col-md-6 col-12" >
			<div class="">
                            <form  class=" row" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

					<span class="loginTitle p-t-20 p-b-45">
						Register
					</span>
                    
                       <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
						<input class="input" type="text" name="FirstName" placeholder="First Name" required>		
					</div>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
						<input class="input" type="text" name="LastName" placeholder="Last name" required>		
					</div>
                    
                    
					<div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="text" name="username" placeholder="Username" required>		
					</div>
                    <div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="text" name="email" placeholder="E-mail" required>		
					</div>

                    <div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="password" name="password" placeholder="Password" required>		
					</div>
                    
                    <div class="inputDiv" style="padding : 10px ; display:inline-flex" >
						<input class="input" type="checkbox" name="checkbox" style="width:20px;height:20px;" required>	
                        <a style="color:white" href="#" data-toggle="modal" data-target="#rules">
							Do you agree with our terms?					
						</a>
					</div>
                    
					
					<div class="col-12 " style="padding : 10px">
                                            <input type="submit" class="btn btn-primary " style="width:100%;border-radius: 25px;" value="Register" name="go">
							
						
					</div>

					
					<div class="text-center w-full  col-12" style="padding : 10px; margin-right:0 auto;">
						<a style="color:white" href="login.php" >
							you are one of our family?.. Login Now ❤❤						
						</a>
					</div>
                    <div  class="text-center w-full  col-12" style="padding : 10px">
                        <a style="color:white" href="registerArabic.php" >عربي</a>
                        <label style="color:white">|</label>
                        <a style="color:white" href="register.php" >English</a>
                    </div>
				</form>
			</div>
            <div class="modal fade" id="rules">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Rules</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       
                       <div style="position:relative ;overflow-y:scroll; height :140px;">
                            <p class="card-text">kjdjkkjskjxndjbsjxbdbhjdhshbmddbqeda
                                d
                                dbajbcjhjhenbhjc
                            </p>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
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
<?PHP
require 'rege.php';
if(isset($_POST["go"])){
    $fname=$_POST["FirstName"];
    $lname=$_POST["LastName"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $rege=new rege();
    $rege->insert($fname, $lname, $username, $email, $password);
}


?>