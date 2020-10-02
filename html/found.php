<?php

require 'check.php';

 
@$x=$_GET["find"];
require 'conn.php';
$selects=  mysqli_query($cone,"select * from mobiles where partid='$x'");
if(mysqli_num_rows($selects)>0){
while ($row = mysqli_fetch_array($selects)) {
$t=$row["id"];
$ss2= mysqli_query($cone, "select * from offers where type='$t'");
$row5=  mysqli_fetch_array($ss2);



    echo '<div class="col-lg-4 offset-lg-0 col-md-9 offset-md-2 col-sm-9  offset-sm-2 col-9  offset-2 " style="background-color:transparent;float:left;margin-right: 90px;margin-top: 20px  " > <!-- Start of card-->'
                    
                            .'<input type="hidden" name="user" value="'.'">'
                     .' <div class="card" style="width: 370px;  ">'
                     .'   <h5 class="card-header" name="type1" style="border-style:none;">'.$row["type"].'</h5>'
                      .'  <img style=" width: 100%;height: 200px;" value="../admin/picture/'.$row["pic"].'" name="pics" src="../admin/picture/'.$row["pic"].'" class="card-img-top"  alt="Product name" style="border : 5px solid white ;border-radius;10px">'
                      .'  <div class="card-body">'
                          .'  <h5 class="card-title" style=" background : rgba(0,0,0,0.2); box-sizing: border-box""><output style="border-style:none;width:180px;background-color:transparent;box-sizing: border-box" name="price1">السعر  : ';
            if(strlen($row5["result"])==0){
             echo  $row["price"];}
             else {
    echo   $row5["result"];
             }
            
            
    echo ' جنيه  </output> </h5>'
                           .' <br>'
                            .'<a href="#" class="btn btn-ReadMore" data-toggle="modal" data-target="#readMore">اقرا المزيد</a>'
                            .'<form action="'.$_SERVER["PHP_SELF"].'" method="post" enctype="multipart/form-data">'
                           .' <div class="modal fade" id="readMore">'
                              .'  <div class="modal-dialog modal-dialog-centered">'
                                 .' <div class="modal-content">'

                                   .' <!-- Modal Header -->'
                                    .'<div class="modal-header">'
                                     .' <h4 class="modal-title">'.$row["type"].'</h4>'
                                     .' <button type="button" class="close" data-dismiss="modal">&times;</button>.'
                                  .'  </div>'

                                    .'<!-- Modal body -->'
                                    .'<div class="modal-body">'
                                       .'<img src="../admin/picture/'.$row["pic"].'" class="card-img-top" style="height : 300px" alt="'.$row["type"].'">'
            .'  <h5 class="card-title" style=" background : rgba(0,0,0,0.2); box-sizing: border-box"><output style="border-style:none;width:180px;background-color:transparent;box-sizing: border-box" name="price1">السعر  : ';
            if(strlen($row5["result"])==0){
             echo  $row["price"];}else {
    echo   $row5["result"];
    }
            
            
    echo ' جنيه  </output> </h5>'
                                      .' <div style="position:relative ;overflow-y:scroll; height :140px;">'
                                           .' <p class="card-text">'.$row["info"].'</p>'
            .'<br>'
            .'<input type="text" class="form-control is-valid" id="validationServer01" value="اللون" required>'
            .'<select class="custom-select is-invalid" id="validationServer04" required>
        <option selected disabled value="">عدد السلعه</option>
        <option>1</option><option>2</option>
        <option>3</option><option>4</option>
        <option>5</option>
      </select>'
                                          
                                            
                                         
                                      .'  </div>'
                                  .'  </div>'

                                   .' <!-- Modal footer -->'
                                   .' <div class="modal-footer">'
                           
                                     .' <input class="btn btn-primary" type="submit" value="Add to cart" name="send">'
                                     .' <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>'
                                      .'</form>'  
                                 .'   </div>'
                                 .' </div>'
                              .'  </div>'
                            .'  </div>'
                       .' </div>'
                    .' </div> '
                            
                           
              .'  </div>    <!-- End of card-->';
                        
                    
                                   
                    
}}
                                  

