$(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});


function myULshow() {
  document.getElementById("myUL").style.display = "block" ;
    document.getElementById("myUL").style.display = "all 2s";
    document.getElementById("myUL").style.transition = "all 2s";
   document.getElementById("btn1").style.display = "none";
    document.getElementById("btn2").style.display = "block";
    
}
function myULhide() {
  document.getElementById("myUL").style.display = "none";
  document.getElementById("btn1").style.display = "block";
    document.getElementById("btn2").style.display = "none";
    setInterval(hide, 2000);
}

/* validation*/
/*
function validateForm() {
  var x = document.forms["login"]["Email"].value;
  var y = document.forms["login"]["password"].value;
  if (x == "") {
    alert("Please enter your Email");
    return false;
  }
    else if(y == "")
        {
          alert("Please enter your Password");
        return false;  
        }
}
*/


/*  login validation */

$("#login").click(function(event) {

    // Fetch form to apply custom Bootstrap validation
    var form = $("#login")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    else if(form[1].checkValidity() === false){
            event.preventDefault()
            event.stopPropagation()
            }
    
    form.addClass('was-validated');
    // Perform ajax submit here...
    
});

/* Account */
 function makeeditable() {

      var a=document.getElementById("fname"),
          b=document.getElementById("lname"),
          c=document.getElementById("uname"),
          d=document.getElementById("mail"),
          e=document.getElementById("pass");


      a.readOnly= false;
      b.readOnly=false;
      c.readOnly=false;
      d.readOnly=false;
      e.readOnly=false;

      var x=document.getElementById("svbtn");
      var y=document.getElementById("edbtn");

     
    }

/*  Register validation */
/*
$("#signUp").click(function(event) {

    // Fetch form to apply custom Bootstrap validation
    var form = $("#registerForm")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    else if(form[1].checkValidity() === false){
            event.preventDefault()
            event.stopPropagation()
            }
    
    form.addClass('was-validated');
    // Perform ajax submit here...
    
});
*/
/*login fedout*/
/*
$(document).ready(function(){
  $("#signUp").click(function(){
    $("#myForm").fadeOut(1000);
  });
  $("#signUp").click(function(){
    $("#registerForm").fadeIn(2000);
  });
});
*/