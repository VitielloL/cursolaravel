<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de Rotas</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container my-5">
        <form action="{{url('/users/1')}}" method="POST" autocomplete="off">

            @method('delete')
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="mb-3">
                <label for="first_name">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Lucas">
            </div>

            <div class="mb-3">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Vitiello">
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="lucasvitielloteste@gmail.com">
            </div>

            <button class="btn btn-primary text-white">Enviar!</button>
        </form>
    </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
