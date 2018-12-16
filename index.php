<!DOCKTYPE>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Time </title>
<link rel="stylesheet" href="map.css">
 <script src="customSet_controls.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>

    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<AGrPElwBAAAAssNyCQIA0xH8FeoLH2mp7u08ZpUQ-O4s-x4AAAAAAAAAAABEpUFIrPFPMlGZxXiDID0dWO6fhw==>" type="text/javascript"></script>
    <script src="custom_view.js" type="text/javascript"></script>
    <script src="multiroute_data_access.js" type="text/javascript"></script>
  </head>
  <body>
    <nav data-toggle="affxi" class="navbar navbar-expand-lg navbar-light fon sticky-top" style="background-color: #CCFF99;">

        <a class="navbar-brand" href="index.php">Главная</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="spravka.php">Как пользоваться картой</a>
            </li>
        </div>
    </nav>

    <br>

    <div id="map"></div>
<div id="viewContainer"></div>

  </body>
</html>
