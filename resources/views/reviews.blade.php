@extends('layouts.app') 
@section('content') 
@include('includes.userpanel') 
@include('includes.alert') 

<div class="content"> 
  @include('includes.navbar') 

  <script type="text/javascript">
    (function() {
      var chat_s = document.createElement('script');
      chat_s.type = 'text/javascript';
      chat_s.async = true;
      chat_s.src = 'https://chat.iklad-chat.biz/code.cgi?c=5357&ssl=1&rnd=' + Math.random();
      document.body.appendChild(chat_s);
    })();
  </script>
  <div class="title">Отзывы клиентов</div>
  
  <section id="universal" class="border">
    <link rel="stylesheet" type="text/css" href="../../mur48.biz_files/baloon2.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

      @media (max-width: 770px) {
        div.commentWrapperTable>div.rating-cell {
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
      <form method="get">
        <div id="commentTableWrapper">
          <section id="commentsAddButton">
            <a href="/reviews/add" class="block">Добавить отзыв</a>
          </section>
          <section id="commentsCitiesFilter">
            <select id="cityFilter" name="city" onchange='this.form.submit()'>
              <option selected value="0">Все города</option>
              <option value="29">Королёв</option>
              <option value="35">Красногорск </option>
              <option value="10">Люберцы</option>
              <option value="1">Москва</option>
              <option value="30">Мытищи </option>
              <option value="15">Одинцово </option>
              <option value="16">Подольск</option>
              <option value="3">Санкт-Петербург</option>
              <option value="14">Химки </option>
              <option value="37">Щелково </option>
            </select>
          </section>
          <section id="commentsProductsFilter">
            <select id="productFilter" name="product" onchange='this.form.submit()'>
              <option selected value="0">Все товары</option>
              <option value=" Ecstasy Maserati 2шт"> Ecstasy Maserati 2шт</option>
              <option value=" Альфа ПВП Big Crystal 1г "> Альфа ПВП Big Crystal 1г </option>
              <option value="Ecstasy MIX 2шт">Ecstasy MIX 2шт</option>
              <option value="Hash Ice-o-lator 1г ">Hash Ice-o-lator 1г </option>
              <option value="Альфа кристалл белый - 0.5">Альфа кристалл белый - 0.5</option>
              <option value="Альфа кристалл белый - 1г">Альфа кристалл белый - 1г</option>
              <option value="Альфа ПВП 2,0 кристалл белый 0.5 гр ">Альфа ПВП 2,0 кристалл белый 0.5 гр </option>
              <option value="Альфа ПВП 2,0 кристалл белый 1 гр ">Альфа ПВП 2,0 кристалл белый 1 гр </option>
              <option value="Альфа ПВП 2.0 кристалл белый 1 гр">Альфа ПВП 2.0 кристалл белый 1 гр</option>
              <option value="Альфа ПВП 2.0 Кристалл Изумруд 1 гр ">Альфа ПВП 2.0 Кристалл Изумруд 1 гр </option>
              <option value="Альфа ПВП Big Crystal 1г">Альфа ПВП Big Crystal 1г</option>
              <option value="Альфа ПВП кристалл белый 0.5 гр">Альфа ПВП кристалл белый 0.5 гр</option>
              <option value="Альфа ПВП кристалл белый 1 гр">Альфа ПВП кристалл белый 1 гр</option>
              <option value="Альфа-ПВП Кристалл Белый 0,5 гр &quot;магнит&quot;	">Альфа-ПВП Кристалл Белый 0,5 гр &quot;магнит&quot; </option>
              <option value="Альфа-ПВП Кристалл Белый 0,5 гр &quot;тайник&quot;	">Альфа-ПВП Кристалл Белый 0,5 гр &quot;тайник&quot; </option>
              <option value="Альфа-ПВП Кристалл Белый 1 гр ">Альфа-ПВП Кристалл Белый 1 гр </option>
              <option value="Альфа-ПВП Кристалл Белый 1 гр &quot;тайник&quot;">Альфа-ПВП Кристалл Белый 1 гр &quot;тайник&quot;</option>
              <option value="Альфа-ПВП Кристалл Белый1 гр &quot;магнит&quot;">Альфа-ПВП Кристалл Белый1 гр &quot;магнит&quot;</option>
              <option value="Альфа-ПВП Кристалл Зеленый 1 гр &quot;тайник&quot;">Альфа-ПВП Кристалл Зеленый 1 гр &quot;тайник&quot;</option>
              <option value="Амфетамин VHQ 1 г &quot;тайник&quot;">Амфетамин VHQ 1 г &quot;тайник&quot;</option>
              <option value="Амфетамин VHQ 1 гр">Амфетамин VHQ 1 гр</option>
              <option value="Кристалл Белый 1 гр &quot; Тайник &quot;">Кристалл Белый 1 гр &quot; Тайник &quot;</option>
              <option value="Кристалл Синий 1 гр">Кристалл Синий 1 гр</option>
              <option value="Меф KARAT V.H.Q 1 гр">Меф KARAT V.H.Q 1 гр</option>
              <option value="Меф KARAT V.H.Q 1 гр &quot;магнит&quot;">Меф KARAT V.H.Q 1 гр &quot;магнит&quot;</option>
              <option value="Меф Snow VHQ 1г &quot;магнит&quot;">Меф Snow VHQ 1г &quot;магнит&quot;</option>
              <option value="МЕФ Snow VHQ 1г тайник ">МЕФ Snow VHQ 1г тайник </option>
              <option value="МЕФ Snow VHQ 1гр">МЕФ Snow VHQ 1гр</option>
              <option value="Меф кристалический VHQ 1г &quot; Тайник &quot;">Меф кристалический VHQ 1г &quot; Тайник &quot;</option>
              <option value="Меф кристаллический VHQ 1г">Меф кристаллический VHQ 1г</option>
              <option value="Мефедрон EMPORIO VHQ 1г ">Мефедрон EMPORIO VHQ 1г </option>
              <option value="Мефедрон EMPORIO VHQ 1г &quot;магнит&quot;">Мефедрон EMPORIO VHQ 1г &quot;магнит&quot;</option>
              <option value="Мефедрон EMPORIO VHQ 1г &quot;тайникк&quot;">Мефедрон EMPORIO VHQ 1г &quot;тайникк&quot;</option>
              <option value="Мефедрон VHQ -  1г">Мефедрон VHQ - 1г</option>
              <option value="Мефедрон кристаллический VHQ 1г &quot;магнит&quot;	">Мефедрон кристаллический VHQ 1г &quot;магнит&quot; </option>
              <option value="Мефедрон кристаллический VHQ 1г &quot;тайник&quot;	">Мефедрон кристаллический VHQ 1г &quot;тайник&quot; </option>
              <option value="Мефедрон кристаллический VHQ 2г &quot;тайник&quot;	">Мефедрон кристаллический VHQ 2г &quot;тайник&quot; </option>
              <option value="шишки Red Devil 1 г &quot;магнит&quot;">шишки Red Devil 1 г &quot;магнит&quot;</option>
            </select>
          </section>
        </div>
      </form>
      <hr />
      <section id="commentsBody">
        <ul id='commentsList'>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> E*******2
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=29">Королёв
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/322">Меф кристаллический VHQ 1г</a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">20-11-2022 23:29:28</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Королев Все четко в касание 10/10 </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> J******a
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/197">Мефедрон EMPORIO VHQ 1г "магнит"</a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">20-11-2022 21:51:40</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Поднят в одно касание, качество отменное)) спасибо)) </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> 5********9
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=35">Красногорск
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/439">Альфа ПВП кристалл белый 1 гр</a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">20-11-2022 20:05:50</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Все круто, спасибо большое! </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> 5********2
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/197">Мефедрон EMPORIO VHQ 1г "магнит"</a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">20-11-2022 06:36:12</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Фотка была летняя, но все четко на месте </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> V**m
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/289">Мефедрон кристаллический VHQ 1г "магнит" </a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">19-11-2022 22:41:10</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Красиво, в касание. Низкий поклон и благодарность курьеру. Всё супер </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> V**m
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/289">Мефедрон кристаллический VHQ 1г "магнит" </a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">19-11-2022 22:38:10</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Красиво, в касание.курьеру низкий поклон за метательный схрон </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> p*****s
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/289">Мефедрон кристаллический VHQ 1г "магнит" </a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">19-11-2022 16:33:38</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Поднял в касание. </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> b******7
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/202">Альфа-ПВП Кристалл Белый 1 гр "тайник"</a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">18-11-2022 15:11:11</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Всё дома 10/10/10 </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> 2********9
                </div>
              </div>
              <div class="cell city-cell"></div>
              <div class="cell product-cell"></div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">18-11-2022 04:55:02</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Всё равно, хотелось бы чтобы так и дальше было хорошо </div>
          </li>
          <li>
            <div class="commentWrapperTable">
              <div class="cell">
                <div class="commentAuthor">
                  <span class="material-symbols-outlined rev1">person</span> z***********0
                </div>
              </div>
              <div class="cell city-cell">
                <a target="_blank" aria-label="Город" data-balloon-pos="up" href="/?city_id=1">Москва
                  <!--
