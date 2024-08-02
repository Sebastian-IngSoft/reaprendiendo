<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">

        welcome to the home with blade

        <x-alert2 type="info" class="mb-4" class2="mx-1">{{--tiene que haber la carpeta componentes para que sea usado
            --}}
            <x-slot name="title"> 
                titulo con variable
            </x-slot>

            Contenido de la alerta
        </x-alert2>
    </div>
</body>
</html>