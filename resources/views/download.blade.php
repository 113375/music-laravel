<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файлов</title>
</head>
<body>
    <form method="POST" action="/api/load" enctype="multipart/form-data">
        @csrf @method('POST')
        <input type="file" name="music" id="" accept=".mp3">
        <input type="submit" value="Отправить">
    </form>

</body>
</html>