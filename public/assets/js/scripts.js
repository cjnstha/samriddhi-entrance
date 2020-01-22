//   all ------------------
function initSWC() {
    "use strict";
    
    //   Background image ------------------
    var a = $(".bg");
    a.each(function (a) {
        if ($(this).attr("data-bg")) $(this).css("background-image", "url(" + $(this).data("bg") + ")");
    });
    //   scrollToFixed------------------
    $(".fixed-bar").scrollToFixed({
        minWidth: 1064,
        marginTop: 90,
        removeOffsets: true,
        limit: function () {
            var a = $(".limit-box").offset().top - $(".fixed-bar").outerHeight() - 70;
            return a;
        }
    });
    $(".back-to-filters").scrollToFixed({
        minWidth: 1224,
        zIndex: 12,
        marginTop: 130,
        removeOffsets: true,
        limit: function () {
            var a = $(".limit-box").offset().top - $(".back-to-filters").outerHeight(true) - 10;
            return a;
        }
    });
    $(".scroll-nav-wrapper").scrollToFixed({
        minWidth: 768,
        zIndex: 12,
        marginTop: 80,
        removeOffsets: true,
        limit: function () {
            var a = $(".limit-box").offset().top - $(".scroll-nav-wrapper").outerHeight(true) - 10;
            return a;
        }
    });
    
    //   scroll to------------------
    $(".custom-scroll-link").on("click", function () {
        var a = 70 + $(".scroll-nav-wrapper").height();
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") || location.hostname === this.hostname) {
            var b = $(this.hash);
            b = b.length ? b : $("[name=" + this.hash.slice(1) + "]");
            if (b.length) {
                $("html,body").animate({
                    scrollTop: b.offset().top - a
                }, {
                    queue: false,
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
                return false;
            }
        }
    });
    $(".scroll-init  ul ").singlePageNav({
        filter: ":not(.external)",
        updateHash: false,
        offset: 110,
        threshold: 120,
        speed: 1200,
        currentClass: "act-scrlink"
    });
    $(".to-top").on("click", function (a) {
        a.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    // scroll animation ------------------
    $(window).on("scroll", function (a) {
        if ($(this).scrollTop() > 150) {
            $(".to-top").fadeIn(500);
        } else {
            $(".to-top").fadeOut(500);
        }
    });
    

    // Styles ------------------
    if ($("footer.main-footer").hasClass("fixed-footer")) {
        $('<div class="height-emulator fl-wrap"></div>').appendTo(".main");
    }
    function csselem() {
        $(".height-emulator").css({
            height: $(".fixed-footer").outerHeight(true)
        });
        $(".slideshow-container .slideshow-item").css({
            height: $(".slideshow-container").outerHeight(true)
        });
        $(".slider-container .slider-item").css({
            height: $(".slider-container").outerHeight(true)
        });
        $(".map-container.column-map").css({
            height: $(window).outerHeight(true)-80+"px"
        });		
					
    }
    csselem();
    // Mob Menu------------------
    $(".nav-button-wrap").on("click", function () {
        $(".main-menu").toggleClass("vismobmenu");
    });
    function mobMenuInit() {
        var ww = $(window).width();
        if (ww < 1064) {
            $(".menusb").remove();
            $(".main-menu").removeClass("nav-holder");
            $(".main-menu nav").clone().addClass("menusb").appendTo(".main-menu");
            $(".menusb").menu();
        } else {
            $(".menusb").remove();
            $(".main-menu").addClass("nav-holder");
        }
    }
    mobMenuInit();
    //   css ------------------
    var $window = $(window);
    $window.on("resize", function() {
        csselem();
        mobMenuInit();
    });
    $(".box-cat").on({
		mouseenter: function () {
        var a = $(this).data("bgscr");
        $(".bg-ser").css("background-image", "url(" + a + ")");
    }});
    $(".header-user-name").on("click", function () {
        $(".header-user-menu ul").toggleClass("hu-menu-vis");
        $(this).toggleClass("hu-menu-visdec");
    });
     
}

 



//   Init All ------------------
$(function () {
    initSWC();
});


function readLogoURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#previewLogo').attr('src', e.target.result).removeClass('hide');
      $("#img-preview").hide();
    }
    reader.readAsDataURL(input.files[0]);
  }else{
    $('#previewLogo').addClass('hide').attr('src', 'url(\'\')');
  }
}

function readFaviconURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#previewFavicon').attr('src', e.target.result).removeClass('hide');
      $("#img-preview2").hide();
    }
    reader.readAsDataURL(input.files[0]);
  }else{
    $('#previewFavicon').addClass('hide').attr('src', 'url(\'\')');
  }
}