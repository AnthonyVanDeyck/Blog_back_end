<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ブログ</title>
    </head>
    <body>
        <br>
        <br>
        <br>
        {{-- <p>{{ $name->id }}</p> --}}
        {{-- @foreach ($name as $namee) --}}
        <tr>
            <td>{{$name->id}}</td>
            <td>{{$name->name}}</td>
            <td>{{$name->email}}</td>
            <td>{{$name->password}}</td>
        </tr>
    {{-- @endforeach --}}
        </div>
    </body>
</html>