<span class="material-symbols-outlined rev2">location_city</span>-->
                </a>
              </div>
              <div class="cell sep-cell">--</div>
              <div class="cell product-cell">
                <a target="_blank" aria-label="Название товара" data-balloon-pos="up" href="/buy/211">Альфа-ПВП Кристалл Белый 0,5 гр "тайник" </a>
              </div>
              <!--<div class="cell district-cell"></div>-->
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
            <div class="commentDate">15-11-2022 12:40:02</div>
            <div class="commentSep">-</div>
            <div class="commentBody">Забрал в касание, кач улёт </div>
          </li>
        </ul>
      </section>
      <section id="commentsPaginator">
        <ul id="yw0" class="yiiPager">
          <li class="first hidden">
            <a href="/reviews"></a>
          </li>
          <li class="previous hidden">
            <a href="/reviews">
              < </a>
          </li>
          <li class="page selected">
            <a href="/reviews">1</a>
          </li>
          <li class="page">
            <a href="/reviews?page=2">2</a>
          </li>
          <li class="page">
            <a href="/reviews?page=3">3</a>
          </li>
          <li class="page">
            <a href="/reviews?page=4">4</a>
          </li>
          <li class="page">
            <a href="/reviews?page=5">5</a>
          </li>
          <li class="next">
            <a href="/reviews?page=2">></a>
          </li>
          <li class="last">
            <a href="/reviews?page=30"></a>
          </li>
        </ul>
      </section>
      <hr />
      <div class="centerAlignText">
        <div class="sectionTitle">Статистика отзывов</div>
        <section id="commentsStat">
          <div class="commentStat" data-balloon-pos="up" aria-label="Отзывов с оценкой 5 звезд - 286 шт.">
            <div>
              <ul class="review-rating review-rating-5 list-inline">
                <li class="review-rating-item item1"></li>
                <li class="review-rating-item item2"></li>
                <li class="review-rating-item item3"></li>
                <li class="review-rating-item item4"></li>
                <li class="review-rating-item item5"></li>
              </ul>
            </div>
            <div>286 шт.</div>
          </div>
          <div class="commentStat" data-balloon-pos="up" aria-label="Отзывов с оценкой 4 звезд - 2 шт.">
            <div>
              <ul class="review-rating review-rating-4 list-inline">
                <li class="review-rating-item item1"></li>
                <li class="review-rating-item item2"></li>
                <li class="review-rating-item item3"></li>
                <li class="review-rating-item item4"></li>
                <li class="review-rating-item item5"></li>
              </ul>
            </div>
            <div>2 шт.</div>
          </div>
          <div class="commentStat" data-balloon-pos="up" aria-label="Отзывов с оценкой 3 звезд - 1 шт.">
            <div>
              <ul class="review-rating review-rating-3 list-inline">
                <li class="review-rating-item item1"></li>
                <li class="review-rating-item item2"></li>
                <li class="review-rating-item item3"></li>
                <li class="review-rating-item item4"></li>
                <li class="review-rating-item item5"></li>
              </ul>
            </div>
            <div>1 шт.</div>
          </div>
          <div class="commentStat" data-balloon-pos="up" aria-label="Отзывов с оценкой 2 звезд - 1 шт.">
            <div>
              <ul class="review-rating review-rating-2 list-inline">
                <li class="review-rating-item item1"></li>
                <li class="review-rating-item item2"></li>
                <li class="review-rating-item item3"></li>
                <li class="review-rating-item item4"></li>
                <li class="review-rating-item item5"></li>
              </ul>
            </div>
            <div>1 шт.</div>
          </div>
          <div class="commentStat" data-balloon-pos="up" aria-label="Отзывов с оценкой 1 звезд - 4 шт.">
            <div>
              <ul class="review-rating review-rating-1 list-inline">
                <li class="review-rating-item item1"></li>
                <li class="review-rating-item item2"></li>
                <li class="review-rating-item item3"></li>
                <li class="review-rating-item item4"></li>
                <li class="review-rating-item item5"></li>
              </ul>
            </div>
            <div>4 шт.</div>
          </div>
        </section>
      </div>
    </section>
  </section>
</div>
<script>
  window.btcpopup_mode = 2;
