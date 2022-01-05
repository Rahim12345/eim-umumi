/*----Gallerry Start---*/
// Gallery image hover
$(".img-wrapper").hover(
  function () {
    $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
  },
  function () {
    $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
  }
);
// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $(
  '<div id="prevButton"><i class="fa fa-chevron-left"></i></div>'
);
var $nextButton = $(
  '<div id="nextButton"><i class="fa fa-chevron-right"></i></div>'
);
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');
// Add overlay
$overlay
  .append($image)
  .prepend($prevButton)
  .append($nextButton)
  .append($exitButton);
$("#gallery").append($overlay);
// Hide overlay on default
$overlay.hide();
// When an image is clicked
$(".img-overlay").click(function (event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});
// When the overlay is clicked
$overlay.click(function () {
  // Fade out the overlay
  $(this).fadeOut("slow");
});
// When next button is clicked
$nextButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) {
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});
// When previous button is clicked
$prevButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});
// When the exit button is clicked
$exitButton.click(function () {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
/*-----Gallerry End----*/

/*---Fealiyyet istiqametleri slayd--*/
new Swiper(".testimonials-slider", {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
});
// Animation on scroll
window.addEventListener("load", () => {
  AOS.init({
    duration: 1000,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
});
/*------ Fealiyyet istiqametleri end ----*/

/*----- Navbar Start----*/
jQuery(function ($) {
  "use strict";
  $(".navbar-fostrap").click(function () {
    $(".nav-fostrap").toggleClass("visible");
    $("body").toggleClass("cover-bg");
  });
  $(document).ready(function () {
    // navSearch show/hide
    function navSearch() {
      $(".nav-search").on("click", function () {
        $(".search-block").fadeIn(350);
      });
      $(".search-close").on("click", function () {
        $(".search-block").fadeOut(350);
      });
    }
    navSearch();
    // navbarDropdown
    function navbarDropdown() {
      if ($(window).width() < 992) {
        $(".site-navigation .dropdown-toggle").on("click", function () {
          $(this).siblings(".dropdown-menu").animate(
            {
              height: "toggle",
            },
            300
          );
        });

        var navbarHeight = $(".site-navigation").outerHeight();
        $(".site-navigation .navbar-collapse").css(
          "max-height",
          "calc(100vh - " + navbarHeight + "px)"
        );
      }
    }
    navbarDropdown();
  });
});
/*-----Navbar End------*/

/*-----Top Slider Start----*/
jQuery("#carousel").owlCarousel({
  autoplay: true,
  rewind: true /* use rewind if you don't want loop */,
  margin: 20,
  /*
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	*/
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },

    600: {
      items: 3,
    },

    1024: {
      items: 4,
    },

    1366: {
      items: 4,
    },
  },
});
/*---- Top Slider End ----*/

/*------ Faydali linkler start -----*/
$(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
});
/*----Faydali linkler end----*/

/*---Video Gallery Start----*/
$(document).ready(function () {
  $(".fancybox").fancybox({
    padding: 0,
    maxWidth: "100%",
    maxHeight: "100%",
    width: 560,
    height: 315,
    autoSize: true,
    closeClick: true,
    openEffect: "elastic",
    closeEffect: "elastic",
  });
});
/*---Video Gallery End----*/