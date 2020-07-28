<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- кодировка сайта -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Отображение сайта на смартфонах -->
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon"> <!-- устанавливаем фавикон -->
    <link rel="stylesheet" href="styles/bootstrap.css"> <!-- подключаем Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap-reboot.css"> <!-- подключаем Bootstrap-reboot -->
    <link rel="stylesheet" href="styles/bootstrap-grid.css"> <!-- подключаем Bootstrap-Grid -->
    <link rel="stylesheet" href="styles/vivify.min.css"> <!-- подключаем библиотеку анимации -->
    <link rel="stylesheet" href="styles/style.css"> <!-- подключаем стиль сайта -->
    <title>Мероприятия</title> <!-- название вкладки -->
</head>

<body style="background-image: url(background.jpg);">
<div class="container-fluid"> <!-- контейнер Bootstrap4 -->
  <div class="row"> <!-- строка Bootstrap4 -->
    <nav class="navbar navbar-expand-lg navbar-dark"> <!-- меню Bootstrap4 -->
      <a class="navbar-brand" href="index.html"> <!-- ссылка на "Главная" Bootstrap4 -->
        <img src="./images/logo-light.png" class="logo" alt="АИСТ"> <!-- картинка логотипа -->
        <img src="./images/logoText.png" class="logoText" alt="АИСТ"> <!-- картинка названия -->
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation"> <!-- кнопка для смартфонов Bootstrap4 -->
        <span class="navbar-toggler-icon"></span> <!-- картинка для кнопки Bootstrap4 -->
      </button>
      <div class="collapse navbar-collapse" id="navbar1"> <!-- блок меню Bootstrap4 -->
        <ul class="navbar-nav mr-auto"> <!-- список меню Bootstrap4 -->
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="index.html">Главная</a> <!-- ссылка -->
          </li>
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="associ.html">О нас</a> <!-- ссылка -->
          </li>
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="meropriatia.php"  style="color: #fff;">Наша деятельность</a> <!-- ссылка -->
          </li>
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="cooperation.php">Сотрудничество</a> <!-- ссылка -->
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown">Медиаматериалы<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="nav-link navBack" href="galerya.html">Фотографии</a></li>
              <li><a class="nav-link navBack" href="video.html">Видео</a></li>
            </ul>
          </li>
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="manifest.html">Манифест</a> <!-- ссылка -->
          </li>
          <li class="nav-item"> <!-- строка меню Bootstrap4 -->
            <a class="nav-link" href="kontakt.php">Контакты</a> <!-- ссылка -->
          </li>
        </ul>
      </div>
    </nav> 
    <div class="topMenu"></div> <!-- подменю -->
  </div>
  <a href="#" title="Вернуться к началу" class="topbutton">Наверх</a> <!-- кнопка "Наверх" -->
  <div class="row"> <!-- строка Bootstrap4 -->
      <h1 class="vivify popInTop deepshadow">РЕГИСТРАЦИЯ<br> НА ФЕСТИВАЛЬ 2019!</h1> <!-- заголовок -->
  </div>
  <div class="row"> <!-- строка Bootstrap4 -->
    <div class="col"></div> <!-- выравниваем  -->
      <a class="vivify rollInTop btn col-xl col-lg col-md-8 col-sm-8 col-xs-12" href="https://docs.google.com/forms/d/e/1FAIpQLSe4OGoxqcvakdnU78EWvkEJbz3TMrN_ZQkNlKlhrF8xqxW5RA/viewform">ЗАРЕГИСТРИРОВАТЬСЯ!</a> <!-- ссылка на регистрацию -->
    <div class="col"></div> <!-- выравниваем -->
    <hr class="col-12"> <!-- горизонтальная линия -->
  </div>
  <div class="row"> <!-- строка Bootstrap4 -->
      <h1 class="vivify popInTop deepshadow">МЕРОПРИЯТИЯ</h1> <!-- заголовок -->
  </div>
  <div class="row"> <!-- строка Bootstrap4 -->
    <div class="col"></div> <!-- выравниваем -->
    <div class="col-xl-10 col-lg-10 col-md-5 col-sm-7 col-xs-12"> <!-- контейнер мероприятий -->
      <div class="row"> <!-- строка Bootstrap4 -->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 vivify unfold mr"> <!-- контейнер мероприятия -->
          <a href="#meropr1"> <!-- ссылка на открытие модального окна -->
            <div class="meropriatia mr1">
              <h5 class="nameMeropriatia">Фестиваль Исторического Танца 2018</h5> <!-- заголовок -->
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 vivify unfold mr"> <!-- контейнер мероприятия -->
          <a href="#meropr3"> <!-- ссылка на открытие модального окна -->
            <div class="meropriatia mr3">
              <h5 class="nameMeropriatia">Европейское приключение 2019</h5> <!-- заголовок -->
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 vivify unfold mr"> <!-- контейнер мероприятия -->
          <a href="#meropr2"> <!-- ссылка на открытие модального окна -->
            <div class="meropriatia mr2">
              <h5 class="nameMeropriatia">Чемпионат по Историческим Танцам</h5> <!-- заголовок -->
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col"></div> <!-- выравниваем -->
    <hr class="col-12"> <!-- горизонтальная линия -->
  </div>
  <div class="row"> <!-- строка Bootstrap4 -->
      <h1 class="vivify popInTop deepshadow">РАСПИСАНИЕ МЕРОПРИЯТИЙ</h1> <!-- заголовок -->
  </div>
  <div class="row"> <!-- строка Bootstrap4 -->
    <div class="col"></div> <!-- выравниваем -->
      <img class="meropriatia_raspisanie vivify popInTop col-md-12 col-sm-12 col-xs-12 d-lg-none d-xl-none" src="./images/meropriatia_raspisanie.jpg"> <!-- картинка -->
    <div class="col"></div> <!-- выравниваем -->
  </div>
  <div class="row">
    <div class="col"></div> <!-- выравниваем -->
    <div class="tableMeropr vivify popInTop col-lx-10 col-lg-10 d-none d-lg-block d-lx-block"> <!-- таблица -->
      <?php
        require_once 'connection.php'; // подключаем скрипт
        $link = mysqli_connect($host, $user, $password, $database) // проверяем данные подключения к БД
            or die("Ошибка " . mysqli_error($link)); // если данные не соответствуют, выводим ошибку
        mysqli_query($link, "SET NAMES utf8"); // устанавливаем кодировку соединения с БД
        $query ="SELECT * FROM meropr"; // берем данные из таблицы в БД
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); // проверяем данные таблицы и данные подключения к БД
        if($result) // если всё хорошо, то начинаем сбор данных из таблицы
        {
            $rows = mysqli_num_rows($result); // количество полученных строк
            echo "<table><tr class='tableTR'><td><h3>Дата</h3></td><td><h3>Мероприятие</h3></td><td><h3>Время</h3></td></tr>"; // выводим первую строчку в таблице
            for ($i = 0 ; $i < $rows ; ++$i) // запускаем цикл
            {
                $row = mysqli_fetch_row($result);// берем данные на вывод
                echo "<tr class='tableContent'>"; // открываем строку таблицы
                    for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>"; //выводим данные
                echo "</tr>"; //закрываем строку таблицы
            }
            echo "</table>";
            // очищаем результат
            mysqli_free_result($result); //чистим данные
        }
        mysqli_close($link); //чистим данные
        ?>
    </div>
    <div class="col"></div> <!-- выравниваем -->
    <div class="parentMeropr vivify popInTop col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12"> <!-- контейнер скачивания мероприятий -->
      <a href="./resourse/meropriatia_raspisanie.doc" download=""><img src="./images/Cale.png" alt="" class="icons2"></a><br> <!-- картинка -->
      <a href="./resourse/meropriatia_raspisanie.doc" download="">Скачать расписание мероприятий</a> <!-- скачать расписание -->
    </div>
  </div>
