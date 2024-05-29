var appProfile = {

    updateProfile: function (){
        $('.update-profile-data').submit(function(e) {
            e.preventDefault();
            var form = $(this),
                error = false,
                wrap = form.find('.wrap-input'),
                link = form.attr('action'),
                success = form.find('.name-admin-block').attr('data-success'),
                loader = $(this).find('.wrap-button').attr('data-search'),
                input = form.find('.profile-input');

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    wrap.eq(-1).addClass('wrap-input-padding');
                } else if ($(this).val() !== '') {
                    error = false;
                    wrap.eq(-1).removeClass('wrap-input-padding');
                    return false;
                }
            });

            let formData = new FormData(form[0]);
            if (error === false) {
                $('body').addClass('noscroll');
                $('.preloader').addClass('preloader-load');
                $('.loader-text').text(loader);

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
                        $('body').removeClass('noscroll');
                        $('.preloader').removeClass('preloader-load');
                        $('.loader-text').text(loader);

                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-1').addClass('open-box');
                        $('.modal-content').text(success);
                        form[0].reset();
                        $('.js-reload').click(function (html) {
                            window.location.href = data;
                        });
                    },
                    error: (response) => {
                        $('body').removeClass('noscroll');
                        $('.preloader').removeClass('preloader-load');

                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function (key) {
                                let errorData = $("." + key + "Error");
                                errorData.addClass('wrap-input-padding');
                                errorData.attr('data-answer', errors[key][0]);
                            });
                        } else if (response.status === 500) {
                            var reload = $('.js-reload');
                            $('.modal-block').addClass('modal-block-open');
                            $('.js-link-1').addClass('open-box');
                            $('.modal-content').text('Возникла ошибка. Данные не обновлены.');
                            reload.text('Хрень');
                            form[0].reset();
                            reload.click(function (html) {
                                window.location.reload();
                            });
                        }
                    }
                })
            }
        });
    },
};

$(document).ready(function () {
    appProfile.updateProfile();
});
