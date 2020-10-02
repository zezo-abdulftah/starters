<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["id"])){
    $ide=$_SESSION["id"];
}else{
    header("location:loginArabic.php");
}
require 'conn.php';
@$itt=$_GET["id"];


?>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/styleArabic.css">
    <link rel="stylesheet" href="../Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>


<div  class="wrapper" >
    <!-- categories bar-->
    <div class="sidebar offset-lg-10 col-lg-2 offset-8 col-4" style="text-align:right;">
        <!-- Sitename/logo-->
        <h2 style="padding-top:10px">هيا نتسوق !!</h2>
    <!--    <img src="" width="200px" height="150px " style=" padding-bottom:50px;">  -->
        <br>
        
        <button id="btn1" onmousedown="myULshow()" >المنتــــجات</button>
        <button id="btn2" onmousedown="myULhide()">المنتــــجات</button>
        <br>
        <br>

        <ul id="myUL" style="text-align : right;"  >
            <?php
            $select=  mysqli_query($cone, "select * from items");
            while ($row=  mysqli_fetch_array($select)){
                
                $_SESSION["item"]=$row["id"];
                echo '  <li><a href="productArabic.php?id='.$_SESSION["item"].'"><i class="fas fa-laptop-code"></i>'.$row["itemname"].'</a></li>';
            }
            ?>
        </ul>
     <div class="Lang">
        <a style="color:white" href="#" >عربي</a>
         <a style="color:white" href="products.php?id=<?php echo $itt;?>" >English</a>
     </div>
    </div>
    
    <div class="main_content col-lg-10 col-8">
       <!-- Headr contain nav bar -->
        <nav class="navbar navbar-expand-lg header "  >
         
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
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
              <div class="collapse navbar-collapse justify-content-end " id="Navbar" >
                   <ul class="nav col-lg-12 col-1 "  >
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
                          <a class="nav-link" href="accountArabic.php">الحساب</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="indexarabic.php">الأساسية</a>
                          
                       </li>
                      
                    </ul>
                
              </div>
        </nav>
        <!-- slider-->
        <br>
        <h2 class="offset-6">افضل العروض</h2>
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
                              <img class="d-block w-100" src="../images/1.jpg"  width="1500px"  height="500px" alt="منتج 1">
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

            </div>
        <br>
        <br>
        <br>
        <br>
        
             <!-- Catigories-->
            <div class="row Catigories " style="text-align:right;">
                <div class="header" style="color:white; display: inline-flex;  ">
                    <select id="sel1" class=" sortbybtn offset-lg-9 offset-md-6" style=" margin-left:10px;">
                         <?php
                       $selee=  mysqli_query($cone,"select * from parts where catname='$itt'");
                       while ($row2 = mysqli_fetch_array($selee)) {
                           echo '<option value="'.$row2["id"].'">'
                           .$row2["partname"]
                                   .'</option>';
                           
                       }
                       ?>
                </select>
                    <h3 style=" margin-left:auto; margin-right:40px; ">الاقسام</h3>
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
                   
                </div>
                
                <br>
     
                <div  id="sel2"  style="width:100%;height: 100%; " >
                     
                 </div>
                </div>    <!-- End of card-->
        
                
                
           
        
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
                        <a style="color:white" href="products.php" >English</a>
                    </div>

                      <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="#">Salama & elredeny</a>
                      </div>


                </footer>
                <!-- Footer -->     
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
<script>
    $(document).ready(function(){
        $("#sel1").change(function(){
                var y=$(this).val();
        
        $.ajax({
            url:'finds.php',
            method:'GET',
            data:{findes:y},
            datatype:'text',
            success:function(data){
                $("#sel2").html(data);
            }
            
            
            
            
        });
        
        
        
        
        
        
        });  
        
    });
    
    
    </script>