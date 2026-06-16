$(document).ready(function () {
	"use strict"; // start of use strict

	PaginationActivePage();

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header').toggleClass('header--active');
		$('.sidebar').toggleClass('sidebar--active');
	});

	/*==============================
	Filter
	==============================*/
	$('.filter__item-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.filter__item-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.filter').attr('id');
		$('#'+id).find('.filter__item-btn input').val(text);
	});

	/*==============================
	Tabs
	==============================*/
	$('.profile__mobile-tabs-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.profile__mobile-tabs-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.profile__mobile-tabs').attr('id');
		$('#'+id).find('.profile__mobile-tabs-btn input').val(text);
	});

	/*==============================
	Modal
	==============================*/
	$('.open-modal').magnificPopup({
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'auto',
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: false,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
	});

	$('.modal__btn--dismiss').on('click', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	/*==============================
	Select2
	==============================*/
	$('#quality').select2({
		placeholder: "18+",
		allowClear: true
	});

	$('#rating').select2({
		placeholder: "Цвет рейтинга",
		allowClear: true
	});

	$('#promo').select2({
		placeholder: "Промокод",
		allowClear: true
	});

	$('#country').select2({
		placeholder: "Выберите страну / страны"
	});
 

	$('#genre').select2({
		placeholder: "Выберите жанр / жанры"
	});


	$('#subscription, #rights').select2();

	/*==============================
	Upload cover
	==============================*/
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#form__img').attr('src', e.target.result);
			}
		
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#form__img-upload').on('change', function() {
		readURL(this);
	});

	/*==============================
	Upload video
	==============================*/
	$('.form__video-upload').on('change', function() {
		var videoLabel  = $(this).attr('data-name');

		if ($(this).val() != '') {
			$(videoLabel).text($(this)[0].files[0].name);
		} else {
			$(videoLabel).text('Upload video');
		}
	});

	/*==============================
	Upload gallery
	==============================*/
	$('.form__gallery-upload').on('change', function() {
		var length = $(this).get(0).files.length;
		var galleryLabel  = $(this).attr('data-name');

		if( length > 1 ){
			$(galleryLabel).text(length + " files selected");
		} else {
			$(galleryLabel).text($(this)[0].files[0].name);
		}
	});

	/*==============================
	Scroll bar
	==============================*/
	$('.scrollbar-dropdown').mCustomScrollbar({
		axis: "y",
		scrollbarPosition: "outside",
		theme: "custom-bar"
	});

	$('.main__table-wrap').mCustomScrollbar({
		axis: "x",
		scrollbarPosition: "outside",
		theme: "custom-bar2",
		advanced: {
			autoExpandHorizontalScroll: true
		}
	});

	$('.dashbox__table-wrap').mCustomScrollbar({
		axis: "x",
		scrollbarPosition: "outside",
		theme: "custom-bar3",
		advanced: {
			autoExpandHorizontalScroll: 2
		}
	});

	/*==============================
	Bg
	==============================*/
	$('.section--bg').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

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

        if($('div').is('.paginator-wrap')) {
            var page = getUrlParameter('page');
            $('.paginator__item a').filter(function() {
                return $(this).text() === page;
            }).addClass('pactive');

            if (page == undefined) {
                $('.paginator__item a').filter(function() {
                    return $(this).text() === '1';
                }).addClass('pactive');
            }
        }
    }
	
	
	let fields = $('#quiz-forms').find('.quiz-form');
    fields.on('change keyup', function(){
        let tags = [];
        fields.each(function(){
            if ($(this).val().length)
            {
                tags.push($(this).val());
            }
        });
        $('#SendInput', '#quiz-forms').val(tags.join(', '));
    });
	
	var select_start_index = -1;
jQuery("#samples_data_div").on('click', '#samples_data_table tbody tr', function(e) {
  var t_rows = $(this).parent().find('tr');
  if (!e.shiftKey && !e.ctrlKey) {
    t_rows.removeClass('active');
    $(this).addClass('active');
    select_start_index = t_rows.index(this);
  }

  if (e.ctrlKey) {
    console.log('ctrl');
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
  }

  if (e.shiftKey) {
    var select_end_index = t_rows.index(this);
    var each_start, each_end;
    if(select_start_index != -1){
      console.log('shift');
      if(select_start_index < select_end_index){
        each_start = select_start_index;
        each_end = select_end_index;
      }
      else{
        each_start = select_end_index;
        each_end = select_start_index;
      }
      t_rows.each(function(index){
        if(index >= each_start && index <= each_end){
          $(this).addClass('active');
        }
      });
    }
    
  }
});
});