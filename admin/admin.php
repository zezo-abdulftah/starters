<!DOCTYPE html>

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
    <body style="background-color: #95999c">
        
        <form style="width: 400px;height: 350px;margin: auto;margin-top: 150px;" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
            <input name="send" class="btn btn-primary" type="submit" value="Submit">
</form>

        
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php
require 'login.php';
if(isset($_POST["send"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $log=new login();
   $log->logins($email, $password);
    
    
    
}
?>