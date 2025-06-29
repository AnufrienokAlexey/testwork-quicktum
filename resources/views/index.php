<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testwork Quicktum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
          crossorigin="anonymous">
    <link href="../styles/bootstrap.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
            crossorigin="anonymous"></script>
    <script defer src="../js/main.js"></script>
</head>
<body>
<div class="container m-3">
    <div class="task-1 m-3">
        <button type="button" class="btn btn-primary" id="button1">Кнопка 1</button>
        <button type="button" class="btn btn-primary" id="button2">Кнопка 2</button>
        <p class="text m-2" id="text">
            Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus ex sapien vitae pellentesque sem
            placerat in id cursus mi pretium tellus duis convallis tempus leo eu aenean sed diam urna tempor
            pulvinar
            vivamus fringilla lacus nec metus bibendum egestas iaculis massa nisl malesuada lacinia integer nunc
            posuere
            ut hendrerit semper vel class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos
            himenaeos orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus donec
            rhoncus
            eros lobortis nulla molestie mattis scelerisque maximus eget fermentum odio phasellus non purus est
            efficitur laoreet mauris pharetra vestibulum fusce dictum risus.
        </p>
        <hr>
    </div>
    <div class="task-2 m-3">
        <form action="index.php" method="post">
            <div class="mb-2">
                <label for="form" class="form-label">Введите строку для проверки</label>
            </div>
            <div class="mb-2">
                <input type="text" name="str" id="form" class="form-control" placeholder="Введите строку">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary">Проверить</button>
            </div>
        </form>
        <hr>
        <?php
        if (isset($_POST['str'])) {
            var_dump($_POST['str']);
            var_dump($_POST['result']);
        }
        ?>
    </div>
</div>
</body>
</html>
