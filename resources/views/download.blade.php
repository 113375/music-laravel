<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файлов</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- загрузка js и стилей--}}
</head>
<body>
    <form method="POST" action="/api/load" enctype="multipart/form-data">
        @csrf @method('POST')
        <div class="form">
            <div>
                <input type="file" name="music" id="" >
            </div>
            <div>
                <input type="text" name="musician" id="" placeholder="Музыкант">
            </div>
            <div>    
                <input type="text" name="music_title" id="" placeholder="Название песни">
            </div>
            <div>
                <input type="submit" value="Отправить">
            </div>
        </div>
    </form>

</body>
</html>