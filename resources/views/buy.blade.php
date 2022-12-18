@extends('layouts.app')

@section('content')
@include('includes.userpanel')
@include('includes.alert')


<div class="content">


    @include('includes.navbar')

    <script type="text/javascript">
        (function () {
            var chat_s = document.createElement('script');
            chat_s.type = 'text/javascript';
            chat_s.async = true;
            chat_s.src = 'https://chat.iklad-chat.biz/code.cgi?c=5357&ssl=1&rnd=' + Math.random();
            document.body.appendChild(chat_s);
        })();

    </script>


    <div class="title">Выберите район</div>
    <section id="universal" class="border">
        <script src="../mur48.biz_files/tinyNav.js"></script>
        <style>
            ul#sDistricts {
                display: block;
                text-align: center;
            }

            ul#sDistricts>li {
                display: inline-block;
                margin: 5px;
            }

            ul#sDistricts>li a {
                display: block;
                background-color: rgba(0, 0, 0, .5);
                color: white;
                text-decoration: none;
                padding: 10px 20px;
                cursor: pointer;
            }

            ul#sDistricts>li a:hover {
                background-color: rgba(0, 0, 0, .6);
            }

            .tinynav {
                display: none;
            }


            .tinynav {
                display: block;
                width: 100%;
                padding: 10px;
            }

        </style>
        <ul id="sDistricts" class="l_tinynav1">
            <li class=""><a href="/buy/210/69">ВАО,м.Новогиреево (1)</a></li>
            <li class=""><a href="/buy/210/245">ЮЗАО,м.Бульвар Дмитрия Донского (1)</a></li>
            <li class=""><a href="/buy/210/411">ЗАО м.Новаторская (1)</a></li>
            <li class=""><a href="/buy/210/529">ВАО м.Лефортово (1)</a></li>
        </ul>

        <script>
            $(document).ready(function () {
                var citiesParams = {};
                var districtParams = {
                    "header": "Выбрать"
                };

                $('#sDistricts').tinyNav(districtParams);

            });

        </script>
        <link rel="stylesheet" type="text/css" href="../mur48.biz_files/baloon2.css">

        <link rel="stylesheet" href="../mur48.biz_files/css2">
        <style>
            section#commentsProductsFilter select#productFilter,
            section#commentsCitiesFilter select#cityFilter {
                width: 200px;
                padding: 5px;
                display: block;
            }

            section#commentsCitiesFilter {
                padding-right: 20px;
            }

            div.commentStat,
            div.commentWrapperTable,
            div#commentTableWrapper {
                display: table;
                width: 100%;
                white-space: nowrap;
            }

            div.commentStat>div,
            div.commentWrapperTable>div.cell,
            div#commentTableWrapper>section {
                display: table-cell;
                vertical-align: middle;
            }

            div.commentStat>div {
                vertical-align: middle;
            }

            div.commentStat>div:first-of-type {
                padding-right: 20px;
            }

            div.commentStat>div:first-of-type,
            div.commentWrapperTable>div.rating-cell,
            div.commentWrapperTable>div.city-cell,
            div.commentWrapperTable>div.district-cell,
            div.commentWrapperTable>div.product-cell,
            div.commentWrapperTable>div.sep-cell,
            div#commentTableWrapper>section#commentsProductsFilter,
            div#commentTableWrapper>section#commentsCitiesFilter,
            div#commentTableWrapper>section#commentsResetFilter {
                width: 1px;
            }

            div#commentTableWrapper>section#commentsResetFilter {
                padding-left: 10px;
            }

            div.commentWrapperTable>div.city-cell,
            div.commentWrapperTable>div.sep-cell,
            div.commentWrapperTable>div.district-cell,
            div.commentWrapperTable>div.product-cell {
                padding-right: 20px;
            }

            div.commentWrapperTable a {
                color: inherit;
                text-decoration: none;
            }

            section#commentsAddButton {
                text-align: left;
            }

            section#comments {
                text-align: left;
            }

            section#comments div.commentAuthor {
                font-size: 110%;
                font-weight: bold;
            }

            section#comments div.commentDate {
                font-size: 80%;
                margin-top: 10px;
            }

            section#comments ul#commentsList>li {
                margin-bottom: 20px;
                padding: 10px;
                list-style: none;
            }

            section#comments hr {
                margin: 20px 0;
                opacity: .4;
            }

            section#comments ul#commentsList>li:nth-child(2n) {
                background-color: rgba(216, 216, 216, .05);
            }

            section#commentsPaginator {
                text-align: center !important;
            }

            section#commentsPaginator ul.yiiPager>li a {
                position: relative !important;
            }

            section#comments span.material-symbols-outlined {
                vertical-align: middle;
                font-size: inherit;
            }

            section#comments span.material-symbols-outlined.rev2 {
                vertical-align: -3px;
                font-size: 18px;
                padding-left: 10px;
            }

            section#comments span.material-symbols-outlined.rev1 {
                margin-right: 5px;
            }

            section#comments ul.review-rating {
                zoom: .8;
                margin: 0;
            }

            section#comments section#commentsStat {
                display: inline-block;
            }

            section#comments div.centerAlignText {
                text-align: center;
            }

            section#comments div.centerAlignText div.sectionTitle {
                font-weight: bold;
                font-size: 110%;
                margin-bottom: 10px;
            }

            div.commentWrapperTable>div.city-cell,
            div.commentWrapperTable>div.product-cell {
                font-size: 90%;
            }


            <blade media|%20(max-width%3A%20770px)%20%7B%0D>div.commentWrapperTable>div.rating-cell {
                margin: 10px 0;
            }

            section#comments div.commentReply {
                font-weight: normal;
            }

            section#comments div.commentBody {
                font-weight: bold;
            }

            section#comments div.commentDate {
                margin: 0;
            }

            section#commentsAddButton {
                margin-bottom: 30px;
            }

            div.commentWrapperTable>div.cell,
            div#commentTableWrapper>section {
                display: block;
                text-align: center;
            }

            section#comments div.commentAuthor {
                text-align: left;
            }

            section#commentsProductsFilter select#productFilter,
            section#commentsCitiesFilter select#cityFilter,
            div.commentStat>div:first-of-type,
            div.commentWrapperTable>div.rating-cell,
            div.commentWrapperTable>div.city-cell,
            div.commentWrapperTable>div.district-cell,
            div.commentWrapperTable>div.product-cell,
            div.commentWrapperTable>div.sep-cell,
            div#commentTableWrapper>section#commentsProductsFilter,
            div#commentTableWrapper>section#commentsCitiesFilter,
            div#commentTableWrapper>section#commentsResetFilter {
                width: 100%;
                text-align: left;
            }

            section#comments div.commentDate {
                text-align: left;
            }

            section#comments section#commentsStat {
                display: block;
            }

            section#commentsCitiesFilter {
                padding: 0;
            }

            section#commentsProductsFilter select#productFilter,
            section#commentsCitiesFilter select#cityFilter {
                margin-top: 10px;
                padding: 10px;
            }

            }

            section#comments div.buyModeTitle {
                text-align: center;
                margin-top: 50px;
                font-weight: bold;
                fonbt-size: 110%
            }

        </style>
        <section id="comments">

            <div class="buyModeTitle">Отзывы об этом товаре</div>

            <hr>

            <section id="commentsBody">
                <ul id="commentsList">
                    <li>
                        <div class="commentWrapperTable">
                            <div class="cell">
                                <div class="commentAuthor">
                                    <span class="material-symbols-outlined rev1">person</span>
                                    T***m </div>
                            </div>


                            <div class="cell city-cell">
                                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                                    <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                                </a> </div>

                            <div class="cell sep-cell">--</div>

                            <div class="cell product-cell">
                                <a target="_blank" aria-label="Название товара" data-balloon-pos="up"
                                    href="/buy/210">Альфа-ПВП Кристалл Белый 0,5 гр "магнит" </a>
                            </div>
                            <!--<div class="cell district-cell">
                                                    </div>-->
                            <div class="cell rating-cell" data-balloon-pos="up" aria-label="Оценка - 5">
                                <div class="commentRating">
                                    <ul class="review-rating review-rating-5 list-inline">
                                        <li class="review-rating-item item1"></li>
                                        <li class="review-rating-item item2"></li>
                                        <li class="review-rating-item item3"></li>
                                        <li class="review-rating-item item4"></li>
                                        <li class="review-rating-item item5"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="commentDate">18-09-2022 14:05:27</div>
                        <div class="commentSep">-</div>
                        <div class="commentBody">Доброго времени суток! Всё четко 10/10/10.Качество отличное. </div>
                    </li>
                </ul>
            </section>

            <section id="commentsPaginator">
            </section>


        </section>
    </section>
</div>
<script type="text/javascript" async="" src="../mur48.biz_files/code.cgi"></script>

<script>
    window.btcpopup_mode = 2;

