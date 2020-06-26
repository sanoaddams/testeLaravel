<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Gerenciador de Questionários</title>
</head>
<body>
    <nav class="navbar navbar-expanded-lg navbar-light bg-light">   </nav>
    <a href="" class="navbar-brand">Teste Laravel</a>
    <button class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <nav class="collapse navbar-collphpapse">
        <ul class="navbar-nav">
            <li class="navbar-item active">
                <a href="{{route('questionarios.index')}}" class="nav-link">Questionario</a>
            </li>
        </ul>
    </nav>
<div class="container">
    @yield('content')
</div>

</body>
</html>