<!DOCTYPE html>
<html>
<head>
	<title></title>
	

    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/Cart.css">
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
                  <a class="nav-item nav-link active"  href="../index.php"><i class="fas fa-home">Home</i></a>
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
        <div class="offset-md-5 offset-2" style="width:300px; align-items: center;"  >
            <h2 style="border:3px solid;  border-radius: 25px; text-align:center; padding:8px;">Shopping Cart</h2>
        </div>
        <br>
        <div class="col-sm-11 col-12 " style="background-color:transparent; margin-left: 1% ; height:450px; overflow-y:auto" >
                <table class="table col-sm-12 col-12" >
                      <thead class="thead-dark">
                        <tr>
                          <th class="col-1" scope="col">ID</th>
                          <th class="col-5" scope="col">Product</th>
                          <th class="col-1" scope="col">Amount</th>
                          <th class="col-1" scope="col">pice price</th>
                          <th class="col-1" scope="col">Price</th>
                          <th class="col-2" scope="col">delete</th>
                        </tr>
                      </thead>
                      <tbody class="thead-light">
                        <tr>
                          <th class="col-1" scope="row">1</th>
                          <td class="col-5" style="display: inline-flex" >
                            <div><img class="col4" src="../images/slide-2.jpg" width="100px" height="100px"> </div>
                            <div style="padding-left : 10px">
                            <h5>Mobile</h5> <br>
                            <p>Product details njnacjkjkjkdajkdjjccjdjd</p>
                            </div>
                          </td>
                          <td class="col-1" >            
                              <select id="amount" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                          </td>
                          <td class="col-1">5000</td>
                          <td class="col-1">5000</td>
                          <td class="col-2"></td>
                        </tr>
                           <tr>
                          <th class="col-1" scope="row">1</th>
                          <td class="col-5" style="display: inline-flex" >
                            <div><img class="col4" src="../images/slide-2.jpg" width="100px" height="100px"> </div>
                            <div style="padding-left : 10px">
                            <h3>Mobile</h3>
                            
                            </div>
                          </td>
                          <td class="col-1" >            
                              <select id="amount" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                          </td>
                          <td class="col-1">5000</td>
                          <td class="col-1">5000</td>
                          <td class="col-2"></td>
                        </tr>
                           <tr>
                          <th class="col-1" scope="row">1</th>
                          <td class="col-5" style="display: inline-flex" >
                            <div><img class="col4" src="../images/slide-2.jpg" width="100px" height="100px"> </div>
                            <div style="padding-left : 10px">
                            <h5>Mobile</h5> <br>
                            <p>Product details njnacjkjkjkdajkdjjccjdjd</p>
                            </div>
                          </td>
                          <td class="col-1" >            
                              <select id="amount" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                          </td>
                          <td class="col-1">5000</td>
                          <td class="col-1">5000</td>
                          <td class="col-2"></td>
                        </tr>
                      </tbody>
                    </table>
         
            </div>
            
             <div class="col-sm-11 col-12 " style="background-color:transparent; margin-left: 1% ;" >
                 <table class="table col-md-12">
                     <thead class="thead-dark">
                        <tr>
                          <th class="col-1" scope="col"></th>
                          <th class="col-5" scope="col"></th>
                          <th class="col-1" scope="col"></th>
                          <th class="col-1" scope="col"></th>
                          <th class="col-1" scope="col"></th>
                          <th class="col-1" scope="col">Total ptice</th>
                        </tr>
                      </thead>
                      <tbody class="thead-light">
                        <tr>
                          <td class="col-1" ></td>
                          <td class="col-5"  > </td>
                          <td class="col-1" ></td>
                          <td class="col-1"></td>
                          <td class="col-1"></td>
                          <td class="col-2">5000</td>
                        </tr>
                      </tbody>
                    </table>

            </div>
            
            <div class="col-12" style="margin-left: 2%">
                 <a id="confirmOrder" class="btn btn-success" style="color:white;">Confirm order</a>
                 <a id="backToProducts" class="btn btn-primary"  href="products.php">Back to Products</a>
                 <a id="cancelOrder" class="btn btn-danger" style="color:white;">Cancel order</a>

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

       <div  class="text-center w-full  col-12" style="padding : 10px">
                        <a style="color:white" href="CartArabic.php" >عربي</a>
                        <label style="color:white">|</label>
                        <a style="color:white" href="#" >English</a>
    </div>
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