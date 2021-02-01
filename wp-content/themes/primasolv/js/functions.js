
$(document).ready(function () {


// Dropdown
if ($('.dropdown-wrap').length > 0) {
    $('.dropdown-wrap').on('click', '.dropdown-title', function () {
        $('.dropdown-list').slideUp(200);
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
            // $(this).next('.dropdown-list').slideUp(200);
        } else {
            $('.dropdown-wrap .dropdown-title').removeClass('opened');
            $(this).addClass('opened');
            $(this).next('.dropdown-list').slideDown(200);
        }
        return false;
    });
    $('.cont').on('click', '.dropdown-wrap-range', function () {
        return false;
    });
    $('.dropdown-wrap .dropdown-list li').on('click', 'a', function () {
        $(this).closest('.dropdown-wrap').find('.dropdown-title').text($(this).text());
        if ($(this).attr('href') == '#') {
            $('.dropdown-list').slideUp(200);
            $('.dropdown-wrap .dropdown-title').removeClass('opened');
            return false;
        }
    });
}

if ($('.dropdown-wrap').length > 0 || $('#b-crumbs-menu').length > 0) {
    $('body').on('click', function () {
        if ($('#b-crumbs-menu').length > 0) {
            $('.b-crumbs-menulist').fadeOut(200);
            $('#b-crumbs-menu').removeClass('opened');
        }
        if ($('.dropdown-wrap').length > 0) {
            $('.dropdown-list').slideUp(200);
            $('.dropdown-wrap .dropdown-title').removeClass('opened');
        }
    });
}



// Top Menu
$('.header').on('click', '#header-menutoggle', function () {
    if ($(this).hasClass('opened')) {
        $(this).removeClass('opened');
        $('#top-menu').fadeOut();
    } else {
        $(this).addClass('opened');
        $('#top-menu').fadeIn();
    }
    return false;
});
// Top SubMenu
$('#top-menu .has-child').on('click', '.fa', function () {
    if ($(this).parent().hasClass('opened')) {
        $(this).parent().removeClass('opened');
        $(this).next('ul').slideUp();
    } else {
        $(this).parent().addClass('opened');
        $(this).next('ul').slideDown();
    }
    return false;
});


// Section Menu
if ($('#section-menu-btn').length > 0) {
    $('.section-top').on('click', '#section-menu-btn', function () {
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened').text('Catalog');
            $('#section-menu-wrap').fadeOut(200);
            $('.section-menu-overlay').fadeOut(200).remove();
        } else {
            $(this).addClass('opened').width($(this).width()).text('Close');
            $('#section-menu-wrap').fadeIn(200);
            $('body').append('<div class="section-menu-overlay"></div>');
            $('.section-menu-overlay').fadeIn(200);

            $('body').on('click', '.section-menu-overlay', function () {
                $('#section-menu-btn').removeClass('opened').text('Catalog');
                $('#section-menu-wrap').fadeOut(200);
                $('.section-menu-overlay').fadeOut(200).remove();
                return false;
            });
        }
        return false;
    });
}







});