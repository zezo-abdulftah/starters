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
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="popeper.js"></script>
        <title></title>
        <style>
            #sel2{margin-left: 70px;}
        </style>
    </head>
    <body>
         <body style="padding-top: 200px;background-color: whitesmoke">
        <form style="width: 950px;margin: auto;height: 250px;" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <div class="row" style="width:900px;margin-left: 20px;margin-bottom: 20px;">
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
            <input style="width: 250px;float: right" name="type" style="margin-bottom: 20px; " class="form-control" type="text" placeholder="The Type" ><br>
            </div><br>
            <div class="row" style="width: 900px;height: 50px;margin-left: 20px">
                <div class="col-6" >
                <div class="input-group" style=" width: 400px; ">
  <div class="custom-file">
      <input name="pic" type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile04">Choose picture</label>
  </div> </div>
                    
  
                    
  </div>
                <div class="col-6" >
                    <div class="row">
                    <div class="col-6">
                        <input name="color" style="width:190px;"    class="form-control" type="text" placeholder="The color" >
                     </div>
                    <div class="col-6" >
                       <input  style="width:190px;" name="price"   class="form-control" type="text" placeholder="The price" >
                    </div>
                        </div>
                </div>
                 <input  style="width:430px;height: 40px;margin-left: 20px;margin-top: 20px;" name="info"   class="form-control" type="text" placeholder="the information" >
                
               
                
                
            </div>
            
            
            <input style="margin-left: 350px;width: 200px;margin-top: 70px;" name="send" class="btn btn-primary" type="submit" value="Submit">
            
            
            
            
            
        </form>
        <?php
  require 'catag.php';
  if(isset($_POST["send"])){
      $item2=$_POST["itemid"];
      $partid=$_POST["partid"];
      $type=$_POST["type"];
      $color=$_POST["color"];
      $price=$_POST["price"];
      @$info=$_POST["info"];
      $pic=$_FILES["pic"];
      $picname=$pic["name"];
      $pictmp=$pic["tmp_name"];
       $ex=  pathinfo($picname, PATHINFO_EXTENSION);
    $newpic=$type.".".$ex;
    $cate=new items1();
    $cate->types($item2, $partid, $type, $newpic, $pictmp, $color, $price,$info);
  }
        // put your code here
        ?>
    </body>
</html>
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
