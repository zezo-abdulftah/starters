<?php
require 'check.php';
@$x=$_GET["find"];
@$z=$_GET["finds"];
$p=$_GET["finda"];

 require 'conn.php';
 $result=  mysqli_query($cone, "select * from parts where catname='$x'");

            if(mysqli_num_rows($result)>0){
                while ($rows=  mysqli_fetch_array($result)) {
                    echo '<option value="'.$rows["id"].'">'
                    .$rows["partname"]
                .'</option>';}
            }
            $results=  mysqli_query($cone, "select * from mobiles where partid='$z'");

            if(mysqli_num_rows($results)>0){
                while ($row=  mysqli_fetch_array($results)) {
                    echo '<option value="'.$row["id"].'">'
                    .$row["type"]
                .'</option>';}
            }
            $resultss=  mysqli_query($cone, "select * from mobiles where id='$p'");

            if(mysqli_num_rows($resultss)>0){
                while ($rowss=  mysqli_fetch_array($resultss)) {
                    echo '<option ">'
                    .$rowss["price"]
                .'</option>';}
            }
 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

