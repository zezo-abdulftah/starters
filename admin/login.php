<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Ziad abdelfta7
 */
class login {
    //put your code here
    function logins($email,$password){
         $this->email=$email;
         $this->password=$password;
         require 'conn.php';
         $select=  mysqli_query($cone, "select * from admin where email='$this->email' and password='$this->password'");
         $row=  mysqli_fetch_array($select);
         session_start();
         $_SESSION["id"]=$row["id"];
         if(mysqli_num_rows($select)>0){
             header("location:home.php");
         }
         
 else {
     echo '<div style="width:440px;margin-left:550px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>حطأ في التسجيل </strong> من فضلك راجع معلوماتك  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
 }
         
         
     }
}
