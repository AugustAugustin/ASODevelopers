<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('projects.update', $project->id)}}">
        @csrf
        <div>
            <label for="name">Название:</label>
            <input type="text" id="name" name="name" value="{{$project->name}}">
        </div>
        <div>
            <label for="slug">slug</label>
            <input type="text" id="slug" name="slug" value="{{$project->slug}}">
        </div>
        @method('PUT')
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>