<section id="menu">
    <ul>
        <li class="logo">
            <a href="/">
                <img src="../../../../mur48.biz_files/logo.png">
            </a>
            <div class="sitename">mur48.biz</div>
        </li>
        <li>
            <div class="menu-bg">
                <ol style="visibility: visible;">
                    <li><a href="/">Товары</a></li>
                    <li><a href="{{ route('check') }}">Проверка заказа</a></li>
                    <li><a href="{{ route('reviews', [0,0]) }}">Отзывы</a></li>

                    <li><a href="{{ route('vacansy') }}">Вакансии</a></li>
                    <li><a href="{{ route('contacts') }}">Наши Контакты </a></li>
                    <li><a href="{{ route('actions') }}">Наши Акции </a></li>
                </ol>
            </div>
        </li>
    </ul>
</section>

<section id="mobile">
    <div>
        <div class="mlogo">
            <a href="/">
                <img class="logo" src="../../../../mur48.biz_files/logo.png">
            </a>
            <div class="sitename">mur48.biz</div>
        </div>
        <a href="/user/registration#" class="block mblock">Меню</a>
    </div>
    <ul class="slideMenu">
        <li><a href="/">Товары</a></li>
        <li><a href="{{ route('check') }}">Проверка заказа</a></li>
        <li><a href="{{ route('reviews', [0,0]) }}">Отзывы</a></li>

        <li><a href="{{ route('vacansy') }}">Вакансии</a></li>
        <li><a href="{{ route('vacansy') }}">Наши Контакты </a></li>
        <li><a href="{{ route('actions') }}">Наши Акции </a></li>
    </ul>
</section>