<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rege
 *
 * @author Ziad abdelfta7
 */
class rege {
    
    public $fname;
    public $lname;
    public $username;
    public $email;
    public $password;
    
     function insert($fname,$lname,$username,$email,$password){
         $this->fname=$fname;
         $this->lname=$lname;
         $this->username=$username;
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
       $sele= mysqli_query($cone, "select * from register where  email='$this->email'");
         if(mysqli_num_rows($sele)>0){
             echo '<div style="width:500px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>There EXIST!</strong> pleaze enter diffrent email.'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
         }
 else {
     $insert=  mysqli_query($cone, "INSERT INTO register(firstName,lastName,username,email,password)VALUES('$this->fname','$this->lname','$this->username','$this->email','$this->password')");
 if($insert) {
        echo '<div style="width:500px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>well Done!</strong> now you have an account .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
    }  else 
        
    {
       echo    "<script> alert('NOT INSERT ');window.location.assign('register.php')</script>";
    }
 
}
     }
      function insert2($fname,$lname,$username,$email,$password){
         $this->fname=$fname;
         $this->lname=$lname;
         $this->username=$username;
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
       $sele= mysqli_query($cone, "select * from register where  email='$this->email'");
         if(mysqli_num_rows($sele)>0){
             echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>الحساب مسجل من قبل!</strong> من فضلك ادخل ايميل اخر.'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
         }
 else {
     $insert=  mysqli_query($cone, "INSERT INTO register(firstName,lastName,username,email,password)VALUES('$this->fname','$this->lname','$this->username','$this->email','$this->password')");
 if($insert) {
        echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>تم بنجاح!</strong> الان انت تمتلك حساب  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
    }  else 
        
    {
       echo    "<script> alert('NOT INSERT ');window.location.assign('register.php')</script>";
    }
 
}
     }
     function login($email,$password){
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
         $select=  mysqli_query($cone, "select * from register where email='$this->email' and password='$this->password'");
         $row=  mysqli_fetch_array($select);
         session_start();
         $_SESSION["id"]=$row["id"];
         if(mysqli_num_rows($select)>0){
             header("location:index.php");
         }
         
 else {
     echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>wrong</strong> pleaze review your information  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
 }
         
         
     }
      function login2($email,$password){
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
         $select=  mysqli_query($cone, "select * from register where email='$this->email' and password='$this->password'");
         $row=  mysqli_fetch_array($select);
         session_start();
         $_SESSION["id"]=$row["id"];
         if(mysqli_num_rows($select)>0){
             header("location:indexarabic.php");
         }
         
 else {
     echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>حطأ في التسجيل </strong> من فضلك راجع معلوماتك  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
 }
         
         
     }
     function edit ($fname,$lname,$username,$email,$password){
         $this->fname=$fname;
         $this->lname=$lname;
         $this->username=$username;
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
         require 'check.php';
         
     @$update=  mysqli_query($cone, "update  register set firstName='$this->fname',lastName='$this->lname',username='$this->username',email='$this->email',password='$this->password' where id='$ide'");
     if($update){
         header("location:login.php");
     }
 

     
}
function edit2 ($fname,$lname,$username,$email,$password){
         $this->fname=$fname;
         $this->lname=$lname;
         $this->username=$username;
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
         require 'check.php';
         
     @$update=  mysqli_query($cone, "update  register set firstName='$this->fname',lastName='$this->lname',username='$this->username',email='$this->email',password='$this->password' where id='$ide'");
     if($update){
       header("location:loginArabic.php");   
     }
        
    
 

     
}
}