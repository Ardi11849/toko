// init Isotope
$(document).ready(function () {
    var $grid = $('.isotope-wrapper').isotope({
        itemSelector: '.isotope-item',
        masonry: {
            columnWidth: 200
        }
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    $('.isotope-item').slick({
        adaptiveHeight: true,
        dots: true,
        infinite: true,
        slidesToShow: 4,
        centerMode: true,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })

    $("#btn-all").click();
})