</script>
<section id="warning_btc" style="display: none;">
    <div class="text">
        <div class="inner">
            <img src="../mur48.biz_files/PkOYFPM.png">
            <h1>Как купить Bitcoin за 15 секунд?</h1>
            <hr>
            <div>Для Вашего удобства, мы собрали 4 самых быстрых и удобных способа покупки <b>Bitcoin</b>:</div>
            <ul>
                <li><a href="https://telegra.ph/Video-Kak-kupit-Bitcoin-s-pomoshchyu-QIWI-ili-bankovskoj-karty-cherez-mobilnoe-prilozhenie-FX-Coin-05-14"
                        target="_blank">Покупка через мобильное приложение</a></li>
                <li><a href="https://telegra.ph/Video-Kak-kupit-Bitcoin-za-QIWI-cherez-birzhu-Localbitcoinscom-05-13"
                        target="_blank">Покупка через биржу Localbitcoins.com</a></li>
                <li><a href="https://telegra.ph/Video-Kak-bystro-kupit-Bitcoin-za-QIWI-cherez-Bestchangeru-05-13-2"
                        target="_blank">Покупка через сайт Bestchange.ru</a></li>
                <li><a href="https://telegra.ph/Gde-kupit-Bitcoin-nalichnymi-cherez-terminal-05-13-2"
                        target="_blank">Покупка наличными через Bitcoin терминалы в Вашем городе</a></li>
            </ul>
            <br>
            <br>
            <div>Нажмите на интересующий Вас способ покупки Bitcoin и перейдите к прочтению статьи.</div>
            <br>
            <div>Так же обязательно советуем прочитать статью:</div>
            <div><a href="https://telegra.ph/Pochemu-polzovatsya-QIWI-nebezopasno-i-chto-takoe-Bitcoin-05-14"
                    target="_blank">Почему пользоваться QIWI небезопасно и что такое Bitcoin?</a></div>
            <br>
            <div>Удачных покупок!</div>
            <br>
            <div class="btns">
                <button id="modal-success" style="padding:5px;" onclick="BTCsuccessModalClose()">Ознакомлен</button>
                <button id="modal-close" style="padding:5px;" onclick="BTCmodalClose()">Закрыть</button>
            </div>
        </div>
    </div>
</section>

<script src="../mur48.biz_files/btcpopup.js"></script>

<link rel="stylesheet" type="text/css" href="../mur48.biz_files/btcpopup.css">
<!-- apk pop up -->

<script>
    window.apkpopup_mode = 1;

</script>
<section id="warning_apk" style="display: none">
    <div class="text">
        <div class="inner">
            <img src="../mur48.biz_files/ASBJF5E.png" class="icon">
            <h1>Внимание! Наш магазин запустил мобильное Android приложение!<br>Теперь покупки стали еще быстрее и
                удобнее!</h1>
            <hr>
            <div style="text-align: center">Скачайте наше мобильное Android приложение и Вы в любой момент сможете
                попасть в наш магазин и произвести покупки.</div>
            <a href="/app.apk" target="_blank"><img src="../mur48.biz_files/nGyAD4L.png" class="download"></a>
            <br>
            <div class="btns">
                <button id="modal-success" style="padding:5px;" onclick="APKsuccessModalClose()">Ознакомлен</button>
                <button id="modal-close" style="padding:5px;" onclick="APKmodalClose()">Закрыть</button>
            </div>
        </div>
    </div>
</section>

<script src="../mur48.biz_files/apkpopup.js"></script>
<link rel="stylesheet" type="text/css" href="../mur48.biz_files/apkpopup.css">
<!-- / apk pop up -->
<!-- forum pop up -->
<!-- / forum pop up -->

<script>
    window.popup_mode = 2;

