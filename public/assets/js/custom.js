const menu = document.querySelector('.menu');
const menuSection = menu.querySelector('.menu-section');
const menuArrow = menu.querySelector('.menu-mobile-arrow');
const menuClosed = menu.querySelector('.menu-mobile-close');
const menuToggle = document.querySelector('.menu-mobile-toggle');
const menuOverlay = document.querySelector('.overlay');
let subMenu;

menuSection.addEventListener('click', (e) => {
    if (!menu.classList.contains('active')) {
        return;
    }
    if (e.target.closest('.menu-item-has-children')) {
        const hasChildren = e.target.closest('.menu-item-has-children');
        showSubMenu(hasChildren);
    }
});

menuArrow.addEventListener('click', () => {
    hideSubMenu();
});

menuToggle.addEventListener('click', () => {
    toggleMenu();
});

menuClosed.addEventListener('click', () => {
    toggleMenu();
});

menuOverlay.addEventListener('click', () => {
    toggleMenu();
});

// Show & Hide Toggle Menu Function
function toggleMenu() {
    menu.classList.toggle('active');
    menuOverlay.classList.toggle('active');
}

// Show the Mobile Side Menu Function
function showSubMenu(hasChildren) {
    subMenu = hasChildren.querySelector('.menu-subs');
    subMenu.classList.add('active');
    subMenu.style.animation = 'slideLeft 0.5s ease forwards';
    const menuTitle = hasChildren.querySelector('i').parentNode.childNodes[0].textContent;
    menu.querySelector('.menu-mobile-title').innerHTML = menuTitle;
    menu.querySelector('.menu-mobile-header').classList.add('active');
}

// Hide the Mobile Side Menu Function
function hideSubMenu() {
    subMenu.style.animation = 'slideRight 0.5s ease forwards';
    setTimeout(() => {
        subMenu.classList.remove('active');
    }, 300);

    menu.querySelector('.menu-mobile-title').innerHTML = '';
    menu.querySelector('.menu-mobile-header').classList.remove('active');
}

// Windows Screen Resizes Function
window.onresize = function() {
    if (this.innerWidth > 991) {
        if (menu.classList.contains('active')) {
            toggleMenu();
        }
    }
};
// For Main Menu //


// Fixed Header //
$(window).scroll(function() {
    if ($(window).scrollTop() >= 100) {
        $('.header').addClass('fixed-header');
    } else {
        $('.header').removeClass('fixed-header');
    }
});
// fixed header //

// DOM Ready
$(function() {

    var $el, $ps, $up, totalHeight;

    $(".sidebar-box .button").click(function() {

        // IE 7 doesn't even get this far. I didn't feel like dicking with it.

        totalHeight = 0

        $el = $(this);
        $p = $el.parent();
        $up = $p.parent();
        $ps = $up.find("p:not('.read-more')");

        // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
        $ps.each(function() {
            totalHeight += $(this).outerHeight();
            // FAIL totalHeight += $(this).css("margin-bottom");
        });

        $up
            .css({
                // Set height to prevent instant jumpdown when max height is removed
                "height": $up.height(),
                "max-height": 9999
            })
            .animate({
                "height": totalHeight
            });

        // fade out read-more
        $p.fadeOut();

        // prevent jump-down
        return false;

    });

});


// Testimonial Slider //

$(".single-item").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    centerPadding: "10px",
    slidesToShow: 2,
    dots: true,
    arrows: false,
    responsive: [{
            breakpoint: 769,
            settings: {
                arrows: false,
                dots: false,
                centerMode: true,
                centerPadding: "10px",
                slidesToShow: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: false,
                centerMode: true,
                centerPadding: "10px",
                slidesToShow: 1,
            },
        },
    ],
});


// Notification Slider //
$('.slick').slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    nextArrow: '<span class="arrow next-slide"></span>',
    prevArrow: ''
});

// Counter Count //
var isAlreadyRun = false;

$(window).scroll(function() {

    $('.counter-show').each(function(i) {

        var bottom_of_object = $(this).position().top + $(this).outerHeight() / 2;
        var bottom_of_window = $(window).scrollTop() + $(window).height();


        if (bottom_of_window > (bottom_of_object + 20)) {
            if (!isAlreadyRun) {
                $('.count-number').each(function() {

                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 3500,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }
            isAlreadyRun = true;
        }
    });

});

// Horizantal and Vertical Tab for Course //
tabControl();
var resizeTimer;
$(window).on('resize', function(e) {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        tabControl();
    }, 250);
});

function tabControl() {
    var tabs = $('.tabbed-content').find('.tabs');
    if (tabs.is(':visible')) {
        tabs.find('a').on('click', function(event) {
            event.preventDefault();
            var target = $(this).attr('href'),
                tabs = $(this).parents('.tabs'),
                buttons = tabs.find('a'),
                item = tabs.parents('.tabbed-content').find('.item');
            buttons.removeClass('active');
            item.removeClass('active');
            $(this).addClass('active');
            $(target).addClass('active');
        });
    } else {
        $('.item').on('click', function() {
            var container = $(this).parents('.tabbed-content'),
                currId = $(this).attr('id'),
                items = container.find('.item');
            container.find('.tabs a').removeClass('active');
            items.removeClass('active');
            $(this).addClass('active');
            container.find('.tabs a[href$="#' + currId + '"]').addClass('active');
        });
    }
}

// Program page overview section stick //
$(function() {
    // var stickyHeaderTop = $('#stickytypeheader').offset().top;

    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > stickyHeaderTop) {
    //         $('#stickytypeheader').css({
    //             position: 'fixed',
    //             top: '0px',
    //             opacity: '1'
    //         });
    //         $('#sticky').css('display', 'block');
    //     } else {
    //         $('#stickytypeheader').css({
    //             position: 'static',
    //             top: '0px',
    //             opacity: '0'
    //         });
    //         $('#sticky').css('display', 'none');
    //     }
    // });
});


   function seedetails()
   {
   $(".extra-content").removeClass("hidden");
   }
   function showmore()
   {
   
   $(".moreinfo").toggleClass("hidden");
   
   if ($(".showmore").text().includes("Less")) {
   $(".showmore").text("Read More");
   } else {
   $(".showmore").text("Read Less");
   }
   
   }
   
// Program menu add active class //

$(document).ready(function() {
        // $('a[href*=#]').bind('click', function(e) {
        //         e.preventDefault(); // prevent hard jump, the default behavior

        //         var target = $(this).attr("href"); // Set the target as variable

        //         // perform animated scrolling by getting top-position of target-element and set it as scroll target
        //         $('html, body').stop().animate({
        //                 scrollTop: $(target).offset().top
        //         }, 600, function() {
        //                 location.hash = target; //attach the hash (#jumptarget) to the pageurl
        //         });

        //         return false;
        // });
});

$(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();

        // Show/hide menu on scroll
        //if (scrollDistance >= 850) {
        //      $('nav').fadeIn("fast");
        //} else {
        //      $('nav').fadeOut("fast");
        //}
    
        // Assign active class to nav links while scolling
        $('.page-section').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                        $('.sticy-menu-list a.active').removeClass('active');
                        $('.sticy-menu-list a').eq(i).addClass('active');
                }
        });
}).scroll();