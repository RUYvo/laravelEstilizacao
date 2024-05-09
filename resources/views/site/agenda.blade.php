<!-- @extends('site.layouts.basico')

@section('titulo', 'Agenda')

@section('conteudo') -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="{{ asset('css/agenda.css') }}">
</head>
<body>
    <header>
        <h1>Agenda Online</h1>
    </header>
    <div class="container">
        <h2>Agendar Novo Compromisso</h2>
        <div class="appointment">
            <form action="#" method="post">
                <div>
                    <label for="title">Título:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div>
                    <label for="datetime">Data e Hora:</label>
                    <input type="datetime-local" id="datetime" name="datetime" required>
                </div>
                <button type="submit">Agendar</button>
            </form>
        </div>
    </div>
</body>
</html>
