@extends('/app-page/admin-page/admin')
@section('admin')
    <section class="breadcrumbs">
        <div class="wrap-breadcrumbs">
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('/.index')}}">Главная</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('admin.index')}}">Профиль админки</a>
                </li>
                <li class="breadcrumbs-item">
                    /
                </li>
                <li class="breadcrumbs-item">
                    Создать товар
                </li>
            </ul>
        </div>
    </section>

    <section class="main-block main-medium-aside">
    @include('static.aside.admin-aside')

        <section class="admin-main-block">
            <div class="wrap-head-page bg-admin">
                <h1 class="page-h1">Создать товар</h1>
            </div>

            <div class="wrap-head-page-h3">
                <h3 class="page-h3 color-admin">Данные товара:</h3>
            </div>

            <form class="create-product-data">
                <ul class="wrap-create-product-list">
                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Категория товара
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="class" id="class" required>
                                <option class="class" value="" >--Выберите категорию товара--</option>
                                <option class="class" value="Гостиные">Гостиные</option>
                                <option class="class" value="Кухни">Кухни</option>
                                <option class="class" value="Детские">Детские</option>
                                <option class="class" value="Домашний офис">Домашний офис</option>
                                <option class="class" value="Прихожие">Прихожие</option>
                                <option class="class" value="Спальни">Спальни</option>
                                <option class="class" value="Шкафы">Шкафы</option>
                                <option class="class" value="Мягкая мебель">Мягкая мебель</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Подкатегория товара
                        </label>
                        <ul class="create-product-list">
                            <li class="create-product-item">
                                <select class="create-product-select" name="sub-class" id="sub-class" required>
                                    <option class="sub-class" value="">--Выберите подкатегорию товара--</option>
                                    <option class="sub-class" value="Модульные гостиные">Модульные гостиные</option>
                                    <option class="sub-class" value="Стенки">Стенки</option>
                                    <option class="sub-class" value="Комоды">Комоды</option>
                                    <option class="sub-class" value="Журнальные столы">Журнальные столы</option>
                                    <option class="sub-class" value="Полки и антресоли">Полки и антресоли</option>
                                </select>
                            </li>
                        </ul>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Тип товара
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="type" id="type" required>
                                <option class="type" value="">--Выберите тип товара--</option>
                                <option class="type" value="Модульный">Модульный</option>
                                <option class="type" value="Готовый">Готовый</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Тип модульного товара
                        </label>
                        <div class="type-modul-block">
                            <div class="wrap-create-product-item type-modul visible-type-modul">
                                <select class="create-product-select item-type" name="type_modul" id="type-modul" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="Комплект">Комплект</option>
                                    <option value="модуль">Модуль</option>
                                </select>
                            </div>
                            <div class="wrap-create-product-item type-modul ">
                                <select class="create-product-select item-type" name="type_modul" id="type_modul_null" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="null">null</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Коллекция модульного товара
                        </label>
                        <div class="type-modul-block">
                            <div class="wrap-create-product-item type-collection visible-type-modul">
                                <select class="create-product-select item-collection" name="modul_collection" id="modul_collection" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="Комплект">Комплект</option>
                                    <option value="модуль">модуль</option>
                                </select>
                            </div>
                            <div class="wrap-create-product-item type-collection ">
                                <select class="create-product-select item-collection" name="modul_collection" id="modul_collection_null" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="null">null</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Коллекция готового товара
                        </label>
                        <div class="type-modul-block">
                            <div class="wrap-create-product-item type-ready visible-type-modul">
                                <select class="create-product-select item-ready" name="modul_collection" id="ready_collection_null" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="null">null</option>
                                </select>
                            </div>
                            <div class="wrap-create-product-item type-ready">
                                <select class="create-product-select item-ready" name="ready_collection" id="ready_collection" required>
                                    <option value="">--Выберите тип товара--</option>
                                    <option value="null">null</option>
                                    <option value="Комплект">Комплект</option>
                                    <option value="модуль">модуль</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Полное название товара
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="text" id="full-name" name="full-name" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Короткое название товара
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="text" id="name" name="name" required />
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Артикул товара
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="text" id="article" name="article" required />
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Высота
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="number" id="height" name="height" required />
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Ширина
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="number" id="width" name="width" required />
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Глубина
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="number" id="deep" name="deep" required />
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Статус товара
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="status" id="status" required>
                                <option class="status" value="">--Выберите статус товара--</option>
                                <option class="status" value="Продажа">Продажа</option>
                                <option class="status" value="Запас">Резерв</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Выберите заглавное фото
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input-foto" type="file" id="foto-top" name="foto-top" accept="image/png, image/jpeg" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Выберите фото
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input-foto" type="file" id="foto" name="foto" accept="image/png, image/jpeg" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Выберите фото
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input-foto" type="file" id="foto2" name="foto2" accept="image/png, image/jpeg" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Выберите фото
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input-foto" type="file" id="foto3" name="foto3" accept="image/png, image/jpeg" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Выберите фото
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input-foto" type="file" id="foto4" name="foto4" accept="image/png, image/jpeg" required/>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Материал корпус
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="korpus" id="korpus" required>
                                <option value="">--Выберите статус товара--</option>
                                <option value="ЛДСП">ЛДСП</option>
                                <option value="МДФ">МДФ</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Материал фасада
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="fasad" id="fasad" required>
                                <option value="">--Выберите статус товара--</option>
                                <option value="ЛДСП">ЛДСП</option>
                                <option value="МДФ">МДФ</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Цвет корпуса
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="color-korpus" id="color-korpus" required>
                                <option value="">--Выберите статус товара--</option>
                                <option value="ЛДСП">ЛДСП</option>
                                <option value="МДФ">МДФ</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Цвет фасада
                        </label>
                        <div class="wrap-create-product-item">
                            <select class="create-product-select" name="color-fasad" id="color-fasad" required>
                                <option class="color-fasad" value="">--Выберите статус товара--</option>
                                <option class="color-fasad" value="ЛДСП">ЛДСП</option>
                                <option class="color-fasad" value="МДФ">МДФ</option>
                            </select>
                        </div>
                    </li>

                    <li class="wrap-create-product-item">
                        <label class="create-product-label">
                            Цена
                        </label>
                        <div class="wrap-create-product-item">
                            <input class="create-product-input" type="number" id="price" name="price" required/>
                        </div>
                    </li>
                </ul>

                <button class="mdr-button accept admin-button">
                    Сохранить
                </button>
            </form>
        </section>
@endsection
