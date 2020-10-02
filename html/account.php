<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["id"])){
    $ide=$_SESSION["id"];
}  else {
    header("location:login.php")    ;
}
require 'conn.php';
$select=  mysqli_query($cone, "select * from register where id='$ide'");
$row=  mysqli_fetch_array($select);



?>
<html>
<head>
	<title>Information</title>
	

    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/Cart.css">
     <link rel="stylesheet" href="../Css/Register.css">
    <link rel="stylesheet" href="../Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
    
<body style="overflow:auto;">
<div  class="wrapper" >
    <!-- categories bar-->
   
    <div class="main_content">
       <!-- Headr contain nav bar -->
        <nav class="navbar navbar-expand-lg header"  >
         
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon">
                    <img src="../images/menu.png" width="50px" height="50px">
                  </span>

              </button>
              <div class="collapse navbar-collapse"  id="Navbar">
               <div class="navbar-nav col-lg-2" >
                  <a class="nav-item nav-link active"  href="index.php"><i class="fas fa-home">Home</i></a>
                   <a class="nav-item nav-link"  href="#"><i class="fas fa-address-card">About</i></a>
                     <a class="nav-item nav-link active"   href="register.php"><i class="fas fa-user-plus">Register</i></a>
                         <a class="nav-item nav-link"  href="#"><i class="far fa-user-circle">Account</i></a>
                         <a class="nav-item nav-link"  href="#"><i class="fas fa-shopping-cart">Cart</i></a>
                       
                         <a class="nav-item nav-link"  href="login.php"><i class="fas fa-sign-in-alt">Login</i></a>
                     <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Mobile</a>
                            <a class="dropdown-item" href="#">Televsion</a>
                            <a class="dropdown-item" href="#">Laptop</a>
                          </div>
                    </div>   
                  </div>
                    
              </div>
            
              <div class="collapse navbar-collapse"  id="Navbar">             
                  <form id="ser"  class="form-inline "  >
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

                
                  
              </div>
                <a class="navbar-brand" style="margin-left:2%" href="homePage.php" >  
                    <img src="../images/logo2.png" alt="Logo " >
                </a>

        </nav>
        <br>
         <br>
         <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="containerDiv col-lg-5 offset-lg-4 col-md-6 offset-md-3 col-12"  >
			<div class="">
				<div class="row">

					<span class="loginTitle p-t-20 p-b-45">
						Account Details
					</span>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
                        <label for="First Name" style="color:white;"><b>First Name:</b></label>
                        <input id="fname"  class="input" type="text" name="FirstName" value="<?php echo $row["firstName"]; ?>"  required>		
					</div>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
                        <label for="Last Name" style="color:white;"><b>Last Name:</b></label>
						<input id="lname"  class="input" type="text" name="LastName" value="<?php echo $row["lastName"]; ?>"  required>		
					</div>
                    
                    
					<div class="inputDiv col-12" style="padding : 10px" >
                        <label for="username" style="color:white;"><b>Username:</b></label>
						<input id="uname"  class="input" type="text" name="username" value="<?php echo $row["username"]; ?>"  required>		
					</div>
                    <div class="inputDiv col-12" style="padding : 10px" >
                        <label for="email" style="color:white;"><b>E-mail:</b></label>
						<input id="mail"  class="input" type="text" name="email" value="<?php echo $row["email"]; ?>"  required>		
					</div>

                    <div class="inputDiv col-12" style="padding : 10px" >
                        <label for="password" style="color:white;"><b>password:</b></label>
                        <input id="pass"  class="input" type="text" name="password" value="<?php echo $row["password"]; ?>"  required>		
					</div>
					<div class="col-12 " style="padding : 10px">
                                            <input  name="edit" id="edit" type="submit" class="btn btn-primary "   style="width:100%;border-radius: 25px;" value="Edit">
						     
					
					</div>
                   
                    <div class="col-12 " style="padding : 10px">
						<button class="btn btn-danger " style="width:100%;border-radius: 25px;">
						      Cancel
						</button>
					</div>
				</div>
			</div>
		</div>
             </form>
<br>
<br>
<br>
           
   <!-- Footer -->
<footer class="site-footer" style=" margin-left: 0px;">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About</h5>
            <p>any thing about our any thing in this life </p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>


      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
          <a href="#!" class="btn btn-danger btn-rounded" style="color:white; background-color:#60a3bc ;border :#60a3bc;">Sign up!</a>
        </li>
      </ul>


      <hr>


      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        
        <li class="list-inline-item">
          <a >
            <i class="fab fa-tumblr-square"> </i>
          </a>
        </li>
      </ul>
      <div  class="text-center w-full  col-12" style="padding : 10px">
        <a style="color:white" href="accountArabic.php" >عربي</a>
        <label style="color:white">|</label>
        <a style="color:white" href="" >English</a>
      </div>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">Salama & elredeny</a>
      </div>


</footer>
<!-- Footer -->     
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
if(isset($_POST["edit"])){
    $fname=$_POST["FirstName"];
    $lname=$_POST["LastName"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $modi=new rege();
    $modi->edit($fname, $lname, $username, $email, $password);
}
?>