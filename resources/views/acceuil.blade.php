<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>ブログ</title>
    </head>
    <body>

        {{-- {{$connexion ->name}};
        {{$connexion->email}}; --}}
        <br>
        <br>
        <br>
        <div class="flex flex-col justify-center items-center">
        <form class="w-full max-w-sm " method="POST" action="article.post">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    titre
                  </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" placeholder="titre" name="titre">
                  </div>
                </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    article
                  </label>
                </div>
                <div class="md:w-2/3">
                  <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" placeholder="text" name="article"></textarea>
                </div>
              </div>
            {{-- <div class="md:flex md:items-center"> --}}
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        fichier
                        <input type="file" name="media">
                    </label>
                  <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                      post
                    </button>
                </div>
              </div>
        </form>
        {{-- <p>{{ $name->id }}</p> --}}
        {{-- @foreach ($name as $namee) --}}
        {{-- <tr>
            <td>{{$name->id}}</td>
            <td>{{$name->name}}</td>
            <td>{{$name->email}}</td>
            <td>{{$name->password}}</td>
        </tr> --}}
    {{-- @endforeach --}}
        </div>
    </body>
</html>
