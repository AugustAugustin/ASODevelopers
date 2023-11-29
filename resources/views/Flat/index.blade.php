<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <h4><a href="{{route('flats.create')}}">Создать</a></h4>
        @foreach ($flats as $item)
            <h5>
                <a href="{{route('flats.show', $item->id)}}"><div>@json($item)</div></a>
                <form method="POST" action="{{ route('flats.destroy', $item->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <form method="GET" action="{{route('flats.edit', $item->id)}}">
                    <button type="submit">Редактирование</button>
                </form>
            </h5>  
        @endforeach
    </body>
</body>
</html>