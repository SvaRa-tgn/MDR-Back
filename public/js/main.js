var appMaster = {

    CSRF: function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },

    scrollMenu: function () {
        var num = 1;
        $(document).on('scroll', function () {
            var lengthLi = $('.class-for-anime').length;

            if ($(document).scrollTop() > num) {
                $('.nav-index').addClass('nav-scroll');
                $('.navigation-list-bottom').addClass('navigation-down');
                $('.auth-search').addClass('auth-item-visible');
                $('.index-search').removeClass('start-search');

                var n = 0;

                function remove() {
                    if (lengthLi >= n && $(document).scrollTop() > 1) {
                        $('.class-for-anime').eq(n).removeClass('nav-positon');
                        n = n + 1;
                    }
                }

                setInterval(remove, 50)

            } else {
                $('.nav-index').removeClass('nav-scroll');
                $('.navigation-list-bottom').removeClass('navigation-down');
                $('.auth-search').removeClass('auth-item-visible');
                if ($('.input-search').val() === '') {
                    $('.search').removeClass('main-search');
                }
                $('.index-search').addClass('start-search');

                var m = 6;

                function add() {
                    if (m >= 0 && $(document).scrollTop() < 1) {
                        $('.class-for-anime').eq(m).addClass('nav-positon');
                        m = m - 1;
                    }
                    return m;
                };
                setInterval(add, 50);
            }
        });
    },

    linkMenu: function () {
        var home = $('#home').outerHeight() - 100,
            catalog = $('#catalog').outerHeight(),
            news = $('#new').outerHeight(),
            recomendation = $('#recomendation').outerHeight(),
            idea = $('#idea').outerHeight(),
            pop = $('#pop').outerHeight(),
            info = $('.block-info').outerHeight(),
            footer = $('#footer').outerHeight(),
            anime = $('.class-for-anime');

        $(document).on("scroll", function () {
            if ($(document).scrollTop() <= home) {
                anime.removeClass('active-link');
                anime.eq(0).addClass('active-link');
            } else if ($(document).scrollTop() <= catalog + info + home) {
                anime.removeClass('active-link');
                anime.eq(1).addClass('active-link');
            } else if ($(document).scrollTop() <= news + info + catalog + info + home) {
                anime.removeClass('active-link');
                anime.eq(2).addClass('active-link');
            } else if ($(document).scrollTop() <= recomendation + info + news + info + catalog + info + home) {
                anime.removeClass('active-link');
                anime.eq(3).addClass('active-link');
            } else if ($(document).scrollTop() <= idea + info + recomendation + info + news + info + catalog + info + home) {
                anime.removeClass('active-link');
                anime.eq(4).addClass('active-link');
            } else if ($(document).scrollTop() <= pop + info + idea + info + recomendation + info + news + info + catalog + info + home) {
                anime.removeClass('active-link');
                anime.eq(5).addClass('active-link');
            } else if ($(document).scrollTop() <= footer + info + pop + info + idea + info + recomendation + info + news + info + catalog + info + home - 50) {
                anime.removeClass('active-link');
                anime.eq(6).addClass('active-link');
            }
        });
    },

    searchCall: function () {
        $('.auth-item').eq(0).click(function () {
            $('.search').toggleClass('main-search');
        });
    },

    searchHeight: function () {
        var form = $('.form-search'),
            link = form.attr('action'),
            input = $('.input-search'),
            search = $('.search');

        input.focus(function () {
            input.on('input', function () {
                if (input.val() !== '') {
                    console.log(input);
                    let formData = new FormData(form[0]);
                    $.ajax({
                        method: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            Accept: "application/json"
                        },
                        url: link,
                        data: formData,
                        success: (data) => {
                            if (data.length) {
                                $('.form-search-item').remove();
                                $.each(data, function (index, value) {
                                    $('.form-search-list').append('<li class="form-search-item">' +
                                        '                                <a class="form-search-link" href="">' + value['full_name'] + '</a>' +
                                        '                             </li>');
                                })
                            }
                            search.addClass('search-active');
                            search.removeClass('start-search');
                            search.addClass('main-search');
                        }
                    })

                } else if (input.val() === '') {
                    search.removeClass('search-active');
                    search.removeClass('main-search');
                    search.addClass('start-search');
                }
            })
        })
    },

    callback: function () {
        $('.callback-item').hover(function () {
            $('.callback-item').removeClass('animation-callback');
        }, function () {
            $('.callback-item').addClass('animation-callback');
        });
    },

    callbackBox: function () {
        $('.callback-item').eq(0).click(function () {
            $('.callback-block').addClass('callback-visible');
            $('.visible').addClass('noscroll');

            $('.img-cross').click(function () {
                $('.callback-block').removeClass('callback-visible');
                $('.visible').removeClass('noscroll');
            });
        });
    },

    authBox: function () {
        $('.js-call').click(function () {
            $('.auth-block').addClass('callback-visible');
            $('.visible').addClass('noscroll');

            $('.img-cross').click(function () {
                $('.auth-block').removeClass('callback-visible');
                $('.visible').removeClass('noscroll');
            });
        });
    },

    authBoxSlide: function () {
        $('.registration-slide').click(function () {
            $('.block-auth').removeClass('visible-block-auth');
            $('.block-recovery').removeClass('visible-block-auth');
            $('.block-reg').addClass('visible-block-auth');
        });

        $('.auth-slide').click(function () {
            $('.block-reg').removeClass('visible-block-auth');
            $('.block-recovery').removeClass('visible-block-auth');
            $('.block-auth').addClass('visible-block-auth')
        });

        $('.recovery-slide').click(function () {
            $('.block-reg').removeClass('visible-block-auth');
            $('.block-auth').removeClass('visible-block-auth')
            $('.block-recovery').addClass('visible-block-auth')
        });
    },

    authBoxForm: function () {
        $('.form-auth').submit(function (e) {
            e.preventDefault();

            let input = $('.form-auth').find('.input-auth'),
                error = false;
            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    $(this).addClass('input-error');
                    $(this).parent().addClass('wrap-input-padding');
                    $(this).parent().attr('data-answer', 'Заполните поле');
                } else {
                    $(this).removeClass('input-error');
                    $(this).parent().removeClass('wrap-input-padding');
                    $(this).parent().removeAttr('data-answer');
                }
            });

            if (error === false) {
                let formData = $(this).serializeArray();
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: '/login',
                    data: formData,
                    success: () => {
                        $('.auth-block').removeClass('callback-visible');
                        $('.visible').removeClass('noscroll');
                        $('.link-auth-item').removeClass('auth-item-slid');
                        $('.enter-profile').attr('data-tooltipe', 'Личный кабинет');
                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-2').addClass('open-box');
                        $('.modal-content').text('Вы успешно авторизировались на нашем сайте.');
                        $('.js-close').click(function () {
                            $('.js-reload-block').load(location.href + ' .js-reload-block>*', '', function () {
                                appMaster.autoHeight();
                            })
                        })
                    },
                    error: (response) => {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function (key) {
                                $("." + key + "Error").addClass('wrap-input-padding');
                                $("." + key + "Error").attr('data-answer', errors[key][0]);
                            });
                        } else {
                            window.location.reload();
                        }
                    }
                })
            }
        });
    },

    regBoxForm: function () {
        $('.form-auth-reg').submit(function (e) {
            e.preventDefault();

            let input = $('.form-auth-reg').find('.input-auth');
            var error = false;

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    $(this).addClass('input-error');
                    $(this).parent().addClass('wrap-input-padding');
                    $(this).parent().attr('data-answer', 'Заполните поле');
                } else {
                    $(this).removeClass('input-error');
                    $(this).parent().removeClass('wrap-input-padding');
                    $(this).parent().removeAttr('data-answer');
                }
            });

            if (error === false) {
                let formData = $(this).serializeArray();
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: '/register',
                    data: formData,
                    success: () => {
                        $('.auth-block').removeClass('callback-visible');
                        $('.visible').removeClass('noscroll');
                        $('.link-auth-item').removeClass('auth-item-slid');
                        $('.enter-profile').attr('data-tooltipe', 'Личный кабинет');
                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-2').addClass('open-box');
                        $('.modal-content').text('Вы успешно зарегестрировались на нашем сайте.');
                    },
                    error: (response) => {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function (key) {
                                $("." + key + "ErrorReg").addClass('wrap-input-padding');
                                $("." + key + "ErrorReg").attr('data-answer', errors[key][0]);
                            });
                        } else {
                            window.location.reload();
                        }
                    }
                })
            }
        });
    },

    recoveryPassword: function(){
        $('.form-recovery').submit(function (e) {
            e.preventDefault();

            let form = $('.form-recovery'),
                input = form.find('.input-auth'),
                link = form.attr('action');
            var error = false;

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    $(this).addClass('input-error');
                    $(this).parent().addClass('wrap-input-padding');
                    $(this).parent().attr('data-answer', 'Введите email указанный при регистрации');
                } else {
                    $(this).removeClass('input-error');
                    $(this).parent().removeClass('wrap-input-padding');
                    $(this).parent().removeAttr('data-answer');
                }
            });

            if (error === false) {
                let formData = $(this).serializeArray();
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: link,
                    data: formData,
                    success: (data) => {
                        $('.auth-block').removeClass('callback-visible');
                        $('.visible').removeClass('noscroll');
                        $('.link-auth-item').removeClass('auth-item-slid');
                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-2').addClass('open-box');
                        $('.modal-content').text(data.status);
                    },
                    error: (data) => {
                        if (data.status === 422) {
                            $('.auth-block').removeClass('callback-visible');
                            $('.visible').removeClass('noscroll');
                            $('.link-auth-item').removeClass('auth-item-slid');
                            $('.modal-block').addClass('modal-block-open');
                            $('.js-link-2').addClass('open-box');
                            $('.modal-content').text(data.responseJSON.text);
                        }
                    }
                })
            }
        });
    },

    menu: function () {
        $('.aside-nav-item').click(function () {
            var ul = $(this).children('ul'),
                parent = $('.aside-nav-list').find('.aside-nav-list-sub');

            parent.not(ul).removeClass('open-menu');
            ul.toggleClass('open-menu');

        });
    },

    inCart: function () {
        $('.button-page').click(function (e) {
            e.preventDefault();

            var form = $(this),
                link = $(this).attr('action'),
                linkAdd = $(this).attr('data-add'),
                linkDelete = $(this).attr('data-delete'),
                dataForm = $(this).attr('data-form'),
                name = $(this).find('.article-page-cart').attr('data-product');

            if ($(this).hasClass('in-cart')) {
                let formData = new FormData(form[0]);
                $.ajax({
                    method: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        Accept: "application/json"
                    },
                    url: link,
                    data: formData,
                    success: () => {
                        $(this).removeClass('in-cart');
                        if (dataForm === 'product') {
                            $(this).find('.article-page-cart').text('Добавить в корзину');
                        } else {
                            $(this).find('.article-page-cart').text('Добавить');
                        }
                        $(this).attr('action', linkAdd);
                        $(this).find('input[name="_method"]').remove();
                    }
                })
            } else {
                let formData = new FormData(form[0]);
                formData.append('slug_full_name', name);
                $.ajax({
                    method: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        Accept: "application/json"
                    },
                    url: link,
                    data: formData,
                    success: () => {
                        $(this).addClass('in-cart');
                        $(this).find('.article-page-cart').text('В корзине');
                        $(this).attr('action', linkDelete);
                        $(this).append('<input type="hidden" name="_method" value="DELETE">');
                    }
                })
            }
        });
    },

    deleteFromCart: function () {
        $('.button-cart-delete').click(function (e) {
            e.preventDefault();

            var form = $(this),
                link = $(this).attr('action');

            let formData = new FormData(form[0]);
            $.ajax({
                method: "POST",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    Accept: "application/json"
                },
                url: link,
                data: formData,
                success: () => {
                    $('.js-reload-block').load(location.href + ' .js-reload-block>*', '', function () {
                        appMaster.autoHeight();
                        appMaster.checkboxCart();
                    })
                }
            })
        });
    },

    inFavorites: function () {
        $('.button-heart').click(function () {
            var heart = $(this).find('.fa');
            if (heart.hasClass('fa-heart-o')) {
                heart.removeClass('fa-heart-o');
                heart.addClass('fa-heart');
            } else {
                heart.addClass('fa-heart-o');
                heart.removeClass('fa-heart');
            }
        });
    },

    productSlider: function () {
        $('.product-block-foto-mini-item').click(function () {
            $('.product-block-foto-mini-item').removeClass('active-product');
            $(this).addClass('active-product');
            var eq = $(this).index();
            $('.product-block-foto-item').removeClass('img-item-opacity');
            $('.product-block-foto-item').eq(eq).addClass('img-item-opacity');
        });
    },

    productSliderOpacity: function () {
        var item = $('.product-slider-foto-item'),
            lenght = item.length;

        $('.filter-box').click(function () {
            $('.product-slider-foto').addClass('product-slider-visible');
            var active = $('.active-product'),
                num = active.index();
            item.eq(num).addClass('img-item-opacity');
            $('.visible').addClass('noscroll');
        });

        $('.fa-arrow-circle-left').click(function () {
            var point = $('.product-slider-foto-list').find('.img-item-opacity');
            var num = point.index();

            if (num === 0) {
                $('.product-slider-foto-item').eq(-1).addClass('img-item-opacity');
                point.removeClass('img-item-opacity');
            } else {
                point.prev().addClass('img-item-opacity');
                point.removeClass('img-item-opacity');
            }
        });

        $('.fa-arrow-circle-right').click(function () {
            var point = $('.product-slider-foto-list').find('.img-item-opacity');
            var num = point.index();

            if (num === lenght - 1) {
                $('.product-slider-foto-item').eq(0).addClass('img-item-opacity');
                point.removeClass('img-item-opacity');
            } else {
                point.next().addClass('img-item-opacity');
                point.removeClass('img-item-opacity');
            }
        });

        $('.img-cross').click(function () {
            $('.product-slider-foto').removeClass('product-slider-visible');
            $('.product-slider-foto-item').removeClass('img-item-opacity');
            $('.visible').removeClass('noscroll');
        });
    },

    autoHeight: function () {
        var img = $('.main-block-item-img');

        for (var i = 0; i < img.length; i++) {

            var width = img.eq(i).width();
            var height = img.eq(i).height();

            if (width > height) {
                img.eq(i).removeClass('j-height-mini');
                img.eq(i).addClass('j-width-mini');
            } else {
                img.eq(i).removeClass('j-width-mini');
                img.eq(i).addClass('j-height-mini');
            }
        }
    },

    checkboxCheckout: function () {
        $('.checkbox-delivery').click(function () {
            if ($(this).is(':checked')) {
                $('.checkbox-delivery').not(this).prop('checked', false);
            }
            if ($('.checkbox-delivery').eq(2).is(':checked')) {
                $('.delivery-li').removeClass('delivery-li-visible');
            } else {
                $('.delivery-li').addClass('delivery-li-visible');
            }
        });

        $('.checkbox-pay:checkbox').click(function () {
            if ($(this).is(':checked')) {
                $('.checkbox-pay:checkbox').not(this).prop('checked', false);
            }

            if ($('.checkbox-pay').is(':checked')) {
                $('.wrap-pay-attention').css({'height': '100%', 'opacity': '1'})
            } else {
                $('.wrap-pay-attention').css({'height': '0', 'opacity': '0'})
            }

            if ($('.checkbox-pay').eq(0).is(':checked')) {
                $('.accept-pay').removeClass('accept-pay-visible');
                $('.accept-pay').eq(0).addClass('accept-pay-visible');
            } else if ($('.checkbox-pay').eq(1).is(':checked')) {
                $('.accept-pay').removeClass('accept-pay-visible');
                $('.accept-pay').eq(1).addClass('accept-pay-visible');
            } else if ($('.checkbox-pay').eq(2).is(':checked')) {
                $('.accept-pay').removeClass('accept-pay-visible');
                $('.accept-pay').eq(2).addClass('accept-pay-visible');
            }
        });
    },

    sumPriceCheck: function () {
        var arr = $('.span-price').text(),
            length = $('.span-price').length,
            sum = 0,
            total = 0;

        $('.lenght').text(length);


        $('.span-price').each(function (index, element) {
            sum += parseInt($(element).text());
        });
        $('.sum').text(sum);
        $('.total-sum').text(sum);

        $('.checkbox-delivery:checkbox').click(function () {
            if ($('.checkbox-delivery').eq(2).is(':checked')) {
                var del = $('.delivery-price').text();
                total = parseInt(sum) + parseInt(del);

                $(function () {
                    $({numberValue: sum}).animate({numberValue: total}, {
                        duration: 500,
                        easing: "linear",
                        step: function (val) {
                            $(".total-sum").html(Math.ceil(val));
                        }
                    });
                });

            } else {
                $('.total-sum').text(sum);

                $(function () {
                    $({numberValue: total}).animate({numberValue: sum}, {
                        duration: 500,
                        easing: "linear",
                        step: function (val) {
                            $(".total-sum").html(Math.ceil(val));
                        }
                    });
                });
            }
        });
    },

    checkboxCart: function () {
        var lenght = $('.cart-checkbox').length,
            sum = 0;

        $('.cart-price-box').each(function (index, element) {
            sum += parseInt($(element).attr('data-price'));
        });
        $('.total-cart').text(sum);

        if ($('.head-cart-checkbox').is(':checked')) {
            $('.lenght-cart').text(lenght);
        }

        $('.head-cart-checkbox').click(function () {
            var num = 0;
            $('.cart-price-box').each(function (index, element) {
                num += parseInt($(element).attr('data-price'));
                sum = num;
            });

            if ($('.head-cart-checkbox').is(':checked')) {
                $('.cart-checkbox').prop('checked', true);
                $('.lenght-cart').text(lenght);
                $('.total-cart').text(num);
                $('.draw-up-item').removeClass('draw-up-none');
                $('.orderName').addClass('addOrder');

            } else {
                $('.cart-checkbox').prop('checked', false);
                $('.lenght-cart').text(0);
                $('.total-cart').text(0);
                $('.draw-up-item').addClass('draw-up-none');
                $('.orderName').removeClass('addOrder');

                sum = 0;
            }
        });

        var a = $('.cart-checkbox'),
            item = $('.draw-up-item'),
            name = $('.orderName');

        $(a).click(function () {
            var m = $('.cart-checkbox:checked').length,
                eq = $(this).parents('.cart-block-item').index();

            $('.lenght-cart').text(m);

            var index = $(this).parents('.cart-block-item').index();
            var elem = $('.cart-price-box');

            if ($(this).is(':checked')) {
                sum = sum + parseInt(elem.eq(index).attr('data-price'));
                $('.total-cart').text(sum);
                item.eq(eq).removeClass('draw-up-none');
                item.eq(eq).find(name).addClass('addOrder');

                if (m === $(a).parents('.cart-block-item').length) {
                    $('.head-cart-checkbox').prop('checked', true);
                    item.eq(eq).removeClass('draw-up-none');
                    item.eq(eq).find(name).addClass('addOrder');
                }

            } else {
                $('.head-cart-checkbox').prop('checked', false);
                sum = sum - parseInt(elem.eq(index).attr('data-price'));
                $('.total-cart').text(sum);
                item.eq(eq).addClass('draw-up-none');
                item.eq(eq).find(name).removeClass('addOrder');
            }
        });
    },

    updateFoto: function () {
        $('.js-image-change').click(function () {
            var eq = $(this).parents('.edit-block-foto-item').find('.wrap-edit-image');
            eq.eq(0).addClass('js-visibality-form');
            eq.eq(1).removeClass('js-visibality-form');
        });

        $('.js-image-back-change').click(function () {
            var eq = $(this).parents('.edit-block-foto-item').find('.wrap-edit-image');
            eq.eq(0).removeClass('js-visibality-form');
            eq.eq(1).addClass('js-visibality-form');
        });
    },

    createModulComplect: function () {
        $('.type-modul').change(function () {

        });
    },
};

$(window).on('load', function () {
    appMaster.scrollMenu();
    appMaster.CSRF();
    appMaster.linkMenu();
    appMaster.searchCall();
    appMaster.callback();
    appMaster.searchHeight();
    appMaster.callbackBox();
    appMaster.authBox();
    appMaster.authBoxSlide();
    appMaster.authBoxForm();
    appMaster.regBoxForm();
    appMaster.recoveryPassword();
    appMaster.menu();
    appMaster.inCart();
    appMaster.deleteFromCart();
    appMaster.inFavorites();
    appMaster.productSlider();
    appMaster.productSliderOpacity();
    appMaster.autoHeight();
    appMaster.checkboxCheckout();
    appMaster.sumPriceCheck();
    appMaster.checkboxCart();
    appMaster.updateFoto();
    appMaster.createModulComplect();
});
