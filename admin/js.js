
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function zezo(){
    var x=document.getElementById('price');
    var y=document.getElementById('off');
    document.getElementById('res').innerHTML=(parseFloat(x.value)-(parseFloat(y.value)* parseFloat(x.value)));
}


