//sidenav
$(document).ready(function(){
  $('.sidenav').sidenav({
    draggable:true
  });
  $('.collapsible').collapsible();
  $('.carousel').carousel();
});
//Dropdown
$('.dropdown-trigger').dropdown({
  hover:true
});
//loader
document.onreadystatechange = function () {
  var state = document.readyState
      if (state == 'complete') {
              document.getElementById('interactive');
              document.getElementById('load').style.visibility="hidden";
      }
  }