var appData = {
    emailVerification: function() {
        $('.js-verify-mail').click(function(e){
            e.preventDefault();
            var link = $('.js-verify-mail').attr('href');

            $('body').addClass('noscroll');
            $('.preloader').addClass('preloader-load');
            $('.loader-text').text('Отправляем письмо');

            $.ajax({
                method: "POST",
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    Accept: "application/json"
                },
                url: link,
                success: (data) => {
                    console.log(data);
                    $('body').removeClass('noscroll');
                    $('.preloader').removeClass('preloader-load');
                    var reload = $('.js-reload');

                    $('.modal-block').addClass('modal-block-open');
                    $('.js-link-1').addClass('open-box');
                    $('.modal-content').text(data.text);
                    if(data.href !== 'null'){
                        reload.click(function() {
                            window.location.href = data.href;
                        });
                    }
                },
                error: (response) => {

                    $('body').removeClass('noscroll');
                    $('.preloader').removeClass('preloader-load');

                    $('.modal-block').addClass('modal-block-open');
                    $('.js-link-1').addClass('open-box');
                    $('.modal-content').text('Ошибка. Письмо не отправлено.');
                }
            })
        });
    },

    createFormData: function () {
        var modul_items = appData.modulItem();
        $('.create-form-data').submit(function (e) {
            e.preventDefault();
            let form = $(this),
                dataForm = form.attr('data-form'),
                input = form.find('.admin-input'),
                loader = $(this).find('.wrap-button').attr('data-search'),
                error = false,
                link = form.attr('action'),
                success = $('.name-admin-block').attr('data-success');

            if(dataForm === 'create-product') {
                if($('.js-image-input').val() === ''){
                    error = true;
                    $('.image-top').addClass('js-warning-image');
                } else {
                    $('.image-top').removeClass('js-warning-image');
                }
            }

            if(dataForm === 'create-modul-product') {
                if($('.js-image-input').val() === ''){
                    error = true;
                    $('.image-top').addClass('js-warning-image');
                } else {
                    $('.image-top').removeClass('js-warning-image');
                }

                if(modul_item.length === 0) {
                    error = true;
                    $('.js-admin-input').addClass('wrap-input-padding');
                } else {
                    $('.js-admin-input').removeClass('wrap-input-padding');
                }
            }

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    $(this).parent().addClass('wrap-input-padding');
                } else {
                    $(this).parent().removeClass('wrap-input-padding');
                }
            });

            let formData = new FormData(form[0]);
            formData.append('modul_items', JSON.stringify(modul_items));

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
                            if (dataForm === 'create-product') {
                                window.location.reload();
                            } else {
                                $('.js-reload-block').load(location.href + ' .js-reload-block>*', '')
                            }

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
                                if (key === 'image_top' || key === 'image' || key === 'image1' || key === 'image2' || key === 'image3'){
                                    var reload = $('.js-reload');
                                    $('.modal-block').addClass('modal-block-open');
                                    $('.js-link-1').addClass('open-box');
                                    $('.modal-content').text(errors[key][0] + ' Переформатируйте фотографии, скорее всего ошибка в формате фотографий.');
                                    reload.text('Хрень');
                                    form[0].reset();
                                    reload.click(function (html) {
                                        window.location.reload();
                                    });
                                }
                            });
                        } else if (response.status === 500) {
                            var reload = $('.js-reload');
                            $('.modal-block').addClass('modal-block-open');
                            $('.js-link-1').addClass('open-box');
                            $('.modal-content').text('Возникла ошибка. Данные не загружены.');
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

    updateFormData: function () {
        $('.update-form-data').submit(function (e) {
            e.preventDefault();
            let form = $(this),
                dataForm = form.attr('data-form'),
                input = form.find('.admin-input'),
                wrap = form.find('.wrap-input'),
                error = false,
                loader = $(this).find('.wrap-button').attr('data-search'),
                success = form.find('.name-admin-block').attr('data-success'),
                id = $(this).attr('data-id'),
                status = $(this).attr('data-status'),
                link = form.attr('action');

            if (dataForm === 'update-image' || dataForm === 'add-image'){
                loader = $(this).find('.button-image').attr('data-search');
            }

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    if (dataForm === 'update-image' || dataForm === 'add-image') {
                        $(this).parent().addClass('wrap-image-padding');
                    } else if (dataForm === 'update-product') {
                        var reload = $('.js-reload');
                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-1').addClass('open-box');
                        $('.modal-content').text('Вы не внесли изменения');
                        reload.text('Чйорт, совсем забыл!');
                    } else {
                        wrap.eq(-1).addClass('wrap-input-padding');
                    }
                } else if ($(this).val() !== '' && dataForm === 'update-product') {
                    error = false;
                    $('.modal-block').removeClass('modal-block-open');
                    $('.js-link-1').removeClass('open-box');
                    return false;
                } else {
                    wrap.eq(-1).removeClass('wrap-input-padding');
                    return error = false;
                }
            });

            let formData = new FormData(form[0]);
                formData.append('id', id);
                formData.append('status', status);

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

                        var reload = $('.js-reload');
                        $('.modal-block').addClass('modal-block-open');
                        $('.js-link-1').addClass('open-box');
                        if (typeof (id) != "undefined" && id !== null) {
                            if(dataForm === 'update-image'){
                                $('.modal-content').text('Фотография изменена');
                            } else if (dataForm === 'add-image'){
                                $('.modal-content').text('Фотография добавлена');
                            } else if (dataForm === 'delete-image'){
                                $('.modal-content').text('Фотография удалена');
                            } else if (dataForm === 'update-slider'){
                                $('.modal-content').text('Слайдер подключен');
                            }
                            reload.text('Отлично!');
                        } else {
                            if(dataForm === 'email-change'){
                                $('.modal-content').text(data.text);

                                if(data.href !== 'null'){
                                    console.log(data.href);
                                    reload.click(function() {
                                        window.location.href = data.href;
                                    });
                                }
                            } else {
                                $('.modal-content').text(success);
                            }
                        }
                        reload.text('Отлично!');
                        form[0].reset();
                        reload.click(function (html) {
                            if (dataForm === 'update-role' || dataForm === 'update-status' || dataForm === 'email-change') {
                                $('.js-link-1').removeClass('open-box');
                                $('.js-reload-block').load(location.href + ' .js-reload-block>*', '')
                            } else {
                                window.location.href = data;
                            }
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
                                if (key === 'image_top' || key === 'image' || key === 'image1' || key === 'image2' || key === 'image3'){
                                    var reload = $('.js-reload');
                                    $('.modal-block').addClass('modal-block-open');
                                    $('.js-link-1').addClass('open-box');
                                    $('.modal-content').text(errors[key][0] + ' Переформатируйте фотографии, скорее всего ошибка в формате фотографий.');
                                    reload.text('Хрень');
                                    form[0].reset();
                                    reload.click(function (html) {
                                        window.location.reload();
                                    });
                                }
                            });
                        } else if (response.status === 500) {
                            var reload = $('.js-reload');
                            $('.modal-block').addClass('modal-block-open');
                            $('.js-link-1').addClass('open-box');
                            $('.modal-content').text('Возникла ошибка. Данные не загружены.');
                            reload.text('Хрень!');
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

    deleteFormData: function () {
        $('.delete-form-data').submit(function (e) {
            e.preventDefault();
            $('.js-link-3').removeClass('open-box');
            let form = $(this),
                success = form.attr('data-success'),
                id = $(this).attr('data-id'),
                loader = $(this).find('.wrap-button').attr('data-search'),
                link = form.attr('action');

            let formData = new FormData(form[0]);
            formData.append('id', id);
            $('body').addClass('noscroll');
            $('.preloader').addClass('preloader-load');
            $('.loader-text').text('Удаляем');

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

                    var reload = $('.js-reload');
                    $('.modal-block').addClass('modal-block-open');
                    $('.js-link-1').addClass('open-box');
                    $('.modal-content').text(success);
                    reload.text('Все равно не нужно было!');
                    reload.click(function (html) {
                        window.location.href = data;
                    });
                },
                error: (response) => {
                    $('body').removeClass('noscroll');
                    $('.preloader').removeClass('preloader-load');

                    var reload = $('.js-reload');
                    $('.modal-block').addClass('modal-block-open');
                    $('.js-link-1').addClass('open-box');
                    $('.modal-content').text('Возникла ошибка.');
                    reload.text('Что-то пошло не так');
                    reload.click(function (html) {
                        window.location.reload();
                    });
                }
            })
        });
    },

    deleteConfirm: function () {
        $('.itemDelete').submit(function (e) {
            e.preventDefault();
            var data = $('.js-data-name'),
                name = data.text(),
                acc = $('.delete-form-data').attr('data-acc'),
                tag = data.attr('data-tag');

            $('.modal-block').addClass('modal-block-open');
            $('.js-link-3').addClass('open-box');
            if(acc === 'delete-accaunt'){
                $('.modal-content').text('Вы действиетльно хотите удалить свой аккаунт?');
            } else {
                $('.modal-content').text('Вы действиетльно хотите удалить "' + tag + '" : ' + name + '?');
            }
            $('.js-close').click(function(){
                $('.js-link-3').removeClass('open-box');
            });
        });
    },

    deleteErrorAlarm: function(){
        $('.admin-input').change(function (){
            if($(this).val() !== ''){
                $(this).parent().removeClass('wrap-input-padding');
                $(this).parent().removeClass('wrap-image-padding');
            } else {
                $(this).parent().addClass('wrap-input-padding');
                $(this).parent().addClass('wrap-image-padding');
            }
        });

        $('.input-sample-product').change(function (){
            if($(this).val() !== ''){
                $(this).parent().removeClass('wrap-input-padding');
            } else {
                $(this).parent().addClass('wrap-input-padding');
            }
        });

        $('.js-image-input').change(function(){
            if($(this).val() !== ''){
                $('.image-top').removeClass('js-warning-image');
            } else {
                $('.image-top').addClass('js-warning-image');
            }
        });
    },

    closeModal: function () {
        $('.js-close').click(function () {
            $('.modal-block').removeClass('modal-block-open');
            $('.js-link-2').removeClass('open-box');
            $('.js-link-3').removeClass('open-box');
        });

        $('.modal-link').click(function (){
            $('.modal-block').removeClass('modal-block-open');
            $('.js-link-2').removeClass('open-box');
            $('.js-link-3').removeClass('open-box');
        });
    },

    changeCategoryProduct: function () {
        $('#class').change(function () {
            $(this).find(":selected").each(function () {
                $('.type-category option:first').prop('selected',true)
                if ($(this).val() !== '') {
                    $('.sub-class-option').remove();
                    $('.type-category').removeAttr('disabled');
                    $('.sub-class').text('--Выберите Подкатегорию товара--');
                    var link = $(this).attr('data-link');
                    $.ajax({
                        method: "GET",
                        headers: {
                            Accept: "application/json"
                        },
                        url: link,
                        success: (data) => {
                            if (data.length){
                                $.each(data, function(index, value){
                                    $('#sub-class').append('<option class="sub-class-option" value="'+value['id']+'">'+value['sub_category']+'</option>');
                                })
                            } else {
                                $('#sub-class').append('<option class="sub-class-option" value="">Для этой категории не создано подкатегорий</option>');
                            }
                        }
                    })
                } else {
                    $('.type-category').attr('disabled',true);
                    $('.sub-class').text('Сначала выберите Категорию товара');
                }
            });
        });
    },

    changeTypeProduct: function () {
        $('#type').change(function () {
            $(this).find(":selected").each(function () {
                $('.collection option:first').prop('selected',true);
                if ($(this).val() !== '') {
                    $('.sub-collection-option').remove();
                    $('.collection').removeAttr('disabled');
                    $('.sub-collection').text('--Выберите Коллекцию товара--');
                    var link = $(this).attr('data-link');
                    $.ajax({
                        method: "GET",
                        headers: {
                            Accept: "application/json"
                        },
                        url: link,
                        success: (data) => {
                            if (data.length){
                                $('.sub-collection').remove();
                                $('#collection').append('<option class="sub-collection-option" value="91">Без Коллекции или выберите коллекцию</option>');
                                $.each(data, function(index, value){
                                    $('#collection').append('<option class="sub-collection-option" value="'+value['id']+'">'+value['collection']+'</option>');
                                })
                            } else {
                                $('.sub-collection').remove();
                                $('#collection').append('<option class="sub-collection-option" value="null">Для этого Типа товара нет Коллекций</option>');
                            }
                        }
                    })
                } else {
                    $('.collection').attr('disabled',true);
                    $('.sub-collection-option').remove();
                    $('#collection').append('<option class="sub-collection" value="">Выберите Тип товара</option>');
                }
            });
        });
    },

    changeCollection: function () {
        $('#collection').change(function () {
            $(this).find(":selected").each(function () {
                $('.modul_item option:first').prop('selected',true);
                if ($(this).val() !== '') {
                    $('.modul_item-option').remove();
                    $('#modul_item').removeAttr('disabled')
                    $('.modul_item').text('--Добавить Модуль к комплекту--');
                    var link = $(this).attr('data-link');
                    $.ajax({
                        method: "GET",
                        headers: {
                            Accept: "application/json"
                        },
                        url: link,
                        success: (data) => {
                            if (data.length){
                                $('.modul_item').remove();
                                $('#modul_item').append('<option class="modul_item-option" value="">--Выберите Модуль--</option>');
                                $.each(data, function(index, value){
                                    $('#modul_item').append('<option class="modul_item-option" value="'+value['id']+'">'+value['full_name']+'</option>');
                                })
                            } else {
                                $('.modul_item').remove();
                                $('#modul_item').append('<option class="modul_item-option" value="null">Для этой Коллекции нет Модулей</option>');
                            }
                        }
                    })
                } else {
                    $('#modul_item').attr('disabled',true).append('<option class="modul_item" value="">Выберите Коллекцию</option>');
                    $('.modul_item-option').remove();
                }
            });
        });
    },

    modulItem: function() {
        var modul_items = Array();

        $('.js-button').click(function(){
            var name = $('#modul_item option:selected').text();
            modul_items.push(name);

            $('.js-admin-input').removeClass('wrap-input-padding');
            $('.js-warning').css('display', 'none');
            $('.db-relevant-info-item').remove();
            $.each(modul_items, function(index, value){
                $('.relevant-info-list').append('<li class="db-relevant-info-item form-label admin-block-2fr-db">\n' +
                    '                                                <article class="collect-article">'+value+'</article>\n' +
                    '                                        <a class="mdr-button stop modul-button-delete js-delete" data-index="'+index+'">Удалить</a>\n' +
                    '                                           </li>');
            })

            $('.js-delete').click(function(){
                var index = $(this).attr('data-index'),
                    parent = $(this).parent();
                modul_items.splice(index, 1);
                parent.remove();
                if(modul_items.length === 0){
                    $('.js-warning').css('display', 'block');
                }
                return modul_items;
            });

        });
        return modul_items;
    },

    sampleProduct: function () {
        $('.form-sample-product').submit(function (e) {
            e.preventDefault();
            let input = $(this).find('.input-sample-product'),
                error = false,
                loader = $(this).find('.wrap-button').attr('data-search'),
                link = $(this).attr('action'),
                dataForm = $(this).attr('data-form'),
                subCategory = $('#sub-class option:selected').text();

            $.each(input, function (index, element) {
                if ($(this).val() === '') {
                    error = true;
                    $(this).parent().addClass('wrap-input-padding');

                } else {
                    $(this).parent().removeClass('wrap-input-padding');
                }
            });
            let formData = new FormData($(this)[0]);

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

                        $('.db-non-list').remove();
                        $('.db-relevant-info-item').remove();
                        if (data.length){
                            $.each(data, function(index, value){
                                if (dataForm === 'search_user') {
                                    $('.relevant-info-list').append('<li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Категорию">' +
                                        '                                <article class="collect-article" data-id="'+value['id']+'">'+value['email']+'</article>' +
                                        '                                <a class="mdr-button accept modul-button-delete" href="/admin/users/edit-user/id-'+value['id']+'.mdr">Редактировать</a>' +
                                        '                             </li>');
                                } else {
                                    var linkEdit;
                                    if (value['type'] === 'Комплект'){
                                        linkEdit = '/admin/products/edit-modul-compilation/';
                                    } else {
                                        linkEdit = '/admin/products/edit/';
                                    }
                                    $('.relevant-info-list').append('<li class="db-relevant-info-item form-label admin-block-2fr-db" data-action="Категорию">' +
                                        '                                <article class="collect-article" data-id="'+value['id']+'">'+value['full_name']+'</article>' +
                                        '                                <a class="mdr-button accept modul-button-delete" href="'+linkEdit+''+value['slug_full_name']+'.mdr">Редактировать</a>' +
                                        '                             </li>');
                                }
                            })
                        } else {
                            $('.db-relevant-info-item').remove();
                            if (dataForm === 'search'){
                                $('.relevant-info-list').append('<div class="db-non-list">Товаров с таким Артиклем или Названием не найдено</div>');
                            } else if (dataForm === 'sample'){
                                $('.relevant-info-list').append('<div class="db-non-list">Товаров в Подкатегории "'+subCategory+'" нет.</div>');
                            } else if (dataForm === 'search_user'){
                                $('.relevant-info-list').append('<div class="db-non-list">Пользлвателей не найдено.</div>');
                            }

                        }
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
                            $('.modal-content').text('Возникла ошибка. Данные не загружены.');
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

    addOrder: function(){
        $('.js-add-order').submit(function(e) {
            e.preventDefault();
            var products = Array(),
                link = $('.js-add-order').attr('action');

            $('.draw-up-item').each(function (){
                if($(this).find('.addOrder').attr('data-name') !== undefined)
                products.push($(this).find('.addOrder').attr('data-name'));
            })

            let formData = new FormData();
            formData.append('products', JSON.stringify(products));

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
                    window.location.href = data;
                }
            })
        });
    },
};

$(document).ready(function () {
    appData.emailVerification();
    appData.modulItem();
    appData.createFormData();
    appData.updateFormData();
    appData.deleteFormData();
    appData.deleteConfirm();
    appData.deleteErrorAlarm();
    appData.closeModal();
    appData.changeCategoryProduct();
    appData.changeTypeProduct();
    appData.changeCollection();
    appData.sampleProduct();
    appData.addOrder();
});
