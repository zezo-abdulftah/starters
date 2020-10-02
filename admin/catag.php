<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of catag
 *
 * @author Ziad abdelfta7
 */
class items1 {
    public $item;
    public $part;
    public $itemid;
    public $type;
    public $newpic;
    public $tmpname;
    public $color;
    public $price;
    public $offer;
    public $result;
    public $info;
            
            function items ($item){
        $this->item=$item;
        
        require 'conn.php';
        if(strlen($this->item)==0){
             echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>حطأ في التسجيل </strong> من فضلك اكتب البيانات  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
        $sele=  mysqli_query($cone, "select * from items where itemname='$this->item'");
        if(@mysqli_num_rows($sele)>0){
             echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>اضف عنصرا جديدا </strong> هذا العنصر موجود من قبل .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
          $insert=  mysqli_query($cone,"INSERT INTO items(itemname)VALUES('$this->item')");
          if(!$insert){
               echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>من فضلك جرب مره اخري </strong> العنصر لم يضاف  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
          }
        }
    }
    }
    function parts($part,$item){
        $this->part=$part;
        $this->itemid=$item;
        
        require 'conn.php';
        $sele=  mysqli_query($cone, "select * from parts where partname='$this->part'");
        if(mysqli_num_rows($sele)>0){
             echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>اضف عنصرا جديدا </strong> هذا العنصر موجود من قبل .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
     $insert=  mysqli_query($cone,"INSERT INTO parts (partname,catname)VALUES('$this->part','$this->itemid')");
     if(!$insert){
        echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>من فضلك جرب مره اخري </strong> العنصر لم يضاف  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';  
     }
 }
 
    }
    function types($item,$part,$type,$newpic,$tmpname,$color,$price,$info){
        $this->item=$item;
        $this->part=$part;
        $this->type=$type;
        $this->newpic=$newpic;
        $this->tmpname=$tmpname;
        $this->color=$color;
        $this->price=$price;
        $this->info=$info;
       
        require 'conn.php';
        if(strlen($this->item)==0 and strlen($this->part)==0 and strlen($this->type)==0 and strlen($this->color)==0 and strlen($price)==0 and strlen($info)==0){
            echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>حطأ في التسجيل </strong> من فضلك اكتب البيانات  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
        $sele=  mysqli_query($cone, "select * from mobiles where item='$this->item' and partid='$this->part' and type='$this->type' and color='$this->color' and price='$this->price'");
        if(mysqli_num_rows($sele)>0){
             echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>اضف عنصرا جديدا </strong> هذا العنصر موجود من قبل .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
     
     $insert=  mysqli_query($cone, "INSERT INTO mobiles(item,partid,type,pic,color,price,info)VALUES('$this->item','$this->part','$this->type','$this->newpic','$this->color','$this->price','$this->info')");
     if(!$insert){
          echo '<div style="width:512px;margin-left:510px;margin-button:200px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>من فضلك جرب مره اخري </strong> العنصر لم يضاف  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';  
     }
     else{
         $move=  move_uploaded_file($this->tmpname,"picture/$this->newpic" );
     }
     
     
 }
    }
    }
    function offer($item,$part,$type,$price,$offer,$result){
        $this->item=$item;
        $this->part=$part;
        $this->type=$type;
        $this->price=$price;
        $this->offer=$offer;
        $this->result=$result;
        require 'conn.php';
       $sele=  mysqli_query($cone, "select * from offers where type='$this->type' and price='$this->price' and result='$this->result'");
        if(mysqli_num_rows($sele)>0){
             echo '<div style="width:512px;margin-left:510px;margin-top:100px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>اضف عنصرا جديدا </strong> هذا العنصر موجود من قبل .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';
        }
 else {
 
     $insert=  mysqli_query($cone,"INSERT INTO offers(type,item,partid,price,offerRate,result)VALUES('$this->type','$this->item','$this->part','$this->price','$this->offer','$this->result')");
  if(!$insert){
          echo '<div style="width:512px;margin-left:510px;margin-top:100px;position: absolute;z-index: 4;" class="alert alert-warning alert-dismissible fade show" role="alert">'
  .'<strong>من فضلك جرب مره اخري </strong> العنصر لم يضاف  .'
  .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
    .'<span aria-hidden="true">&times;</span>'
  .'</button>'
.'</div>';  
     }
 }
 }
 
 
}
