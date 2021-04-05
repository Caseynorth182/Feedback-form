<?php
require_once 'vendor/DB.php';
echo '<pre>';

echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-md-8 mt-4 offset-md-2">
            <form class="form_big" name="form_big" method="post" action="">
                <fieldset>
                    <legend>Обратная связь</legend>
                    <div class="form-group row">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваш Email</label>
                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваше имя</label>
                        <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваше имя">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваш телефон</label>
                        <input required name="phone" type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш телефон">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Введите Текст</label>
                        <textarea name="text"  class="form-control" id="exampleInputPassword1" placeholder="Введите текст">
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </fieldset>
            </form>
            <div class="out"></div>


           <!-- // TOAST-->
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="https://cdn1.iconfinder.com/data/icons/office-322/24/send-email-message-mail-letter-128.png" class="rounded mr-2" alt="..." width="25">
                    <strong class="mr-auto"></strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">

                </div>
            </div>


        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="assets/js/toastr.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