</script>
<section id="warning_btc" style="display: none;">
  <div class="text">
    <div class="inner">
      <img src="https://i.imgur.com/PkOYFPM.png" />
      <h1>Как купить Bitcoin за 15 секунд?</h1>
      <hr />
      <div>Для Вашего удобства, мы собрали 4 самых быстрых и удобных способа покупки <b>Bitcoin</b>: </div>
      <ul>
        <li>
          <a href="https://telegra.ph/Video-Kak-kupit-Bitcoin-s-pomoshchyu-QIWI-ili-bankovskoj-karty-cherez-mobilnoe-prilozhenie-FX-Coin-05-14" target="_blank">Покупка через мобильное приложение</a>
        </li>
        <li>
          <a href="https://telegra.ph/Video-Kak-kupit-Bitcoin-za-QIWI-cherez-birzhu-Localbitcoinscom-05-13" target="_blank">Покупка через биржу Localbitcoins.com</a>
        </li>
        <li>
          <a href="https://telegra.ph/Video-Kak-bystro-kupit-Bitcoin-za-QIWI-cherez-Bestchangeru-05-13-2" target="_blank">Покупка через сайт Bestchange.ru</a>
        </li>
        <li>
          <a href="https://telegra.ph/Gde-kupit-Bitcoin-nalichnymi-cherez-terminal-05-13-2" target="_blank">Покупка наличными через Bitcoin терминалы в Вашем городе</a>
        </li>
      </ul>
      <br />
      <br />
      <div>Нажмите на интересующий Вас способ покупки Bitcoin и перейдите к прочтению статьи.</div>
      <br />
      <div>Так же обязательно советуем прочитать статью:</div>
      <div>
        <a href="https://telegra.ph/Pochemu-polzovatsya-QIWI-nebezopasno-i-chto-takoe-Bitcoin-05-14" target="_blank">Почему пользоваться QIWI небезопасно и что такое Bitcoin?</a>
      </div>
      <br />
      <div>Удачных покупок!</div>
      <br />
      <div class="btns">
        <button id="modal-success" style="padding:5px;" onclick="BTCsuccessModalClose()">Ознакомлен</button>
        <button id="modal-close" style="padding:5px;" onclick="BTCmodalClose()">Закрыть</button>
      </div>
    </div>
  </div>
</section>
<script src="../../mur48.biz_files/btcpopup.js"></script>
<link rel="stylesheet" type="text/css" href="../../mur48.biz_files/btcpopup.css" />
<!-- apk pop up -->
<script>
  window.apkpopup_mode = 1;
</script>
<section id="warning_apk" style="display: none">
  <div class="text">
    <div class="inner">
      <img src="https://i.imgur.com/ASBJF5E.png" class="icon" />
      <h1>Внимание! Наш магазин запустил мобильное Android приложение! <br />Теперь покупки стали еще быстрее и удобнее! </h1>
      <hr />
      <div style="text-align: center">Скачайте наше мобильное Android приложение и Вы в любой момент сможете попасть в наш магазин и произвести покупки.</div>
      <a href="/app.apk" target="_blank">
        <img src="https://i.imgur.com/nGyAD4L.png" class="download" />
      </a>
      <br />
      <div class="btns">
        <button id="modal-success" style="padding:5px;" onclick="APKsuccessModalClose()">Ознакомлен</button>
        <button id="modal-close" style="padding:5px;" onclick="APKmodalClose()">Закрыть</button>
      </div>
    </div>
  </div>
