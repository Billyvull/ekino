$(function () {
    AdaptiveCards();
    AdaptiveSidebar();
    PaginationActivePage();
    $( window ).resize(function() {
        AdaptiveCards();
    });

    $('#CinemaAttention input[type=submit]').on('click', function(e) {
        e.preventDefault();
        $(this).val('отправлено');
        // Submit the form by AJAX
        var $form = $('#CinemaAttention');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize()
            }).done(function() {
                console.log('success');
            }).fail(function() {
                console.log('fail');
        });
        $(this).prop('disabled', true).css('color', '#4eda92');
    });

    $('.sort__toggle').click(function(e) {
        $('.sort__films').toggle();
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.sort__films').hide();
    });

    function AdaptiveCards() {
        var rowWidth = $('.films__list').width();               // ширина рядка
        var countItems = Math.floor(rowWidth / 300);            // количество элементов
        var itemWidth = Math.floor(rowWidth / countItems) - 20; // (рядок / количество) - расстояние между ними = ширина элемента

        $('.films__list_item').css('max-width', itemWidth);
    }
    function AdaptiveSidebar() {
        var containerHeight = $('.container').height();
        $('.similar__list').css('max-height', containerHeight); 
    }
    function PaginationActivePage() {
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;
        
            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');
        
                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };

        if($('div').is('.pagination')) {
            var page = getUrlParameter('page');
            $('.pagination__list_item a').filter(function() {
                return $(this).text() === page;
            }).addClass('active-item');

            if (page == undefined) {
                $('.pagination__list_item a').filter(function() {
                    return $(this).text() === '1';
                }).addClass('active-item');
            }
        }
    }
    
    // #### Swiper initialization
    new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        grabCursor: true,
        autoplay: true
    });
    
}
);
