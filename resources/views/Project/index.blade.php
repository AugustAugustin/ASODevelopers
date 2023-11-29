<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4><a href="{{route('projects.create')}}">Создать</a></h4>
    @foreach ($projects as $item)
        <h5>
            <a href="{{route('projects.show', $item->id)}}"><div>@json($item)</div></a>
            <form method="POST" action="{{ route('projects.destroy', $item->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            {{-- <button>     <a href="{{route('projects.edit', $item->id)}}"></a></button> --}}
            <form method="GET" action="{{route('projects.edit', $item->id)}}">
                <button type="submit">Редактирование</button>
            </form>
        </h5>  
    @endforeach
</body>
</html>