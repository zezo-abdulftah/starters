<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["id"])){
    $ide=$_SESSION["id"];
}else{
    header("location:login.php");
}
require 'conn.php';

   $itt=$_GET["id"];
  
 
?>
<html>
<head>
	<title></title>
	

    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>


<div  class="wrapper" >
    <!-- categories bar-->
    <div class="sidebar">
        <!-- Sitename/logo-->
        <h2 style="padding-top:10px">Let's shopping!!</h2>
    <!--    <img src="" width="200px" height="150px " style=" padding-bottom:50px;">  -->
        <br>
        
        <button id="btn1" onmousedown="myULshow()" >Categories</button>
        <button id="btn2" onmousedown="myULhide()">Categories</button>
        <br>
        <br>

        <ul id="myUL"   >
            <?php
            $select=  mysqli_query($cone, "select * from items");
            while ($row=  mysqli_fetch_array($select)){
                
                $_SESSION["item"]=$row["id"];
                echo '  <li><a href="products.php?id='.$_SESSION["item"].'"><i class="fas fa-laptop-code"></i>'.$row["itemname"].'</a></li>';
            }
            ?>
            
      
         </ul>
         <div class="Lang">
            <a style="color:white" href="productArabic.php?id=<?php echo $itt;?>" >عربي</a>
            <a style="color:white" href="#" >English</a>
          </div>
    <div  class="text-center w-full  col-12" style="padding : 10px ;fixed:bottom;">
        
    </div>
    </div>
    
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
                     <a class="nav-item nav-link"  href="account.php"><i class="far fa-user-circle">Account</i></a>
                         <a class="nav-item nav-link"  href="#"><i class="fas fa-shopping-cart">Cart</i></a>
                         <a class="nav-item nav-link"  href="login.php"><i class="fas fa-sign-in-alt">Login</i></a>
                        
                  </div>

              </div>
              <div class="collapse navbar-collapse"  id="Navbar">             
                  <form id="ser"  class="form-inline "  action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

                
                  
              </div>
                <a class="navbar-brand" style="margin-left:2%" href="homePage.php" >  
                    <img src="../images/logo2.png" alt="Logo " >
                </a>

        </nav>
        <!-- slider-->
        <br>
        <h2 class="offset-6">Best Offers</h2>
        <br>
        
        	 <div class="col-lg-9 offset-lg-2 col-md-9 offset-md-2 col-sm-9 offset-sm-2 col-9 offset-2 " style="background-color:transparent;" >
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                     
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img class="d-block w-100" src="../images/1.jpg"  width="1500px"  height="500px" alt="First slide">
                         </div>
                          <?php
                         $sell=  mysqli_query($cone,"select * from offers where item='$itt' ");
                         while ($row1 = mysqli_fetch_array($sell)) {
                             $zze=$row1["type"];
                             $sss=  mysqli_query($cone,"select * from mobiles where id='$zze'");
                             $row3=  mysqli_fetch_array($sss);
                            
                             echo '<div class="carousel-item ">'
                             .' <img class="d-block w-100" src="../admin/picture/'.$row3["pic"].'"  width="1500px"  height="500px" alt="First slide">'
                        
                                    . '<div style="height: 50px;z-index: 5;">'
                           .'<span style="width:190px;height:23px;" class="badge badge-secondary">the price before offer='.$row1["price"].'</span> <br>'
                                        .'<span style="width:190px;height:23px;" class="badge badge-secondary">the price after offer='.$row1["result"].'</span><br>'
                             .'</div>'
                                 .'</div>';
                         }
                         
                         
                         ?>
                 </div>    
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>

            </div>
        <br>
        <br>
        <br>
        <br>
        
       
    
        <!-- Catigories-->
        
        <div class="row Catigories" style="" >
                <div class="header  " style="color :white; display: inline-flex; height: 55px;">
                <h3 >parts</h3>
                     <!-- 
                    <div class="sortby offset-1">
                          <button class="btn sortbybtn">SortBy</button>
                          <div class="sortby-content">
                            <a class="a" href="#">Price</a>
                            <a class="a" href="#">Date</a>
                            <a class="a" href="#">Rate</a>
                          </div>
                        </div>
                     -->
                     <select id="sel1" class="btn sortbybtn" style="margin-left:10px;">
                       <?php
                       $selee=  mysqli_query($cone,"select * from parts where catname='$itt'");
                       while ($row2 = mysqli_fetch_array($selee)) {
                           echo '<option value="'.$row2["id"].'">'
                           .$row2["partname"]
                                   .'</option>';
                           
                       }
                       ?>
                    </select>
                
                </div>
                
                <br>
     
                 <!-- Start of card-->
                      
       
                
                 <div  id="sel2"  style="width:100%;height: 100%;" >
                     
                 </div>
                 </div>
                
        <br>
        <br>
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
        
 <!-- Site footer -->
 <!--   <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
 -->           
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

     <div  class="text-center w-full  col-12" style="padding : 10px;">
        <a style="color:white" href="productArabic.php" >عربي</a>
        <label style="color:white">|</label>
        <a style="color:white" href="#" >English</a>
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
<script>
    $(document).ready(function(){
        $("#sel1").change(function(){
                var y=$(this).val();
        
        $.ajax({
            url:'finds.php',
            method:'GET',
            data:{find:y},
            datatype:'text',
            success:function(data){
                $("#sel2").html(data);
            }
            
            
            
            
        });
        
        
        
        
        
        
        });  
        
    });
    
    
    </script>
