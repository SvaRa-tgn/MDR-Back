<footer class="footer" id="footer">
    <div class="wrap-footer">
        <section class="left-footer">
            <div class="footer-slogan">
                <div class="wrap-footer-span">
                    <span class=footer-span>My  Decor  Room</span> - Ваш надежный поставщик мебели!
                </div>
            </div>
            <ul class="wrap-footer-nav-list">
                @foreach($categories as $category)
                <li class="wrap-footer-nav-item">
                    <ul class="footer-nav-list">
                        <li class="footer-nav-item">
                            <a class="link-footer-nav" href="{{route('catalogSubcategories', $category->slug_category)}}">{{$category->category}}</a>

                        </li>
                        @foreach($subCategories as $subCategory)
                            @if($category->id === $subCategory->category_id)
                        <li class="footer-nav-item">
                            <a class="link-footer-nav" href="{{route('catalogProducts', ['slugCategory' => $category->slug_category, 'slugSubCategory' => $subCategory->slug_sub_category])}}">{{$subCategory->sub_category}}</a>
                        </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </section>

        <section class="right-footer">
            <ul class="footer-data-list">
                <li class="footer-data-item">
                    <img class="footer-img-logo" src="{{asset('/img/logo/logo.svg')}}" alt="Логотип" />
                </li>
                <li class="footer-data-item">
                    My Decor Room - Мебельный интернет-магазин.
                </li>
                <li class="footer-data-item">
                    <i class="fa fa-envelope fa-1x" aria-hidden="true"><span class="fa-font-mdr">  manager@mydecor-room.ru</span></i>
                </li>
                <li class="footer-data-item">
                    <a class="footer-data-link" href="tel:+79209685108"><i class="fa fa-phone fa-1x fa-phone-mdr" aria-hidden="true"><span class="fa-font-mdr">  +7 920 968-51-08</span></i></a>
                </li>
                <li class="footer-data-item">
                    Наименование юридического лица:
                </li>
                <li class="footer-data-item">
                    ИП Чулин Д.С.
                </li>
                <li class="footer-data-item">
                    ОГРНИП: 321623400030109
                </li>
                <li class="footer-data-item">
                    Место нахождения организации:
                </li>
                <li class="footer-data-item">
                    390000 г. Рязань, Ряжское шоссе, д.20 «КАСКАД» офис 311
                </li>
                <li class="footer-data-item">
                    <img class="bank" src="{{asset('/img/icon/bank-icon.png')}}" alt="Платежные системы" />
                </li>
                <li class="footer-data-item">
                    <ul class="footer-soc-list">
                        <li class="footer-soc-item">
                            <a class="footer-soc-link" target="_blank" href="#"><img class="soc-img" src="{{asset('/img/icon/od.png')}}" alt="Vkontakte" /></a>
                        </li>
                        <li class="footer-soc-item">
                            <a class="footer-soc-link" target="_blank" href="#"><img class="soc-img" src="{{asset('/img/icon/tg.png')}}" alt="Telegram" /></a>
                        </li>
                        <li class="footer-soc-item">
                            <a class="footer-soc-link" target="_blank" href="#"><img class="soc-img" src="{{asset('/img/icon/vk.png')}}" alt="odnoklassniki" /></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>

    <section class="footer-nav">
        <div class="footer-link">
            <ul class="footer-link-list">
                <li class="footer-link-item">
                    г. Рязань
                </li>
                <li class="footer-link-item">
                    <a class="footer-link-link" href="#home">В начало страницы</a>
                </li>
                <li class="footer-link-item">
                    <a class="footer-link-link" href="{{route('/.index')}}">Главная</a>
                </li>
                <li class="footer-link-item">
                    <a class="footer-link-link" href="{{route('information.index')}}">Информация</a>
                </li>
                <li class="footer-link-item">
                    <a class="footer-link-link" href="{{route('servicePage')}}">Услуги</a>
                </li>
                <li class="footer-link-item">
                    <div class="footer-link-link">Сотрудничество</div>
                </li>
                <li class="footer-link-item">
                    <a class="footer-link-link" href="aboutus.html">О нас</a>
                </li>
                <li class="footer-link-item">
                    &#169; My Decor Room  2023
                </li>
            </ul>
        </div>
    </section>

    <section class="signature">
        Design by svara.factory
    </section>

</footer>
</div>



<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
</body>

</html>
