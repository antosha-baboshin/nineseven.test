$(document).ready(function(){
    
    //Слайдер на главной
    if( $('#carousel').size() > 0 ) {
        $('#carousel').carouFredSel({
            auto   : true,
            width: $(window).width(),
            height: $(window).height(),
            align: false,
            items: {
                visible: 1,
		width: 'variable',
		height: 'variable'
            },
            scroll: {
                fx: 'crossfade',
                duration : 600,
                onBefore : function(){
                    $('.slideBlock').fadeOut(50);
                },
                onAfter : function(){
                    $('.slideBlock').fadeIn(150);
                }
            },
            pagination: "#pager",
            prev : ".sliderPrev",
            next : ".sliderNext"
	});
        
        //подсчет кол-ва слайдов
        var count_slides = $('#carousel > div').size();
        $(".sumKol").text( count_slides );
        
        var min_width = parseInt( $('body').css('min-width') ),
            min_height = parseInt( $('body').css('min-height') );
        var doc_width = min_width,
            doc_height = min_height;
            
	$(window).resize(function() {
            doc_width = $(window).width();
            doc_height = $(window).height();
            if( doc_width < min_width ) doc_width = min_width;
            if( doc_height < min_height ) doc_height = min_height;
            var newCss = {
                width: doc_width,
		height: doc_height
            };
            $('#carousel').css( 'width', newCss.width * ( count_slides + 1 ) );
            $('#carousel').parent().css( newCss );
            $('#carousel > div').css( newCss );
	}).resize();
    };
    
    //Открытие блоков на главной
    $('.box').click(function(){
        var button = $(this),
            wrapper = button.find(".openBlock_wrapper"),
            info = button.find(".openBlock");
        if( !button.hasClass('active') ){
            $('.mask-box').show();
            wrapper.stop().fadeIn(50, function(){ info.animate({'bottom': 0 }, 550); button.addClass('active'); });
        }
        return false;
    });
    $('.close_open').click(function(){
        $('.mask-box').hide();
        var close = $(this),
            box = close.parents(".box"),
            wrapper = close.parents(".openBlock_wrapper"),
            info = close.parent(".openBlock");
        info.animate({'bottom': '-100%' }, 350, function(){ wrapper.stop().fadeOut(100); box.removeClass('active'); });
        if( info.hasClass('index_contact-form_send') ){ info.removeClass('index_contact-form_send'); }
        return false;
    });
    $('.mask-box').click(function(){
        $('.box.active .close_open').click();
        return false;
    });
    
    //Отправка запроса на звонок на главной
    $(".require-call").click(function(){
        $(this).parent('.index_contact-form').addClass('index_contact-form_send');
        $('.index_contact-form form input,.index_contact-form form textarea').val('');
        return false;
    });
    $(".require-send_exit").click(function(){
        $(this).parents('.index_contact-form').removeClass('index_contact-form_send');
        return false;
    });
    
    
    //Фиксированнай хедер
//    window.onscroll=function(){
//        $('.headerBlock').css({'margin-left': '-'+(window.pageXOffset||document.documentElement.scrollLeft)+'px' });
//    };
    
    
    //Стилизация селекта
    if( $('.select_custom').size() > 0 ){
        $('.select_custom').styler(); 
    }
    
    //Описание фотографий
    $('.photo_wrapper a').click(function(){
        var photo = $(this),
            photo_wra = $(this).parent(),
            photo_num = photo.attr('href');
        if( !photo.hasClass('active') ){
            $('.person-description.active').stop().slideUp().removeClass('active');
            $('.photo_wrapper a.active').parent().find('em').fadeOut();
            $('.photo_wrapper a.active').find("span").fadeIn();
            $('.photo_wrapper a.active').removeClass('active');
            $('.person-description#' + photo_num).addClass('active').slideDown('200', function(){
                photo.addClass('active');
                photo_wra.find('em').fadeIn();
            });
            photo.find("span").fadeOut();
        }else{
            $('.person-description.active').stop().slideUp().removeClass('active');
            $('.photo_wrapper a.active').parent().find('em').fadeOut();
            $('.photo_wrapper a.active').find("span").fadeIn();
            $('.photo_wrapper a.active').removeClass('active');
        }
        return false;
    });
    $('.close_description').click(function(){
        $('.photo_wrapper a.active').click();
        return false;
    });
    
    //Сброс ошибок
    $('.error').focus(function(){
        $(this).val('').removeClass('error');
    });
    
});

$(window).load(function(){
    //Слайдер партнеров
    if($(".partner-slider").size()>0){
        $(".partner-slider").carouFredSel({
            responcive: true,
            width: '100%',
            height : 75,
            auto   :{
			items: 1
		},
            scroll : {
                    items: 3,
                    duration : 300,
                    timeoutDuration : 6000,
                    pauseOnHover: true
            },
            prev : ".partner-slider_left",
            next : ".partner-slider_right"
        });
    }
    
    //Слайдер клиентов
    if($(".clients-slider").size()>0){
        $(".clients-slider").carouFredSel({
            responcive: true,
            width: '100%',
            height : 75,
            auto   :{
			items: 1
		},
            scroll : {
                    items: 3,
                    duration : 300,
                    timeoutDuration : 1000,
                    pauseOnHover: true
            },
            prev : ".clients-slider_left",
            next : ".clients-slider_right"
        });
    }
    
});