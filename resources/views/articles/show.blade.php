<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$article->title}}</h1>
    <p>{{$article->contenu}}</p>
                        {{-- récupére la fonction " user" puis utilise le "name" --}}
    <p>le nom de l'auteur est :  {{$article->user->name}}</p>
    <p>le mail de l'auteur est :  {{$article->user->email}}</p>
    
</body>
</html>