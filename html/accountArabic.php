<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["id"])){
    $ide=$_SESSION["id"];
}  else {
    header("location:loginArabic.php")    ;
}
require 'conn.php';
$select=  mysqli_query($cone, "select * from register where id='$ide'");
$row=  mysqli_fetch_array($select);



?>

<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/CartArabic.css">
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
        <nav class="navbar navbar-expand-lg "  >
         
               <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon">
                    <img src="../menu.png" width="50px" height="50px">
                  </span>

              </button>
              <a class="navbar-brand" style="margin-left:2%" href="homePage.php" >  
                    <img src="../images/logo2.png" alt="Logo " >
                </a>
              <div class="collapse navbar-collapse"  id="Navbar">             
                  <form id="ser"  class="form-inline "  action="/action_page.php">
                      <button class="btn btn-success" type="submit">بحث</button>
                      <input class="form-control mr-sm-2" type="text" style="text-align:right;" placeholder="بحث">
                   
                </form>   
              </div>
              <div class="collapse navbar-collapse " id="Navbar" >
                   <ul class="nav col-lg-12 col-1 justify-content-end "  >
                    <div class="dropdown ">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المنتجات
                          </button>
                          <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">موبايل</a>
                            <a class="dropdown-item" href="#">تليفزيون</a>
                            <a class="dropdown-item" href="#">لابتوب</a>
                          </div>
                    </div> 
                        <li class="nav-item">
                        <a class="nav-link " href="#">عن الموقع</a>
                      </li>
                         <li class="nav-item">
                        <a class="nav-link " href="loginArabic.php">تسجيل دخول</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link " href="#">العربة</a>
                      </li>
                       
                      <li class="nav-item">
                        <a class="nav-link " href="registerArabic.php">انشاء حساب</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">الحساب</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../indexarabic.php">الأساسية</a>
                          
                       </li>
                      
                    </ul>
                
              </div>

        </nav>
        <br>
       
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
           <div class="containerDiv col-lg-5 offset-lg-4 col-md-6 offset-md-3 col-12"  >
			<div class="">
				<div class="row text-right">

					<span class="loginTitle p-t-20 p-b-45">
				        بينات الحساب 
					</span>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
                        <label for="First Name" style="color:white;"><b>:الاسم الاول</b></label>
                        <input id="fname"  class="input" type="text" name="FirstName" value="<?php echo $row["firstName"];?>"  required style="text-align:right">		
					</div>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
                        <label for="Last Name" style="color:white;"><b>:الاسم الثاني</b></label>
                        <input id="lname"  class="input" type="text" name="LastName" value="<?php echo  $row["lastName"];?>"  required style="text-align:right">		
					</div>
                    
                    
					<div class="inputDiv col-12" style="padding : 10px" >
                        <label for="username" style="color:white;"><b>:اسم المستخدم</b></label>
                        <input id="uname"  class="input" type="text" name="username" value="<?php echo $row["username"];?>"  required style="text-align:right">		
					</div>
                    <div class="inputDiv col-12" style="padding : 10px" >
                        <label for="email" style="color:white;"><b>:البريد الإلكتروني</b></label>
                        <input id="mail"  class="input" type="text" name="email" value="<?php echo $row["email"];?>"  required style="text-align:right">		
					</div>

                    <div class="inputDiv col-12" style="padding : 10px" >
                        <label for="password" style="color:white;"><b>:الرقم السري</b></label>
                        <input id="pass"  class="input" type="text" name="password" value="<?php echo  $row["password"];?>"  required style="text-align:right">		
					</div>
					<div class="col-12 " style="padding : 10px">
                                            <input id="edit" name="edit" id="edit" type="submit" class="btn btn-primary "  style="width:100%;border-radius: 25px;" value="تعديل">
						      
						
					</div>
                   
                    <div class="col-12 " style="padding : 10px">
						<button class="btn btn-danger " style="width:100%;border-radius: 25px;">
						      الغاء
						</button>
					</div>
				</div>
			</div>
		</div>
            </form>
         <br>
        <br>
        
           
   <!-- Footer -->
<div class="row" style="padding-right:15px;">
                   <footer class="site-footer col-12" style=" margin-left: 0px; ">

                      <!-- Footer Links -->
                      <div class="container text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                         
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto" style="text-align:right">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">رابط</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">رابط 1</a>
                              </li>
                              <li>
                                <a href="#!">رابط 2</a>
                              </li>
                              <li>
                                <a href="#!">رابط 3</a>
                              </li>
                              <li>
                                <a href="#!">رابط 4</a>
                              </li>
                            </ul>

                          </div>
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto" style="text-align:right">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">رابط</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">رابط 1</a>
                              </li>
                              <li>
                                <a href="#!">رابط 2</a>
                              </li>
                              <li>
                                <a href="#!">رابط 3</a>
                              </li>
                              <li>
                                <a href="#!">رابط 4</a>
                              </li>
                            </ul>

                          </div>
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto" style="text-align:right">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">رابط</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">رابط 1</a>
                              </li>
                              <li>
                                <a href="#!">رابط 2</a>
                              </li>
                              <li>
                                <a href="#!">رابط 3</a>
                              </li>
                              <li>
                                <a href="#!">رابط 4</a>
                              </li>
                            </ul>

                          </div>
                            
                             <!-- Grid column -->
                          <div class="col-md-4 mx-auto" style="text-align:right">

                            <!-- Content -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">عن الموقع</h5>
                            <p>هنكتب بقي اي حاحة عننا هنا علشان احنا ناس جامدة فشخ </p>

                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                      </div>
                      <!-- Footer Links -->

                      <hr>


                      <ul class="list-unstyled list-inline text-center py-2">
                       
                         <li class="list-inline-item">
                          <a href="#!" class="btn btn-danger btn-rounded" style="color:white; background-color:#60a3bc ;border :#60a3bc;">سجل الأن</a>
                        </li>
                        
                        <li class="list-inline-item">
                          <h5 class="mb-1">سجل الأن مجانا</h5>
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
                        <a style="color:white" href="#" >عربي</a>
                        <label style="color:white">|</label>
                        <a style="color:white" href="account.php" >English</a>
                    </div>

                      <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="#">Salama & elredeny</a>
                      </div>


                </footer>
        </div>    <!-- Footer -->     
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
    $modi->edit2($fname, $lname, $username, $email, $password);
}
?>