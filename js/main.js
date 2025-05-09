(function($) {
    "use strict";

    // Prevent demoPanel error if file is missing
    if (typeof demoPanel === "undefined") {
        function demoPanel() {
            console.warn("demoPanel is not defined. Placeholder function loaded.");
        }
    }

    // Portfolio subpage filters
    function portfolio_init() {
        var portfolio_grid = $('#portfolio_grid'),
            portfolio_filter = $('#portfolio_filters');
            
        if (portfolio_grid.length) {
            portfolio_grid.shuffle({
                speed: 450,
                itemSelector: 'figure'
            });

            $('.site-main-menu').on("click", "a", function () {
                portfolio_grid.shuffle('update');
            });

            portfolio_filter.on("click", ".filter", function (e) {
                e.preventDefault();
                portfolio_grid.shuffle('update');
                $('#portfolio_filters .filter').parent().removeClass('active');
                $(this).parent().addClass('active');
                portfolio_grid.shuffle('shuffle', $(this).attr('data-group'));
            });
        }
    }

    // Contact form validator
    $(function () {
        $('#contact-form').validator();
        $('#contact-form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var url = "contact_form/contact_form.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function (data) {
                        var messageAlert = 'alert-' + data.type;
                        var messageText = data.message;
                        var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                        if (messageAlert && messageText) {
                            $('#contact-form').find('.messages').html(alertBox);
                            $('#contact-form')[0].reset();
                        }
                    }
                });
                return false;
            }
        });
    });

    // Mobile menu hide
    function mobileMenuHide() {
        if ($(window).width() < 1024) {
            $('#site_header').addClass('mobile-menu-hide');
        }
    }

    // Custom scroll
    function customScroll() {
        if ($(window).width() > 991) {
            $(".pt-page").mCustomScrollbar({ scrollInertia: 8 });
            $("#site_header").mCustomScrollbar({ scrollInertia: 8 });
        } else {
            $(".pt-page, #site_header").mCustomScrollbar('destroy');
        }
    }

    // On Window load & resize
    $(window)
        .on('load', function() {
            $(".preloader").fadeOut("slow");
            var ptPage = $('.subpages');
            if (ptPage[0]) {
                PageTransitions.init({ menu: 'ul.site-main-menu' });
            }
            customScroll();
        })
        .on('resize', function() {
            mobileMenuHide();
            customScroll();
        });

    // On Document Ready
    $(document).on('ready', function() {
        demoPanel(); // Call demoPanel function to avoid errors
        portfolio_init();
        
        $('.menu-toggle').on("click", function () {
            $('#site_header').toggleClass('mobile-menu-hide');
        });

        $('.site-main-menu').on("click", "a", function () {
            mobileMenuHide();
        });

        $(".testimonials.owl-carousel").owlCarousel({
            nav: true,
            items: 3,
            loop: false,
            margin: 10,
            responsive : {
                0: { items: 1 },
                480: { items: 1 },
                768: { items: 2 },
                1200: { items: 3 }
            }
        });

        $('.text-rotation').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3800,
            animateOut: 'zoomOut',
            animateIn: 'zoomIn'
        });

        $('.lightbox').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            image: { titleSrc: 'title', gallery: { enabled: true } }
        });

        $('.ajax-page-load-link').magnificPopup({
            type: 'ajax',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: { enabled: true }
        });

        $('.tilt-effect').tilt();
    });

})(jQuery);
