<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('houses.update', $house->id)}}">
        @csrf
        <div>
            <label for="name">Название</label>
            <input type="text" id="name" name="name" value="{{$house->name}}">
        </div>
        <div>
            <label for="date_of_delivery">Дата сдачи</label>
            <input type="date" id="date_of_delivery" name="date_of_delivery" value="{{date('Y-m-d', strtotime($house->date_of_delivery))}}">
        </div>
        <div>
            <label for="project_id">ID Проекта</label>
            <input type="text" id="project_id" name="project_id" value="{{$house->project_id}}">
        </div>
        @method('PUT')
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>