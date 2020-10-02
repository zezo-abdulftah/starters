<?php
session_start();
if(isset($_SESSION["id"])){
    $id=$_SESSION["id"];
}
else{
    header("location:admin.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

