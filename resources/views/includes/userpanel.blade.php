@if(Auth::check())
    <section id="userpanel">
        <div class="content">
            <form action="{{ route('logout') }}" method="post">@csrf
                <a href="{{ route('balance') }}">Баланс: 0 руб.</a>
                <a href="{{ route('dashboard') }}"><img
                        src="../../../../mur48.biz_files/btn1.png">Личный
                    кабинет</a>
                <span class="sep">|</span>
                <button style="	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
" type="submit"><img src="../../../../mur48.biz_files/btn2.png">Выход
                    ({{ Auth::user()->name }})</button></form>
        </div>
    </section>
@else
    <section id="userpanel">
        <div class="content">
            <a href="{{ route('login') }}"><img src="../../../../mur48.biz_files/btn1.png">Войти</a>
            <span class="sep">|</span>
            <a href="{{ route('register') }}"><img
                    src="../../../../mur48.biz_files/btn2.png">Регистрация</a>
        </div>
    </section>
@endif
