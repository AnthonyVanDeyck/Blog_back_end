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
        <div class="flex flex-col justify-center items-center">
            <table class="table-fixed border-collapse border border-slate-400">
                <thead>
                  <tr>
                    <th class="border border-slate-300">titre</th>
                    <th class="border border-slate-300">article</th>
                    <th class="border border-slate-300">utilisateur</th>
                    <th class="border border-slate-300">media</th>
                    <th class="border border-slate-300">date</th>
                  </tr>
                </thead>
                <tbody>
        @foreach ($article as $post)
                <tr>
                    <td class="border border-slate-300">{{$post->titre}}</td>
                    <td class="border border-slate-300">{{$post->article}}</td>
                    <td class="border border-slate-300">{{$post->user_name}}</td>
                    <td class="border border-slate-300">{{$post->media}}</td>
                    <td class="border border-slate-300">{{$post->created_at}}</td>
                </tr>
    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
