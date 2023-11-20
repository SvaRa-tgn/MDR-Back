<section class="callback-block">
    <div class="wrap-callback">
        <article class="callback-cross">
            <img class="img-cross" src="{{asset('/img/icon/cross.png')}}" alt="Cross" />
        </article>
        <article class="article-callback">
            Вопросы? Напишите нам!
        </article>
        <form id="form" class="call-back-form"  method="post">
            <input class="call-back-mail" type="text" name="name" placeholder="Укажите ваше имя" required>
            <input class="call-back-mail" type="text" name="surname" placeholder="Укажите вашу фамилию" required>
            <input class="call-back-mail" type="text" name="number" placeholder="Укажите номер заказа">
            <article class="call-back-mail">
                *если у вас нет номера заказа, вы не совершали заказ, то номер писать не обязательно. Заполните эту графу если у вас есть номер это облегчит нам задачу.
            </article>
            <input class="call-back-mail" type="numder" name="phone" placeholder="телефон" required>
            <input class="call-back-mail" type="email" name="email" placeholder="Укажите e-mail" required>
            <textarea class="call-back-mail" type="text" name="Текст" placeholder="Введите текст" required></textarea>
            <button class="mdr-button accept position-bottom" type="submit" value="Задать вопрос">Задать вопрос</button>
        </form>
        <p class="msg-w none">Lorem ipsum dolor sit amet.</p>
    </div>
</section>
