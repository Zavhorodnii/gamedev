/* Sticky Headers */

$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){
    $('.header__inner').addClass("sticky");
    }
    else{
    $('.header__inner').removeClass("sticky");
    }
    });
});


$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){
    $('.header-white__inner').addClass("sticky-white");
    }
    else{
    $('.header-white__inner').removeClass("sticky-white");
    }
    });
});

$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){
    $('.header-black__inner').addClass("sticky-black");
    }
    else{
    $('.header-black__inner').removeClass("sticky-black");
    }
    });
});

/* END Sticky Headers */


/* Menu List */

let isMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};
	
if(isMobile.any()){
		document.body.classList.add('_touch');

      let menuArrows=document.querySelectorAll('.menu__arrow');
	    if (menuArrows.length > 0) {
			for (let index = 0; index < menuArrows.length; index++) {
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener('click', function (e) {
                    menuArrow.parentElement.classList.toggle('_active');
                });
            }
		}
	}
    else {
        document.body.classList.add('_pc');
}

/* END Menu List */



/* White Lang Menu List */

let isLangMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isLangMobile.Android() || isLangMobile.BlackBerry() || isLangMobile.iOS() || isLangMobile.Opera() || isLangMobile.Windows());}
};
	
if(isLangMobile.any()){
		document.body.classList.add('_touch-lang');

      let menuArrows=document.querySelectorAll('.menu__arrow-lang');
	    if (menuArrows.length > 0) {
			for (let index = 0; index < menuArrows.length; index++) {
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener('click', function (e) {
                    menuArrow.parentElement.classList.toggle('_active-lang');
                });
            }
		}
	}
    else {
        document.body.classList.add('_pc-lang');
}

/* END White Lang Menu List */


/* Black Lang Menu List */

let isLBMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isLBMobile.Android() || isLBMobile.BlackBerry() || isLBMobile.iOS() || isLBMobile.Opera() || isLBMobile.Windows());}
};
	
if(isLBMobile.any()){
		document.body.classList.add('_touch-lb');

      let menuArrows=document.querySelectorAll('.menu-black__arrow-lang');
	    if (menuArrows.length > 0) {
			for (let index = 0; index < menuArrows.length; index++) {
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener('click', function (e) {
                    menuArrow.parentElement.classList.toggle('_active-lb');
                });
            }
		}
	}
    else {
        document.body.classList.add('_pc-lb');
}

/* END Black Lang Menu List */


/* Blog Menu List Navbar */

let isGameMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isGameMobile.Android() || isGameMobile.BlackBerry() || isGameMobile.iOS() || isGameMobile.Opera() || isGameMobile.Windows());}
};
	
if(isGameMobile.any()){
		document.body.classList.add('_touch-navbar');

      let menuArrows=document.querySelectorAll('.navbar-mob__arrow');
	    if (menuArrows.length > 0) {
			for (let index = 0; index < menuArrows.length; index++) {
                const menuArrow = menuArrows[index];
                menuArrow.addEventListener('click', function (e) {
                    menuArrow.parentElement.classList.toggle('_active-navbar');
                });
            }
		}
	}
    else {
        document.body.classList.add('_pc-navbar');
}

/* END Blog Menu List Navbar */


/* Mobile burger menu */

$(document).ready(function() {
  $('.menu__btn, .header-menu_bgr').click(function() {
    $('.menu__btn, .menu-mob, .header-menu_bgr, .header__inner, .header-black__inner').toggleClass('show');
      return false;
  });
});


const iconMenu = document.querySelector('.menu__btn');
if (iconMenu) {
const menuBody = document.querySelector('.menu-mob__list');
iconMenu.addEventListener('click', function (e) {
  document.body.classList.toggle('_lock');
});
}

/* END Mobile Version */




