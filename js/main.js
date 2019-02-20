// Hamburger
var check = document.querySelector('.checkbox-toggle');

var menu = document.querySelector('.menu');
var menuDiv = document.querySelector('.menu > div');
var menuDivDiv = document.querySelector('.menu > div > div');

var hamburgerDiv = document.querySelector('.hamburger > div')

check.onclick = function () {
  menu.classList.toggle('menu-on');
  menuDiv.classList.toggle('menu-div-on');
  menuDivDiv.classList.toggle('menu-div-div-on');
  hamburgerDiv.classList.toggle('hamburgerAnim');
}

var menuLink = document.querySelectorAll('.menu > ul > li > a');

for (i = 0; i < menuLink.length; i++) {
  menuLink[i].onclick = function (e) {
    e.preventDefault();

    menu.classList.toggle('menu-on');
    menuDiv.classList.toggle('menu-div-on');
    menuDivDiv.classList.toggle('menu-div-div-on');
    hamburgerDiv.classList.toggle('hamburgerAnim');
    check.checked = false;

    var selector = this.getAttribute('href');
    var h = $(selector);
    $('html, body').animate({
      scrollTop: h.offset().top - 100
    }, 0);
  }
}



// magnific-popup

$(document).ready(function() {
  $('.portfolio-image').magnificPopup({delegate: 'a', type:'image',gallery:{enabled:true}});
});


//BUTTON
$('#btn').click(function() { 
  var goTo = $('#form').offset().top;
 $('body,html').animate({scrollTop: goTo - 130},800); 
});