</script>
<section id="warning" style="display: none;">


    <div class="text">
        <div class="inner">
            <div class="on-desktop" id="block-desktop">
                <div>Дорогой клиент! Обязательно ознакомься с информацией ниже, иначе <span class="danger">ты
                        рискуешь потерять доступ к магазину.</span>
                </div>

                <br><br>

                <div> Уважаемый клиент, в любой момент, доступ к магазину на территории РФ, может быть ограничен
                    властями. В связи с этим, информируем Вас о том, как можно легко в 2 клика обойти блокировку
                    и
                    без
                    проблем совершать покупки.
                </div>
                <br>
                <div> Обязательно ознакомьтесь с информацией, написанной ниже, чтобы не потерять доступ к
                    магазину.
                    <br>
                    <span style="color:yellow">Внимание! Так же советуем добавить к себе Telegram-бота для обхода
                        блокировок: <a style="border-bottom: 1px dotted yellow;" href="https://t.me/zapretoffbot"
                            target="_blank">нажмите сюда.</a></span>

                </div>
                <br>
                <div> Ниже будут указаны самые простые, быстрые и удобные методы обхода блокировки <span
                        style="color:red">на компьютере.</span>
                    Выберите нужный пункт и нажмите на него!
                </div>
                <br>
                <br>
                <div class="m-spoiler" onclick="toggle(&#39;sp1&#39;)">
                    1. <p>Epic Browser он с легкостью поможет
                        Вам обойти блокировку. Работает как на Windows, так и на Mac OS. (нажмите)</p>
                </div>
                <div id="sp1">
                    <div>Скачать можно - <a href="https://epicbrowser.com/" target="_blank">здесь</a></div>
                    <div>Скачайте и установите браузер. После запуска браузера, нажимаем красный значок справа
                        от
                        адресной строки <a href="../mur48.biz_files/AdwnR5Q.png" target="_blank"><img
                                src="../mur48.biz_files/AdwnR5Q.png"></a>
                    </div>
                    <div> В появившемся окне выставляете переключатель в положение ON <a
                            href="../mur48.biz_files/33DMJxK.png" target="_blank"><img
                                src="../mur48.biz_files/33DMJxK.png"></a>
                        (кнопка
                        должна стать зелёной).
                    </div>
                    <div> Обход готов! <a href="../mur48.biz_files/TrD46dr.jpg" target="_blank"><img
                                src="../mur48.biz_files/TrD46dr.jpg"></a>
                    </div>
                    <div> Так же, для удобства, Вы можете добавить нужный магазин в закладке и в 2 клика
                        совершать
                        покупки. Это самое быстрое и стабильное решение. Мы советуем его!
                    </div>
                    <div> Очень простое решение, нужно просто скачать и запустить браузер! Подойдет для
                        новичков.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;sp2&#39;)">2. <p>Встроенный в Opera сервис VPN (нажмите)
                    </p>
                </div>
                <div id="sp2">
                    <div> В обычном режиме браузер соединяется с сайтами напрямую, следовательно обход работать
                        не
                        будет.
                        Включив бесплатный VPN в самом браузере, вы соединяетесь с магазином через VPN-сервер,
                        обходя
                        все
                        блокировки.
                    </div>

                    <div> Для включения VPN выполните следующие действия:</div>
                    <br>
                    <div> 1. Скачайте Opera для своей операционной системы <a href="https://www.opera.com/ru"
                            target="_blank">здесь</a>
                    </div>
                    <div> 2. В главном меню выберите "Настройки"
                        <a href="../mur48.biz_files/gqkrtYd.png" target="_blank"><img
                                src="../mur48.biz_files/gqkrtYd.png"></a>
                        для Mac OS вкладку "Настройки"
                        можно найти в левом верхнем углу, возле яблочка, нажав на "Opera"
                    </div>
                    <div> 3. Нажмите "Безопасность" на боковой панели.
                        <a href="../mur48.biz_files/j1R1T8u.png" target="_blank"><img
                                src="../mur48.biz_files/j1R1T8u.png"></a>
                    </div>
                    <div> 4. В меню VPN, установите флажок Включить VPN.
                        <a href="../mur48.biz_files/ZM9VcLU.png" target="_blank"><img
                                src="../mur48.biz_files/ZM9VcLU.png"></a>
                    </div>
                    <div> Это автоматически активирует VPN, если сделали все правильно, то в адресной строке
                        появится
                        значок
                        VPN. Все готово. Обход работает.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;sp3&#39;)">3. <p>TOR Browser. Всем известный браузер.
                        Работает
                        как
                        на Windows, так и на Mac OS. (нажмите)</p>
                </div>
                <div id="sp3">
                    <div> Для реализации обхода достаточно просто скачать и установить браузер, для этого нужно
                        перейти
                        на
                        официальный сайт TOR <a href="https://www.torproject.org/download/download-easy.html.en"
                            target="_blank">ссылка</a>
                    </div>
                    <div> Браузер работает без никаких либо настроек, достаточно 1 раз поставить и все будет
                        работать.
                    </div>
                    <div> Но к сожалению, с первого ноября 2017 года существует вероятность блокировки TOR
                        властями
                        РФ.
                        Но
                        как известно, на каждое действие, есть противодействие.
                    </div>
                    <div> Чтобы не потерять доступ, заранее позабоььтесь реализацией обхода, она будет описана
                        ниже.
                    </div>
                    <div> Если приходится использовать Tor Browser в таком месте, где сеть Tor заблокирована,
                        нужно
                        воспользоваться ретранслятором-мостом.
                    </div>
                    <div> Если доступ к сети у вас ограничен, нажмите кнопку "Настроить".</div>
                    <div><a href="../mur48.biz_files/Cgq7OrX.png" target="_blank"><img
                                src="../mur48.biz_files/Cgq7OrX.png"></a>
                    </div>
                    <div> Выберите Да</div>
                    <div><a href="../mur48.biz_files/nyoCeB0.png" target="_blank"><img
                                src="../mur48.biz_files/nyoCeB0.png"></a>
                    </div>
                    <div> Нажмите Далее, чтобы перейти к настройке мостов.</div>
                    <div><a href="../mur48.biz_files/pfLjb8N.png" target="_blank"><img
                                src="../mur48.biz_files/pfLjb8N.png"></a>
                    </div>
                    <div> Мосты получить можно <a href="https://bridges.torproject.org/"
                            target="_blank">bridges.torproject.org </a>
                    </div>
                    <div> Нажмите кнопку Просто дайте мне адреса мостов!</div>
                    <div><a href="../mur48.biz_files/wl4Nn4y.png" target="_blank"><img
                                src="../mur48.biz_files/wl4Nn4y.png"></a>
                    </div>
                    <div> Копируете их и вставляете в окно в самом торе как показано выше.</div>
                    <div><a href="../mur48.biz_files/xvkp64k.png" target="_blank"><img
                                src="../mur48.biz_files/xvkp64k.png"></a>
                    </div>
                    <div><a href="../mur48.biz_files/TZFc9dY.png" target="_blank"><img
                                src="../mur48.biz_files/TZFc9dY.png"></a>
                    </div>
                    <div> Нажимаете Далее. Обход готов.</div>
                    <br>
                    <div> либо</div>
                    <br>
                    <div> Перейдите по <a href="https://bridges.torproject.org/" target="_blank">ссылке</a>
                        и следуйте инструкциям. Если вкратце, то
                        нужно нажать кнопку "Get bridges", затем "Just give me bridges!", ввести каптчу,
                        скопировать
                        полученные данные, затем нажать на луковицу слева вверху браузера и выбрать "Tor Network
                        Settings",
                        после чего поставить галочку "My Internet Service Provider (ISP) blocks connections to
                        the
                        Tor
                        network" и "Enter custom bridges" и ввести полученную ранее информацию о мостах, нажать
                        "OK".
                        Готово.
                    </div>
                    <div> Таким образом, вход в TOR будет осуществляться через приватные мосты и заблокировать
                        Вам
                        доступ
                        будет сложнее.
                    </div>
                    <br>
                    <div> Примечание: Браузер устроен таким образом, что будет работать из коробки, без
                        дополнительного
                        вмешательства, однако если у вас в процессе серфинга в интернете сильно упадет скорость,
                        вы
                        всегда
                        можете сменить сервер к которому подключены.
                    </div>
                    <div> Для этого нажмите на луковицу слева от адресной строки и выберите пункт меню "Новая
                        цепочка
                        тор".
                        <a href="../mur48.biz_files/vI3n77S.png" target="_blank"><img
                                src="../mur48.biz_files/vI3n77S.png"></a>
                    </div>
                    <div> Через несколько секунд вы автоматически смените сервер (помогает когда долго не хочет
                        открываться
                        какой либо сайт)
                    </div>
                    <div> Так же, очень частая проблема, когда у вас на сайте не работают какие-нибудь кнопки,
                        формы,
                        проверка заказа, выпадающие меню и прочие элементы взаимосвязанные с работой магазина,
                        чтобы
                        исправить эту проблему необходимо включить скрипты, для этого справа от адресной строки
                        нажимаете на
                        перечеркнутый значок буквы S <a href="../mur48.biz_files/gqyNy9d.png" target="_blank"><img
                                src="../mur48.biz_files/gqyNy9d.png"></a>
                        и в выпадающем меню выберите "Разрешить
                        скрипты
                        глобально".
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;sp4&#39;)">4. <p>Расширения для Ваших браузеров.
                        (нажмите)</p>
                </div>
                <div id="sp4">
                    <div> Если Вы не хотите устанавливать вышеуказанные браузеры, по каким-либо причинам, хотя
                        мы
                        советуем
                        все же их, то Вы можете воспользоваться расширением для Ваших браузеров.
                    </div>
                    <div> Под каждый браузер есть расширение (дополнение), которое можно скачать в 2 клика,
                        установить,
                        перезапустить браузер и обход начнет работать. Ниже будут представлены все нужные Вам
                        дополнения
                        под
                        Chrome, Opera, Firefox.
                    </div>
                    <br>
                    <div> 1. Расширения для Google Chrome:</div>
                    <div> Расширение anonymoX
                        <a href="https://chrome.google.com/webstore/detail/anonymox/icpklikeghomkemdellmmkoifgfbakio"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение Browsec
                        <a href="https://chrome.google.com/webstore/detail/browsec-vpn-free-and-unli/omghfjlpggmjjaagoclmmobgdodcjboh"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение fri-Gate
                        <a href="https://chrome.google.com/webstore/detail/frigate-light/mdnmhbnbebabimcjggckeoibchhckemm"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение ZenMate
                        <a href="https://chrome.google.com/webstore/detail/zenmate-vpn-best-cyber-se/fdcgdnkidjaadafnichfpabhfomcebme"
                            target="_blank">здесь</a>
                    </div>
                    <div> Дополнительное расширение fri-Gate для продвинутых пользователей
                        <a href="https://chrome.google.com/webstore/detail/proxy-for-chrome/iilpibhiihokecnbdkaminemnmecjfed"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> 2. Расширения для Opera:</div>
                    <div> Расширение Browsec <a href="https://addons.opera.com/ru/extensions/details/browsec/"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение Privatix <a
                            href="https://addons.opera.com/ru/extensions/details/privatix-for-opera/"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение ZenMate <a
                            href="https://addons.opera.com/ru/extensions/details/zenmate-for-operatm/"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> 3. Расширения для Firefox:</div>
                    <div> Расширение anonymoX <a href="https://addons.mozilla.org/ru/firefox/addon/anonymox/"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение fri-Gate <a href="https://addons.mozilla.org/ru/firefox/addon/frigate/"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение Pricatix <a href="https://addons.mozilla.org/ru/firefox/addon/privatix/"
                            target="_blank">здесь</a>
                    </div>
                    <div> Расширение ZenMate <a
                            href="https://addons.mozilla.org/ru/firefox/addon/zenmate-security-privacy-vpn/"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> Для того, чтобы обход заработал, достаточно просто перейти по ссылки нужного Вам
                        расширения
                        для
                        Вашего браузера и установить его (просто скачать и разрешить установку).
                    </div>
                    <div> После чего, браузер перезагрузится и обход начнет работать. В некоторых расширениях
                        нужно
                        будет в
                        браузере найти иконку расширения, которое Вы установили (иконка появится после
                        установки) и
                        включить
                        обход, выбрав страну и перенести ползунок на положение "ON".
                    </div>
                    <div> Обход реализуется очень легко и даже новичок разберется с этим решением.</div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;sp5&#39;)">5. <p>"Анонимайзер" - это сайт, выступающий в
                        качестве
                        прокладки, которая помогает обойти блокировку. (нажмите)</p>
                </div>
                <div id="sp5">
                    <div> Вам достаточно просто зайти на такой сайт и ввести нужный адрес магазина, после чего,
                        Вы с
                        легкостью попадете на нужный Вам сайт.
                    </div>
                    <div> Самые распространенные и работающие анонимайзеры, будут представлены ниже:</div>
                    <div> 1. Анонимайзер HideMe <a href="https://hide.me/ru/proxy" target="_blank">здесь</a>
                    </div>
                    <div> 2. Анонимайзер "HideMyAss" <a href="https://www.hidemyass-freeproxy.com/proxy"
                            target="_blank">здесь</a></div>
                    <div> 3. Анонимайзер "FilterBypass" <a href="https://www.filterbypass.me/" target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> Время от времени, анонимайзеры перестают работать или лагают, посему рекомендуем
                        все-таки
                        использовать браузеры или расширения, они более стабильные.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;sp6&#39;)">6. <p>VPN. Самый стабильный способ. Работает
                        на
                        всех
                        устройствах.
                        Но способ требует больше знаний для настройки. (нажмите)</p>
                </div>
                <div id="sp6">
                    <div> Простыми словами, VPN - это отдельная программа, которую нужно скачать и настроить,
                        после
                        чего,
                        все Ваши действия в сети будут производиться из других стран, следовательно и обход
                        будет
                        работать.
                    </div>
                    <div> В данной статье, мы будем рассматривать удобные и более легкие в настройки VPN. В
                        большинстве
                        случаев, VPN - платный, но есть и бесплатные, поискать их можно в поисковиках. Ниже мы
                        предоставим
                        только платные VPN со своими приложениями, для Вашего удобства.
                    </div>
                    <div> Советуем использовать сервера с двойным шифрованием, Double VPN, так как их намного
                        трудней
                        заблокировать и они более стабильные.
                    </div>
                    <br>
                    <div> 1. ZenMate <a href="https://zenmate.com/" target="_blank">здесь</a></div>
                    <br>
                    <div> Это неважно, какое устройство вы используете — ZenMate VPN предлагает свой сервис для
                        любого
                        клиента: Windows, macOS, Android, iOS.
                    </div>
                    <div> Для установки вам необходимо зайти на официальный сайт ZenMate <a href="https://zenmate.com/"
                            target="_blank">ссылка</a>
                        и скачать
                        приложение ZenMate под Вашу операционную систему.
                    </div>
                    <div> Дополнительные настройки не нужны.</div>
                    <br>
                    <div> Как скачать и установить VPN?</div>
                    <div> Скачайте нужный Вам клиент под Вашу операционную систему, выбрав в меню закладку
                        “СКАЧАТЬ”
                        на
                        официальном сайте Zenmate <a href="https://zenmate.com/" target="_blank">ссылка</a>
                    </div>
                    <div> Следуйте инструкциям устанавливаемого клиента, чтобы создать ваш ZenMate аккаунт.
                    </div>
                    <div> Выберите серверную локацию, которая вам интересна, и подключитесь к ZenMate VPN,
                        просто
                        нажав
                        на
                        большую круглую кнопку. Добро пожаловать в безопасный свободный интернет.
                    </div>
                    <div> Оплатить можно через QIWI, Paypal и кредитную карту.</div>
                    <br>
                    <div> 2. NordVPN <a href="https://nordvpn.com/ru/download/" target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> Мегамонстр с более чем 1600 серверами в 60 странах мира, поддержкой DoubleVPN и Onion
                        Over
                        VPN
                    </div>
                    <div> Помимо традиционных способов оплаты, таких как кредитные карты и Paypal, вы можете
                        оплатить
                        услуги
                        NordVPN анонимно с помощью биткойнов.
                    </div>
                    <div> Это лучший вариант оплаты для сохранения вашей конфиденциальности и безопасности в
                        сети
                        Интернет,
                        потому что с вашим профилем связана только сумма.
                    </div>
                    <div> На официальном сайте в разделе Download есть клиенты для Windows, Mac OS X, Android и
                        iOS.
                    </div>
                    <div> Регистрируетесь на сайте, оплачиваете, входите в аккаунт на компьютере и пользуйтесь.
                    </div>
                    <div> Оплатить можно через Bitcoin, Yandex, Webmoney, кредитную карту и множество других
                        способов.
                    </div>
                    <br>
                    <div> 3. ExpressVPN <a href="https://www.expressvpn.com/" target="_blank">здесь</a></div>
                    <br>
                    <div> Быстро и легко настраивается на компьютере, планшете и смартфоне.</div>
                    <div> Интуитивно понятный интерфейс позволяет обеспечить безопасность соединения и доступ к
                        любым
                        веб-сайтам всего одним щелчком мыши.
                    </div>
                    <div> Операционные системы - Windows, Mac, iOS, Android, маршрутизаторы и Linux</div>
                    <div> Зарегистрируйтесь и зайдите в личный кабинет, чтобы оплатить VPN. После оплаты, в
                        личном
                        кабинете
                        появится регистрационный код, который нужно будет вписать в само приложение, при первом
                        запуске.
                    </div>
                    <div> Как только Вы оплатите и впишите регистрационный код в само приложение - обход начнет
                        работать.
                        Выберите страну и подключитесь.
                    </div>
                    <div> Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
                    <div> Express VPN очень прост в работе. Вы можете настроить его всего за 10 минут.</div>
                    <br>
                    <div> 4. IpVanish
                        <a href="https://www.ipvanish.com/?a_bid=48f95966&amp;a_aid=553f200173723&amp;data1=cor839174_VM&amp;data2=D201711180905_o"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div> Работает и настраивается по такому же принципу, как и вышеназванные VPN-сервисы. Вам
                        достаточно
                        зайти сам сайт VPN, зарегистрироваться, перейти по ссылке из письма, оплатить и скачать
                        приложение.
                    </div>
                    <div> При входе в приложение, Вас попросят указать логин и пароль, который Вы указывали на
                        сайте,
                        авторизуйтесь и выберите нужную локацию, после чего, обход готов.
                    </div>
                    <div> Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
                    <br>
                    <div> 5. Другие VPN сервисы.</div>
                    <div> В интернете существует огромное количество различных VPN сервисов, как платных, так и
                        бесплатных.
                        Найти их можно в Google <a href="https://google.com/" target="_blank">здесь</a>
                    </div>
                    <div> Сами сервисы VPN имеют мануалы по настройке на своих веб-сайтах, в которых разберется
                        даже
                        новичок.
                    </div>
                </div>

                <div> Самое простое и легкое решение - это <a href="https://epicbrowser.com/" target="_blank">Epic
                        Browser</a>, <a href="https://www.opera.com/ru">Opera</a> и <a
                        href="https://www.torproject.org/download/download-easy.html.en" target="_blank">TOR
                        Browser</a>.
                    Данные решения
                    работают на
                    всех операционных системах. На данный момент мы советуем их. С помощью них, даже новичок в
                    два
                    клика
                    сможет обойти блокировку.
                </div>
                <div> Кроме того, исходя из Вашей операционной системы, мы советуем еще скачать несколько
                    резервных
                    вариантов, чтобы в случае форс-мажоров с браузерами, Вы всегда смогли зайти в магазин через
                    другой
                    обход.
                </div>
                <div> Поэтому, мы так же советуем установить дополнительные расширения для Ваших браузеров, это
                    легко,
                    быстро и удобно.
                </div>
                <div>Кроме этого, советуем сохранить данный мануал на компьютер или телефон, чтобы Вы всегда
                    имели
                    доступ к данной информации и с легкостью могли обойти блокировки.
                </div>
                <div>Бывают случаи, что какой-то из способов перестает работать, а другой способ продолжает
                    работать,
                    поэтому обязательно сохраните и запомните данную информацию. Спасибо за внимание!
                </div>

            </div>

            <!-- Телефоны -->

            <div class="on-mobile" id="block-mobile">
                <div>Дорогой клиент! Обязательно ознакомься с информацией ниже, иначе <span class="danger">ты
                        рискуешь потерять доступ к магазину.</span>
                </div>

                <br><br>

                <div> Уважаемый клиент, в любой момент, доступ к магазину на территории РФ, может быть ограничен
                    властями. В связи с этим, информируем Вас о том, как можно легко в 2 клика обойти блокировку
                    и
                    без
                    проблем совершать покупки.
                </div>
                <br>
                <div> Обязательно ознакомьтесь с информацией, написанной ниже, чтобы не потерять доступ к
                    магазину.
                    <br>
                    <span style="color:yellow">Внимание! Так же советуем добавить к себе Telegram-бота для обхода
                        блокировок: <a style="border-bottom: 1px dotted yellow;" href="https://t.me/zapretoffbot"
                            target="_blank">нажмите сюда.</a></span>
                </div>
                <br>
                <div> Ниже будут указаны самые простые, быстрые и удобные методы обхода блокировки <span
                        style="color:red">на мобильном устройстве</span>.
                    Выберите нужный пункт и нажмите на него!
                </div>
                <br>
                <br>
                <div class="m-spoiler" onclick="toggle(&#39;msp1&#39;)">1. <p>Браузер Puffin, он с
                        легкостью поможет Вам обойти блокировку. Работает как на Android, так и на iOS.
                        (нажмите)</p>
                </div>
                <div id="msp1">
                    <div>Скачать для Android - <a
                            href="https://play.google.com/store/apps/details?id=com.cloudmosa.puffinFree&amp;hl=ru"
                            target="_blank">здесь</a></div>
                    <div>Скачать для iOS - <a href="https://itunes.apple.com/ru/app/puffin-web-browser/id472937654?mt=8"
                            target="_blank">здесь</a></div>
                    <br>
                    <div>Для обхода блокировки достаточно просто скачать браузер, запустить его и ввести нужный
                        сайт
                        магазина.
                    </div>
                    <div>Так же, для удобства, Вы можете добавить нужный магазин в закладке и в 2 клика
                        совершать
                        покупки. Это самое быстрое и стабильное решение. Мы советуем его!
                    </div>
                    <div>Очень простое решение, нужно просто скачать и запустить браузер! Подойдет для новичков.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp2&#39;)">2. <p>Приложение Opera VPN. Простое
                        приложение,
                        которое
                        поможет Вам обойти блокировку в 2 клика. Работает как на Android, так и на iOS.
                        (нажмите)</p>
                </div>
                <div id="msp2">
                    <div>Скачать для Android можно - <a
                            href="https://play.google.com/store/apps/details?id=com.opera.vpn&amp;hl=ru"
                            target="_blank">здесь</a>,
                        либо для iOS - <a href="https://itunes.apple.com/ru/app/opera-vpn/id1080756781?mt=8"
                            target="_blank">здесь</a></div>
                    <div>После скачивания, когда всплывёт окошко «Запрос подключения» нужно нажать ОК,
                        <a href="../mur48.biz_files/a22bdJB.png" target="_blank"><img
                                src="../mur48.biz_files/a22bdJB.png"></a>
                        подтверждая разрешение программе использовать VPN, после чего кликнуть на
                        кнопку «Подключиться» <a href="../mur48.biz_files/GAzG5Tm.png" target="_blank"><img
                                src="../mur48.biz_files/GAzG5Tm.png"></a>
                    </div>
                    <div>Таким образом, программа автоматически подключилась к ближайшему доступному серверу.
                    </div>
                    <div>После чего, Вы увидите в верхнем меню телефона значок VPN, который символизирует то,
                        что
                        Ваш
                        браузер готов к обходу блокировок. <a href="../mur48.biz_files/prShwas.png" target="_blank"><img
                                src="../mur48.biz_files/prShwas.png"></a>
                    </div>
                    <div>Теперь Вы можете с любого мобильного, удобного для Вас браузера заходить на сайт
                        магазина и
                        совершать покупки.
                    </div>
                    <div>Для iOS процедура точно такая же.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp3&#39;)">3. <p>Браузер Opera Mini. Работает только на
                        Android.
                        Очень
                        быстрое и легкое решение для обхода блокировки. (нажмите)</p>
                </div>
                <div id="msp3">
                    <div>Скачать для Android можно -
                        <a href="https://play.google.com/store/apps/details?id=com.opera.mini.native&amp;hl=ru"
                            target="_blank">здесь</a>
                    </div>
                    <div>После того, как Вы скачали и установили приложение нужно просто включить функцию
                        "Экономия
                        трафика". Для этого нужно:
                    </div>
                    <div>1. Запускаем Opera Mini</div>
                    <div>2. Справа от адресной строки нажимаем на логотип Opera <a href="../mur48.biz_files/VeJRLxP.png"
                            target="_blank"><img src="../mur48.biz_files/VeJRLxP.png"></a>
                    </div>
                    <div>3. В выпадающем меню нажимаете на "Экономия трафика" <a href="../mur48.biz_files/iWnRzyz.png"
                            target="_blank"><img src="../mur48.biz_files/iWnRzyz.png"></a>
                    </div>
                    <div>4. Выберите режим "автоматический" <a href="../mur48.biz_files/lziVsRA.png"
                            target="_blank"><img src="../mur48.biz_files/lziVsRA.png"></a>
                    </div>
                    <div>5. Обход готов. Наслаждайтесь жизнью <a href="../mur48.biz_files/J7Am984.png"
                            target="_blank"><img src="../mur48.biz_files/J7Am984.png"></a>
                    </div>
                    <br>
                    <div>В приложении Opera всё делается по аналогии с версией Opera Mini. Работает так же,
                        только
                        на
                        Android.
                    </div>
                    <div>Скачать Opera можно -
                        <a href="https://play.google.com/store/apps/dev?id=6928237143520558692&amp;hl=ru"
                            target="_blank">здесь</a>
                    </div>
                    <div>1. В выпадающем меню (только уже слева от адресной строки) выбираем пункт "Настройки"
                        <a href="../mur48.biz_files/Gs4Tx0r.png" target="_blank"><img
                                src="../mur48.biz_files/Gs4Tx0r.png"></a>
                    </div>
                    <div>2. Переходим в подменю "Экономия трафика" <a href="../mur48.biz_files/DNyFIlx.png"
                            target="_blank"><img src="../mur48.biz_files/DNyFIlx.png"></a>
                    </div>
                    <div>3. Активируем и наслаждаемся жизнью <a href="../mur48.biz_files/Lo1mDrD.png"
                            target="_blank"><img src="../mur48.biz_files/Lo1mDrD.png"></a>
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp4&#39;)">4. <p>Браузер Google Chrome с включенной
                        функцией
                        "Экономия
                        трафика". Работает так же, только на Android. (нажмите)</p>
                </div>
                <div id="msp4">
                    <div>Скачать Google Chrome можно -
                        <a href="https://play.google.com/store/apps/details?id=com.android.chrome&amp;hl=ru&amp;gl=ru"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div>Для того чтобы обойти блокировку в приложении Google Chrome на Android нужно:</div>
                    <br>
                    <div>1. Справа от адресной строки нажимаем на значок "три точки"</div>
                    <div>2. В выпадающем окне, нажимаем "Настройки" <a href="../mur48.biz_files/3xldI46.png"
                            target="_blank"><img src="../mur48.biz_files/3xldI46.png"></a>
                    </div>
                    <div>3. Переходим в меню "Экономия трафика" <a href="../mur48.biz_files/3xldI46.png"
                            target="_blank"><img src="../mur48.biz_files/6BtT3KF.png"></a>
                    </div>
                    <div>4. Активируем функцию переключением ползунка <a href="../mur48.biz_files/3dWcHYP.png"
                            target="_blank"><img src="../mur48.biz_files/3dWcHYP.png"></a>
                    </div>
                    <div>5. Обход готов. Наслаждаетесь жизнью <a href="../mur48.biz_files/KV1wdb9.png"
                            target="_blank"><img src="../mur48.biz_files/KV1wdb9.png"></a>
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp5&#39;)">5. <p>Приложение Orbot + Браузер Orfox.
                        Аналог
                        TOR
                        браузера, только для Android. (нажмите)</p>
                </div>
                <div id="msp5">
                    <div>Скачать Orbot можно -
                        <a href="https://play.google.com/store/apps/details?id=org.torproject.android&amp;hl=ru"
                            target="_blank">здесь</a>
                    </div>
                    <div>Данный способ более тяжелый и требует больше знаний для настройки. Тут необходимо
                        установить
                        два приложения, они должны работать одновременно.
                    </div>
                    <div>Изначально, Вы устанавливаете Orbot и запускаете его, выбираете язык и разрешаете
                        установку,
                        затем нажатием на луковицу подключаетесь к сети TOR. Луковица должна быть зеленая.
                    </div>
                    <div>Затем, Вам нужно скачать браузер Orfox -
                        <a href="https://play.google.com/store/apps/details?id=info.guardianproject.orfox&amp;hl=ru&amp;gl=ru"
                            target="_blank">здесь</a>
                    </div>
                    <div>Скачайте и запустите Orfox. Как только загрузка прошла, Вам необходимо перейти на
                        <a href="https://whoer.net/ru" target="_blank">сайт</a> и Вы увидите IP-адрес,
                        если он отличается от русского - значит все хорошо -
                        обход готов.
                    </div>
                    <br>
                    <div>В дальнейшем работать через Orbot нужно так:</div>
                    <div>В начале запускаем Orbot, нажимаем кнопку включения и ждем пока Orbot подключится к
                        сети
                        Tor.
                    </div>
                    <div>После подключения к Tor можно запустить и использовать Orfox.
                    </div>
                    <br>
                    <div>
                        Кроме того, обязательно не забудьте зайти в настройки всех этих приложений и найти
                        вкладку
                        "Bridges &amp; Network Connection", затем в открывшемся окне, установите "Provide Bridges:
                        meek-amazon" вместо стандартного "Provide Bridges: obfs4".
                        Делается это для того, чтобы в будущем обойти все блокировки. Обязательно сделайте
                        данную
                        настройку, если в Вашей версии приложения она есть (ее может не быть)
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp6&#39;)">6. <p>Браузер Onion Browser. Легкое решение
                        только
                        для
                        владельцев iOS. (нажмите)</p>
                </div>
                <div id="msp6">
                    <div>Скачать Onion Browser можно -
                        <a href="https://itunes.apple.com/ru/app/onion-browser/id519296448?mt=8"
                            target="_blank">здесь</a>
                    </div>
                    <div>Для обхода блокировки, достаточно просто установить, запустить браузер и нажать
                        "Connect to
                        TOR
                        network".
                    </div>
                    <div>Первый запуск может быть долгий, нужно будет чуть-чуть подождать. После ожидания,
                        браузер
                        запуститься и будет готов к работе.
                    </div>
                    <br>
                    <div>Кроме того, по аналогии только для iOS работают следующие браузеры:</div>
                    <br>
                    <div>1. Red Onion browser
                        <a href="https://itunes.apple.com/us/app/red-onion-tor-powered-web-browser-for-anonymous-browsing/id829739720?mt=8"
                            target="_blank">здесь</a>
                    </div>
                    <div>2. Tornado browser <a
                            href="https://itunes.apple.com/ru/app/tornado-browser-tor/id1128115924?mt=8"
                            target="_blank">здесь</a>
                    </div>
                    <div>3. Большое количество TOR браузеров из App store. Достаточно просто зайти в App store с
                        Вашего
                        телефона и в поиске написать TOR. Найдется еще несколько браузеров, которые можно
                        использовать.
                        Если что-то случится с вышенаписанными браузерами - то Вы сможете использовать эти.
                    </div>
                    <br>
                    <div>Кроме того, обязательно не забудьте зайти в настройки всех этих браузеров и найти
                        вкладку
                        "Bridges &amp; Network Connection", затем в открывшемся окне, установите "Provide Bridges:
                        meek-amazon" вместо стандартного "Provide Bridges: obfs4".
                        Делается это для того, чтобы в будущем обойти все блокировки. Обязательно сделайте
                        данную
                        настройку!
                    </div>
                    <br>
                    <div>А так же есть и другие бесплатные методы обхода, например "Анонимайзер".
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp7&#39;)">7. <p>"Анонимайзер" - это сайт, выступающий
                        в
                        качестве
                        прокладки, которая помогает обойти блокировку. (нажмите)</p>
                </div>
                <div id="msp7">
                    <div>Вам достаточно просто зайти на такой сайт и ввести нужный адрес магазина, после чего,
                        Вы с
                        легкостью попадете на нужный Вам сайт.
                    </div>
                    <br>
                    <div>Самые распространенные и работающие анонимайзеры, будут представлены ниже:</div>
                    <br>
                    <div> 1. Анонимайзер HideMe <a href="https://hide.me/ru/proxy" target="_blank">здесь</a>
                    </div>
                    <div> 2. Анонимайзер "HideMyAss" <a href="https://www.hidemyass-freeproxy.com/proxy"
                            target="_blank">здесь</a></div>
                    <div> 3. Анонимайзер "FilterBypass" <a href="https://www.filterbypass.me/" target="_blank">здесь</a>
                    </div>
                    <br>
                    <div>Время от времени, анонимайзеры перестают работать или лагают, посему рекомендуем
                        все-таки
                        использовать браузеры, они более стабильные.
                    </div>
                </div>

                <div class="m-spoiler" onclick="toggle(&#39;msp8&#39;)">8. <p>VPN. Самый стабильный способ. Работает
                        на
                        всех
                        устройствах. Но способ требует больше знаний для настройки. (нажмите)</p>
                </div>
                <div id="msp8">
                    <div>Простыми словами, VPN - это отдельная программа, которую нужно скачать и настроить,
                        после
                        чего,
                        все Ваши действия в сети будут производиться из других стран, следовательно и обход
                        будет
                        работать.
                    </div>
                    <div>В данной статье, мы будем рассматривать удобные и более легкие в настройки VPN. В
                        большинстве
                        случаев, VPN - платный, но есть и бесплатные, поискать их можно в Google Play или App
                        store.
                        Ниже мы предоставим только платные VPN со своими приложениями, для Вашего удобства.
                    </div>
                    <div>Советуем использовать сервера с двойным шифрованием, Double VPN, так как их намного
                        трудней
                        заблокировать и они более стабильные.
                    </div>
                    <br>
                    <br>
                    <div>1. ZenMate <a href="https://zenmate.com/" target="_blank">здесь</a></div>
                    <br>
                    <div>Это неважно, какое устройство вы используете — ZenMate VPN предлагает свой сервис для
                        любого
                        клиента: Windows, macOS, Android, iOS.
                    </div>
                    <div>Для мобильного клиента вам необходимо зайти App Store или Google Play и скачать
                        приложение
                        ZenMate для соответствующего устройства.
                    </div>
                    <div>Дополнительные настройки не нужны.</div>
                    <br>
                    <div>Как скачать и установить VPN?</div>
                    <div>Скачайте нужный Вам клиент под Вашу операционную систему, выбрав в меню закладку
                        “СКАЧАТЬ”
                        на
                        официальном сайте Zenmate <a href="https://zenmate.com/" target="_blank">здесь</a>
                    </div>
                    <div>Следуйте инструкциям устанавливаемого клиента, чтобы создать ваш ZenMate аккаунт.</div>
                    <div>Выберите серверную локацию, которая вам интересна, и подключитесь к ZenMate VPN, просто
                        нажав
                        на большую круглую кнопку. Добро пожаловать в безопасный свободный интернет.
                    </div>
                    <div>Оплатить можно через QIWI, Paypal и кретитную карту.</div>
                    <br>
                    <br>
                    <div>2. NordVPN <a href="https://nordvpn.com/ru/download/" target="_blank">здесь</a>
                    </div>
                    <br>
                    <div>Мегамонстр с более чем 1600 серверами в 60 странах мира, поддержкой DoubleVPN и Onion
                        Over
                        VPN
                    </div>
                    <div>Помимо традиционных способов оплаты, таких как кредитные карты и Paypal, вы можете
                        оплатить
                        услуги NordVPN анонимно с помощью биткойнов.
                    </div>
                    <div>Это лучший вариант оплаты для сохранения вашей конфиденциальности и безопасности в сети
                        Интернет, потому что с вашим профилем связана только сумма.
                    </div>
                    <div>На официальном сайте в разделе Download есть клиенты для Windows, Mac OS X, Android и
                        iOS.
                    </div>
                    <div>Регистрируетесь на сайте, оплачиваете, входите в аккаунт на устройстве и пользуйтесь.
                    </div>
                    <div>Оплатить можно через Bitcoin, Yandex, Webmoney, кредитную карту и множество других
                        способов.
                    </div>
                    <br>
                    <br>
                    <div>3. ExpressVPN <a href="https://www.expressvpn.com/" target="_blank">здесь</a></div>
                    <br>
                    <div>Быстро и легко настраивается на компьютере, планшете и смартфоне.</div>
                    <div>Интуитивно понятный интерфейс позволяет обеспечить безопасность соединения и доступ к
                        любым
                        веб-сайтам всего одним щелчком мыши.
                    </div>
                    <div>Операционные системы - Windows, Mac, iOS, Android, маршрутизаторы и Linux</div>
                    <div>Зарегистрируйтесь и зайдите в личный кабинет, чтобы оплатить VPN. После оплаты, в
                        личном
                        кабинете появится регистрационный код, который нужно будет вписать в само приложение,
                        при
                        первом
                        запуске.
                    </div>
                    <div>Как только Вы оплатите и впишите регистрационный код в само приложение - обход начнет
                        работать.
                        Выберите страну и подключитесь.
                    </div>
                    <div>Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
                    <div>Express VPN очень прост в работе. Вы можете настроить его всего за 10 минут.</div>
                    <br>
                    <br>
                    <div>4. IpVanish
                        <a href="https://www.ipvanish.com/?a_bid=48f95966&amp;a_aid=553f200173723&amp;data1=cor839174_VM&amp;data2=D201711180905_o"
                            target="_blank">здесь</a>
                    </div>
                    <br>
                    <div>Работает и настраивается по такому же принципу, как и вышеназванные VPN-сервисы. Вам
                        достаточно
                        зайти сам сайт VPN, зарегистрироваться, перейти по ссылке из письма, оплатить и скачать
                        приложение.
                    </div>
                    <div>При входе в приложение, Вас попросят указать логин и пароль, который Вы указывали на
                        сайте,
                        авторизуйтесь и выберите нужную локацию, после чего, обход готов.
                    </div>
                    <div>Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
                    <br>
                    <div>5. Различные VPN сервисы в Google Play и App store.</div>
                    <div>Настройка интуитивно понятна и происходит в 2 клика.</div>
                </div>

                <div>Самое простое и легкое решение - это браузер <a href="https://www.puffinbrowser.com/"
                        target="_blank">Puffin</a>. Он работает и
                    на
                    Android и на iOS. На
                    данный момент мы советуем его. С помощью него, даже новичок в два клика сможет обойти
                    блокировку.
                </div>
                <div>Кроме того, исходя из Вашей операционной системы - Android или iOS. Мы советуем еще скачать
                    несколько резервных вариантов, чтобы в случае форс-мажоров с Puffin, Вы всегда смогли зайти
                    в
                    магазин через другой браузер.
                </div>
                <div>Для Android - запишите и скачайте все варианты обхода. Пункты 2, 3, 4, 5, 7, 8.</div>
                <div>Под iOS - запишите и скачайте все варианты обхода - это пункты 2, 6, 7, 8.</div>
                <div>Так же, советуем сохранить данный мануал на компьютер или телефон, чтобы Вы всегда имели
                    доступ
                    к данной информации и с легкостью могли обойти блокировки.
                </div>
                <div>Бывают случаи, что какой-то из способов перестает работать, а другой способ продолжает
                    работать, поэтому обязательно сохраните и запомните данную информацию. Спасибо за внимание!
                </div>
            </div>
            <br>
            <div class="btns">
                <button id="modal-success" onclick="successModalClose()">Ознакомлен</button>
                <button id="modal-close" onclick="modalClose()">Закрыть</button>


                <div class="on-desktop" id="help-desktop">
                    <a href="/buy/210#" onclick="showMobile()">Показать инструкцию для
                        телефонов</a>
                </div>
                <div class="on-mobile" id="help-mobile">
                    <a href="/buy/210#" onclick="showDesktop()">Показать инструкцию для
                        компьютеров</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../mur48.biz_files/popup.js"></script>
