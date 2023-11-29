<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('flats.update', $flat->id)}}">
        @csrf
        <div>
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" value="{{$flat->name}}">
        </div>
        <div>
            <label for="area">площадь</label>
            <input type="text" id="area" name="area" value="{{$flat->area}}">
        </div>
        <div>
            <label for="rooms ">Комнатность</label>
            <input type="text" id="rooms " name="rooms" value="{{$flat->rooms}}">
        </div>
        <div>
            <label for="layout">Планировка:</label>
            <input type="text" id="layout" name="layout" value="{{$flat->layout}}">
        </div>
        <div>
            <label for="cost">Стоимость</label>
            <input type="text" id="cost" name="cost" value="{{$flat->cost}}">
        </div>
        <div>
            <label for="house_id ">ID дома</label>
            <input type="text" id="house_id " name="house_id" value="{{$flat->house_id}}">
        </div>
        @method('PUT')
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>