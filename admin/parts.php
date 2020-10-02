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
    </head>
    <body style="padding-top: 200px;background-color: whitesmoke">
        <form style="width: 700px;margin: auto" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <select name="itemid" style="width: 250px;" class="custom-select">
  <option selected>Open this select menu</option>
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
            <input style="width: 250px;float: right" name="part" style="margin-bottom: 20px;" class="form-control" type="text" placeholder="the item" ><br>
            <input style="margin-left: 250px;width: 200px;margin-top: 30px;" name="send" class="btn btn-primary" type="submit" value="Submit">
            
            
            
            
            
        </form>
        <?php
  require 'catag.php';
 if(isset($_POST["send"])){
     $part=$_POST["part"];
     $items=$_POST["itemid"];
     $ss=new items1();
     $ss->parts($part, $items);
 }
  
  
        // put your code here
        ?>
    </body>
</html>
