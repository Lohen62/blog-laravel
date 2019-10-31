<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    td{
        border: solid black 1px;
        text-align: center;
        padding : 2vh;
    }
    </style>
</head>
<body> 
    <table>
            <thead> 
                <tr>
                    <td><h1>Titre : </h1></td>
                    <td><h1>Contenue : </h1></td>
                    <td><h1>Show</h1></td>
                </tr>
            </thead>   
            <tbody>
    @foreach ($articles as $article) 

            
            <tr>
                <td>{{$article->title}}</td>
                <td>{{Str::limit($article->contenu, 30, ' ...')}} </td>
                <td><a href="{{route('article.show',$article->id)}}">Click me</a></td>
            </tr>
        
    @endforeach
</tbody> 
</table>
    
</body>
</html>