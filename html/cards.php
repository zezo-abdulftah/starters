<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cards
 *
 * @author Ziad abdelfta7
 */
class cards {
    public $type;
    public $color;
    public $count;
    public $price;
    
            function car($type,$color,$count,$price){
                $this->x=$x;
        $this->type=$type;
        $this->color=$color;
        $this->count=$count;
        $this->price=$price;
        require 'conn.php';
        $sele=  mysqli_query($cone, "select * from car where type =$this->type");
        if(mysqli_num_rows($sele)>0){
           header("location:cart.php"); 
        }
 else {
     $insert=  mysqli_query($cone, "INSERT INTO car(type,color,count,price) VALUES('$this->type','$this->color','$this->count','$this->price')");
     if($insert){
         header("location:cart.php");
     }
     else{
        header("location:products.php"); 
     }
     
     
 }
        
    }
    function cars($type,$color,$count,$price){
                
        $this->type=$type;
        $this->color=$color;
        $this->count=$count;
        $this->price=$price;
        require 'conn.php';
        $sele=  mysqli_query($cone, "select * from car where type =$this->type");
        if(mysqli_num_rows($sele)>0){
           header("location:cartArabic.php"); 
        }
 else {
     $insert=  mysqli_query($cone, "INSERT INTO car(type,color,count,price) VALUES('$this->type','$this->color','$this->count','$this->price')");
     if($insert){
         header("location:cartArabic.php");
     }
     else{
        header("location:productArabic.php"); 
     }
     
     
 }
        
    }


    //put your code here
}
