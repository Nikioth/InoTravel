<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>


    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">InoTravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Вход</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Регистрация</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Иван Иванов</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Мое жилье</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Заявки</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Выход</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/picture/room.jpg" width="100%" height="auto" alt="room">
        </div>
        <div class="col-md-6">
            <div class="clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <p>Квартира на западном</p>
                        <p>Таганрог</p>
                        <p>Спальных мест: <span>3</span></p>
                    </div>
                    <div class="col-md-6">
                        <p>Свободно!</p>
                        <button class="btn btn-primary">Забронировать</button>
                    </div>
                </div>
            </div>
            <p>Есть:</p>
            <div class="feature-list">
                <div class="feature-list__item feature-list-item">
                    <div class="feature-list-item__icon-wrap">
                        <img src="/picture/placeholder.png" alt="Интернет" height="32" width="32">
                    </div>
                    <div class="feature-list-item__description">Интернет</div>
                </div>
                <div class="feature-list__item feature-list-item">
                    <div class="feature-list-item__icon-wrap">
                        <img src="/picture/placeholder.png" alt="Стиральная машина" height="32" width="32">
                    </div>
                    <div class="feature-list-item__description">Стиральная машина</div>
                </div>
                <div class="feature-list__item feature-list-item">
                    <div class="feature-list-item__icon-wrap">
                        <img src="/picture/placeholder.png" alt="Животные" height="32" width="32">
                    </div>
                    <div class="feature-list-item__description">Животные</div>
                </div>
            </div>
            <p>Дополнительная информация:</p>
            <p>Добро пожаловать!</p>
        </div>
    </div>
</div>
<style>
    .feature-list {
        display: flex;
        flex-direction: row;
    }

    .feature-list__item {
        width: 100px
    }

    .feature-list-item {
        text-align: center;
    }

    .feature-list-item__description {
        margin-top: 5px
    }
</style>
</body>
</html>