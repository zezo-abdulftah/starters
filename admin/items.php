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
        <div style="margin-top: 200px;;;width: 500px;margin: auto;height: 300px;">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" >
                <input name="item" style="margin-bottom: 20px;" class="form-control" type="text" placeholder="the item" >
            <input name="send" class="btn btn-primary" type="submit" value="Submit">
        </form>
            </div>
        <?php
        require 'catag.php';
        if(isset($_POST["send"])){
            $item=$_POST["item"];
            $itt=new items1();
            $itt->items($item);
        }
        ?>
    </body>
</html>
<?php