</div>
<div class="row">
  <div id="meropr1" class="modalDialog vivify popIn"> <!-- модальное окно -->
    <a href="#meropriatia" title="Закрыть" class="close"></a> <!-- закрыть модальное окно -->
    <div class="over"> <!-- модальное окно(видимая часть) -->
      <h2 class="topModal deepshadow">Международный Фестиваль Исторического Танца</h2> <!-- заголовок -->
      <div class="txtModal"> <!-- текст модального окна -->
        <h2>Добро пожаловать!</h2>
        <h2>С 17 по 25 августа 2019 года пройдёт XI Международный Фестиваль Исторического Танца.<br></h2>
        <p style="text-align: center;">Преподаватели: <br>
          Сильвия Хартунг (Германия) <br>
          Арно Дежиоанни (Франция) <br>
          Жюльен Тибергьен и Мари-Эмили Каппель (Франция) <br>
          Виктория Топорова и Всеволод Жданов (Россия, Москва) <br>
          Элана и Егор Аносовы (Россия, Москва)<br><br>
          Мероприятия:<br>
          Чемпионат по историческим танцам<br>
          Шотландский бал<br>
          Бал по Модерну<br>
          Русский бал <br>
          и, конечно, традиционный Большой Бал в одной из московских усадеб.</p><br>
        <h3>Ждём вас на нашем Фестивале 2019!</h3><br>
        <iframe class="col" src="https://www.youtube.com/embed/DnzwSgXv-mw" frameborder="0" allowfullscreen></iframe><br>
      </div>
    </div>
  </div>
