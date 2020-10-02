<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'check.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1" >
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	
	
	<script src="jquery-3.2.1.min.js"></script>
        <script src="js.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="popeper.js"></script>
        <title></title>
        <style>  #sel2{margin-left: 70px;}
        #sp1{margin-top: 50px;;font-size: 22px;font-weight: 600;border-style: solid;border-color: #343a40;background-color: gray;color: whitesmoke;padding-left: 15px;padding-right: 15px;border-radius: 5px;}</style>
    </head>
     <body style="padding-top: 200px;background-color: whitesmoke">
         
         
         <form style="width: 1250px;margin: auto;height: 250px;padding-left: 150px;" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <div class="row" style="width:1100px;margin-left: 20px;margin-bottom: 20px;">
            <select id="sel1" name="itemid" style="width: 250px;" class="custom-select">
  <option selected>The Item</option>
  <?php
      require 'conn.php';
    $sele=  mysqli_query($cone, "select * from items");
    if(mysqli_num_rows($sele)>0){
        while ($row = mysqli_fetch_array($sele)) {
            echo '<option value="'.$row["id"].'">'
            .$row["itemname"]
                    .'</option>';
        }
    }
  ?>
  
</select>
                <select  id="sel2" name="partid" style="width: 250px;margin-right: 60px" class="custom-select" >
  <option selected>Open this select menu</option>
  
  
  
</select>
                 <select  id="sel3" name="typeid" style="width: 250px;margin-right: 60px" class="custom-select" >
  <option selected>Open this select menu</option>
  
  
  
</select>
           <br>
            </div><br>
            <div class="row" style="width: 900px;height: 50px;margin-left: 20px;padding-left: 230px;">
                <div class="col-4" >
                    
                   <select   id="price"  style="width:190px;" name="price"   class="form-control" type="text"    class="custom-select" >
  <option selected>the price</option>
  
  
  
</select>
  </div> 
                    
  
                    
  
                <div class="col-8" >
                    
                    <div class="col-6">
                        <input id="off" name="offer" style="width:190px;"    class="form-control" type="text" placeholder="The offer" >
                     </div>
                </div>
                   
                       
                </div>
                <div class="row" style=" padding-top: 20px;padding-left: 340px;padding-right: 420px;">
                    <div onclick="zezo()"  class="col-6">   <span  id="sp1" class="col-6" >result</span></div>
                    <div class="col-6" >   <textarea readonly  id="res"  style="width:190px;margin-top: 15px;margin-right: 10px;background-color: white;height: 38px;" name="res"   class="form-control  " type="text"  > </textarea> </div>
                </div>
                
               
                
            
            
         
            
            <input style="margin-left: 370px;;width: 200px;margin-top: 70px;" name="send" class="btn btn-primary" type="submit" value="Submit">
            
            
            
            
            
        </form>
     </body>
     
</html>
<?php
require 'catag.php';
if(isset($_POST["send"])){
    $item=$_POST["itemid"];
    $part=$_POST["partid"];
    $type=$_POST["typeid"];
    $price=$_POST["price"];
    $off=$_POST["offer"];
    $res=$_POST["res"];
    $typess=new items1();
    $typess->offer($item, $part, $type, $price, $off, $res);
}
?>
<script>
    $(document).ready(function(){
        $("#sel1").change(function(){
                var y=$(this).val();
        
        $.ajax({
            url:'find.php',
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
    <script>
    $(document).ready(function(){
        $("#sel2").change(function(){
                var y=$(this).val();
        
        $.ajax({
            url:'find.php',
            method:'GET',
            data:{finds:y},
            datatype:'text',
            success:function(data){
                $("#sel3").html(data);
            }
            
            
            
            
        });
        
        
        
        
        
        
        });  
        
    });
    
    
    </script>
    <script>
    $(document).ready(function(){
        $("#sel3").change(function(){
                var y=$(this).val();
        
        $.ajax({
            url:'find.php',
            method:'GET',
            data:{finda:y},
            datatype:'text',
            success:function(data){
                $("#price").html(data);
            }
            
            
            
            
        });
        
        
        
        
        
        
        });  
        
    });
    
    
    </script>