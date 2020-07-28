<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- кодировка сайта -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- разрешаем отображение на смартфонах -->
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon"> <!-- устанавливаем фавикон -->
    <link rel="stylesheet" href="styles/bootstrap.css"> <!-- подключаем Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap-reboot.css"> <!-- подключаем Bootstrap-reboot -->
    <link rel="stylesheet" href="styles/bootstrap-grid.css"> <!-- подключаем Bootstrap-Grid -->
    <link rel="stylesheet" href="styles/vivify.min.css"> <!-- подключаем библиотеку анимации -->
    <link rel="stylesheet" href="styles/style.css"> <!-- подключаем стиль сайта -->
    <title>Контакты</title>	<!-- название вкладки -->
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
              <a class="nav-link" href="meropriatia.php">Наша деятельность</a> <!-- ссылка -->
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
              <a class="nav-link" href="kontakt.php" style="color: #fff;">Контакты</a> <!-- ссылка -->
            </li>
          </ul>
        </div>
      </nav> 
      <div class="topMenu"></div> <!-- подменю -->
    </div>
    <a href="#" title="Вернуться к началу" class="topbutton">Наверх</a> <!-- кнопка "Наверх" -->
    <div class="row"> <!-- строка Bootstrap4 -->
      <h1 class="vivify popInTop deepshadow">СКОРЕЕ СВЯЖИТЕСЬ С НАМИ</h1> <!-- заголовок -->
    </div>
    <div class="row"> <!-- строка Bootstrap4 -->
      <div class="col"></div> <!-- выравниваем -->
      <div class="col-xl-10">
        <div class="row vivify popInTop" style="margin-bottom: 20px;"> <!-- строка Bootstrap4 -->
          <div class="parent col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12"> <!-- родительский блок -->
            <img src="./images/Home.png" alt="" class="icons2"> <!-- картинка -->
            <br>Нижегородская ул. 26 <br> <!-- адрес -->
          </div>
          <div class="parent col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12"> <!-- родительский блок -->
            <img src="./images/Rasp.png" alt="" class="icons2"><br> <!-- картинка -->
            <a href="mailto:hsda.ru@gmail.com">hsda.ru@gmail.com</a> <!-- почта -->
          </div>
          <div class="parent col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12"> <!-- родительский блок -->
            <img src="./images/Call.png" alt="" class="icons2"> <!-- картинка -->
            <br>+7 953 311-11-56 <br> <!-- телефон -->
          </div>
          <div class="parent col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12"> <!-- родительский блок -->
            <a href="./resourse/cale.doc" download=""><img src="./images/Cale.png" alt="" class="icons2"></a><br> <!-- ссылка на скачивание -->
            <a href="./resourse/cale.doc" download="">Скачать расписание занятий</a> <!-- скачать расписания -->
          </div>
        </div>  
      </div>
      <div class="col"></div> <!-- выравниваем -->
    </div>
    <div class="row"> <!-- строка Bootstrap4 -->
      <div class="col"></div> <!-- выравниваем -->
        <img class="kontakt_raspisanie vivify popInTop col-md-12 col-sm-12 col-xs-12 d-lg-none d-xl-none" src="./images/kontakt_raspisanie.jpg"> <!-- картинка -->
      <div class="col"></div> <!-- выравниваем -->
    </div>
    <div class="row"> <!-- строка Bootstrap4 -->
      <div class="col"></div> <!-- выравниваем -->
      <div class="tableContact vivify popInTop col-lx-10 col-lg-10 d-none d-lg-block d-lx-block"> <!-- таблица -->
        <?php
          require_once 'connection.php'; // подключаемся к БД
          $link = mysqli_connect($host, $user, $password, $database) // проверяем данные подключения к БД
              or die("Ошибка " . mysqli_error($link)); // если данные не соответствуют, выводим ошибку
          mysqli_query($link, "SET NAMES utf8"); // устанавливаем кодировку соединения с БД
          $query ="SELECT * FROM kontakts"; // берем данные из таблицы в БД
          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); // проверяем данные таблицы и данные подключения к БД
          if($result) // если всё хорошо, то начинаем сбор данных из таблицы
          {
              $rows = mysqli_num_rows($result); // количество полученных строк
               
              echo "<table><tr class='tableTR'><td><h3>День недели</h3></td><td><h3>Время</h3></td><td><h3>Группа</h3></td><td><h3>Преподаватель</h3></td><td><h3>Адрес</h3></td></tr>"; // выводим первую строчку в таблице
              for ($i = 0 ; $i < $rows ; ++$i) // запускаем цикл
              {
                  $row = mysqli_fetch_row($result); // берем данные на вывод
                  echo "<tr class='tableContent'>"; // открываем строку таблицы
                      for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>"; //выводим данные
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
      <h1 class="H1 vivify popInTop col-12 deepshadow">Приходи, мы ждем тебя!</h1> <!--  -->
      <div class="col-12"> <!-- блок для карты -->
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3234798c8d478014e82e2412f084c564e2ccee7f5b8ca1fe958bcbbba1ca4a8a&amp;width=100%25&amp;height=389&amp;lang=ru_RU&amp;scroll=true"></script> <!-- подключаем карту -->
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