<link rel="stylesheet" type="text/css" href="../mur48.biz_files/popup.css">
<script type="text/javascript">
    /*<![CDATA[*/
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "/counter?_=" + Math.random();
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }

    })(document, window);
    /*]]>*/

</script>

<div id="IKLAD_CONTAINER_5357">
    <div>
        <!-- define styles here -->
        <style type="text/css">
            #IKLAD_STATUS_CONTAINER_5357 {}

            #IKLAD_STATUS_IMG_5357 {
                vertical-align: bottom;
            }

        </style>

        <div style="position: fixed; right: 0px; bottom: 0px; margin-right: 10px; margin-bottom: 0px; z-index: 2100000000; opacity: 1;"
            id="IKLAD_STATUS_CONTAINER_5357" class="IKLAD_STATUS_CONTAINER_5357"><a
                href="javascript: IKLAD_TEMPLATE_5357.open_chat_window()"><img id="IKLAD_STATUS_IMG_5357"
                    src="../mur48.biz_files/awBHQPA.png" border="0"></a></div>
    </div>
    <script type="text/javascript" charset="utf-8" src="../mur48.biz_files/outchat_cmd.cgi"></script>
</div>
<div>
    <!-- template design by:  zak.in.ua//at//gmail.com -->
    <style type="text/css" id="IKLAD_CSS_5357">
        #IKLAD_FLOAT_FORM_DIV_5357,
        #IKLAD_FLOAT_FORM_DIV_5357 *,
        #IKLAD_OPINION_BOX_5357,
        #IKLAD_OPINION_BOX_5357 * {
            padding: 0;
            margin: 0;
            border-spacing: 0;
            border-collapse: collapse;
            border: 0 none;
            font-size: 11px;
            line-height: normal !important;
            vertical-align: top;
            text-align: left;
            text-indent: 0;
            text-decoration: none;
            outline: none;
            width: auto;
            min-width: 0;
            max-width: none;
            height: auto;
            min-height: 0;
            max-height: none;
            background: none;
            box-sizing: border-box;
            text-shadow: none;

            font-family: Tahoma;
            color: black;
        }

        #IKLAD_FLOAT_FORM_DIV_5357 img {
            display: inline;
        }

        #IKLAD_TEXTAREA_5357,
        #IKLAD_SEND_BTN_CONTAINER_5357 {
            background: -moz-linear-gradient(top, rgba(234, 241, 247, 1) 0%, rgba(234, 241, 247, 0) 22%);
            /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(234, 241, 247, 1)), color-stop(22%, rgba(234, 241, 247, 0)));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgba(234, 241, 247, 1) 0%, rgba(234, 241, 247, 0) 22%);
            /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgba(234, 241, 247, 1) 0%, rgba(234, 241, 247, 0) 22%);
            /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgba(234, 241, 247, 1) 0%, rgba(234, 241, 247, 0) 22%);
            /* IE10+ */
            background: linear-gradient(to bottom, rgba(234, 241, 247, 1) 0%, rgba(234, 241, 247, 0) 22%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eaf1f7', endColorstr='#00eaf1f7', GradientType=0);
            /* IE6-9 */
        }

        #IKLAD_TEXTAREA_5357 {
            resize: none;
            overflow: auto;
            width: 100% !important;
            height: 100% !important;
            border: 0;
            padding: 3px 0 0 4px !important;
            outline: 0;
            font-size: 11px !important;
            box-shadow: none !important;
            font-weight: normal;
            box-sizing: border-box;
        }


        #MODAL_FORM_LAYER_5357,
        #LOADING_LAYER_5357,
        #ONLINE_LAYER_5357 {
            background-color: white;
        }


        #CHAT_FORM_TITLE_5357,
        #FORM_5357 .FORM_HEADER_5357 h1 {
            padding: 4px 2px;
            font-weight: bold;
            font-size: 14px;
            color: #666666;
        }

        #FORM_5357 .FORM_TITLE_5357 h3 {
            padding: 4px;
            color: #7a7a7a;
            text-align: left;
            min-height: 50px;
            font-weight: normal;
        }

        #FORM_5357 .FORM_FIELD_TITLE_5357>td {
            color: black;
            padding: 3px 4px;
        }

        #FORM_5357 .FORM_FIELD_5357>td {
            padding: 2px 0;
        }

        #FORM_5357 .FORM_FIELD_5357 input,
        #FORM_5357 .FORM_FIELD_5357 select {
            resize: none;
            border: 1px solid #c6d6e8;
            outline: 0;
            width: 100%;
            font-size: 11px !important;
            padding-left: 4px !important;
            box-shadow: none !important;
            font-weight: normal !important;
            background: white;
            height: 23px !important;
        }

        #FORM_5357 .FORM_FIELD_5357 input.FORM_INPUT_ERROR_5357 {
            background: #EBF1F8;
        }


        #FORM_5357 .FORM_FIELD_5357 textarea {
            resize: none;
            overflow: auto;
            width: 100% !important;
            height: 100% !important;
            border: 0;
            padding: 3px 0 0 4px !important;
            outline: 0;
            font-size: 11px !important;
            box-shadow: none !important;
            font-weight: normal;
            background: white;
            border: 1px solid #EBF1F8;
            box-sizing: border-box;
        }

        #FORM_5357 .FORM_FIELD_5357 textarea.FORM_INPUT_ERROR_5357 {
            background: #EBF1F8;
        }



        #FORM_5357 .FORM_BUTTON_CONTAINER_5357>td {
            padding: 2px 0 4px 0;
            text-align: center;
        }

        #FORM_5357 .FORM_BUTTON_CONTAINER_5357 button {
            color: black;
            border: 1px solid #f1f1f1;
            text-decoration: none;
            font-weight: bold;
            font-size: 12px;
            cursor: pointer;
            height: 23px !important;
            outline: none;
            padding: 0 4px;
            margin: 0 2px;
            background: #ebf1f8 none repeat scroll 0 0;
        }

        #FORM_5357 .FORM_BUTTON_CONTAINER_5357 button.FORM_BUTTON_DISABLED_5357 {
            color: gray;
        }




        #IKLAD_HEADER_TD_5357 {
            background: -moz-linear-gradient(top, rgba(216, 228, 240, 0) 90%, rgba(216, 228, 240, 1) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(78%, rgba(216, 228, 240, 0)), color-stop(100%, rgba(216, 228, 240, 1)));
            background: -webkit-linear-gradient(top, rgba(216, 228, 240, 0) 90%, rgba(216, 228, 240, 1) 100%);
            background: -o-linear-gradient(top, rgba(216, 228, 240, 0) 90%, rgba(216, 228, 240, 1) 100%);
            background: -ms-linear-gradient(top, rgba(216, 228, 240, 0) 90%, rgba(216, 228, 240, 1) 100%);
            background: linear-gradient(to bottom, rgba(216, 228, 240, 0) 90%, rgba(216, 228, 240, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00d8e4f0', endColorstr='#d8e4f0', GradientType=0);
        }

    </style>





    <table
        style="width:310px; display:none; background: #ebf1f8; border: 1px solid #b9b9b9; border-radius: 6px; z-index:2100000010;    position: fixed; right:0; bottom:0;  margin-right:5px; margin-bottom:0px;      "
        id="IKLAD_FLOAT_FORM_DIV_5357" valign="top">
        <tbody>
            <tr>
                <td style="height:360px;" id="IKLAD_SET_HEIGHT_TD_5357">

                    <table style="height:100%; width:100%;">
                        <tbody>
                            <tr style="height: 70px;">
                                <td style=" border-bottom: 1px solid #c6d6e8;" id="IKLAD_HEADER_TD_5357">
                                    <table style="width:100%; height: 100%;">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" align="center" valign="middle"
                                                    style="height: 7px; text-align: center;">
                                                    <img id="IKLAD_HEADER_IMG_5357" style="padding-top: 3px;"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAFCAYAAAApBZ42AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACVJREFUeNpi/A8EDIMQsOzatWswuouBcZAGGAMLEI9GJSkAIMAA9TQMYwk+AtgAAAAASUVORK5CYII=">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width:50px; padding: 0 5px 0 5px;" align="center"
                                                    valign="middle">
                                                    <!--template must define [VAR_OPERATOR_PHOTO_MAX_LONGEST_SIDE] variable to automatically resize photo-->

                                                    <img style="" src="../mur48.biz_files/def_photo.png"
                                                        id="IKLAD_OPERATOR_PHOTO_5357">
                                                </td>

                                                <td style="width:100%; " valign="top">
                                                    <table style="height:100%; width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding: 6px 0 0 5px; font-size: 14px;"
                                                                    align="left" valign="top">
                                                                    <table style="padding-top: 2px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="2"
                                                                                    style="padding-left: 1px; font-size: 14px; color:#666666;"
                                                                                    id="IKLAD_TITLE_TEXT_5357">Чат с
                                                                                    оператором</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td
                                                                                    style="width: 10px; padding-top: 3px;">
                                                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAXhJREFUeNpUkk1KA0EQhWuaCfkFTQxmlm7MFRTJIbyEd8gqi6xyB5e5yqBk40IUEYRANBBG0xqwf6p6krFrZgKmoWgYvvfqVfUE6+kU+Lyeiou6g2ELs0FdUSdFB2uBUgYUS7CT/stmRlpByPBbV9ycqGzcVVmUOgdbJAgI4ciYbt3o612VLh966ej8Sd+G7HwAE4FDBLIGyGggZeD4S0ebOo7vz7JHwTEY3no4ZdhaXyWsDaDWgEpBe7GJKvJ3GHLm/3DqizxExsOKRSoX8Ldakg7CfECf11nMBQy6A7joxNVUthOm5CBAKmN4gQfQFI5UOqMuIvrJQKwDlOxK2mcvXXORLqroqH1Z+GxspZBAcTGcAruHOMp+Dr55EWghae5iIYWdvFdxtQc5BvpVOlWIiq0hzHvBSjayieg//8yWVRwtGrSifx3yKOXW5j1YLbtidHW3mYUM8Avyo3xEu2EtcYOG3xz5EZP2TiatSvztnRnmv+JPgAEARo90fEfRwVgAAAAASUVORK5CYII="
                                                                                        id="IKLAD_OP_STATUS_IMG_5357">
                                                                                </td>
                                                                                <td valign="top" align="left"
                                                                                    style="padding-left: 5px; color: gray; font-size: 14px;"
                                                                                    id="IKLAD_OP_STATUS_TEXT_5357">
                                                                                    оффлайн</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td align="right" valign="top"
                                                                    style="width:20px; padding-right: 10px;">
                                                                    <table align="right">
                                                                        <tbody>
                                                                            <tr>

                                                                                <td style="padding: 0 3px 0 3px;"
                                                                                    id="IKLAD_OPEN_CHAT_IN_NEW_WINDOW_ICON_5357">
                                                                                    <a href="/buy/210#"
                                                                                        onclick="IKLAD_TEMPLATE_5357.open_in_new_window(); return false;"
                                                                                        title="Открыть в новом окне"><img
                                                                                            border="0"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGNJREFUeNp8jiEOwCAMRX/HFI7r4FBwbRBcB9EEW1LRZdnGnmryXvJLIgKl9y5jDDw57IgxUghhH1j0G7TWZBuoZGY455Bzhs2RPnmXpZRrRh+nWuunNM45J7z3SCm9pLIEGAAobC0//ht2BgAAAABJRU5ErkJggg=="></a>
                                                                                </td>

                                                                                <td style="padding: 0 0 0 3px;">
                                                                                    <a href="/buy/210#"
                                                                                        onclick="IKLAD_TEMPLATE_5357.close_chat_window(); return false;"
                                                                                        title="Скрыть чат"><img
                                                                                            border="0"
                                                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAHCAYAAADam2dgAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAF1JREFUeNpiZGBgUAJiQQbc4B0TkHgMxH9wKACJP2YGEv+A+C8QC2BRBDLgCxOU8wbEQVPwBSrOwIQk+ACI/0PZ/6F8MGBGUvQXSvMC8XMg/oDLJ4xQ3zIiCwIEGABRYBNSjF3hxQAAAABJRU5ErkJggg=="></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>


                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>


                            <tr style="height: 100%; display: none;" id="LOADING_LAYER_5357">
                                <td valign="top" style="padding: 0 10px;">
                                    <table style="width: 100%; height: 100%;">
                                        <tbody>
                                            <tr style="height: 100%;">
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <img
                                                        src="data:image/gif;base64,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">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr style="height:100%; display: none;" id="MODAL_FORM_LAYER_5357">
                                <td valign="top" style="height: 100%; padding: 0 8px;"
                                    id="MODAL_FORM_LAYER_CONTAINER_5357">
                                </td>
                            </tr>



                            <tr style="height: 100%;" id="ONLINE_LAYER_5357">
                                <td valign="top">
                                    <table style="height: 100%; width: 100%;">
                                        <tbody>
                                            <tr id="TOP_FORM_CONTAINER_TR" style="display: none;">
                                                <td style="padding: 2px 5px; border-bottom: 1px solid #dee1df;">
                                                    <div id="TOP_FORM_CONTAINER" style=""></div>
                                                </td>
                                            </tr>

                                            <tr style="height:100%;">
                                                <td valign="top" style="background: white;"
                                                    id="IKLAD_MSGS_IFR_PARENT_5357">
                                                    <iframe name="IKLAD_MSGS_IFR_5357" id="IKLAD_MSGS_IFR_5357"
                                                        frameborder="0" border="0" scrolling="auto" width="100%"
                                                        height="100%"
                                                        style="border:0px; padding: 0; margin: 0; overflow: auto; width: 100%; height: 100%;"
                                                        src="../mur48.biz_files/saved_resource.html"></iframe>
                                                </td>
                                            </tr>

                                            <tr id="BOTTOM_FORM_CONTAINER_TR" style="display: none;">
                                                <td style="padding: 2px 5px; border-top: 1px solid #dee1df;">
                                                    <div id="BOTTOM_FORM_CONTAINER"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>


                            <tr style="height: 40px; display: none;" id="IKLAD_TEXTAREA_ROW_CONTAINER_5357">
                                <td style="border-top: 1px solid #c6d6e8; background: white;">
                                    <table style="height: 100%; width:100%;">
                                        <tbody>
                                            <tr style="height: 100%;" id="IKLAD_TEXTAREA_ROW_5357">
                                                <td valign="top">
                                                    <textarea id="IKLAD_TEXTAREA_5357" style="color: gray;"
                                                        onfocus="IKLAD_TEMPLATE_5357.textarea_focus();"
                                                        onblur="IKLAD_TEMPLATE_5357.textarea_blur();"
                                                        onkeydown="return IKLAD_TEMPLATE_5357.textarea_onkeydown(event);"
                                                        onkeypress="IKLAD_TEMPLATE_5357.textarea_onkeypress();">Напишите ваше сообщение тут ...</textarea>
                                                </td>
                                                <td style="width: 20px; vertical-align: middle;" align="center"
                                                    valign="middle" id="IKLAD_SEND_BTN_CONTAINER_5357">
                                                    <a href="/buy/210#"
                                                        onclick="IKLAD_TEMPLATE_5357.local_send_message(); return false;"
                                                        title="Отправить сообщение"><img border="0"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAOCAYAAAD0f5bSAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJhJREFUeNrkksEKwjAQRDehwWIvxb9Q8P9/RayebNJLTQ9NTCGEkQiBKrSkZwcGloXH7MIwAJSrYdCwxhCnDbLWkNb9NijpbyDvPbKhEAKUanG/XVeTijToZ4+ukxEkIcQqxMw4QsoHTZPL/qnYlSXtq+oL4pxTXR+Wk1L3nHtByfZTlXje8XRmi1SE5o6lbJoLfvdzvwUYAECXaQXsPcoJAAAAAElFTkSuQmCC"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr style="height: 24px; ">
                                <td style="border-top: 1px solid #c6d6e8; vertical-align: middle;">

                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="padding-left: 5px; text-align: left;" valign="middle">

                                                </td>








                                                <td style="width:20px; padding-left: 5px; text-align: center;"
                                                    align="center" id="IKLAD_SOUND_ON_OFF_ICON_5357">
                                                    <a href="/buy/210#"
                                                        onclick="IKLAD_TEMPLATE_5357.local_sound_on_off(); return false;"><img
                                                            title="Звук включен" id="SOUND_ON_OFF_IMG_5357" border="0"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAYAAABr5z2BAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjM4NUZGMDMzNjE1OTExRTA4RTM3QjFCRDY5NERFNTcwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjM4NUZGMDM0NjE1OTExRTA4RTM3QjFCRDY5NERFNTcwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Mzg1RkYwMzE2MTU5MTFFMDhFMzdCMUJENjk0REU1NzAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Mzg1RkYwMzI2MTU5MTFFMDhFMzdCMUJENjk0REU1NzAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz79Pb4QAAAAUUlEQVR42mLMaFvJgAM8BWJpBvzgPxMezVIMRAAmMjT/x2cA0TbDAAu6iXhsZSTWCySBwWEAIxJ+hkMdI7EukMZjCNFeIGQIIzFhQLRLAAIMAGl/DZkJirQ5AAAAAElFTkSuQmCC"></a>
                                                </td>


                                                <td style="width:5px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="position: absolute; top: 0px; left: 0px;">
    <style type="text/css">
        div.IKLAD_RightBottom_5357 {
            background: url(https://chat.iklad-chat.biz/img/hint_template/0/rb.png) no-repeat;
        }

        div.IKLAD_RightTop_5357 {
            background: url(https://chat.iklad-chat.biz/img/hint_template/0/rt.png) no-repeat;
        }

        div.IKLAD_LeftBottom_5357 {
            background: url(https://chat.iklad-chat.biz/img/hint_template/0/lb.png) no-repeat;
        }

        div.IKLAD_LeftTop_5357 {
            background: url(https://chat.iklad-chat.biz/img/hint_template/0/lt.png) no-repeat;
        }

        div.IKLAD_HINT_BTN_5357 {
            border: 1px solid lightgray;
            color: gray;
            cursor: pointer;
            padding: 3px 5px;
            float: left;
            font-size: 12px;
        }

        #IKLAD_HINT_CONTAINER_5357 {
            border: 0;
            margin: 0;
            padding: 0;
            text-align: left;


            z-index: 2100000100;

        }

    </style>

    <div id="IKLAD_HINT_CONTAINER_5357" style="display: none; position: absolute;">
        <div style="width: 248px; height: 207px; margin: 0; padding: 0; text-align: left;">
            <div onclick="IKLAD_HINT_5357.__my_open_chat();"
                style="cursor: pointer; position: relative; width: 200px; height: 148px; overflow: auto; text-align: left; margin: 0; padding: 5px; top: 23px; left: 18px;">

                <div style="float: right; border: 1px solid lightgray; padding: 0px 3px; color: lightgray; cursor: pointer; margin-left: 1px; margin-bottom: 5px; display: none;"
                    id="IKLAD_HINT_CLOSE_BTN_X_5357" onclick="IKLAD_HINT_5357.hide(event);" title="Close">X</div>

                <span id="IKLAD_HINT_TEXT_CONTAINER_5357" style=" color: black; font-size: 14px;"></span>

                <div style="position: absolute; bottom:0; width: 190px;">
                    <table style="margin: 0 auto;">
                        <tbody>
                            <tr>
                                <td>
                                    <div style="" class="IKLAD_HINT_BTN_5357" id="IKLAD_HINT_START_CHAT_BTN_5357"
                                        onclick="IKLAD_HINT_5357.__my_open_chat();">Start chat</div>
                                    <div style="margin-left: 5px; " class="IKLAD_HINT_BTN_5357"
                                        id="IKLAD_HINT_CLOSE_BTN_5357" onclick="IKLAD_HINT_5357.hide(event);">Close
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="IKLAD_OPINION_BOX_5357" style="z-index: 2147483647; display: none;">
    <table cellpadding="0" cellspacing="0" style="margin: 0; padding: 0;">
        <tbody>
            <tr id="IKLAD_OPINION_HEADER_5357">
                <td>Оставить отзыв</td>
                <td width="10" style="padding: 0 1px 0 5px !important;" align="center"><a style="text-decoration: none;"
                        href="/buy/210#" onclick="IKLAD_TEMPLATE_5357.local_hide_opinion_dialog(); return false;"
                        title="закрыть">x</a></td>
            </tr>
            <tr>
                <td colspan="2" class="IKLAD_OPINION_LIST_5357"
                    onclick="javascript:IKLAD_TEMPLATE_5357.local_opinion_set(1,0)">Super</td>
            </tr>
            <tr>
                <td colspan="2" class="IKLAD_OPINION_LIST_5357"
                    onclick="javascript:IKLAD_TEMPLATE_5357.local_opinion_set(2,0)">Good</td>
            </tr>
            <tr>
                <td colspan="2" class="IKLAD_OPINION_LIST_5357"
                    onclick="javascript:IKLAD_TEMPLATE_5357.local_opinion_set(3,0)">Normal</td>
            </tr>
            <tr>
                <td colspan="2" class="IKLAD_OPINION_LIST_5357"
                    onclick="javascript:IKLAD_TEMPLATE_5357.local_opinion_set(4,1)">Bad</td>
            </tr>
            <tr>
                <td colspan="2" class="IKLAD_OPINION_LIST_5357"
                    onclick="javascript:IKLAD_TEMPLATE_5357.local_opinion_set(5,1)">Worst</td>
            </tr>
        </tbody>
    </table>
</div><iframe style="display:none;" src="../mur48.biz_files/iframe.html"></iframe>
@endsection