</section>
<script src="../../mur48.biz_files/apkpopup.js"></script>
<link rel="stylesheet" type="text/css" href="../../mur48.biz_files/apkpopup.css" />
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
        <div>Дорогой клиент! Обязательно ознакомься с информацией ниже, иначе <span class="danger">ты рискуешь потерять доступ к магазину.</span>
        </div>
        <br />
        <br />
        <div> Уважаемый клиент, в любой момент, доступ к магазину на территории РФ, может быть ограничен властями. В связи с этим, информируем Вас о том, как можно легко в 2 клика обойти блокировку и без проблем совершать покупки. </div>
        <br />
        <div> Обязательно ознакомьтесь с информацией, написанной ниже, чтобы не потерять доступ к магазину. <br>
          <span style="color:yellow">Внимание! Так же советуем добавить к себе Telegram-бота для обхода блокировок: <a style="border-bottom: 1px dotted yellow;" href="https://t.me/zapretoffbot" target="_blank">нажмите сюда.</a>
          </span>
        </div>
        <br />
        <div> Ниже будут указаны самые простые, быстрые и удобные методы обхода блокировки <span style="color:red">на компьютере.</span> Выберите нужный пункт и нажмите на него! </div>
        <br />
        <br />
        <div class="m-spoiler" onclick="toggle('sp1')"> 1. <p>Epic Browser он с легкостью поможет Вам обойти блокировку. Работает как на Windows, так и на Mac OS. (нажмите)</p>
        </div>
        <div id="sp1">
          <div>Скачать можно - <a href="https://epicbrowser.com" target="_blank">здесь</a>
          </div>
          <div>Скачайте и установите браузер. После запуска браузера, нажимаем красный значок справа от адресной строки <a href="https://i.imgur.com/AdwnR5Q.png" target="_blank">
              <img src="https://i.imgur.com/AdwnR5Q.png" />
            </a>
          </div>
          <div> В появившемся окне выставляете переключатель в положение ON <a href="https://i.imgur.com/33DMJxK.png" target="_blank">
              <img src="https://i.imgur.com/33DMJxK.png" />
            </a> (кнопка должна стать зелёной). </div>
          <div> Обход готов! <a href="https://i.imgur.com/TrD46dr.jpg" target="_blank">
              <img src="https://i.imgur.com/TrD46dr.jpg" />
            </a>
          </div>
          <div> Так же, для удобства, Вы можете добавить нужный магазин в закладке и в 2 клика совершать покупки. Это самое быстрое и стабильное решение. Мы советуем его! </div>
          <div> Очень простое решение, нужно просто скачать и запустить браузер! Подойдет для новичков. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('sp2')">2. <p>Встроенный в Opera сервис VPN (нажмите)</p>
        </div>
        <div id="sp2">
          <div> В обычном режиме браузер соединяется с сайтами напрямую, следовательно обход работать не будет. Включив бесплатный VPN в самом браузере, вы соединяетесь с магазином через VPN-сервер, обходя все блокировки. </div>
          <div> Для включения VPN выполните следующие действия:</div>
          <br />
          <div> 1. Скачайте Opera для своей операционной системы <a href="https://www.opera.com/ru" target="_blank">здесь</a>
          </div>
          <div> 2. В главном меню выберите "Настройки" <a href="https://i.imgur.com/gqkrtYd.png" target="_blank">
              <img src="https://i.imgur.com/gqkrtYd.png" />
            </a> для Mac OS вкладку "Настройки" можно найти в левом верхнем углу, возле яблочка, нажав на "Opera" </div>
          <div> 3. Нажмите "Безопасность" на боковой панели. <a href="https://i.imgur.com/j1R1T8u.png" target="_blank">
              <img src="https://i.imgur.com/j1R1T8u.png" />
            </a>
          </div>
          <div> 4. В меню VPN, установите флажок Включить VPN. <a href="https://i.imgur.com/ZM9VcLU.png" target="_blank">
              <img src="https://i.imgur.com/ZM9VcLU.png" />
            </a>
          </div>
          <div> Это автоматически активирует VPN, если сделали все правильно, то в адресной строке появится значок VPN. Все готово. Обход работает. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('sp3')">3. <p>TOR Browser. Всем известный браузер. Работает как на Windows, так и на Mac OS. (нажмите)</p>
        </div>
        <div id="sp3">
          <div> Для реализации обхода достаточно просто скачать и установить браузер, для этого нужно перейти на официальный сайт TOR <a href="https://www.torproject.org/download/download-easy.html.en" target="_blank">ссылка</a>
          </div>
          <div> Браузер работает без никаких либо настроек, достаточно 1 раз поставить и все будет работать. </div>
          <div> Но к сожалению, с первого ноября 2017 года существует вероятность блокировки TOR властями РФ. Но как известно, на каждое действие, есть противодействие. </div>
          <div> Чтобы не потерять доступ, заранее позабоььтесь реализацией обхода, она будет описана ниже. </div>
          <div> Если приходится использовать Tor Browser в таком месте, где сеть Tor заблокирована, нужно воспользоваться ретранслятором-мостом. </div>
          <div> Если доступ к сети у вас ограничен, нажмите кнопку "Настроить".</div>
          <div>
            <a href="https://i.imgur.com/Cgq7OrX.png" target="_blank">
              <img src="https://i.imgur.com/Cgq7OrX.png" />
            </a>
          </div>
          <div> Выберите Да</div>
          <div>
            <a href="https://i.imgur.com/nyoCeB0.png" target="_blank">
              <img src="https://i.imgur.com/nyoCeB0.png" />
            </a>
          </div>
          <div> Нажмите Далее, чтобы перейти к настройке мостов.</div>
          <div>
            <a href="https://i.imgur.com/pfLjb8N.png" target="_blank">
              <img src="https://i.imgur.com/pfLjb8N.png" />
            </a>
          </div>
          <div> Мосты получить можно <a href="https://bridges.torproject.org" target="_blank">bridges.torproject.org </a>
          </div>
          <div> Нажмите кнопку Просто дайте мне адреса мостов!</div>
          <div>
            <a href="https://i.imgur.com/wl4Nn4y.png" target="_blank">
              <img src="https://i.imgur.com/wl4Nn4y.png" />
            </a>
          </div>
          <div> Копируете их и вставляете в окно в самом торе как показано выше.</div>
          <div>
            <a href="https://i.imgur.com/xvkp64k.png" target="_blank">
              <img src="https://i.imgur.com/xvkp64k.png" />
            </a>
          </div>
          <div>
            <a href="https://i.imgur.com/TZFc9dY.png" target="_blank">
              <img src="https://i.imgur.com/TZFc9dY.png" />
            </a>
          </div>
          <div> Нажимаете Далее. Обход готов.</div>
          <br />
          <div> либо</div>
          <br />
          <div> Перейдите по <a href="https://bridges.torproject.org" target="_blank">ссылке</a> и следуйте инструкциям. Если вкратце, то нужно нажать кнопку "Get bridges", затем "Just give me bridges!", ввести каптчу, скопировать полученные данные, затем нажать на луковицу слева вверху браузера и выбрать "Tor Network Settings", после чего поставить галочку "My Internet Service Provider (ISP) blocks connections to the Tor network" и "Enter custom bridges" и ввести полученную ранее информацию о мостах, нажать "OK". Готово. </div>
          <div> Таким образом, вход в TOR будет осуществляться через приватные мосты и заблокировать Вам доступ будет сложнее. </div>
          <br />
          <div> Примечание: Браузер устроен таким образом, что будет работать из коробки, без дополнительного вмешательства, однако если у вас в процессе серфинга в интернете сильно упадет скорость, вы всегда можете сменить сервер к которому подключены. </div>
          <div> Для этого нажмите на луковицу слева от адресной строки и выберите пункт меню "Новая цепочка тор". <a href="https://i.imgur.com/vI3n77S.png" target="_blank">
              <img src="https://i.imgur.com/vI3n77S.png" />
            </a>
          </div>
          <div> Через несколько секунд вы автоматически смените сервер (помогает когда долго не хочет открываться какой либо сайт) </div>
          <div> Так же, очень частая проблема, когда у вас на сайте не работают какие-нибудь кнопки, формы, проверка заказа, выпадающие меню и прочие элементы взаимосвязанные с работой магазина, чтобы исправить эту проблему необходимо включить скрипты, для этого справа от адресной строки нажимаете на перечеркнутый значок буквы S <a href="https://i.imgur.com/gqyNy9d.png" target="_blank">
              <img src="https://i.imgur.com/gqyNy9d.png" />
            </a> и в выпадающем меню выберите "Разрешить скрипты глобально". </div>
        </div>
        <div class="m-spoiler" onclick="toggle('sp4')">4. <p>Расширения для Ваших браузеров. (нажмите)</p>
        </div>
        <div id="sp4">
          <div> Если Вы не хотите устанавливать вышеуказанные браузеры, по каким-либо причинам, хотя мы советуем все же их, то Вы можете воспользоваться расширением для Ваших браузеров. </div>
          <div> Под каждый браузер есть расширение (дополнение), которое можно скачать в 2 клика, установить, перезапустить браузер и обход начнет работать. Ниже будут представлены все нужные Вам дополнения под Chrome, Opera, Firefox. </div>
          <br />
          <div> 1. Расширения для Google Chrome:</div>
          <div> Расширение anonymoX <a href="https://chrome.google.com/webstore/detail/anonymox/icpklikeghomkemdellmmkoifgfbakio" target="_blank">здесь</a>
          </div>
          <div> Расширение Browsec <a href="https://chrome.google.com/webstore/detail/browsec-vpn-free-and-unli/omghfjlpggmjjaagoclmmobgdodcjboh" target="_blank">здесь</a>
          </div>
          <div> Расширение fri-Gate <a href="https://chrome.google.com/webstore/detail/frigate-light/mdnmhbnbebabimcjggckeoibchhckemm" target="_blank">здесь</a>
          </div>
          <div> Расширение ZenMate <a href="https://chrome.google.com/webstore/detail/zenmate-vpn-best-cyber-se/fdcgdnkidjaadafnichfpabhfomcebme" target="_blank">здесь</a>
          </div>
          <div> Дополнительное расширение fri-Gate для продвинутых пользователей <a href="https://chrome.google.com/webstore/detail/proxy-for-chrome/iilpibhiihokecnbdkaminemnmecjfed" target="_blank">здесь</a>
          </div>
          <br />
          <div> 2. Расширения для Opera:</div>
          <div> Расширение Browsec <a href="https://addons.opera.com/ru/extensions/details/browsec/" target="_blank">здесь</a>
          </div>
          <div> Расширение Privatix <a href="https://addons.opera.com/ru/extensions/details/privatix-for-opera/" target="_blank">здесь</a>
          </div>
          <div> Расширение ZenMate <a href="https://addons.opera.com/ru/extensions/details/zenmate-for-operatm/" target="_blank">здесь</a>
          </div>
          <br />
          <div> 3. Расширения для Firefox:</div>
          <div> Расширение anonymoX <a href="https://addons.mozilla.org/ru/firefox/addon/anonymox/" target="_blank">здесь</a>
          </div>
          <div> Расширение fri-Gate <a href="https://addons.mozilla.org/ru/firefox/addon/frigate/" target="_blank">здесь</a>
          </div>
          <div> Расширение Pricatix <a href="https://addons.mozilla.org/ru/firefox/addon/privatix/" target="_blank">здесь</a>
          </div>
          <div> Расширение ZenMate <a href="https://addons.mozilla.org/ru/firefox/addon/zenmate-security-privacy-vpn/" target="_blank">здесь</a>
          </div>
          <br />
          <div> Для того, чтобы обход заработал, достаточно просто перейти по ссылки нужного Вам расширения для Вашего браузера и установить его (просто скачать и разрешить установку). </div>
          <div> После чего, браузер перезагрузится и обход начнет работать. В некоторых расширениях нужно будет в браузере найти иконку расширения, которое Вы установили (иконка появится после установки) и включить обход, выбрав страну и перенести ползунок на положение "ON". </div>
          <div> Обход реализуется очень легко и даже новичок разберется с этим решением.</div>
        </div>
        <div class="m-spoiler" onclick="toggle('sp5')">5. <p>"Анонимайзер" - это сайт, выступающий в качестве прокладки, которая помогает обойти блокировку. (нажмите)</p>
        </div>
        <div id="sp5">
          <div> Вам достаточно просто зайти на такой сайт и ввести нужный адрес магазина, после чего, Вы с легкостью попадете на нужный Вам сайт. </div>
          <div> Самые распространенные и работающие анонимайзеры, будут представлены ниже:</div>
          <div> 1. Анонимайзер HideMe <a href="https://hide.me/ru/proxy" target="_blank">здесь</a>
          </div>
          <div> 2. Анонимайзер "HideMyAss" <a href="https://www.hidemyass-freeproxy.com/proxy" target="_blank">здесь</a>
          </div>
          <div> 3. Анонимайзер "FilterBypass" <a href="https://www.filterbypass.me/" target="_blank">здесь</a>
          </div>
          <br />
          <div> Время от времени, анонимайзеры перестают работать или лагают, посему рекомендуем все-таки использовать браузеры или расширения, они более стабильные. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('sp6')">6. <p>VPN. Самый стабильный способ. Работает на всех устройствах. Но способ требует больше знаний для настройки. (нажмите)</p>
        </div>
        <div id="sp6">
          <div> Простыми словами, VPN - это отдельная программа, которую нужно скачать и настроить, после чего, все Ваши действия в сети будут производиться из других стран, следовательно и обход будет работать. </div>
          <div> В данной статье, мы будем рассматривать удобные и более легкие в настройки VPN. В большинстве случаев, VPN - платный, но есть и бесплатные, поискать их можно в поисковиках. Ниже мы предоставим только платные VPN со своими приложениями, для Вашего удобства. </div>
          <div> Советуем использовать сервера с двойным шифрованием, Double VPN, так как их намного трудней заблокировать и они более стабильные. </div>
          <br />
          <div> 1. ZenMate <a href="https://zenmate.com/" target="_blank">здесь</a>
          </div>
          <br />
          <div> Это неважно, какое устройство вы используете — ZenMate VPN предлагает свой сервис для любого клиента: Windows, macOS, Android, iOS. </div>
          <div> Для установки вам необходимо зайти на официальный сайт ZenMate <a href="https://zenmate.com/" target="_blank">ссылка</a> и скачать приложение ZenMate под Вашу операционную систему. </div>
          <div> Дополнительные настройки не нужны.</div>
          <br />
          <div> Как скачать и установить VPN?</div>
          <div> Скачайте нужный Вам клиент под Вашу операционную систему, выбрав в меню закладку “СКАЧАТЬ” на официальном сайте Zenmate <a href="https://zenmate.com/" target="_blank">ссылка</a>
          </div>
          <div> Следуйте инструкциям устанавливаемого клиента, чтобы создать ваш ZenMate аккаунт. </div>
          <div> Выберите серверную локацию, которая вам интересна, и подключитесь к ZenMate VPN, просто нажав на большую круглую кнопку. Добро пожаловать в безопасный свободный интернет. </div>
          <div> Оплатить можно через QIWI, Paypal и кредитную карту.</div>
          <br />
          <div> 2. NordVPN <a href="https://nordvpn.com/ru/download/" target="_blank">здесь</a>
          </div>
          <br />
          <div> Мегамонстр с более чем 1600 серверами в 60 странах мира, поддержкой DoubleVPN и Onion Over VPN </div>
          <div> Помимо традиционных способов оплаты, таких как кредитные карты и Paypal, вы можете оплатить услуги NordVPN анонимно с помощью биткойнов. </div>
          <div> Это лучший вариант оплаты для сохранения вашей конфиденциальности и безопасности в сети Интернет, потому что с вашим профилем связана только сумма. </div>
          <div> На официальном сайте в разделе Download есть клиенты для Windows, Mac OS X, Android и iOS. </div>
          <div> Регистрируетесь на сайте, оплачиваете, входите в аккаунт на компьютере и пользуйтесь. </div>
          <div> Оплатить можно через Bitcoin, Yandex, Webmoney, кредитную карту и множество других способов. </div>
          <br />
          <div> 3. ExpressVPN <a href="https://www.expressvpn.com" target="_blank">здесь</a>
          </div>
          <br />
          <div> Быстро и легко настраивается на компьютере, планшете и смартфоне.</div>
          <div> Интуитивно понятный интерфейс позволяет обеспечить безопасность соединения и доступ к любым веб-сайтам всего одним щелчком мыши. </div>
          <div> Операционные системы - Windows, Mac, iOS, Android, маршрутизаторы и Linux</div>
          <div> Зарегистрируйтесь и зайдите в личный кабинет, чтобы оплатить VPN. После оплаты, в личном кабинете появится регистрационный код, который нужно будет вписать в само приложение, при первом запуске. </div>
          <div> Как только Вы оплатите и впишите регистрационный код в само приложение - обход начнет работать. Выберите страну и подключитесь. </div>
          <div> Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
          <div> Express VPN очень прост в работе. Вы можете настроить его всего за 10 минут.</div>
          <br />
          <div> 4. IpVanish <a href="https://www.ipvanish.com/?a_bid=48f95966&a_aid=553f200173723&data1=cor839174_VM&data2=D201711180905_o" target="_blank">здесь</a>
          </div>
          <br />
          <div> Работает и настраивается по такому же принципу, как и вышеназванные VPN-сервисы. Вам достаточно зайти сам сайт VPN, зарегистрироваться, перейти по ссылке из письма, оплатить и скачать приложение. </div>
          <div> При входе в приложение, Вас попросят указать логин и пароль, который Вы указывали на сайте, авторизуйтесь и выберите нужную локацию, после чего, обход готов. </div>
          <div> Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
          <br />
          <div> 5. Другие VPN сервисы.</div>
          <div> В интернете существует огромное количество различных VPN сервисов, как платных, так и бесплатных. Найти их можно в Google <a href="https://google.com" target="_blank">здесь</a>
          </div>
          <div> Сами сервисы VPN имеют мануалы по настройке на своих веб-сайтах, в которых разберется даже новичок. </div>
        </div>
        <div> Самое простое и легкое решение - это <a href="https://epicbrowser.com/" target="_blank">Epic Browser</a>, <a href="https://www.opera.com/ru">Opera</a> и <a href="https://www.torproject.org/download/download-easy.html.en" target="_blank">TOR Browser</a>. Данные решения работают на всех операционных системах. На данный момент мы советуем их. С помощью них, даже новичок в два клика сможет обойти блокировку. </div>
        <div> Кроме того, исходя из Вашей операционной системы, мы советуем еще скачать несколько резервных вариантов, чтобы в случае форс-мажоров с браузерами, Вы всегда смогли зайти в магазин через другой обход. </div>
        <div> Поэтому, мы так же советуем установить дополнительные расширения для Ваших браузеров, это легко, быстро и удобно. </div>
        <div>Кроме этого, советуем сохранить данный мануал на компьютер или телефон, чтобы Вы всегда имели доступ к данной информации и с легкостью могли обойти блокировки. </div>
        <div>Бывают случаи, что какой-то из способов перестает работать, а другой способ продолжает работать, поэтому обязательно сохраните и запомните данную информацию. Спасибо за внимание! </div>
      </div>
      <!-- Телефоны -->
      <div class="on-mobile" id="block-mobile">
        <div>Дорогой клиент! Обязательно ознакомься с информацией ниже, иначе <span class="danger">ты рискуешь потерять доступ к магазину.</span>
        </div>
        <br />
        <br />
        <div> Уважаемый клиент, в любой момент, доступ к магазину на территории РФ, может быть ограничен властями. В связи с этим, информируем Вас о том, как можно легко в 2 клика обойти блокировку и без проблем совершать покупки. </div>
        <br />
        <div> Обязательно ознакомьтесь с информацией, написанной ниже, чтобы не потерять доступ к магазину. <br>
          <span style="color:yellow">Внимание! Так же советуем добавить к себе Telegram-бота для обхода блокировок: <a style="border-bottom: 1px dotted yellow;" href="https://t.me/zapretoffbot" target="_blank">нажмите сюда.</a>
          </span>
        </div>
        <br />
        <div> Ниже будут указаны самые простые, быстрые и удобные методы обхода блокировки <span style="color:red">на мобильном устройстве</span>. Выберите нужный пункт и нажмите на него! </div>
        <br />
        <br />
        <div class="m-spoiler" onclick="toggle('msp1')">1. <p>Браузер Puffin, он с легкостью поможет Вам обойти блокировку. Работает как на Android, так и на iOS. (нажмите)</p>
        </div>
        <div id="msp1">
          <div>Скачать для Android - <a href="https://play.google.com/store/apps/details?id=com.cloudmosa.puffinFree&hl=ru" target="_blank">здесь</a>
          </div>
          <div>Скачать для iOS - <a href="https://itunes.apple.com/ru/app/puffin-web-browser/id472937654?mt=8" target="_blank">здесь</a>
          </div>
          <br />
          <div>Для обхода блокировки достаточно просто скачать браузер, запустить его и ввести нужный сайт магазина. </div>
          <div>Так же, для удобства, Вы можете добавить нужный магазин в закладке и в 2 клика совершать покупки. Это самое быстрое и стабильное решение. Мы советуем его! </div>
          <div>Очень простое решение, нужно просто скачать и запустить браузер! Подойдет для новичков. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp2')">2. <p>Приложение Opera VPN. Простое приложение, которое поможет Вам обойти блокировку в 2 клика. Работает как на Android, так и на iOS. (нажмите)</p>
        </div>
        <div id="msp2">
          <div>Скачать для Android можно - <a href="https://play.google.com/store/apps/details?id=com.opera.vpn&hl=ru" target="_blank">здесь</a>, либо для iOS - <a href="https://itunes.apple.com/ru/app/opera-vpn/id1080756781?mt=8" target="_blank">здесь</a>
          </div>
          <div>После скачивания, когда всплывёт окошко «Запрос подключения» нужно нажать ОК, <a href="https://i.imgur.com/a22bdJB.png" target="_blank">
              <img src="https://i.imgur.com/a22bdJB.png" />
            </a> подтверждая разрешение программе использовать VPN, после чего кликнуть на кнопку «Подключиться» <a href="https://i.imgur.com/GAzG5Tm.png" target="_blank">
              <img src="https://i.imgur.com/GAzG5Tm.png" />
            </a>
          </div>
          <div>Таким образом, программа автоматически подключилась к ближайшему доступному серверу. </div>
          <div>После чего, Вы увидите в верхнем меню телефона значок VPN, который символизирует то, что Ваш браузер готов к обходу блокировок. <a href="https://i.imgur.com/prShwas.png" target="_blank">
              <img src="https://i.imgur.com/prShwas.png" />
            </a>
          </div>
          <div>Теперь Вы можете с любого мобильного, удобного для Вас браузера заходить на сайт магазина и совершать покупки. </div>
          <div>Для iOS процедура точно такая же. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp3')">3. <p>Браузер Opera Mini. Работает только на Android. Очень быстрое и легкое решение для обхода блокировки. (нажмите)</p>
        </div>
        <div id="msp3">
          <div>Скачать для Android можно - <a href="https://play.google.com/store/apps/details?id=com.opera.mini.native&hl=ru" target="_blank">здесь</a>
          </div>
          <div>После того, как Вы скачали и установили приложение нужно просто включить функцию "Экономия трафика". Для этого нужно: </div>
          <div>1. Запускаем Opera Mini</div>
          <div>2. Справа от адресной строки нажимаем на логотип Opera <a href="https://i.imgur.com/VeJRLxP.png" target="_blank">
              <img src="https://i.imgur.com/VeJRLxP.png" />
            </a>
          </div>
          <div>3. В выпадающем меню нажимаете на "Экономия трафика" <a href="https://i.imgur.com/iWnRzyz.png" target="_blank">
              <img src="https://i.imgur.com/iWnRzyz.png" />
            </a>
          </div>
          <div>4. Выберите режим "автоматический" <a href="https://i.imgur.com/lziVsRA.png" target="_blank">
              <img src="https://i.imgur.com/lziVsRA.png" />
            </a>
          </div>
          <div>5. Обход готов. Наслаждайтесь жизнью <a href="https://i.imgur.com/J7Am984.png" target="_blank">
              <img src="https://i.imgur.com/J7Am984.png" />
            </a>
          </div>
          <br />
          <div>В приложении Opera всё делается по аналогии с версией Opera Mini. Работает так же, только на Android. </div>
          <div>Скачать Opera можно - <a href="https://play.google.com/store/apps/dev?id=6928237143520558692&hl=ru" target="_blank">здесь</a>
          </div>
          <div>1. В выпадающем меню (только уже слева от адресной строки) выбираем пункт "Настройки" <a href="https://i.imgur.com/Gs4Tx0r.png" target="_blank">
              <img src="https://i.imgur.com/Gs4Tx0r.png" />
            </a>
          </div>
          <div>2. Переходим в подменю "Экономия трафика" <a href="https://i.imgur.com/DNyFIlx.png" target="_blank">
              <img src="https://i.imgur.com/DNyFIlx.png" />
            </a>
          </div>
          <div>3. Активируем и наслаждаемся жизнью <a href="https://i.imgur.com/Lo1mDrD.png" target="_blank">
              <img src="https://i.imgur.com/Lo1mDrD.png" />
            </a>
          </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp4')">4. <p>Браузер Google Chrome с включенной функцией "Экономия трафика". Работает так же, только на Android. (нажмите)</p>
        </div>
        <div id="msp4">
          <div>Скачать Google Chrome можно - <a href="https://play.google.com/store/apps/details?id=com.android.chrome&hl=ru&gl=ru" target="_blank">здесь</a>
          </div>
          <br />
          <div>Для того чтобы обойти блокировку в приложении Google Chrome на Android нужно:</div>
          <br />
          <div>1. Справа от адресной строки нажимаем на значок "три точки"</div>
          <div>2. В выпадающем окне, нажимаем "Настройки" <a href="https://i.imgur.com/3xldI46.png" target="_blank">
              <img src="https://i.imgur.com/3xldI46.png" />
            </a>
          </div>
          <div>3. Переходим в меню "Экономия трафика" <a href="https://i.imgur.com/3xldI46.png" target="_blank">
              <img src="https://i.imgur.com/6BtT3KF.png" />
            </a>
          </div>
          <div>4. Активируем функцию переключением ползунка <a href="https://i.imgur.com/3dWcHYP.png" target="_blank">
              <img src="https://i.imgur.com/3dWcHYP.png" />
            </a>
          </div>
          <div>5. Обход готов. Наслаждаетесь жизнью <a href="https://i.imgur.com/KV1wdb9.png" target="_blank">
              <img src="https://i.imgur.com/KV1wdb9.png" />
            </a>
          </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp5')">5. <p>Приложение Orbot + Браузер Orfox. Аналог TOR браузера, только для Android. (нажмите)</p>
        </div>
        <div id="msp5">
          <div>Скачать Orbot можно - <a href="https://play.google.com/store/apps/details?id=org.torproject.android&hl=ru" target="_blank">здесь</a>
          </div>
          <div>Данный способ более тяжелый и требует больше знаний для настройки. Тут необходимо установить два приложения, они должны работать одновременно. </div>
          <div>Изначально, Вы устанавливаете Orbot и запускаете его, выбираете язык и разрешаете установку, затем нажатием на луковицу подключаетесь к сети TOR. Луковица должна быть зеленая. </div>
          <div>Затем, Вам нужно скачать браузер Orfox - <a href="https://play.google.com/store/apps/details?id=info.guardianproject.orfox&hl=ru&gl=ru" target="_blank">здесь</a>
          </div>
          <div>Скачайте и запустите Orfox. Как только загрузка прошла, Вам необходимо перейти на <a href="https://whoer.net/ru" target="_blank">сайт</a> и Вы увидите IP-адрес, если он отличается от русского - значит все хорошо - обход готов. </div>
          <br />
          <div>В дальнейшем работать через Orbot нужно так:</div>
          <div>В начале запускаем Orbot, нажимаем кнопку включения и ждем пока Orbot подключится к сети Tor. </div>
          <div>После подключения к Tor можно запустить и использовать Orfox. </div>
          <br />
          <div> Кроме того, обязательно не забудьте зайти в настройки всех этих приложений и найти вкладку "Bridges & Network Connection", затем в открывшемся окне, установите "Provide Bridges: meek-amazon" вместо стандартного "Provide Bridges: obfs4". Делается это для того, чтобы в будущем обойти все блокировки. Обязательно сделайте данную настройку, если в Вашей версии приложения она есть (ее может не быть) </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp6')">6. <p>Браузер Onion Browser. Легкое решение только для владельцев iOS. (нажмите)</p>
        </div>
        <div id="msp6">
          <div>Скачать Onion Browser можно - <a href="https://itunes.apple.com/ru/app/onion-browser/id519296448?mt=8" target="_blank">здесь</a>
          </div>
          <div>Для обхода блокировки, достаточно просто установить, запустить браузер и нажать "Connect to TOR network". </div>
          <div>Первый запуск может быть долгий, нужно будет чуть-чуть подождать. После ожидания, браузер запуститься и будет готов к работе. </div>
          <br />
          <div>Кроме того, по аналогии только для iOS работают следующие браузеры:</div>
          <br />
          <div>1. Red Onion browser <a href="https://itunes.apple.com/us/app/red-onion-tor-powered-web-browser-for-anonymous-browsing/id829739720?mt=8" target="_blank">здесь</a>
          </div>
          <div>2. Tornado browser <a href="https://itunes.apple.com/ru/app/tornado-browser-tor/id1128115924?mt=8" target="_blank">здесь</a>
          </div>
          <div>3. Большое количество TOR браузеров из App store. Достаточно просто зайти в App store с Вашего телефона и в поиске написать TOR. Найдется еще несколько браузеров, которые можно использовать. Если что-то случится с вышенаписанными браузерами - то Вы сможете использовать эти. </div>
          <br />
          <div>Кроме того, обязательно не забудьте зайти в настройки всех этих браузеров и найти вкладку "Bridges & Network Connection", затем в открывшемся окне, установите "Provide Bridges: meek-amazon" вместо стандартного "Provide Bridges: obfs4". Делается это для того, чтобы в будущем обойти все блокировки. Обязательно сделайте данную настройку! </div>
          <br />
          <div>А так же есть и другие бесплатные методы обхода, например "Анонимайзер". </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp7')">7. <p>"Анонимайзер" - это сайт, выступающий в качестве прокладки, которая помогает обойти блокировку. (нажмите)</p>
        </div>
        <div id="msp7">
          <div>Вам достаточно просто зайти на такой сайт и ввести нужный адрес магазина, после чего, Вы с легкостью попадете на нужный Вам сайт. </div>
          <br />
          <div>Самые распространенные и работающие анонимайзеры, будут представлены ниже:</div>
          <br />
          <div> 1. Анонимайзер HideMe <a href="https://hide.me/ru/proxy" target="_blank">здесь</a>
          </div>
          <div> 2. Анонимайзер "HideMyAss" <a href="https://www.hidemyass-freeproxy.com/proxy" target="_blank">здесь</a>
          </div>
          <div> 3. Анонимайзер "FilterBypass" <a href="https://www.filterbypass.me/" target="_blank">здесь</a>
          </div>
          <br />
          <div>Время от времени, анонимайзеры перестают работать или лагают, посему рекомендуем все-таки использовать браузеры, они более стабильные. </div>
        </div>
        <div class="m-spoiler" onclick="toggle('msp8')">8. <p>VPN. Самый стабильный способ. Работает на всех устройствах. Но способ требует больше знаний для настройки. (нажмите)</p>
        </div>
        <div id="msp8">
          <div>Простыми словами, VPN - это отдельная программа, которую нужно скачать и настроить, после чего, все Ваши действия в сети будут производиться из других стран, следовательно и обход будет работать. </div>
          <div>В данной статье, мы будем рассматривать удобные и более легкие в настройки VPN. В большинстве случаев, VPN - платный, но есть и бесплатные, поискать их можно в Google Play или App store. Ниже мы предоставим только платные VPN со своими приложениями, для Вашего удобства. </div>
          <div>Советуем использовать сервера с двойным шифрованием, Double VPN, так как их намного трудней заблокировать и они более стабильные. </div>
          <br />
          <br />
          <div>1. ZenMate <a href="https://zenmate.com/" target="_blank">здесь</a>
          </div>
          <br />
          <div>Это неважно, какое устройство вы используете — ZenMate VPN предлагает свой сервис для любого клиента: Windows, macOS, Android, iOS. </div>
          <div>Для мобильного клиента вам необходимо зайти App Store или Google Play и скачать приложение ZenMate для соответствующего устройства. </div>
          <div>Дополнительные настройки не нужны.</div>
          <br />
          <div>Как скачать и установить VPN?</div>
          <div>Скачайте нужный Вам клиент под Вашу операционную систему, выбрав в меню закладку “СКАЧАТЬ” на официальном сайте Zenmate <a href="https://zenmate.com/" target="_blank">здесь</a>
          </div>
          <div>Следуйте инструкциям устанавливаемого клиента, чтобы создать ваш ZenMate аккаунт.</div>
          <div>Выберите серверную локацию, которая вам интересна, и подключитесь к ZenMate VPN, просто нажав на большую круглую кнопку. Добро пожаловать в безопасный свободный интернет. </div>
          <div>Оплатить можно через QIWI, Paypal и кретитную карту.</div>
          <br />
          <br />
          <div>2. NordVPN <a href="https://nordvpn.com/ru/download/" target="_blank">здесь</a>
          </div>
          <br />
          <div>Мегамонстр с более чем 1600 серверами в 60 странах мира, поддержкой DoubleVPN и Onion Over VPN </div>
          <div>Помимо традиционных способов оплаты, таких как кредитные карты и Paypal, вы можете оплатить услуги NordVPN анонимно с помощью биткойнов. </div>
          <div>Это лучший вариант оплаты для сохранения вашей конфиденциальности и безопасности в сети Интернет, потому что с вашим профилем связана только сумма. </div>
          <div>На официальном сайте в разделе Download есть клиенты для Windows, Mac OS X, Android и iOS. </div>
          <div>Регистрируетесь на сайте, оплачиваете, входите в аккаунт на устройстве и пользуйтесь. </div>
          <div>Оплатить можно через Bitcoin, Yandex, Webmoney, кредитную карту и множество других способов. </div>
          <br />
          <br />
          <div>3. ExpressVPN <a href="https://www.expressvpn.com" target="_blank">здесь</a>
          </div>
          <br />
          <div>Быстро и легко настраивается на компьютере, планшете и смартфоне.</div>
          <div>Интуитивно понятный интерфейс позволяет обеспечить безопасность соединения и доступ к любым веб-сайтам всего одним щелчком мыши. </div>
          <div>Операционные системы - Windows, Mac, iOS, Android, маршрутизаторы и Linux</div>
          <div>Зарегистрируйтесь и зайдите в личный кабинет, чтобы оплатить VPN. После оплаты, в личном кабинете появится регистрационный код, который нужно будет вписать в само приложение, при первом запуске. </div>
          <div>Как только Вы оплатите и впишите регистрационный код в само приложение - обход начнет работать. Выберите страну и подключитесь. </div>
          <div>Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
          <div>Express VPN очень прост в работе. Вы можете настроить его всего за 10 минут.</div>
          <br />
          <br />
          <div>4. IpVanish <a href="https://www.ipvanish.com/?a_bid=48f95966&a_aid=553f200173723&data1=cor839174_VM&data2=D201711180905_o" target="_blank">здесь</a>
          </div>
          <br />
          <div>Работает и настраивается по такому же принципу, как и вышеназванные VPN-сервисы. Вам достаточно зайти сам сайт VPN, зарегистрироваться, перейти по ссылке из письма, оплатить и скачать приложение. </div>
          <div>При входе в приложение, Вас попросят указать логин и пароль, который Вы указывали на сайте, авторизуйтесь и выберите нужную локацию, после чего, обход готов. </div>
          <div>Оплатить можно через Bitcoin, Paypal и кретитную карту.</div>
          <br />
          <div>5. Различные VPN сервисы в Google Play и App store.</div>
          <div>Настройка интуитивно понятна и происходит в 2 клика.</div>
        </div>
        <div>Самое простое и легкое решение - это браузер <a href="https://www.puffinbrowser.com" target="_blank">Puffin</a>. Он работает и на Android и на iOS. На данный момент мы советуем его. С помощью него, даже новичок в два клика сможет обойти блокировку. </div>
        <div>Кроме того, исходя из Вашей операционной системы - Android или iOS. Мы советуем еще скачать несколько резервных вариантов, чтобы в случае форс-мажоров с Puffin, Вы всегда смогли зайти в магазин через другой браузер. </div>
        <div>Для Android - запишите и скачайте все варианты обхода. Пункты 2, 3, 4, 5, 7, 8.</div>
        <div>Под iOS - запишите и скачайте все варианты обхода - это пункты 2, 6, 7, 8.</div>
        <div>Так же, советуем сохранить данный мануал на компьютер или телефон, чтобы Вы всегда имели доступ к данной информации и с легкостью могли обойти блокировки. </div>
        <div>Бывают случаи, что какой-то из способов перестает работать, а другой способ продолжает работать, поэтому обязательно сохраните и запомните данную информацию. Спасибо за внимание! </div>
      </div>
      <br />
      <div class="btns">
        <button id="modal-success" onclick="successModalClose()">Ознакомлен</button>
        <button id="modal-close" onclick="modalClose()">Закрыть</button>
        <div class="on-desktop" id="help-desktop">
          <a href="#" onclick="showMobile()">Показать инструкцию для телефонов</a>
        </div>
        <div class="on-mobile" id="help-mobile">
          <a href="#" onclick="showDesktop()">Показать инструкцию для компьютеров</a>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="../../mur48.biz_files/popup.js"></script>
<link rel="stylesheet" type="text/css" href="../../mur48.biz_files/popup.css" />
<script type="text/javascript">
  /*
			<![CDATA[*/
  (function(d, w) {
    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function() {
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
  jQuery(function($) {
    jQuery('body').on('click', '#yt0', function() {
      jQuery.ajax({
        'data': {
          'id': $("#id").val(),
          'comment': $("#comment").val()
        },
        'beforeSend': function() {
          $("#ajaxLoader").show();
        },
        'complete': function() {
          $("#ajaxLoader").hide();
        },
        'url': '\x2Fcheck',
        'cache': false,
        'success': function(html) {
          jQuery("#info").html(html)
        }
      });
      return false;
    });
  });
  /*]]>*/
</script> @endsection