</div>

  <div id="meropr2" class="modalDialog vivify popIn"> <!-- модальное окно -->
    <a href="#meropriatia" title="Закрыть" class="close"></a> <!-- закрыть модальное окно -->
      <div class="over"> <!-- модальное окно(видимая часть) -->
        <h2 class="topModal deepshadow">Чемпионат по Историческим Танцам</h2> <!-- заголовок -->
        <div class="txtModal"> <!-- текст модального окна --> 
          <h2>Ассоциация Исторического и Социального Танца и Французская Федерация Танца при поддержке департамента культуры г. Москва приглашают вас принять участие в открытом чемпионате России по историческим танцам!</h2><br>
          <p>Чемпионат проводит Ассоциация Исторического и Социального Танца (АИСТ) АИСТ - общественная организация, основанная на добровольном членстве, не преследующая извлечение прибыли в качестве основной цели своей деятельности, зарегистрированная в апреле 2018 года в соответствии с Гражданским кодексом Российской Федерации, Федеральным законом «О некоммерческих организациях» от 12 января 1996 года № 7-ФЗ</p>
          <p>Все мы считаем, что исторические танцы – это, в первую очередь, танцы для удовольствия, и мы не собираемся отступать от этой идеи. Каждая деятельность должна приносить удовольствие и, если у вас есть потребность не только танцевать на балах, но и показать свое мастерство владения танцем, получить массу новых ощущений и побороться за приз Ассоциации Исторического и Социального Танца и Французской Федерации Танца, а также диплом на память – то этот проект для вас! </p>
          <p>Соревнования по историческим танцам отличаются дружелюбной атмосферой — это, прежде всего, встреча единомышленников, а не конкурентов, на которой участники делятся опытом, поддерживают друг друга.</p><br>
          <h3>В этом году участники соревнований состязаются по следующему разделению:<br>
          1) Победители (1, 2 и 3 места отборочных соревнований) <br>
          2) Продвинутые танцоры (от двух лет обучения)</h3><br>
          <p>Соревнования в 2019 году будут делиться на несколько категорий: Парный танец, Групповой и Импровизация для категории победителей и Обязательный танец. </p>
          <p>1. «Парный танец» включает все танцы, исполняемые в паре: менуэт, вальс, полька, шоттиш, редова и все постановки, в которых они используются.</p>
          <p>2. «Групповой танец» включает все танцы, в которых принимают участие более 2 человек: кадрили, групповые постановочные танцы и т.д. </p>
          <p>3. «Импровизация» Любая импровизационная композиция (вальс, полька, редова, мазурка, кадриль (нужно участие 2-4 пары), кросс-степ, танго)</p>
          <p>4. «Обязательный танец» Французская кадриль, только для 2 категории</p>
          <h3>Чемпионат пройдет 18 августа 2019 (воскресенье)</h3>
          <h3>Начало в 15.30<br> Цена участия: 1000р. с человека</h3>
          <h5>*Победители получат медали и кубки, а также призы от спонсоров</h5><br>
          <p><u><a href="http://fit-msk.com/ru/championship/regulations">Подробности (регламент соревнований) вы можете посмотреть здесь</a></u></p>
          <p><u><a href="http://fit-msk.com/ru/championship/judges">Правила судейства соревнований</a></u></p>
          <p><u><a href="https://docs.google.com/forms/d/e/1FAIpQLSdCR9bEiFHNqo4D8awcUVR91QX-J00ViXtLnw_nsTXk0Efttg/viewform">Подать заявку на соревнования</a></u></p><br>
          <p>Видео как соревнования проходят во Франции можно посмотреть здесь:</p>
          <p><u><a href="https://www.youtube.com/watch?v=twmbDus6Bpw&feature=youtu.be">Кан-кан кадриль</a></u></p>
          <p><u><a href="https://www.youtube.com/watch?v=NRqOsYFc2xs&feature=youtu.be">Вальс Коммандор</a></u></p>
          <p><u><a href="https://www.youtube.com/watch?v=Z3CRYW09rng&feature=youtu.be">Богемская полька</a></u></p>
          <br>
          <p>Если у вас остались вопросы, мы готовы на них ответить! Пишите пожалуйста на адрес: <a href="info@trianon-studio.ru">info@trianon-studio.ru</a> или в личные сообщения <a href="https://vk.com/milady.elana">Элане Аносовой в вк</a></p>
        </div>
      </div>
  </div>

  <div id="meropr3" class="modalDialog vivify popIn"> <!-- модальное окно -->
    <a href="#meropriatia" title="Закрыть" class="close"></a> <!-- закрыть модальное окно -->
      <div class="over"> <!-- модальное окно(видимая часть) -->
        <h2 class="topModal deepshadow">Европейское приключение 2019</h2> <!-- заголовок -->
        <div class="txtModal"> <!-- текст модального окна -->
          <h2>Дамы и господа! Ассоциация Исторического и Социального Танца (АИСТ) при поддержке французской Ассоциации Carnet de Bals  и Студии исторического танца «Трианон» </h2><br>
          <p>&emsp;&emsp;Приглашает вас в «Европейское приключение» Событие состоится во вторую неделю мая в Германии и будет включать в себя: Неделю в Дрездене с экскурсиями по потрясающе красивым местам Саксонской Швейцарии – Бастай, Кёнигштайн  Завершение недели 11 мая –  Бал в городе Альтенбурге, в Тюрингии, в замке герцогов Саксен-Альтенбургских.</p>
          <p><u>Вся информация в стадии наполнения, следите за обновлениями!</u></p>
          <p>4 мая в 10:00 — 12 мая в 14:00</p>
          <img style="width: 500px;" class="col" src="./images/imgEuropa.jpg">
        </div>
      </div>
  </div>
  <footer> <!-- футер -->
    <a href="https://www.facebook.com/trianon.studio.msk/"><img src="./images/Fb.png" class="imgup" alt=""></a> <!-- фейсбук -->
    <a href="https://www.instagram.com/trianon_studio/"><img src="./images/In.png" class="imgup" alt=""></a> <!-- инстаграм -->
    <a href="https://vk.com/trianon.studio"><img src="./images/Vk.png" class="imgup" alt=""></a> <!-- вконтакте -->
    <a href="https://www.youtube.com/user/ladyElana"><img src="./images/Yu.png" class="imgup" alt=""></a> <!-- ютуб -->
    <div>
      © 2018 Ассоциация Исторического и Социального Танца<br><br>Свидетельство о государственной регистрации №4014060094 от 17 апреля 2018 г.<br>ОГРН 1184027004370,ИНН 4028066591,КПП 402801001.
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> <!-- Подключаем jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> <!-- Подключаем Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- Подключаем Bootstrap.js -->
</body>
</html>