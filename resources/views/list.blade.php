<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des films</title>
</head>
<body>
    <h1 class="text-lg font-bold text-center">Films</h1>
    <div class="p-5 mx-auto border border-black max-w-[500px]">
        <ul>
            <!-- route('movies.show') accès à la route avec son nom de route -->
            <!-- ['title'=>'bamba'] passé les paramètres requis par la route-->
            <li><a class="hover:text-red-400" href="{{route('movies.show', ['title'=>'bamba'])}}">Bamba</a></li>
            <li><a class="hover:text-red-400" href="{{route('movies.show', ['title'=>'php'])}}">PHP</a></li>
        </ul>
    </div>
</body>
</html>